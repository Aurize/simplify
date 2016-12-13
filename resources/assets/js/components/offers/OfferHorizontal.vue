<template>
    <div class="card is-fullwidth">
        <header class="card-header">
            <p class="card-header-title">
                Component
            </p>
            <a class="card-header-icon">
                <i class="fa fa-angle-down"></i>
            </a>
        </header>
        <div class="card-content">
            <figure class="image is-128x128">
                <img src="http://placehold.it/128x128">
            </figure>
            <div class="content">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec iaculis mauris. <a href="#">@bulmaio</a>. <a href="#">#css</a> <a href="#">#responsive</a>
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
