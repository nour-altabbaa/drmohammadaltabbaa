import * as constants from "@/constants/index";

export default defineEventHandler(async (e) => {
  const lectures = await $fetch(`${constants.mainUrl}api/lectures`);
  return lectures;
});
  