<template>
    <nav class="nav">
        <div class="nav-left">
            <a class="nav-item is-brand" href="/">
                <img src="http://bulma.io/images/bulma-type.png" alt="Bulma logo">
            </a>
        </div>
        <div class="nav-center">
            <a class="nav-item" href="#">
                <span class="icon">
                    <i class="fa fa-github"></i>
                </span>
            </a>
            <a class="nav-item" href="#">
                <span class="icon">
                    <i class="fa fa-twitter"></i>
                </span>
            </a>
        </div>
        <span class="nav-toggle">
            <span></span>
            <span></span>
            <span></span>
        </span>
        <div class="nav-right nav-menu">
            <a class="nav-item" href="#">
                Home
            </a>
            <a class="nav-item" href="#">
                Documentation
            </a>
            <a class="nav-item" href="#">
                Blog
            </a>
            <span class="nav-item">
                <a class="button">
                    <span class="icon">
                    <i class="fa fa-twitter"></i>
                    </span>
                    <span>Tweet</span>
                </a>
                <a class="button is-primary" href="#">
                <span class="icon">
                    <i class="fa fa-download"></i>
                </span>
                <span>Download</span>
                </a>
            </span>
        </div>
    </nav>
</template>

<script>
    export default {
        mounted() {
            console.log('Component ready.')
        }
    }
</script>
