<template>
  <div class="bg-white p-3 rounded-md w-full">
    <div class="card">
      <div class="card-header bg-primary">
        <div class="row">
          <div class="col-md-8">
            <h3 class="card-title">Liste des roles</h3>
          </div>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
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
                    <form action="#">
                      <div class="row">
                        <div class="col-md-10">
                          <div class="form-group">
                            <input type="text" class="form-control" placeholder="Rechercher" />
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
                      <button class="btn btn-primary" @click="createRole">
                        <i class="fas fa-plus-circle"></i> Créer un rôle
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
                      <th>Permissions</th>
                      <th>Actions</th>
                      <th>Date de création</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="role in roles" :key="role.id">
                      <td>{{ role.id }}</td>
                      <td>{{ role.name }}</td>

                      <td>
                        <b-button class="m-1" variant="warning" v-for="permission in role.permissions"
                          v-model="form.permissions" :key="permission.name" :value="permission.name" name="flavour-3a">
                          {{
                              permission.name
                          }}</b-button>
                      </td>
                      <td>
                        <button class="btn btn-sm" @click="viewRole(role)">
                          <i class="fas fa-eye text-info"></i>
                        </button>
                        <button class="btn btn-sm" @click="editRole(role)">
                          <i class="fas fa-edit text-success"></i>
                        </button>
                      </td>
                      <td>{{ role.created_at | date }}</td>
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

        <div class="modal fade" id="viewRole" tabindex="-1" role="dialog" aria-labelledby="viewRoleLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="viewRoleLabel">Role</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="card card-primary card-outline">
                      <div class="card-body box-profile">
                        <div class="text-center">
                          <img :src="img" alt="User profile picture" class="profile-user-img img-fluid img-circle" />
                        </div>
                        <h3 class="profile-username text-center">
                          {{ role.name }}
                        </h3>
                        <ul>
                          <li v-for="permis in role.rolePermissions" :key="permis" :value="permis">{{ permis }}</li>
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
        <div class="modal fade" id="updateRole" tabindex="-1" role="dialog" aria-labelledby="updateRoleLabel"
          aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="updateRoleLabel">
                  Modifier role
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form @submit.prevent="updateRole()">
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Nom</label>
                          <input type="text" class="form-control" :class="{ 'is-invalid': editform.errors.has('name') }"
                            name="name" placeholder="name" v-model="editform.name" />
                          <has-error :form="editform" field="name"></has-error>
                        </div>
                      </div>
                    </div>

                    <b-form-group label="Assignez des Permissions">
                      <b-form-checkbox v-for="permission in permissions" v-model="editform.permissions"
                        :key="permission.name" :value="permission.name" name="flavour-3a">
                        {{ permission.name }}
                      </b-form-checkbox>
                    </b-form-group>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger text-start" data-dismiss="modal">
                      Fermer
                    </button>
                    <button type="submit" class="btn btn-success">
                      Modifier utilisateur
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>


        <div class="modal fade" id="createRole" tabindex="-1" role="dialog" aria-labelledby="createRoleLabel"
          aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="createRoleLabel">
                  Céer rôle
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form @submit.prevent="storeRole()">
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Nom</label>
                          <input type="text" class="form-control" :class="{ 'is-invalid': form.errors.has('name') }"
                            name="name" placeholder="name" v-model="form.name" />
                          <has-error :form="form" field="name"></has-error>
                        </div>
                      </div>
                    </div>

                    <b-form-group label="Assignez des Permissions">
                      <b-form-checkbox v-for="permission in permissions" v-model="form.permissions"
                        :key="permission.name" :value="permission.name" name="flavour-3a">
                        {{ permission.name }}
                      </b-form-checkbox>
                    </b-form-group>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger text-start" data-dismiss="modal">
                      Fermer
                    </button>
                    <button type="submit" class="btn btn-success">
                      Créer rôle
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-body -->
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
      role: {},
      users: [],
      roles: [],
      permissions: [],
      form: new Form({
        id: "",
        name: "",
        permissions: [],
        role: "",
      }),
      editform: new Form({
        id: "",
        name: "",
        permissions: [],
      }),
    };
  },
  methods: {
    createRole() {
      this.editMode = false;
      $("#createRole").modal("show");
    },
    storeRole() {
      this.dis = false;
      this.form
        .post("/admin/postRole")
        .then(() => {
          swal.fire({
            icon: "success",
            title: "Role created",
            text: "Your role has created",
          });
          Fire.$emit("loadRole");
          $("#createRole").modal("hide");
          this.form.reset();
        })
        .catch(() => {
          swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Something went wrong!",
            footer: '<a href="">Why do I have this issue?</a>',
          });
        });
      this.dis = true;
    },
    // deleteRole(role) {
    //   swal.fire({
    //     title: "Sûr de vouloir supprimer " + role.nom + " ?",
    //     text: "Tu ne pourras pas revenir en arrière.",
    //     icon: "warning",
    //     showCancelButton: true,
    //     confirmButtonColor: "#3085d6",
    //     cancelButtonColor: "#d33",
    //     confirmButtonText: "Oui, Supprimer!",
    //   }).then((result) => {
    //     if (result.isConfirmed) {
    //       axios.delete('/admin/deleteRole/' + role.id).then(() => {
    //         toast.fire({
    //           icon: 'success',
    //           title: role.name + ' supprimé'
    //         })
    //         Fire.$emit("loadRole");
    //       }).catch(() => {
    //         toast.fire({
    //           icon: 'error',
    //           title: role.name + ' non supprimé reessayez'
    //         })
    //       })
    //     }
    //   });
    // },
    editRole(role) {
      //   this.action = "Modification en cours ...";
      this.editMode = true;
      this.editform.reset();
      this.editform.fill(role);
      this.editform.role = role.name;
      this.editform.permissions = role.rolePermissions;

      $("#updateRole").modal("show");
    },
    viewRole(role) {
      $("#viewRole").modal("show");
      this.form.permissions = role.rolePermissions;
      this.role = role;
    },
    getRoles() {
      this.loading = true;
      axios.get("/admin/get-all-roles").then((response) => {
        // console.log(response.data.roles)
        this.roles = response.data.roles;
        this.loading = false;
      });
    },
    getPermissions() {
      axios.get("/admin/get-all-permissions").then((response) => {
        this.permissions = response.data.permissions;
      });
    },

    updateRole() {
      this.action = "Mise à jour en cours ...";
      this.load = false;
      this.editform
        .put("/admin/updateRole/" + this.editform.id)
        .then((response) => {
          this.load = true;
          this.$toastr.s(
            "Mise à jour role effectuée avec succès",
            "Modifiée"
          );
          Fire.$emit("loadRole");
          $("#updateRole").modal("hide");
          this.editform.reset();
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
    // this.getUsers();
    this.getRoles();
    this.getPermissions();
    // this.search();
    Fire.$on("loadRole", () => {
      this.getRoles();
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