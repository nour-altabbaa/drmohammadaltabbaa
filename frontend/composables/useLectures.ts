export default async () => {
    const {data: lectures, error, pending} = await useFetch('/api/lectures');
    if(error.value) {
        throw createError({
            statusCode: error.value.statusCode,
            statusMessage: error.value.statusMessage,
        });
    }
    return {
        lectures,
        pending,
    }
}
