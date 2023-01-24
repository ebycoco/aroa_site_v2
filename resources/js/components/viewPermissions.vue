<template>
    <div>
        <div class="card">
            <div class="card-header bg-primary">
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="card-title">Liste des permissions</h3>
                    </div>

                    <div class="col-md-4">
                        <div class="text-right">
                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                data-target="#createPermission">
                                <i class="fas fa-plus-circle"></i> Ajouter une permission
                            </button>
                        </div>

                    </div>
                </div>
            </div>
            <div class="modal fade" id="createPermission" tabindex="-1" role="dialog"
                aria-labelledby="createPermissionLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="createPermissionLabel">
                                Ajouter une permission
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form @submit.prevent="addPermission()">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Permission</label>
                                                <input type="text" class="form-control"
                                                    :class="{ 'is-invalid': form.errors.has('name') }" name="name"
                                                    placeholder="Ex: ajouter-article" v-model="form.name" />
                                                <has-error :form="form" field="name"></has-error>
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

                                    <button type="submit" class="btn btn-success" v-if="load">
                                        créer la permission
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="card">
                    <div class="card-body">
                        <data-table :columns="columns" :url=url> </data-table>
                    </div>
                </div>
                <div class="modal fade" id="updatePermission" tabindex="-1" role="dialog"
                    aria-labelledby="updatePermissionLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="updatePermissionLabel">
                                    Modifier permission
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form @submit.prevent="updatePermission()">
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Permission</label>
                                                    <input type="text" class="form-control"
                                                        :class="{ 'is-invalid': editform.errors.has('name') }"
                                                        name="name" placeholder="Clé" v-model="editform.name" />
                                                    <has-error :form="editform" field="name"></has-error>
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
                                            Modifier la permission
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
import users from "../users";
import btnEditPerimission from "./btnEditPermission.vue";
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
                name: "",
            }),
            editform: new Form({
                id: "",
                name: "",
            }),

            perPage: ["5", "10", "25", "50"],
            orderBy: "id",
            columns: [
                {
                    label: "#",
                    name: "id",
                    filterable: true,
                },
                {
                    label: "Nom",
                    name: "name",
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
                    },
                    event: "click",
                    handler: this.displayRow,
                    component: btnEditPerimission,
                },
            ],
        };
    },
    components: {
        // eslint-disable-next-line
        btnEditPerimission,
    },
    methods: {
        addPermission() {
            this.dis = false;
            this.form
                .post("/admin/add-permission")
                .then(() => {
                    swal.fire({
                        icon: "success",
                        title: "Clé créée",
                        text: "Your key has created",
                    });
                    
                    Fire.$emit("loadPermissions");
                    $("#createPermission").modal("hide");
                    this.form.reset();
                    window.location = '/admin/permission';
                })
                .catch(() => {
                    swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "Création impossible, réesayez plutard !",
                        // footer: '<a href="">Why do I have this issue?</a>',
                    });
                });
            this.dis = true;
        },
        displayRow(data) {
            //   this.action = "Modification en cours ...";
            this.editMode = true;
            this.editform.reset();
            this.editform.fill(data);
            $("#updatePermission").modal("show");
        },
        updatePermission() {
            //   alert(`You clicked row ${data.id}`);
            this.action = "Mise à jour en cours ...";
            this.load = false;
            this.editform
                .put("/admin/update-permission/" + this.editform.id)
                .then((response) => {
                    this.load = true;
                    this.$toastr.s(
                        "Mise à jour permission effectuée avec succès",
                        "Modifiée"
                    );
                    Fire.$emit("loadPermissions");
                    $("#updatePermission").modal("hide");
                    this.editform.reset();
                    window.location = "/admin/permission";
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
        this.url = '/admin/get-permissions';
        Fire.$on("loadPermissions", () => {
            this.url = '/admin/get-permissions';
            //   this.url = window.location('/admin/get-permissions');
        });
    },
    // mounted() {
    //     setInterval(() => {
    //         this.url = '/admin/get-permissions'
    //     }, 200);
    // },
};
</script>