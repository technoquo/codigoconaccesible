<scrip setup>

</scrip>
<template>
  <section
    id="services"
    class="section bg-light-secondary dark:bg-dark-secondary"
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
    <div
      class="container mx-auto"
   
    >
      <div class="flex flex-col items-center text-center">
        <h2 class="section-title">Lo que hago por los clientes</h2>
       
      </div>
      <div class="grid lg:grid-cols-3 gap-8 mt-10">
        <div class="bg-light-tail-100 dark:bg-dark-navy-500 p-6 rounded-2xl">
          <div
            class="
              text-accent
              rounded-sm
              w-12
              h-12
              flex
              justify-center
              items-center
              mb-24
              text-[28px]
            "
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-24 w-24"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              stroke-width="2"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3"
              />
            </svg>
          </div>
          <h4 class="text-xl font-medium mb-2">Diseño Web</h4>
          <p>
            El diseño web es un área enfocada en el desarrollo de interfaces digitales, como el diseño de sitios y aplicaciones para web. Para ello, los diseñadores web crean las páginas utilizando lenguajes de marcado como HTML con una base para la accesibilidad.
          </p>
        </div>
        <div class="bg-light-tail-100 dark:bg-dark-navy-500 p-6 rounded-2xl">
          <div
            class="
              text-accent
              rounded-sm
              w-12
              h-12
              flex
              justify-center
              items-center
              mb-24
              text-[28px]
            "
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-24 w-24"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              stroke-width="2"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"
              />
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
              />
            </svg>
          </div>
          <h4 class="text-xl font-medium mb-2">Desarrrollo Web</h4>
          <p>
            Construir y mantener sitios web; es el trabajo que tiene lugar en un segundo plano y que permite que una web tenga una apariencia impecable, un funcionamiento rápido y un buen desempeño para permitir la mejor experiencia de usuario.
          </p>
        </div>       
        <div class="bg-light-tail-100 dark:bg-dark-navy-500 p-6 rounded-2xl">
          <div
            class="
              text-accent
              rounded-sm
              w-12
              h-12
              flex
              justify-center
              items-center
              mb-24
              text-[28px]
            "
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-24 w-24"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              stroke-width="2"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"
              />
            </svg>
          </div>
          <h4 class="text-xl font-medium mb-2">Consultoría de Accesibildad Web</h4>
          <p>
            Brindo soluciones de la tecnología y accesibilidad en la comunicación e información para las personas sordas y para todos, creando cosas que llaman la atención y tienen sentido.
          </p>
        </div>
      </div>
    </div>
  </section>
</template>