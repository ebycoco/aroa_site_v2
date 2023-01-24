<template>
  <form>
    <div class="modal-body">
      <div class="form-group">
        <input
          type="text"
          class="form-control"
          :class="{ 'is-invalid': form.errors.has('name') }"
          name="name"
          placeholder="Role name"
          v-model="form.name"
        />
        <has-error :form="form" field="name"></has-error>
      </div>

      <b-form-group label="Assignez des Permissions">
        <b-form-checkbox
          v-for="option in permissions"
          v-model="form.permissions"
          :key="option.name"
          :value="option.name"
          name="flavour-3a"
        >
          {{ option.name }}
        </b-form-checkbox>
      </b-form-group>
    </div>
    <div class="modal-footer justify-content-between">
      <b-button
        type="submit"
        variant="primary"
        class="btn-lg btn-primary"
        v-if="!dis"
        disabled
        ><b-spinner small type="grow"></b-spinner
      ></b-button>
      <button
        type="submit"
        v-if="dis"
        @click.prevent="createRole()"
        class="btn btn-lg btn-primary"
      >
        <i class="fas fa-save"></i> Enregistrer
      </button>
    </div>
  </form>
</template>
<script>
export default {
  data() {
    return {
      dis: true,
      permissions: [],
      form: new Form({
        name: "",
        permissions: [],
      }),
    };
  },
  methods: {
    getPermissions() {
      axios
        .get("/admin/get-all-permissions/")
        .then((response) => {
          this.permissions = response.data.permissions;
        })
        .catch(() => {
          swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Something went wrong!",
            footer: '<a href="">Why do I have this issue?</a>',
          });
        });
    },
    createRole() {
      this.dis = false;
      this.form
        .post("/admin/postRole")
        .then(() => {
          swal.fire({
            icon: "success",
            title: "Role created",
            text: "Your role has created",
          });
          window.location = "/admin/role";
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
  },
  created() {
    this.getPermissions();
    
  },
};
</script>
<style>

</style>