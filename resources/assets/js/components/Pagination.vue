<template>
    <nav class="pagination">
        <a :href="previous.link" class="button">Previous</a>
        <a :href="next.link" class="button">Next page</a>
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

            this.setup();
        },
        props: {
            current: {
                type: Number,
                default: 0
            },
            max: {
                type: Number,
                default: 0
            }
        },
        data() {
            return {
                previous: {
                    link: '',
                    value: 0
                },
                next: {
                    link: '',
                    value: 0
                }
            }
        },
        methods: {
            setup() {
                this.previous.value = this.current - parseInt(1);
                this.previous.link = '/offers?page=' + this.previous.value;

                this.next.value = this.current + parseInt(1);
                this.next.link = '/offers?page=' + this.next.value;
            }
        }
    }
</script>
