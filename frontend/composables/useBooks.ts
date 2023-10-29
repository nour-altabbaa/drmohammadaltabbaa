export default async () => {
    const {data: books, error, pending} = await useFetch('/api/books');
    if(error.value) {
        throw createError({
            statusCode: error.value.statusCode,
            statusMessage: error.value.statusMessage,
        });
    }
    return {
        books,
        pending,
    }
}
