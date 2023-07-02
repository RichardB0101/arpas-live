<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                        <v-carousel>
                            <v-carousel-item
                                src="https://cdn.vuetifyjs.com/images/cards/docks.jpg"
                                cover
                            ></v-carousel-item>

                            <v-carousel-item
                                src="https://cdn.vuetifyjs.com/images/cards/hotel.jpg"
                                cover
                            ></v-carousel-item>

                            <v-carousel-item
                                src="https://cdn.vuetifyjs.com/images/cards/sunshine.jpg"
                                cover
                            ></v-carousel-item>
                        </v-carousel>
                    </div>


                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
