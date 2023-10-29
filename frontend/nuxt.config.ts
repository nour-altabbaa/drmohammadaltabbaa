export default defineNuxtConfig({
    ssr: true,
    modules: [
      "@nuxtjs/tailwindcss",
      "@vueuse/nuxt",
      "nuxt-icon",
      [
        "nuxt-mail",
        {
          message: {
            to: "nour.m.tabbaa@gmail.com",
          },
          smtp: {
            host: "smtp.mailtrap.io",
            port: 2525,
            auth: {
              user: "username",
              pass: "password",
            },
          },
        },
      ],
    ],
    app: {
      head: {
        title: "Dr Mohammad Al Tabbaa",
        meta: [{ name: "description", content: "Dr Mohammad Al Tabbaa Website" }],
      },
    },
    components: [
      { path: "~/components/sections", pathPrefix: false },
      "~/components",
    ],
    plugins: [{ src: "@/plugins/aos", ssr: false, mode: "client" }],
  });
