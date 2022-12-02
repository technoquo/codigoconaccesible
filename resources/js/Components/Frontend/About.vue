<template>
  <section id="about" class="section bg-light-secondary dark:bg-dark-secondary">
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
      }"
    >
      <div class="flex flex-col xl:flex-row gap-24">
        <img
          class="object-cover h-full w-[566px] md:mx-auto lg:mx-0 rounded-2xl"
          src="/img/sobremi.jpg"
          alt="Sobre mi"
        />
        <div
          class="
            flex flex-col
            items-center
            text-center
            lg:items-start lg:text-left
          "
        >
          <div class="flex flex-col">
            <h2 class="text-3xl lg:text-4xl font-medium lg:font-extrabold mb-3">
              Sobre mi
            </h2>
            <p class="mb-4 text-accent">Freelance frontend Web developer</p>
            <hr class="mb-8 opacity-90 dark:opacity-5" />
            <p class="mb-8">
              Soy una persona sorda y soy un desarrollador web Mid Full-Stack. Me
               considero una persona siempre motivada por el aprendizaje. <br />
              <br />
              Brindo soluciones de la tecnología web y&nbsp;<em>accesibilidad</em>&nbsp;en la información para  para todos.
            </p>
          </div>
          <a href="#contact" class="btn btn-md bg-accent text-light-tail-100">
            Contáctame
          </a>
        </div>
      </div>
    </div>
  </section>
</template>