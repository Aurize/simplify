<template>
    <div class="columns is-multiline">
        <div class="column is-12">
            <pagination :max=offers.length current=5></pagination>
        </div>
        <div class="column is-12" v-for="offer in offers">
            <offer-horizontal></offer-horizontal>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component ready.');

            this.fetchOffers();
        },
        data() {
            return {
                offers: []
            }
        },
        methods: {
            fetchOffers() {
                this.$http.get('/api/offers').then((response) => {
                    this.offers = response.data.data;
                });
            }
        }
    }
</script>
