<template>
  <section
    class="bg-gray-100 shadow-sm py-16 sm:py-32 px-6 sm:px-12 text-center"
  >
    <h2 class="kHeader sm:kHeaderSM">رسائل توعية في التغذية</h2>
    <h2 class="my-6 kHeader sm:kHeaderSM">Nutrition Messages</h2>
    <swiper
      class="swiper h-96 mb-12"
      :modules="modules"
      :slides-per-view="1"
      :space-between="10"
      :pagination="{ clickable: true }"
      :keyboard="{ enabled: true }"
      :grab-cursor="true"
      :free-mode="true"
      :loop="false"
      :breakpoints="{
        '640': {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        '768': {
          slidesPerView: 3,
          spaceBetween: 40,
        },
        '1024': {
          slidesPerView: 3,
          spaceBetween: 30,
        },
      }"
      :autoplay="{
        delay: 3000,
        disableOnInteraction: false,
      }"
    >
      <div v-if="pending">
        <Loader />
      </div>

        <swiper-slide v-else
        v-for="message in filteredMessages"
        :key="message.id"
        class="slide"
          ><div
            class="zoom relative overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg"
            data-te-ripple-init
            data-te-ripple-color="light"
          >
            <a :href="'https://drive.google.com/file/d/' + message.url + '/view'"
              target="_blank">
              <img
                :src="'https://lh3.googleusercontent.com/d/' + message.url"
                class="w-full h-80 align-middle transition duration-300 ease-linear"
              />

              <div
                class="absolute top-0 right-0 bottom-0 left-0 h-full w-full text-right overflow-hidden bg-fixed"
              >
                <div class="flex h-full items-end justify-end">
                  <div class="m-6 text-white">
                    <h5 class="mb-3 text-xl font-bold">التغذية التكميلية</h5>
                    <p>للأطفال من عمر ستة أشهر لعمر السنتين</p>
                  </div>
                </div>
              </div>
              <div
                class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed transition duration-300 ease-in-out hover:bg-[hsla(0,0%,99%,0.15)]"
              ></div>
            </a>
          </div>
        </swiper-slide>
    </swiper>
    <button>
      <NuxtLink to="/messages" class="kBtn hover:kBtnHover"
        >عرض الجميع</NuxtLink
      >
    </button>
  </section>
</template>

<script>
import { defineComponent } from "vue";
import { Pagination, Navigation, Autoplay, Keyboard, FreeMode } from "swiper";
import { Swiper, SwiperSlide } from "swiper/vue";
import "swiper/css";
import "swiper/css/pagination";
import "swiper/css/navigation";

export default defineComponent({
  name: "swiper-example-responsive-breakpoints",
  title: "Responsive breakpoints",
  components: {
    Swiper,
    SwiperSlide,
  },
  async setup() {
    const { messages, pending } = await useMessages();
    return {
      messages,
      pending,
      modules: [Pagination, Navigation, Autoplay, Keyboard, FreeMode],
    };
  },
  computed: {
    filteredMessages: function () {
      return this.messages.slice(1, 6);
    },
  },
});
</script>
