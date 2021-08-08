const debounce = (func, delay) => {
    let debounceTimer;
    return function () {
        const context = this;
        const args = arguments;
        clearTimeout(debounceTimer);
        debounceTimer = setTimeout(() => func.apply(context, args), delay);
    };
};

export default function search() {
    return {
        query: "",
        loading: true,
        posts: [],
        run: debounce(function () {
            if (!this.query) {
                return;
            }

            this.loading = true;

            const host = `https://${window.algoliaAppId}-dsn.algolia.net`;
            const url = `/search?q=${encodeURIComponent(
                this.query
            )}`;

            fetch(url, {
                headers: {
                    "X-Algolia-Application-Id": window.algoliaAppId,
                    "X-Algolia-API-Key": window.algoliaApiKey,
                },
            })
                .then((response) => response.json())
                .then((data) => {

                    if (data.length) {
                        this.posts = data;
                        this.loading = false
                    }

                    this.loading = false;
                });
        }, 50),
    };
}
