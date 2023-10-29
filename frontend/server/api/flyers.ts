import * as constants from "@/constants/index";

export default defineEventHandler(async (e) => {
  const flyers = await $fetch(`${constants.mainUrl}api/flyers`);
  return flyers;
});
  