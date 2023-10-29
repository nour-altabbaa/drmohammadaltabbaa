<template>
  <section class="bg-gray-100 py-16 sm:py-32 px-6 sm:px-12 text-center">
    <div class="container my-12 mx-auto md:px-6">
      <section class="text-center lg:text-left">
        <div class="container mx-auto md:px-6">
          <section class="text-center md:text-right">
            <div data-aos="fade-up" data-aos-delay="300"
              class="block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)]"
            >
              <div class="flex flex-wrap sm:flex-row-reverse">
                <div
                  class=" m-3 lg:flex lg:w-6/12 xl:w-4/12"
                >
                  <img
                    src="~/assets/images/books_01.jpg"
                    alt="Image"
                    class="object-cover rounded-lg overflow-hidden"
                  />
                </div>
                <div
                  class="w-full shrink-0 grow-0 basis-auto lg:w-6/12 xl:w-7/12"
                >
                  <div v-if="pending">
                    <Loader />
                  </div>
                  <p v-else-if="error">Error: {{ error.message }}</p>
                  <div v-else>
                    <div v-for="book in filteredBooks" :key="book.id">
                      <div class="px-6 py-12">
                        <h2 class="mb-6 pb-2 kHeader sm:kHeaderSM">{{ book.name }}</h2>
                        <p class="mb-6 pb-2 text-neutral-500">
                          {{book.description}}
                        </p>
                        <a
                          :href="
                            'https://drive.google.com/file/d/' +
                            book.url +
                            '/view'
                          "
                          target="_blank"
                        >
                          <button
                            type="button"
                            class="kBtn hover:kBtnHover"
                            data-te-ripple-init
                            data-te-ripple-color="light"
                          >
                            عرض
                          </button>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </section>
    </div>
    <button>
      <NuxtLink to="/books" class="kBtn hover:kBtnHover"
        >عرض الجميع</NuxtLink
      >
    </button>
  </section>
</template>
<script>
export default defineComponent({
  async setup() {
    const { books, pending } = await useBooks();
    return { books, pending };
  },
    computed: {
    filteredBooks: function () {
      return this.books.slice(0, 2);
    },
  },
});
</script>
