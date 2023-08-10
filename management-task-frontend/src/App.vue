<template>
  <img alt="Vue logo" src="./assets/logo.png">
  <div id="app">
    <TaskListeVue />
  </div>
</template>
<script>
import TaskListeVue from './components/TaskListe.vue'

export default {
  name: 'App',
  components: {
    TaskListeVue
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
