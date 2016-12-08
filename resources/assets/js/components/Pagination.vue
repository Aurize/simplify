<template>
    <nav class="pagination">
        <a class="button">Previous</a>
        <a class="button">Next page</a>
        <ul>
            <li>
                <a class="button">1</a>
            </li>
            <li>
                <span>...</span>
            </li>
            <li>
                <a class="button">45</a>
            </li>
            <li>
                <a class="button is-primary">46</a>
            </li>
            <li>
                <a class="button">47</a>
            </li>
            <li>
                <span>...</span>
            </li>
            <li>
                <a class="button">{{ max }}</a>
            </li>
        </ul>
    </nav>
</template>

<script>
    export default {
        mounted() {
            console.log('Component ready.');
        },
        props: ['current','max'],
        data() {
            return {
            }
        },
        methods: {
        }
    }
</script>
