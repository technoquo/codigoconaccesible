<script setup>
</script>
<template>
  <section
    id="home"
    class="
      lg:h-[85vh]
      flex
      items-center
      bg-light-primary
      dark:bg-dark-primary
      py-32
      lg:py-0
      overflow-hidden
    "
  >
    <div
      class="container mx-auto h-full"
      v-motion
      :initial="{
        opacity: 0,
        y: 100,
      }"
      :enter="{
        opacity: 1,
        y: 0,
      }"
    >
      <div class="flex flex-col md:flex-row items-center h-full pt-8">
        <div class="flex-1 flex flex-col items-center lg:items-start">
          <p class="text-lg text-accent text-md mb-[22px]">Hey, Soy Leo! 👋</p>
          <h1
            class="
              text-4xl
              leading-[44px]
              md:text-3xl md:leading-tight
              lg:text-5xl lg:leading-[1.2]
              font-bold
              md:tracking-[-2px]
            "
          >
            Yo diseño y desarrollo <br />
            web accesible e interfaz.
          </h1>         
          <a
            href="mailto:technoquo@gmail.com"
            class="
              mt-10
              btn btn-md
              bg-accent
              hover:bg-light-secondary hover:text-light-tail-500
              dark:hover:bg-dark-secondary dark:hover:text-dark-navy-100
              md:btn-lg
              transition-all
              cursor-pointer
            "
          >
            Trabaja conmigo
          </a>
          <div class="pt-12">
            <h5
              class="
                text-lg
                flex
                justify-center
                lg:justify-start
                items-center
                text-black
                dark:text-white
                mb-2
              "
            >
              Sígueme en
            </h5>
            <div class="flex items-center mb-6">
              <a
                class="
                  w-12
                  h-12
                  rounded-full
                  flex
                  items-center
                  justify-center
                  border border-white
                  text-black
                  dark:text-white
                  hover:bg-light-secondary hover:border-light-secondary
                  dark:hover:bg-dark-secondary dark:hover:border-dark-secondary
                  mr-3
                  sm:mr-4
                "
                href="https://www.linkedin.com/in/lelobo/"
                target="_blank"
              >
              
              <svg baseProfile="tiny" height="24px" version="1.2" viewBox="0 0 24 24" width="24px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Layer_1"><g><path d="M10.033,15.3h-1.6v-5.199h1.6V15.3z M9.233,9.434c-0.577,0-0.866-0.267-0.866-0.8c0-0.223,0.082-0.412,0.25-0.567    c0.166-0.155,0.371-0.233,0.616-0.233c0.577,0,0.866,0.268,0.866,0.801S9.811,9.434,9.233,9.434z M15.967,15.3h-1.633v-2.9    c0-0.755-0.268-1.133-0.801-1.133c-0.422,0-0.699,0.211-0.834,0.633c-0.043,0.067-0.066,0.201-0.066,0.4v3H11v-3.533    c0-0.8-0.012-1.355-0.033-1.666h1.4l0.1,0.699c0.367-0.556,0.9-0.833,1.633-0.833c0.557,0,1.006,0.194,1.35,0.583    c0.346,0.389,0.518,0.95,0.518,1.684V15.3z"/></g><g><path d="M12,21c-4.963,0-9-4.037-9-9s4.037-9,9-9s9,4.037,9,9S16.963,21,12,21z M12,5c-3.859,0-7,3.141-7,7s3.141,7,7,7    s7-3.141,7-7S15.859,5,12,5z"/></g></g></svg>
              </a>
              <a
                class="
                  w-12
                  h-12
                  rounded-full
                  flex
                  items-center
                  justify-center
                  border border-white
                  text-black
                  dark:text-white
                  hover:bg-light-secondary hover:border-light-secondary
                  dark:hover:bg-dark-secondary dark:hover:border-dark-secondary
                  mr-3
                  sm:mr-4
                "
                href="https://github.com/technoquo"
                target="_blank"
              >
               <svg viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg"><g id="GitHub"><path class="cls-1" d="M20,8a12,12,0,0,0-3.79,23.39c.6.11.82-.26.82-.58s0-1,0-2c-3.34.72-4-1.61-4-1.61a3.21,3.21,0,0,0-1.33-1.76c-1.09-.74.08-.73.08-.73a2.55,2.55,0,0,1,1.84,1.24,2.56,2.56,0,0,0,3.49,1,2.59,2.59,0,0,1,.76-1.61c-2.66-.3-5.47-1.33-5.47-5.93a4.63,4.63,0,0,1,1.24-3.22A4.28,4.28,0,0,1,13.7,13s1-.33,3.3,1.23a11.18,11.18,0,0,1,6,0C25.3,12.65,26.3,13,26.3,13a4.28,4.28,0,0,1,.12,3.17,4.63,4.63,0,0,1,1.23,3.22c0,4.61-2.8,5.63-5.47,5.92A2.88,2.88,0,0,1,23,27.52c0,1.6,0,2.89,0,3.29s.21.69.82.58A12,12,0,0,0,20,8Z"/></g></svg>
              </a>
            </div>
          </div>
        </div>
        <div class="flex flex-1 justify-end items-center h-full mt-8 md:mt-0">
          <img class="rounded-lg w-9/12" src="/img/leo.jpeg" alt="Hero" />
        </div>
      </div>
    </div>
  </section>
</template>