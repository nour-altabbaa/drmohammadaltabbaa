export default async () => {
    const {data: interviews, error, pending} = await useFetch('/api/interviews');
    if(error.value) {
        throw createError({
            statusCode: error.value.statusCode,
            statusMessage: error.value.statusMessage,
        });
    }
    return {
        interviews,
        pending,
    }
}
