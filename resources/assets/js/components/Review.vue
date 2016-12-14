<template>
    <div class="box">
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
                        {{ this.review.comment }}
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
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component ready.');
        },
        props: ['review'],
        data() {
            return {
            }
        },
        methods: {
        }
    }
</script>
