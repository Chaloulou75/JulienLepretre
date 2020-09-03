<template>
  <div class="w-1/3 pt-8 mx-auto p-auto">
    <a
      class="px-4 py-3 text-gray-700 bg-gray-200 border border-t-0 border-gray-700 rounded-b"
      @click="$modal.show('example')"
    >lien du modal</a>

    <modal name="example" width="400" height="auto">
      <p
        class="px-4 py-2 mb-0 text-gray-700 bg-gray-200 border border-gray-700 rounded-b border-t-1"
      >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit obcaecati quidem et temporibus sequi nesciunt neque, odio earum, provident architecto voluptate fuga quod ut vero asperiores magnam excepturi nihil molestiae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. In autem molestiae, voluptatem ratione omnis rerum dolorem deleniti porro? Repudiandae, pariatur dolorum doloribus a quibusdam autem, porro dignissimos quaerat illum magnam.</p>
    </modal>
  </div>
</template>

<script>
import VModal from "vue-js-modal";

Vue.use(VModal);

export default {};
</script>
