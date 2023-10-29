<template>
  <section class="bg-gray-100 py-16 sm:py-32 px-6 sm:px-12 text-center">
    <h2 class="kHeader sm:kHeaderSM">محاضرات</h2>
    <h2 class="my-6 kHeader sm:kHeaderSM">Lectures</h2>
    <div v-if="pending">
      <Loader />
    </div>
    <div
      v-else
      class="container my-12 mx-auto md:px-6 mb-24 text-center grid gap-x-6 lg:grid-cols-3 lg:gap-x-12"
    >
      <div
        v-for="lecture in filteredLectures"
        :key="lecture.id"
        class="rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)]"
        data-te-ripple-init
        data-te-ripple-color="light"
      >
        <div class="relative overflow-hidden bg-cover bg-no-repeat">
          <img
            :src="'_nuxt/assets/images/lecture_' + lecture.id + '.png'"
            alt="Image"
            class="w-full rounded-t-lg"
          />
          <a href="#!">
            <div
              class="absolute top-0 right-0 bottom-0 left-0 h-full w-full bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100 bg-[hsla(0,0%,98.4%,0.2)]"
            ></div>
          </a>
          <svg
            class="absolute left-0 bottom-0 text-white"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 1440 320"
          >
            <path
              fill="currentColor"
              d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
            ></path>
          </svg>
        </div>
        <div class="p-6 text-right">
          <h5 class="mb-3 kHeader">{{ lecture.name }}</h5>
          <p class="mb-6 text-md font-bold">
            {{ lecture.category }}
          </p>
          <p class="text-neutral-500">
            {{ lecture.description }}
          </p>
          <a
            :href="'https://drive.google.com/file/d/' + lecture.url + '/view'"
            target="_blank"
          >
            <button
              type="button"
              class="kSubBtn hover:kBtnHover my-6 items-center mx-auto md:mx-0 justify-center md:justify-end"
            >
              عرض
            </button>
          </a>
        </div>
      </div>
    </div>
    <button>
      <NuxtLink to="/lectures" class="kBtn hover:kBtnHover"
        >عرض الجميع</NuxtLink
      >
    </button>
  </section>
</template>
<script>
export default defineComponent({
  async setup() {
    const { lectures, pending } = await useLectures();
    return { lectures, pending };
  },
  computed: {
    filteredLectures: function () {
      return this.lectures.slice(8, 11);
    },
  },
});
</script>
