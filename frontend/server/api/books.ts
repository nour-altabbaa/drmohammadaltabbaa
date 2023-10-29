import * as constants from "@/constants/index";

export default defineEventHandler(async (e) => {
  const books = await $fetch(`${constants.mainUrl}api/books`);
  return books;
});
  