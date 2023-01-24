<template>
  <div>
    <div class="card">
      <div class="card-body">
        <data-table :columns="columns" :url="url"> </data-table>
      </div>
    </div>
  </div>
</template>
<script>
import ExampleButton from "../ExampleButton.vue";
import Francais from "../francais.vue";
import Anglais from "../anglais.vue";
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
    //   url: {},
      form: new Form({
        id: "",
        lang_key: "",
        french: "",
        english: "",
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
          label: "Français",
          name: "french",
          filterable: true,
          //   event: "click",
          classes: {
            btn: false,
            "form-control": true,
            "btn-sm": false,
          },
          handler: this.editLanguageFrench,
          component: Francais,
        },
        {
          label: "Anglais",
          name: "english",
          filterable: true,
          //   event: "click",
          classes: {
            btn: false,
            "form-control": true,
            "btn-sm": false,
          },
          handler: this.editLanguageEnglish,
          component: Anglais,
        },
        {
          label: "Actions",
          name: "View",
          orderable: false,
          classes: {
            btn: true,
            // "btn-primary": true,
            "text-primary": true,
            "btn-sm": true,
            "actionBtn": true,
          },
          event: "click",
          handler: this.displayRow,
          component: ExampleButton,
        },
      ],
    };
  },
  components: {
    // eslint-disable-next-line
    ExampleButton,
    Francais,
  },
  methods: {
    displayRow(data) {
      this.action = "Modification en cours ...";
      this.editMode = true;
    //   this.form.reset();
      this.form.fill(data);
      this.form
        .put("/admin/updateLanguage/" + this.form.id)
        .then((response) => {
          this.load = true;
          this.url= response
          this.$toastr.s(
            "Mise à jour utilisateur effectuée avec succès",
            "Modifiée"
          );
          Fire.$emit("loadKey");
        //   $("#createUsers").modal("hide");
        //   this.form.reset();
          // window.location = "/admin/french-english";
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

<style lang="css">
    .actionBtn{
            margin: 30% 25% auto
    }
    .actionBtn i{
            font-size: 25px;
    }
</style>
