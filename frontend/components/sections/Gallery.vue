<template>
  <section class="bg-gray-100 py-16 sm:py-32 px-6 sm:px-12 text-center">
    <h2 class="kHeader sm:kHeaderSM">الاستديو</h2>
    <h2 class="my-6 kHeader sm:kHeaderSM">Gallery</h2>
    <div class="container my-12 mx-auto md:px-6 mb-24 text-right">
      <div class="flex flex-wrap">
        <div class="flex sm:w-1/2 flex-wrap">
          <div class="sm:w-1/2 p-1 md:p-2">
            <img
              alt="gallery"
              class="block h-full w-full rounded-lg object-cover object-center"
              src="https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(70).webp"
            />
          </div>
          <div class="sm:w-1/2 p-1 md:p-2">
            <img
              alt="gallery"
              class="block h-full w-full rounded-lg object-cover object-center"
              src="https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(72).webp"
            />
          </div>
          <div class="sm:w-full p-1 md:p-2">
            <img
              alt="gallery"
              class="block h-full w-full rounded-lg object-cover object-center"
              src="https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
            />
          </div>
        </div>
        <div class="flex sm:w-1/2 flex-wrap">
          <div class="sm:w-full p-1 md:p-2">
            <img
              alt="gallery"
              class="block h-full w-full rounded-lg object-cover object-center"
              src="https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(74).webp"
            />
          </div>
          <div class="sm:w-1/2 p-1 md:p-2">
            <img
              alt="gallery"
              class="block h-full w-full rounded-lg object-cover object-center"
              src="https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(75).webp"
            />
          </div>
          <div class="sm:w-1/2 p-1 md:p-2">
            <img
              alt="gallery"
              class="block h-full w-full rounded-lg object-cover object-center"
              src="https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(77).webp"
            />
          </div>
        </div>
      </div>
    </div>
    <button>
      <NuxtLink to="/gallery" class="kBtn hover:kBtnHover">عرض الجميع</NuxtLink>
    </button>
  </section>
</template>
