<template>
    <div id="app">
        <Header></Header>
        <Reglog></Reglog>
    </div>
</template>
<script>
import Header from "./header.vue";
import Reglog from "./regLog.vue";

export default {
  name: "App",
  components: {
    Header,
    Reglog,
  }
};
</script>
<style>
</style>
