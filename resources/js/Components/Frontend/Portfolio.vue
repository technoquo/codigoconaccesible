<script setup>
import Projects from "./Projects.vue";
defineProps({
  skills: Object,
  projects: Object,
});
</script>
<template>
  <section
    id="portfolio"
    class="section bg-light-primary dark:bg-dark-primary"
  >
    <div
      class="container mx-auto"
      v-motion
      :initial="{
        opacity: 0,
        y: 100,
      }"
      :visible="{
        opacity: 1,
        y: 0,
      }">
      <div class="flex flex-col items-center text-center">
        <h2 class="section-title">Mis proyectos realizados</h2>
        <p class="subtitle">
          He desarrollado distintos proyectos web con los clientes de acuerdo con las necesidades de satisfacer los productos y/o servicios accesibles para los usuarios de internet. 
        </p>
      </div>
    </div>
    <Projects :skills="skills" :projects="projects" />
  </section>
</template>