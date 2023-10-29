<template>
    <div class="bg-gray-100 py-12 px-6 lg:px-12">
        <section class="mb-32 lg:text-left">
            <div v-if="pending">
                <Loader />
            </div>
            <div v-else>
                <div
                    class="grid flex-row-reverse gap-6 lg:grid-cols-3 lg:gap-12 mb-12"
                >
                    <div v-for="interview in interviews" :key="interview.id">
                        <div
                        data-aos="fade-in" data-aos-delay="300"
                            class="rounded-lg overflow-hidden bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)]"
                            data-te-ripple-init
                            data-te-ripple-color="light"
                        >
                            <div class="overflow-hidden">
                                <div
                                    class="relative mb-6 overflow-hidden bg-cover bg-no-repeat shadow-lg"
                                    data-te-ripple-init
                                    data-te-ripple-color="light"
                                >
                                    <div
                                        class="embed-responsive embed-responsive-16by9 relative w-full overflow-hidden"
                                        style="padding-top: 55%"
                                    >
                                        <iframe
                                            class="embed-responsive-item absolute bottom-0 left-0 right-0 top-0 h-full w-full"
                                            :src="interview.url"
                                            allowfullscreen=""
                                            data-gtm-yt-inspected-2340190_699="true"
                                        ></iframe>
                                    </div>
                                    <a :href="interview.url" target="_blank">
                                        <div
                                            class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100 bg-[hsla(0,0%,98.4%,.15)]"
                                        ></div>
                                    </a>
                                </div>
                            </div>
                            <div class="py-3 px-6 text-end">
                                <h3 class="text-gray-700 text-2xl font-bold">
                                    {{ interview.name }}
                                </h3>
                                <p class="my-6 text-gray-500 text-sm">
                                    بتاريخ <u>{{ interview.date }}</u>
                                </p>
                                <p class="text-gray-600">
                                    {{ interview.description }}
                                </p>
                                <a :href="interview.url" target="_blank">
                                    <button
                                        type="button"
                                        class="kSubBtn hover:kBtnHover my-6"
                                    >
                                        مشاهدة
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>
<script>
export default defineComponent({
  async setup() {
    const { interviews, pending } = await useInterviews();
    return { interviews, pending };
  },
});
</script>
