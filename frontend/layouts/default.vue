<template>
  <div>
    <header class="bg-white relative">
      <nav class="mx-auto text-right p-6 block sm:flex justify-between">
        <!-- Mobile Navbar -->
        <button
          @click="showMobileMenu = !showMobileMenu"
          data-collapse-toggle="navbar-hamburger"
          type="button"
          class="sm:hidden items-center p-2 ml-3 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
          aria-controls="navbar-hamburger"
          aria-expanded="false"
        >
          <svg
            class="w-6 h-6"
            aria-hidden="true"
            fill="currentColor"
            viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              fill-rule="evenodd"
              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
              clip-rule="evenodd"
            ></path>
          </svg>
        </button>
        <!-- PC Navbar -->
        <div
          class="hidden sm:flex gap-6 justify-left text-grey-400 mt-auto mb-2 text-gray-500"
        >
          <a href="https://facebook.com/mohammed.altabba" class="hover:text-[#4267B2]" target="_blank">
            <Icon name="ic:twotone-facebook" size="20" />
          </a>
          <a href="https://wa.me/963944509933" class="hover:text-[#25D366]" target="_blank">
            <Icon name="ri:whatsapp-fill" size="20" />
          </a>
          <a
            href="https://www.youtube.com/@dr.mohammed.altabba"
            class="hover:text-[#FF0000]"
            target="_blank"
          >
            <Icon name="ph:youtube-logo-fill" size="20" />
          </a>
        </div>
        <!-- PC & Mobile Navbar -->
        <ul
          :class="{ hidden: showMobileMenu }"
          :sm:calss="{ hidden: false }"
          class="text-center p-2 space-y-4 sm:space-y-0 block sm:flex sm:flex-row-reverse text-sm sm:text-md text-gray-500 font-semibold justify-end"
        >
          <li>
            <NuxtLink to="/" class="px-4 hover:text-black">الرئيسية</NuxtLink>
          </li>
          <li>
            <NuxtLink to="/interviews" class="px-4 hover:text-black"
              >مقابلات</NuxtLink
            >
          </li>
          <li>
            <NuxtLink to="/lectures" class="px-4 hover:text-black"
              >محاضرات</NuxtLink
            >
          </li>
          <li>
            <NuxtLink to="/flyers" class="px-4 hover:text-black"
              >نشرات</NuxtLink
            >
          </li>
          <li>
            <NuxtLink to="/books" class="px-4 hover:text-black">كتب</NuxtLink>
          </li>
          <li>
            <NuxtLink to="/messages" class="px-4 hover:text-black"
              >رسائل</NuxtLink
            >
          </li>
        </ul>
      </nav>
    </header>

    <!-- Output page content -->
    <slot />
  </div>
</template>
<style scoped>
.router-link-exact-active {
  @apply rounded bg-emerald-700 py-3 text-white transition duration-75 ease-in;
}
</style>

<script>
export default {
  data() {
    return {
      showMobileMenu: true,
    };
  },
};
</script>
