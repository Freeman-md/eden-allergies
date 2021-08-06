<template>
  <div>

    <!-- Header -->
    <Header />

    <!-- Main View -->
    <div>
      <slot/>
    </div>

    <!-- Footer -->

  </div>
</template>

<script>
import Header from '../Shared/Header.vue'
export default {
  name: 'Layout',
  components: { Header, }
}
</script>