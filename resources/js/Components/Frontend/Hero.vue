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
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 64 64"
                  aria-labelledby="title"
                  aria-describedby="desc"
                  role="img"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                >
                  <title>Linkedin</title>
                  <desc>Icono de Linkedin.</desc>
                  <path
                    data-name="layer1"
                    fill="none"
                    stroke="#202020"
                    stroke-linecap="round"
                    stroke-miterlimit="10"
                    stroke-width="2"
                    d="M3.078 22.331h12.188v36.844H3.078z"
                    stroke-linejoin="round"
                  ></path>
                  <path
                    data-name="layer2"
                    d="M46.719 21.112c-5.344 0-8.531 1.969-11.906 6.281v-5.062H22.625v36.844h12.281V39.206c0-4.219 2.156-8.344 7.031-8.344s7.781 4.125 7.781 8.25v20.063H62V38.269c0-14.532-9.844-17.157-15.281-17.157z"
                    fill="none"
                    stroke="#202020"
                    stroke-linecap="round"
                    stroke-miterlimit="10"
                    stroke-width="2"
                    stroke-linejoin="round"
                  ></path>
                  <path
                    data-name="layer1"
                    d="M9.219 4.425C5.188 4.425 2 7.331 2 10.894s3.188 6.469 7.219 6.469 7.219-2.906 7.219-6.469-3.188-6.469-7.219-6.469z"
                    fill="none"
                    stroke="#202020"
                    stroke-linecap="round"
                    stroke-miterlimit="10"
                    stroke-width="2"
                    stroke-linejoin="round"
                  ></path>
                </svg>
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
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 64 64"
                  aria-labelledby="title"
                  aria-describedby="desc"
                  role="img"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                >
                  <title>Github</title>
                  <desc>Icono de Github.</desc>
                  <path
                    data-name="layer1"
                    d="M32 1.952a30.019 30.019 0 0 0-9.469 58.5c1.5.281 2.063-.656 2.063-1.406v-5.625c-8.344 1.779-10.125-3.563-10.125-3.563-1.406-3.469-3.375-4.406-3.375-4.406-2.719-1.875.187-1.781.187-1.781 3 .188 4.594 3.094 4.594 3.094 2.719 4.594 7.031 3.281 8.719 2.531a6.5 6.5 0 0 1 1.875-4.031c-6.656-.75-13.688-3.375-13.688-14.812a11.5 11.5 0 0 1 3.094-8.063 11.217 11.217 0 0 1 .281-7.969s2.531-.844 8.25 3.094a28.944 28.944 0 0 1 7.5-1.031 28.4 28.4 0 0 1 7.5 1.031c5.719-3.844 8.25-3.094 8.25-3.094a11.217 11.217 0 0 1 .281 7.969 11.34 11.34 0 0 1 3.094 8.063c0 11.531-7.031 14.063-13.688 14.813a7.262 7.262 0 0 1 2.063 5.534v8.25c0 .844.562 1.687 2.063 1.406A30.019 30.019 0 0 0 32 1.952z"
                    fill="none"
                    stroke="#202020"
                    stroke-linecap="round"
                    stroke-miterlimit="10"
                    stroke-width="2"
                    stroke-linejoin="round"
                  ></path>
                </svg>
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