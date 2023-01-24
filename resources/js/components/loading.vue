<template>
  <div class="text-center" v-if="loading">
    <b-spinner label="text-center"></b-spinner>
  </div>
</template>

<script>
export default {
    props:{
        loading: Boolean
    }
}
</script>