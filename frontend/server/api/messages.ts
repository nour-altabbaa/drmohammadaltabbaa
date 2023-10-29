import * as constants from "@/constants/index";

export default defineEventHandler(async (e) => {
  const messages = await $fetch(`${constants.mainUrl}api/messages`);
  return messages;
});
  