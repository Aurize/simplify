<template>
    <div class="columns">
        <div class="column is-3" v-for="offer in count">
            <offer-vertical></offer-vertical>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component ready.')
        },
        data() {
            return {
                count: [1,2,3,4]
            }
        }
    }
</script>
