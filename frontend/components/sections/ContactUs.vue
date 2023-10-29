<template>
  <section class="bg-white shadow-sm py-16 sm:py-32 px-6 sm:px-12 text-center">
    <h2 class="kHeader sm:kHeaderSM">تواصل معي</h2>
    <h2 class="my-6 kHeaders sm:kHeaderSM">Contact me</h2>
    <div
      data-aos="fade-up"
      data-aos-delay="300"
      class="container flex flex-wrap my-12 mx-auto md:px-6 mb-24 flex-row-reverse"
    >
      <div
        class="mb-12 w-full shrink-0 grow-0 basis-auto md:px-3 lg:mb-0 lg:w-6/12 lg:px-16 text-left"
      >
        <form
          method="POST"
          enctype="multipart/form-data"
          @submit.prevent="submitForm"
        >
          <div class="relative mb-6" data-te-input-wrapper-init>
            <input
              type="text"
              class="form-control peer block min-h-[auto] w-full rounded border-2 bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none"
              placeholder="Name"
              v-model="formData.name"
              id="name"
            />
            <label
              class="pointer-events-none absolute top-0 right-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none"
              for="name"
              >الاسم
            </label>
          </div>
          <div class="relative mb-6" data-te-input-wrapper-init>
            <input
              type="email"
              class="form-control peer block min-h-[auto] w-full rounded border-2 bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none"
              placeholder="Email address"
              v-model="formData.email"
              id="email"
            />
            <label
              class="pointer-events-none absolute top-0 right-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none"
              for="email"
              >البريد الإلكتروني
            </label>
          </div>
          <div class="relative mb-6" data-te-input-wrapper-init>
            <textarea
              class="form-control peer block min-h-[auto] w-full rounded border-2 bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none"
              rows="3"
              placeholder="Your message"
              v-model="formData.body"
              id="body"
            ></textarea>
            <label
              for="body"
              class="pointer-events-none absolute top-0 right-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none"
              >نص الرسالة</label
            >
          </div>
          <button
            type="submit"
            data-te-ripple-init
            data-te-ripple-color="light"
            @click="submitForm"
            class="flex items-center justify-center mb-6 inline-block w-full rounded bg-emerald-700 px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-emerald-800 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-emerald-800 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-emerald-800 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
          >
            <svg
              class="mr-3 h-5 w-5 animate-spin text-white"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              v-show="loading"
            >
              <circle
                class="opacity-25"
                cx="12"
                cy="12"
                r="10"
                stroke="currentColor"
                stroke-width="4"
              ></circle>
              <path
                class="opacity-75"
                fill="currentColor"
                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"
              ></path>
            </svg>
            <span class="font-medium"> إرسال </span>
          </button>
        </form>
        <div
          id="toast-success"
          class="relative flex items-center w-full py-2 px-4 text-gray-500 rounded-lg shadow"
          :class="modalType == 'success' ? 'bg-green-500' : 'bg-red-500'"
          role="alert"
          v-show="showModal"
        >
          <button
            type="button"
            class="mr-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
            data-dismiss-target="#toast-success"
            aria-label="Close"
            @click="showModal = false"
          >
            <span class="sr-only">Close</span>
            <svg
              class="w-3 h-3"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 14 14"
            >
              <path
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"
              />
            </svg>
          </button>
          <div class="mr-3 text-white text-sm font-medium">
            {{ modalMassege }}
          </div>
          <div
            class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-white rounded-lg dark:bg-green-800 dark:text-green-200"
            :class="modalType == 'success' ? 'text-green-500' : 'text-red-500'"
          >
            <svg
              class="w-5 h-5"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              viewBox="0 0 20 20"
            >
              <path
                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"
              />
            </svg>
            <span class="sr-only">Check icon</span>
          </div>
        </div>
      </div>
      <div class="w-full shrink-0 grow-0 basis-auto lg:w-6/12 text-right">
        <div class="flex flex-wrap">
          <div
            class="mb-12 w-full shrink-0 grow-0 basis-auto md:w-12/12 md:px-3 lg:px-16"
          >
            <div class="flex items-start">
              <div class="mr-2 sm:mr-6 grow">
                <p class="mb-2 font-bold">البريد الإلكتروني</p>
                <p class="text-sm text-neutral-500">
                  mohammed.altabba@gmail.com
                </p>
              </div>
              <div
                class="flex rounded-md shrink-0 bg-emerald-100 w-14 h-14 text-center justify-center items-center text-emerald-700"
              >
                <Icon name="ic:baseline-mail" size="30" />
              </div>
            </div>
          </div>

          <div
            class="mb-12 w-full shrink-0 grow-0 basis-auto md:w-12/12 md:px-3 lg:px-16"
          >
            <div class="align-start flex">
              <div class="mr-2 sm:mr-6 grow">
                <p class="mb-2 font-bold">أرقام التواصل</p>
                <p class="text-sm text-neutral-500">+963 944-509933</p>
              </div>
              <div
                class="flex rounded-md shrink-0 bg-emerald-100 w-14 h-14 text-center justify-center items-center text-emerald-700"
              >
                <Icon name="ic:baseline-phone-android" size="30" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import * as constants from "@/constants/index";
export default {
  data() {
    return {
      showModal: false,
      modalType: "",
      modalMassege: "",
      loading: false,
      formData: {
        name: "",
        email: "",
        body: "",
      },
    };
  },
  methods: {
    closeModal() {
      setTimeout(() => {
        this.showModal = false;
      }, 3000);
    },
    async submitForm() {
      if (this.formData.name == "") {
        this.modalMassege = "يرجى إدخال اسم المرسل";
        this.modalType = "fail";
        this.showModal = true;
        this.closeModal();
      } else if (this.formData.email == "") {
        this.modalMassege = "يرجى إدخال البريد الإلكتروني";
        this.modalType = "fail";
        this.showModal = true;
        this.closeModal();
      } else if (this.formData.body == "") {
        this.modalMassege = "يرجى إدخال نص الرسالة";
        this.modalType = "fail";
        this.showModal = true;
        this.closeModal();
      } else if (this.loading == false) {
        this.loading = true;
        const { data: responseData } = await useFetch(
          `${constants.mainUrl}api/sendEmail`,
          {
            method: "post",
            body: {
              name: this.formData.name,
              email: this.formData.email,
              body: this.formData.body,
            },
          }
        );
        if (responseData["value"] == 1) {
          this.modalMassege = "تم إرسال الرسالة بنجاح";
          this.modalType = "success";
          this.showModal = true;
          this.closeModal();
        } else {
          this.modalMassege = "تعذر إرسال الرسالة";
          this.modalType = "fail";
          this.showModal = true;
          this.closeModal();
        }
        this.loading = false;
      }
    },
  },
};
</script>
