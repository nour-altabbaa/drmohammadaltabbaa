import * as constants from "@/constants/index";

export default defineEventHandler(async (e) => {
  const interviews = await $fetch(`${constants.mainUrl}api/interviews`);
  return interviews;
});
  