export default async () => {
    const {data: messages, error, pending} = await useFetch('/api/messages');
    if(error.value) {
        throw createError({
            statusCode: error.value.statusCode,
            statusMessage: error.value.statusMessage,
        });
    }
    return {
        messages,
        pending,
    }
}
