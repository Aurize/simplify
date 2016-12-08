<template>
        <div class="card">
            <header class="card-header">
                <p class="card-header-title">
                    Component
                </p>
                <a class="card-header-icon">
                    <i class="fa fa-angle-down"></i>
                </a>
            </header>
            <div class="card-image">
                <figure class="image is-4by3">
                    <img src="http://placehold.it/300x225" alt="">
                </figure>
            </div>
            <div class="card-content">
                <div class="media">
                    <div class="media-left">
                        <figure class="image is-32x32">
                            <img src="http://placehold.it/64x64" alt="Image">
                        </figure>
                    </div>
                    <div class="media-content">
                        <p class="title is-5">John Smith</p>
                        <p class="subtitle is-6">@johnsmith</p>
                    </div>
                </div>
                <div class="content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Phasellus nec iaculis mauris. <a href="#">@bulmaio</a>.
                    <a href="#">#css</a> <a href="#">#responsive</a>
                    <br>
                    <small>11:09 PM - 1 Jan 2016</small>
                </div>
            </div>
            <footer class="card-footer">
                <a class="card-footer-item">Save</a>
                <a class="card-footer-item">Edit</a>
                <a class="card-footer-item">Delete</a>
            </footer>
        </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component ready.')
        }
    }
</script>
