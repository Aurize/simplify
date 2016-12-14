<template>
    <nav class="pagination">
        <a :href="getLink(previousPage)" class="button" :disabled="!showPrevious">Previous</a>
        <a :href="getLink(nextPage)" class="button" :disabled="!showNext">Next page</a>
        <ul>
            <li v-if="showFirst">
                <a :href="getLink(1)" class="button">1</a>
            </li>
            <li v-if="showFirstSpace">
                <span>...</span>
            </li>
            <li v-if="showPrevious">
                <a :href="getLink(previousPage)" class="button">{{ previousPage }}</a>
            </li>
            <li>
                <a :href="getLink(paginator.current_page)" class="button is-primary">{{ paginator.current_page }}</a>
            </li>
            <li v-if="showNext">
                <a :href="getLink(nextPage)" class="button">{{ nextPage }}</a>
            </li>
            <li v-if="showLastSpace">
                <span>...</span>
            </li>
            <li v-if="showLast">
                <a :href="getLink(paginator.total_pages)" class="button">{{ paginator.total_pages }}</a>
            </li>
        </ul>
    </nav>
</template>

<script>
    export default {
        mounted() {
            console.log('Component ready.');

            this.setup();
        },
        props: ['paginator', 'link'],
        data() {
            return {
                pages: []
            }
        },
        methods: {
            setup() {
            },
            getLink(page) {
                return '/' + this.link + '?page=' + page + '&limit=' + this.paginator.limit;
            }
        },
        computed: {
            nextPage() {
                return this.paginator.current_page + 1;
            },
            previousPage() {
                return this.paginator.current_page - 1;
            },
            showFirst() {
                return this.paginator.current_page > 1;
            },
            showFirstSpace() {
                return this.paginator.current_page > 3;
            },
            showLast() {
                return this.paginator.current_page < (this.paginator.total_pages - 1);
            },
            showLastSpace() {
                return this.paginator.current_page < (this.paginator.total_pages - 1);
            },
            showNext() {
                return this.paginator.current_page < this.paginator.total_pages;
            },
            showPrevious() {
                return this.paginator.current_page > 2;
            }
        }
    }
</script>
