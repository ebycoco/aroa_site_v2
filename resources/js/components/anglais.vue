<template>
    <div>
<b-form-textarea
      id="textarea"
      v-model="data.english"
      placeholder="Enter something..."
      rows="3"
      max-rows="6"
      :class="classes" @click="click(data)" title="Update"
    ></b-form-textarea>

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
            default: () => {}
        },
        classes: {
            type: Object,
            default: () => ({ 
                'btn': true,
                'btn-primary': true,
                'btn-sm': false,
            }),
        },
    }
}
</script>