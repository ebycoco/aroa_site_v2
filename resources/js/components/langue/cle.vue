<template>
    <div>
      <div class="card">
        <div class="card-body">
          <form>
            <div class="modal-body">
              <div class="row">
                <div class="col-md-9">
                  <div class="form-group">
                    <input type="text" class="form-control" :class="{ 'is-invalid': form.errors.has('lang_key') }"
                      name="lang_key" placeholder="Clé de langue" v-model="form.lang_key" />
                    <has-error :form="form" field="lang_key"></has-error>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="divider">
                    <b-button type="submit" variant="primary" class="btn-lg btn-primary" v-if="!dis" disabled>
                      <b-spinner small type="grow"></b-spinner>
                    </b-button>
                    <button type="submit" v-if="dis" @click.prevent="createCle()" class="btn btn-lg btn-primary">
                      <i class="fas fa-save"></i> Enregistrer
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <data-table :columns="columns" :url=url> </data-table>
        </div>
      </div>

      <div class="modal fade" id="createUsers" tabindex="-1" role="dialog" aria-labelledby="createUserLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="createUserLabel" v-show="!editMode">
                Inscription utilisateur
              </h5>
              <h5 class="modal-title" id="createUserLabel" v-show="editMode">
                Modifier utilisateur
              </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form @submit.prevent="updateKey()">
                <div class="modal-body">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Clé</label>
                        <input type="text" class="form-control" :class="{ 'is-invalid': form.errors.has('lang_key') }"
                          name="lang_key" placeholder="Clé" v-model="form.lang_key" />
                        <has-error :form="form" field="lang_key"></has-error>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger text-start" data-dismiss="modal">
                    Fermer
                  </button>
                  <b-button variant="primary" class="btn-lg" v-if="!load" disabled>
                    <b-spinner small type="grow"></b-spinner>
                    {{ action }}
                  </b-button>

                  <button type="submit" class="btn btn-success" v-if="load" v-show="editMode">
                    Modifier la clé
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </template>
  <script>
  import users from "../../users";
  import ExampleButton from "../ExampleButton.vue";
  import deleteButton from "../deleteKeyButton.vue";
  import $ from "jquery";

  export default {
    data() {
      return {
        dis: true,
        action: "",
        loading: false,
        load: true,
        editMode: false,
        url: "",
        form: new Form({
          id: "",
          lang_key: "",
        }),

        perPage: ["5", "10", "25", "50"],
        orderBy: "lang_key",
        columns: [
          {
            label: "Clé",
            name: "lang_key",
            filterable: true,
          },
          {
            label: "Actions",
            name: "View",
            orderable: false,
            classes: {
              btn: true,
              "btn-primary": true,
              "btn-sm": true,
              'text-center': true,
            },
            event: "click",
            handler: this.displayRow,
            component: ExampleButton,
          },
          {
            label: "",
            name: "",
            orderable: false,
            classes: {
              'btn': true,
              "btn-danger": true,
              "btn-sm": true,
              'text-center': true,
            },
            event: "click",
            handler: this.deleteKey,
            component: deleteButton,
          },


        ],
      };
    },
    components: {
      // eslint-disable-next-line
      ExampleButton,
    },
    methods: {
      createCle() {
        this.dis = false;
        this.form
          .post("/admin/postLanguageKey")
          .then((response) => {
            // console.log(response)
            swal.fire({
              icon: "success",
              title: "Clé créée",
              text: "Your key has created",
            });
            window.location = "/admin/langue-key";
          })
          .catch((response) => {
            // console.log(response)
            swal.fire({
              icon: "error",
              title: "Désolé...",
              text: "La clé existe déjà !",
              // footer: '<a href="">Why do I have this issue?</a>',
            });
          });
        this.dis = true;
      },
      displayRow(data) {
        //   this.action = "Modification en cours ...";
        this.editMode = true;
        this.form.reset();
        this.form.fill(data);
        $("#createUsers").modal("show");
      },

      cleanKey(id){
        axios.delete('/admin/deleteKey/' + id)
        .then((response) => {
          this.load = true;
            this.$toastr.s(
              "La clé a été supprimé avec succès",
              "Supprimé"
            );
            Fire.$emit("loadKey");
            window.location = "/admin/langue-key";
        })
      },
      deleteKey(data) {
        this.$toast({
            title: 'Supprission de la clé ',
            content: 'Êtes-vous sûr de vouloir supprimer',
            okText:'Oui',
            okCb: ()=>{
              this.cleanKey(data.id)
            },
            cancelText:'Annuler',
            noCb: ()=>{},
            double: true,
            baseColor: '#ff0000'
          })
        //   this.action = "Modification en cours ...";
        //
      },
      updateKey() {
        //   alert(`You clicked row ${data.id}`);
        this.action = "Mise à jour en cours ...";
        this.load = false;
        this.form
          .put("/admin/updateKey/" + this.form.id)
          .then((response) => {
            this.load = true;
            this.$toastr.s(
              "Mise à jour utilisateur effectuée avec succès",
              "Modifiée"
            );
            Fire.$emit("loadKey");
            $("#createUsers").modal("hide");
            this.form.reset();
            window.location = "/admin/langue-key";
          })
          .catch(() => {
            this.load = true;
            this.$toastr.e(
              "Modification Impossible, Veuillez rééssayer",
              "Error"
            );
          });
      },
    },
    created() {
      this.url = "/admin/get-language-key";
      Fire.$on("loadKey", () => {
        this.url = "/admin/get-language-key";
      });
    },
  };
  </script>
