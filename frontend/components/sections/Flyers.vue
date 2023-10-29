<template>
  <section class="bg-white shadow-sm py-16 sm:py-32 px-6 sm:px-12 text-center">
    <h2 class="kHeader sm:kHeaderSM">نشرات توعية صحية</h2>
    <h2 class="my-6 kHeader sm:kHeaderSM">Flyers</h2>
    <div v-if="pending">
      <Loader />
    </div>
    <div
      v-else
      v-for="flyer in filteredFlyers"
      :key="flyer.id"
      class="container my-12 mx-auto md:px-6 mb-24 text-right"
    >
      <div data-aos="fade-up" data-aos-delay="300"
        class="container my-12 mx-auto md:px-6 mb-24 text-center lg:text-right"
      >
        <div class="mb-6 flex flex-wrap md:flex-row-reverse">
          <div
            class="mr-auto w-full shrink-0 grow-0 basis-auto px-3 md:mb-0 md:w-4/12"
          >
            <div
              class="relative overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg"
              data-te-ripple-init
              data-te-ripple-color="light"
            >
              <img
                :src="`_nuxt/assets/images/flyer_${flyer.id}.jpg`"
                alt="Image"
                class="embed-responsive-item block h-full w-full rounded-lg object-cover object-center"
              />
            </div>
          </div>
          <div
            class="m-6 ml-auto w-full shrink-0 grow-0 basis-auto px-3 md:mb-0 md:w-7/12"
          >
            <h5 class="mb-3 kHeader">{{ flyer.name }}</h5>
            <p class="mb-6 font-bold">
              {{ flyer.category }}
            </p>
            <p class="text-neutral-500">
              {{ flyer.description }}
            </p>
            <a
              :href="'https://drive.google.com/file/d/' + flyer.url + '/view'"
              target="_blank"
            >
              <button
                type="button"
                class="kSubBtn hover:kBtnHover my-12 items-center mx-auto md:mx-0 justify-center md:justify-end"
              >
                عرض
              </button>
            </a>
          </div>
        </div>
      </div>
    </div>
    <button>
      <NuxtLink to="/flyers" class="kBtn hover:kBtnHover">عرض الجميع</NuxtLink>
    </button>
  </section>
</template>
<script>
export default defineComponent({
  async setup() {
    const { flyers, pending } = await useFlyers();
    return { flyers, pending };
  },
  computed: {
    filteredFlyers: function () {
      return this.flyers.slice(27, 30);
    },
  },
});
</script>
