<template>
  <section class="bg-white shadow-sm py-16 sm:py-32 px-6 sm:px-12 text-center">
    <h2 class="kHeader sm:kHeaderSM">مقابلات</h2>
    <h2 class="my-6 kHeader sm:kHeaderSM">Interviews</h2>
    <div v-if="pending">
      <Loader />
    </div>
    <div
      v-else
      v-for="interview in filteredInterviews"
      :key="interview.id"
      class="container my-12 mx-auto md:px-6 mb-24 text-right"
    >
      <div :data-aos="interview.id == 2 ? 'fade-right' : 'fade-left'" data-aos-delay="300"
        class="mb-12 grid items-center gap-x-6 md:grid-cols-2 xl:gap-x-12"
      >
        <div class="mb-6 md:order-2 md:mb-0">
          <div
            class="relative mb-6 overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg"
            data-te-ripple-init
            data-te-ripple-color="light"
          >
            <div
              class="embed-responsive embed-responsive-16by9 relative w-full overflow-hidden"
              style="padding-top: 70%"
            >
              <!-- <iframe
                class="embed-responsive-item absolute bottom-0 left-0 right-0 top-0 h-full w-full"
                :src="interview.url"
                allowfullscreen=""
                data-gtm-yt-inspected-2340190_699="true"
              ></iframe> -->
                     <img
            :src="'_nuxt/assets/images/int_' + interview.id + '.png'"
            alt="Image"
            class="embed-responsive-item absolute bottom-0 left-0 right-0 top-0 h-full w-full"
          />
            </div>
            <a :href="interview.url" target="_blank">
              <div
                class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100 bg-[hsla(0,0%,98.4%,.15)]"
              ></div>
            </a>
          </div>
        </div>
        <div :class="{ 'order-last': interview.id % 2 === 0 }">
          <h3 class="kHeader">
            {{ interview.name }}
          </h3>
          <p class="my-6 text-gray-500 text-sm">
            بتاريخ <u>{{ interview.date }}</u>
          </p>
          <p>
            {{ interview.description }}
          </p>
        </div>
      </div>
    </div>
    <button>
      <NuxtLink to="/interviews" class="kBtn hover:kBtnHover"
        >عرض الجميع</NuxtLink
      >
    </button>
  </section>
</template>
<script>
export default defineComponent({

  async setup() {
    const { interviews, pending } = await useInterviews();
    return { interviews, pending };
  },
    computed: {
    filteredInterviews: function () {
      return this.interviews.slice(0, 3);
    },
  },
});
</script>
