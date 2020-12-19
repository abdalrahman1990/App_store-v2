<template>
  <div id="app" style="-webkit-app-region: drag" class="font-sans flex min-h-screen">
    <sidebar></sidebar>
    <!-- <transition name="router-animation" enter-active-class="animated slideInUp faster"> -->
    <router-view/>
    <!-- </transition> -->
  </div>
</template>

<script>
import Sidebar from './components/Sidebar.vue'
import 'animate.css/animate.css'
import axios from 'axios'

axios.defaults.baseURL = 'http://localhost:8000/api'

export default {
  components: {
    Sidebar,
  }
}


</script>


<style src="./assets/main.css"/>
