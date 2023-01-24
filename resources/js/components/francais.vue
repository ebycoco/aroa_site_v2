<template>
  <div>
    <b-form-textarea
      id="textarea"
      v-model="data.french"
      placeholder="Enter something..."
      rows="3"
      columns="15"
      max-rows="6"
      :class="classes"
      @click="click(data)"
      title="Update"
    >{{ data.french }}</b-form-textarea>

    <!-- <pre class="mt-3 mb-0">{{ data.french }}</pre> -->
  </div>
</template>

<script>
export default {
  props: {
    data: {},
    name: {},
    click: {
      type: Function,
      default: () => {},
    },
    classes: {
      type: Object,
      default: () => ({
        btn: true,
        "btn-primary": true,
        "btn-sm": false,
      }),
    },
  },
};
</script>
<style>
#textarea{
  width: 300px !important;
}
</style>