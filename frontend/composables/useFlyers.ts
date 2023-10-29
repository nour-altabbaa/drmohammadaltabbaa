export default async () => {
    const {data: flyers, error, pending} = await useFetch('/api/flyers');
    if(error.value) {
        throw createError({
            statusCode: error.value.statusCode,
            statusMessage: error.value.statusMessage,
        });
    }
    return {
        flyers,
        pending,
    }
}
