<template>

      <div>

          <slot></slot>
        
      </div>
    
</template>

<script>

import Flickity from 'flickity-fade';
import 'flickity/dist/flickity.min.css';


  export default {

      props: {
        wrapAround: { default: true },
        autoPlay: { default: true },
        fade: { default: true }
      },

    mounted() {

        new Flickity(this.$el, {
            wrapAround: this.wrapAround,
            autoPlay: this.autoPlay,
            fade: this.fade,
            contain: true,
            prevNextButtons: false,
            pageDots: true,
            groupCells: true
        });
    }    
  };
</script>
