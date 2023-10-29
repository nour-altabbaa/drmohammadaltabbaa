<template>
  <div v-if="pending">
    <Loader />
  </div>
  <p v-else-if="error">Error: {{ error.message }}</p>
  <div v-else>
    <div>
      <nav
        class="bg-gray-100 flex flex-row-reverse flex-wrap items-center list-none m-0 sm:p-1 overflow-hidden text-xs sm:font-bold justify-start"
      >
        <Icon name="ic:baseline-filter-list" color="green" size="20"/>
        <li
          @click="filtering = ''"
          :class="filtering == '' ? 'bg-emerald-700 text-white hover:text-white' : 'bg-white text-gray-500 hover:text-black'"
          class="cursor-pointer rounded-lg m-1 p-1 sm:px-2 sm:py-1.5"
        >
          عرض الجميع
        </li>
        <div v-for="cat in categories" :key="cat.id">
          <li
            @click="filtering = cat.category"
            :class="filtering == cat.category ? 'bg-emerald-700 text-white hover:text-white' : 'bg-white text-gray-500 hover:text-black'"
            class="cursor-pointer rounded-lg m-1 p-1 sm:px-2 sm:py-1.5"
          >
            {{ cat.category }}
          </li>
        </div>
      </nav>
      <div class="bg-gray-100 py-12 px-6 lg:px-12">
        <section class="mb-32 lg:text-left">
          <div
            class="grid flex-row-reverse gap-6 lg:grid-cols-3 lg:gap-12 mb-12"
          >
            <div v-for="lecture in filteredLectures" :key="lecture.id">
              <div
                data-aos="fade-in"
                data-aos-delay="300"
                class="rounded-lg overflow-hidden bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)]"
                data-te-ripple-init
                data-te-ripple-color="light"
              >
                <div
                  class="embed-responsive embed-responsive-16by9 relative w-full overflow-hidden bg-cover bg-no-repeat"
                  style="padding-top: 55%"
                >
                  <img
                    :src="'https://lh3.googleusercontent.com/d/' + lecture.url"
                    alt="Image"
                    class="embed-responsive-item absolute bottom-0 left-0 right-0 top-0 w-full"
                  />
                </div>
                <div class="py-3 px-6 text-end bg-emerald-50">
                  <h3 class="text-gray-700 text-2xl font-bold">
                    {{ lecture.name }}
                  </h3>
                  <p class="my-6 text-gray-500 text-sm">
                    {{ lecture.category }}
                  </p>
                  <p class="text-gray-600">
                    {{ lecture.description }}
                  </p>
                  <a
                    :href="
                      'https://drive.google.com/file/d/' + lecture.url + '/view'
                    "
                    target="_blank"
                  >
                    <button type="button" class="kSubBtn hover:kBtnHover my-6">
                      عرض
                    </button>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</template>
<script>
export default defineComponent({
  data() {
    return {
      filtering: "",
    };
  },

  async setup() {
    const { lectures, pending } = await useLectures();
    return { lectures, pending };
  },

  computed: {
    categories: function () {
      return this.lectures.reduce((p, c) => {
        p[c.category] = c;
        return p;
      }, {});
    },
    filteredLectures: function () {
      return this.lectures.filter((p) => p.category.includes(this.filtering));
    },
  },
});
</script>
