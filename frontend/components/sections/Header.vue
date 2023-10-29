<template>
  <Swiper
    :modules="modules"
    :slides-per-view="1"
    :scrollbar="{ draggable: true }"
    :loop="true"
    :effect="'fade'"
    :keyboard="{
      enabled: true,
    }"
    :autoplay="{
      delay: 5000,
      disableOnInteraction: false,
    }"
  >
    <SwiperSlide v-for="slide in 4" :key="slide">
      <div
        class="zoom relative w-full h-[60vh] sm:h-[calc(100vh-80px)] overflow-hidden bg-cover bg-no-repeat shadow-lg"
        data-te-ripple-init
        data-te-ripple-color="light"
      >
        <img
          :src="'_nuxt/assets/images/bg_' + slide + '.jpg'"
          alt="Image"
          class="absolute w-full h-full align-middle transition duration-300 ease-linear"
        />
        <div
          class="absolute bg-black bg-opacity-25 w-full h-full align-middle transition duration-300 ease-linear"
        ></div>
        <div class="absolute bottom-0 sm:top-1/4 col-span-2 flex justify-end items-center">
          <div class="text-right mx-6 md:mx-16">
            <span class="block text-2xl md:text-5xl tracking-tight text-white my-6 md:my-12">
              الموقع الطبي
            </span>
            <span class="block text-3xl md:text-8xl font-bold text-gray-100 my-6 md:my-12">
              للدكتور محمد الطباع
            </span>
            <span class="block text-sm md:text-lg text-white my-6 md:my-12">
              موقع يهتم بقضايا الصحة العامة والتثقيف الصحي من أجل القاء الضوء
              على المواضيع الصحية المجتمعية لتعزيز صحة المجتمع والوقاية من
              الامراض وتغيير السلوكيات الضارة وذلك عن طريق عرض المقابلات
              التلفزيونية والمحاضرات والبروشورات التي أنجزها الدكتور محمد الطباع
              خلال مسيرته المهنية.
            </span>
          </div>
        </div>
      </div>
    </SwiperSlide>
  </Swiper>
</template>
<script>
import {
  Navigation,
  Pagination,
  Scrollbar,
  A11y,
  EffectFade,
  Keyboard,
  Autoplay,
} from "swiper";
import { Swiper, SwiperSlide } from "swiper/vue";
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";
import "swiper/css/scrollbar";
import "swiper/css/effect-fade";

export default {
  components: {
    Swiper,
    SwiperSlide,
  },
  setup() {
    return {
      modules: [
        Autoplay,
        Navigation,
        Pagination,
        Scrollbar,
        A11y,
        EffectFade,
        Keyboard,
      ],
    };
  },
};
</script>
