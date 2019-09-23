<template>
  <b-container fluid>
    <Header />
    <Content />
  </b-container>
</template>

<script>

  import Header from './components/Header';
  import Content from './components/Content';

  export default {
    name: 'app',
    components: {
        Header, Content
    }
  }
</script>

<style>

</style>
