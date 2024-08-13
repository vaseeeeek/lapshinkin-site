<template lang="pug">
    div(v-if="isVisible" class="modal-overlay" @click="close")
      //- @click.stop как бы всплывает до родителя и останавливает 
      //- обработку по событию, в этом случае click закрывает только 
      //- при клике на modal-overlay а при клике на modal-window не будет закрываться

      div.modal-window(@click.stop)
        button.modal-close( @click="close") ×
        slot
</template>

<script>
export default {
  name: 'ModalWrapper',
  props: {
    isVisible: {
      type: Boolean,
      default: false,
    },
  },
  methods: {
    close() {
      this.$emit('close')
    },
  },
}
</script>

<style
  lang="scss"
  src="@/main/assets/styles/components/ModalWrapper.scss"
  scoped
></style>
