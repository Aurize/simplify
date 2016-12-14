<template>
    <div class="columns is-multiline">
        <div class="column is-12">
            <pagination :max=offers.length :paginator=paginator link="offers"></pagination>
        </div>
        <div class="column is-12" v-for="offer in offers">
            <offer-horizontal :offer=offer></offer-horizontal>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component ready.');

            this.fetchOffers();
        },
        props: ['limit', 'page'],
        data() {
            return {
                offers: [],
                paginator: {
                    total_count: 0,
                    total_pages: 0,
                    current_page: 0,
                    limit: 0
                },
            }
        },
        methods: {
            fetchOffers() {
                this.$http.get('/api/offers?limit=' + this.limit + '&' + 'page=' + this.page).then((response) => {
                    this.offers = response.data.data;
                    this.paginator = response.data.paginator;
                });
            }
        },
        computed: {

        }
    }
</script>
