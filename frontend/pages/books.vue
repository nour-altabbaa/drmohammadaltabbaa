<template>
  <div v-if="pending">
    <Loader />
  </div>
  <p v-else-if="error">Error: {{ error.book }}</p>
  <div v-else>
    <div>
      <div class="bg-gray-100 py-12 px-6 lg:px-12">
        <section class="mb-32 lg:text-left">
          <div
            class="grid flex-row-reverse gap-6 lg:grid-cols-3 lg:gap-12 mb-12"
          >
            <div v-for="book in books" :key="book.id">
              <div
              data-aos="fade-in" data-aos-delay="300"
                class="rounded-lg overflow-hidden bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)]"
                data-te-ripple-init
                data-te-ripple-color="light"
              >
                <div
                  class="embed-responsive embed-responsive-16by9 relative w-full overflow-hidden bg-cover bg-no-repeat"
                  style="padding-top: 55%"
                >
                  <img
                    :src="'https://lh3.googleusercontent.com/d/' + book.url"
                    alt="Image"
                    class="embed-responsive-item absolute bottom-0 left-0 right-0 top-0 w-full"
                  />
                </div>
                <div class="py-3 px-6 text-end bg-emerald-50">
                  <h3 class="text-gray-700 text-2xl font-bold">
                    {{ book.name }}
                  </h3>
                  <p class="text-gray-600">
                    {{ book.description }}
                  </p>
                  <a
                    :href="
                      'https://drive.google.com/file/d/' + book.url + '/view'
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
  async setup() {
    const { books, pending } = await useBooks();
    return { books, pending };
  },
});
</script>
