<template>
  <div class="bg-white p-3 rounded-md w-full">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col-md-4">
                <h3 class="card-title">
                  <i class="fas fa-users"></i> Liste des utilisateurs
                </h3>
              </div>
              <div class="col md-4">
                <!-- <vue-simple-suggest
                  v-model="chosen"
                  display-attribute="nom"
                  value-attribute="url"
                  :list="getSuggestionList"
                ></vue-simple-suggest>

                <br />

                <p>Chosen element: {{ chosen }}</p> -->
                <!-- <autocomplete
                  :search="search"
                  placeholder="Search for a country"
                  aria-label="Search for a country"
				  display-attribute="nom"
                ></autocomplete> -->
                <form action="#">
                  <div class="row">
                    <div class="col-md-10">
                      <div class="form-group">
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Rechercher"
                        />
                      </div>
                    </div>
                    <div class="col-md-1 text-left">
                      <button><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-md-4">
                <div class="text-right">
                  <button class="btn btn-primary" @click="createMode">
                    <i class="fas fa-plus-circle"></i> Créer un utilisateur
                  </button>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nom</th>
                  <th>Prénoms</th>
                  <th>Email</th>
                  <th>Role</th>
                  <th>Pole</th>
                  <th>Status</th>
                  <th>Actions</th>
                  <th>Date de création</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="user in users" :key="user.id">
                  <td>{{ user.id }}</td>
                  <td>{{ user.nom }}</td>
                  <td>{{ user.prenoms }}</td>
                  <td>{{ user.email }}</td>
                  <td>{{ user.role }}</td>
                  <td>{{ user.pole }}</td>
                  <td v-if="user.status == 1">
                    <button class="btn" @click="updateUserStatus(user)"><i class="fas fa-toggle-on text-success h3"></i></button>
                  </td>
                  <td v-else>
                    <button class="btn" @click="updateUserStatus(user)"><i class="fas fa-toggle-off text-secondary h3"></i></button>
                  </td>

                  <td>
                    <button class="btn btn-sm" @click="viewUser(user)">
                      <i class="fas fa-eye text-info"></i>
                    </button>
                    <button class="btn btn-sm" @click="editUser(user)">
                      <i class="fas fa-edit text-warning"></i>
                    </button>
                    <button class="btn btn-sm" @click="deleteUser(user)">
                      <i class="fas fa-trash text-danger"></i>
                    </button>
                  </td>
                  <td>{{ user.created_at | date }}</td>
                </tr>
              </tbody>
            </table>
          </div>
          <loading :loading="loading"></loading>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- Modal -->

    <!-- Voir utilisateur -->

    <div
      class="modal fade"
      id="viewUsers"
      tabindex="-1"
      role="dialog"
      aria-labelledby="viewUserLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="createUserLabel">utilisateur</h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-12">
                <div class="card card-primary card-outline">
                  <div class="card-body box-profile">
                    <div class="text-center">
                      <img
                        :src="img"
                        alt="User profile picture"
                        class="profile-user-img img-fluid img-circle"
                      />
                    </div>
                    <h3 class="profile-username text-center">
                      {{ user.nom }} {{ user.prenom }}
                    </h3>
                    <p class="text-muted text-center">{{ user.poste }}</p>
                    <ul class="list-group list-group-unbordered mb-3">
                      <li class="list-group-item">
                        <b>{{ user.email }}</b>
                      </li>
                      <li class="list-group-item">
                        <b>{{ user.telephone }}</b>
                      </li>
                      <li class="list-group-item">
                        <b>{{ user.poste }}</b>
                      </li>
                      <li class="list-group-item">
                        <b>{{ user.pole }}</b>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- fin voir utilisateur -->
    <div
      class="modal fade"
      id="createUsers"
      tabindex="-1"
      role="dialog"
      aria-labelledby="createUserLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="createUserLabel" v-show="!editMode">
              Inscription utilisateur
            </h5>
            <h5 class="modal-title" id="createUserLabel" v-show="editMode">
              Modifier utilisateur
            </h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form @submit.prevent="!editMode ? createUser() : updateUser()">
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Nom</label>
                      <input
                        type="text"
                        class="form-control"
                        :class="{ 'is-invalid': form.errors.has('nom') }"
                        name="nom"
                        placeholder="Nom"
                        v-model="form.nom"
                      />
                      <has-error :form="form" field="nom"></has-error>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Prénoms</label>
                      <input
                        type="text"
                        class="form-control"
                        :class="{ 'is-invalid': form.errors.has('prenoms') }"
                        name="prenoms"
                        placeholder="Prénoms"
                        v-model="form.prenoms"
                      />
                      <has-error :form="form" field="prenoms"></has-error>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label>Email</label>
                  <input
                    type="email"
                    class="form-control"
                    :class="{ 'is-invalid': form.errors.has('email') }"
                    name="email"
                    placeholder="Email"
                    v-model="form.email"
                  />
                  <has-error :form="form" field="email"></has-error>
                </div>
                <div class="form-group">
                  <label>Téléphone</label>
                  <input
                    type="text"
                    class="form-control"
                    :class="{ 'is-invalid': form.errors.has('telephone') }"
                    name="telephone"
                    placeholder="Téléphone"
                    v-model="form.telephone"
                  />
                  <has-error :form="form" field="telephone"></has-error>
                </div>
                <div class="form-group">
                  <label>Mot de passe</label>
                  <input
                    type="password"
                    class="form-control"
                    :class="{ 'is-invalid': form.errors.has('password') }"
                    name="password"
                    placeholder="Mot de passe"
                    v-model="form.password"
                  />
                  <has-error :form="form" field="password"></has-error>
                </div>

                <div class="form-group">
                  <label>Choisir role</label>
                  <b-form-select
                    v-model="form.role"
                    :options="roles"
                    text-field="name"
                    value-field="id"
                  >
                  </b-form-select>
                  <!-- <has-error :form="form" field="role"></has-error> -->
                </div>

                <b-form-group label="Assignez des Permissions">
                  <b-form-checkbox
                    v-for="permission in permissions"
                    v-model="form.permissions"
                    :key="permission.name"
                    :value="permission.name"
                    name="flavour-3a"
                  >
                    {{ permission.name }}
                  </b-form-checkbox>
                </b-form-group>
              </div>
              <div class="modal-footer">
                <button
                  type="button"
                  class="btn btn-danger text-start"
                  data-dismiss="modal"
                >
                  Fermer
                </button>
                <b-button
                  variant="primary"
                  class="btn-lg"
                  v-if="!load"
                  disabled
                >
                  <b-spinner small type="grow"></b-spinner>
                  {{ action }}
                </b-button>

                <button
                  type="submit"
                  class="btn btn-primary"
                  v-if="load"
                  v-show="!editMode"
                >
                  Enregistrer
                </button>
                <button
                  type="submit"
                  class="btn btn-success"
                  v-if="load"
                  v-show="editMode"
                >
                  Modifier utilisateur
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
// import Form from "vform";
// import VueSimpleSuggest from "vue-simple-suggest";
// import "vue-simple-suggest/dist/styles.css"; // Optional CSS
import $ from "jquery";
export default {
  // components: {
  //   VueSimpleSuggest,
  // },
  data() {
    return {
      action: "",
      loading: false,
      load: true,
      editMode: false,
      // countries: [],
      // chosen: "",
      img: "http://www.aroav2.local/public/images/avatar.png",
      user: {},
      users: [],
      roles: [],
      permissions: [],
      form: new Form({
        id: "",
        nom: "",
        prenoms: "",
        telephone: "",
        email: "",
        permissions: [],
        role: 1,
        password: "",
      }),
    };
  },
  methods: {
    createMode() {
      this.form.reset();
      this.editMode = false;
      $("#createUsers").modal("show");
    },
    deleteUser(user) {
      swal.fire({
        title: "Sûr de vouloir supprimer " + user.nom + " ?",
        text: "Tu ne pourras pas revenir en arrière.",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Oui, Supprimer!",
      }).then((result) => {
        if (result.isConfirmed) {
          axios.delete('/admin/deleteUser/'+ user.id).then(()=>{
            toast.fire({
              icon: 'success',
              title: user.nom + ' supprimé'
            })
            Fire.$emit("loadUser");
          }).catch(()=>{
            toast.fire({
              icon: 'error',
              title: user.nom + ' non supprimé reessayez'
            })
          })
        }
      });
    },
    editUser(user) {
      this.editMode = true;
      this.form.reset();
      this.form.fill(user);
      this.form.role = user.roles[0].id;
      this.form.permissions = user.userPermissions;
      $("#createUsers").modal("show");
    },
    getUsers() {
      this.loading = true;
      axios
        .get("/admin/getAllUsers")
        .then((response) => {
          this.loading = false;
          this.users = response.data.users;
        })
        .catch(() => {
          this.$toastr.e("Cannot load users", "Error");
        });
    },
    viewUser(user) {
      $("#viewUsers").modal("show");
      this.img = "http://www.aroav2.local/public/images/" + user.photo;
      this.user = user;
    },
    getRoles() {
      axios.get("/admin/get-all-roles").then((response) => {
        this.roles = response.data.roles;
      });
    },
    getPermissions() {
      axios.get("/admin/get-all-permissions").then((response) => {
        this.permissions = response.data.permissions;
      });
    },
    createUser() {
      this.action = "Creation en cours ...";
      this.load = false;
      this.form
        .post("/admin/postUser")
        .then((response) => {
          this.load = true;
          this.$toastr.s("Utilisateur créé avec succès", "créé");
          Fire.$emit("loadUser");
          $("#createUsers").modal("hide");
          this.form.reset();
        })
        .catch(() => {
          this.load = true;
          this.$toastr.e("Creation Impossible, Veuillez rééssayer", "Error");
        });
    },

    updateUser() {
      this.action = "Mise à jour en cours ...";
      this.load = false;
      this.form
        .put("/admin/updateUser/" + this.form.id)
        .then((response) => {
          this.load = true;
          this.$toastr.s(
            "Mise à jour utilisateur effectuée avec succès",
            "Modifiée"
          );
          Fire.$emit("loadUser");
          $("#createUsers").modal("hide");
          this.form.reset();
        })
        .catch(() => {
          this.load = true;
          this.$toastr.e(
            "Modification Impossible, Veuillez rééssayer",
            "Error"
          );
        });
    },

    updateUserStatus(user){

      axios.put('/admin/update-user-status/'+ user.id).
      then((response) => {
          this.load = true;
          this.$toastr.s(
            "Mise à jour status effectuée avec succès",
            "Modifiée"
          );
          Fire.$emit("loadUser");
        })
        .catch(() => {
          this.load = true;
          this.$toastr.e(
            "Modification Impossible, Veuillez rééssayer",
            "Error"
          );
        });
      console.log(user)
    }
    // search(input) {
    //   if (input.length < 1) {
    //     return [];
    //   }

    //   return fetch("/admin/getAllUsers", { method: "GET" })
    //     .then((response) => response.json())
    //     .then((json) => json.users);
    //   //   var countries = _.castArray(
    //   //     axios.get("/admin/getAllUsers").then((response) => {
    //   //       console.log(response.data.users);
    //   //     })
    //   //   );

    //   return countries.filter((country) => {
    //     return country;
    //   });
    // },
    // getSuggestionList() {
    //   return fetch("/admin/getAllUsers", { method: "GET" })
    //     .then((response) => response.json())
    //     .then((json) => json.users); /*
    //       returns a promise with a list of star-wars characters
    //     // */
    // },
  },
  created() {
    this.getUsers();
    this.getRoles();
    this.getPermissions();
    // this.search();
    Fire.$on("loadUser", () => {
      this.getUsers();
    });
    // this.getSuggestionList()
  },
};
</script>
<style>
.modal-footer {
  justify-content: space-between !important;
}
</style>