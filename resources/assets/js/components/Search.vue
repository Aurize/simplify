<template>
    <div class="container">
        <div class="columns is-multiline is-mobile">
            <div class="column is-6 is-offset-3">
                <p class="control">
                    <input class="input is-medium" type="text" placeholder="Wybierz usługę lub aktywność">
                </p>
            </div>
            <div class="column is-6 is-offset-3">
                <div class="columns">
                    <div class="column is-6">
                        <p class="control">
                            <input class="input is-medium" type="text" placeholder="Ulica">
                        </p>
                    </div>
                    <div class="column is-6">
                        <p class="control">
                            <input class="input is-medium" type="text" placeholder="Miasto">
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="has-text-centered">
            <button type="button" class="button is-info is-medium">
                <span class="icon">
                    <i class="fa fa-search"></i>
                </span>
                <span>Pokaż oferty</span>
            </button>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component ready.')
        }
    }
</script>
