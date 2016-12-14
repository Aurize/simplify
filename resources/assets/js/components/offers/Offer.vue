<template>
    <div class="container">
        <div class="tabs is-toggle is-fullwidth">
            <ul>
                <li class="is-active"><a>Opis</a></li>
                <li><a>Kalendarz</a></li>
                <li><a>Opinie</a></li>
                <li><a>Documents</a></li>
            </ul>
        </div>
        <div class="columns is-multiline">
            <div class="column is-12">
                <h1 class="title">Opis</h1>
            </div>
            <div class="column is-12">
                <div class="content">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer viverra mi in elit tincidunt mollis. Praesent condimentum varius fringilla. Suspendisse potenti. Nunc eu nibh vel nunc interdum dignissim. Curabitur at ligula eget neque tincidunt laoreet. Aliquam id quam est. In rutrum et nisi nec rutrum.
                    </p>
                    <p>
                        Fusce semper nunc urna, eu posuere dolor convallis vestibulum. Morbi et ornare lectus, sed faucibus turpis. Morbi porttitor felis ex, quis pretium nisi luctus a. Curabitur venenatis ex sollicitudin, rhoncus libero a, egestas leo. Donec ullamcorper massa ut metus blandit, quis posuere odio rhoncus. Donec blandit pretium nisi, vel dapibus lacus ultrices vel. Donec a blandit massa, sit amet rhoncus erat. In et sapien interdum, suscipit ligula eget, imperdiet diam. Aenean diam leo, eleifend in accumsan eu, maximus vitae ex. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                    </p>
                    <p>
                        Integer mattis porttitor mauris, ac molestie mi ullamcorper nec. Vivamus aliquam porta est. Cras non purus sit amet arcu tincidunt maximus sit amet sed metus. Curabitur feugiat imperdiet est vitae pharetra. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam commodo, ligula eu varius lacinia, nibh risus interdum lectus, sed convallis felis purus nec arcu. Proin et quam vitae orci gravida blandit nec eget nisl. Maecenas sit amet ante nec neque facilisis pretium vitae nec leo.
                    </p>
                </div>
            </div>
        </div>
        <div class="columns is-multiline">
            <div class="column is-12">
                <h1 class="title">Kalendarz</h1>
            </div>
            <div class="column is-12">
                <table class="table is-bordered is-striped is-narrow">
                    <thead>
                        <tr>
                            <th>Pn</th>
                            <th>Wt</th>
                            <th>Śr</th>
                            <th>Cz</th>
                            <th>Pt</th>
                            <th>So</th>
                            <th>N</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>-</td>
                            <td>18:00</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <reviews-list :reviews=offer.reviews></reviews-list>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component ready.');
            this.fetchOffer();
        },
        props: ['id'],
        data() {
            return {
                offer: {
                    reviews: []
                }
            }
        },
        methods: {
            fetchOffer() {
                this.$http.get('/api/offers/' + this.id).then((response) => {
                    this.offer = response.data.data;
                });
            }
        }
    }
</script>
