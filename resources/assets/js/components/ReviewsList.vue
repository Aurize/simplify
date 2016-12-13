<template>
    <div class="columns is-multiline">
        <div class="column is-12">
            <h1 class="title">Opinie</h1>
        </div>
        <div class="column is-12" v-for="review in reviews">
            <review></review>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component ready.');
        },
        data() {
            return {
                reviews: [1,2,3]
            }
        },
        methods: {
        }
    }
</script>
