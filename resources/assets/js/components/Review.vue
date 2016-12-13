<template>
    <article class="media">
        <figure class="media-left">
            <p class="image is-64x64">
                <img src="http://placehold.it/128x128">
            </p>
        </figure>
        <div class="media-content">
            <div class="content">
                <p>
                    <strong>John Smith</strong> <small>@johnsmith</small> <small>31m</small>
                    <br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
                </p>
            </div>
            <nav class="level">
                <div class="level-left">
                    <a class="level-item">
                        <span class="icon is-small"><i class="fa fa-reply"></i></span>
                    </a>
                    <a class="level-item">
                        <span class="icon is-small"><i class="fa fa-retweet"></i></span>
                    </a>
                    <a class="level-item">
                        <span class="icon is-small"><i class="fa fa-heart"></i></span>
                    </a>
                </div>
            </nav>
        </div>
        <div class="media-right">
            <button class="delete"></button>
        </div>
    </article>
</template>

<script>
    export default {
        mounted() {
            console.log('Component ready.');
        },
        data() {
            return {
                reviews: []
            }
        },
        methods: {
        }
    }
</script>
