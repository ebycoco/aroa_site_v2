# Vue.js toast plugin
[![NPM](https://nodei.co/npm/vue-toast-dialog.png?compact=true)](https://nodei.co/npm/vue-toast-dialog/)

# Installation
```
npm i vue-toast-dialog

or

yarn add vue-toast-dialog
```
# Usage
```javascript
//main.js

import Vue from 'vue';

import Toast from 'vue-toast-dialog'

Vue.use(Toast, options)

// 自定义插件全局参数
// Example:
// Vue.use(Toast,{
//   title: 'Tips',
//   okText: 'Sure',
//   cancelText: 'Cancel',
//   double: false,
//   baseColor: '#d5a478'
// })


//app.vue
...
  export default {
    methods: {
      showToast() {
        this.$toast({
          title: 'title',
          content: 'Hello world!',
          okText:'Ok',
          okCb: ()=>{},
          cancelText:'Cancel',
          noCb: ()=>{},
          double: false,
          baseColor: '#d5a478'
        })
      }
    }
  }
...

```

# Parameter

## Values
- `title` - Title(String).
- `content` - Content of Toast(String).
- `double` - Display Cancel button or not(Boolean).default `false`.
- `okText` - Text of Sure button(String).
- `okCb` - Callback after clicking Sure button(Function).
- `cancelText` - Text of Sure button(String).
- `noCb` - Callback after clicking Cancel button(Function).
- `baseColor` - Base Color of Component(String).default `#d5a478`.

#### Options(Object)
- `title` - Title(String).
- `double` - Display Cancel button or not(Boolean).
- `okText` - Text of Sure button(String).
- `cancelText` - Text of Sure button(String).
- `baseColor` - Base Color of Component(String).

