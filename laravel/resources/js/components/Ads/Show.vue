<template>

    <div class="container">
        <div class="row justify-content-center">

            <div class="col-12">
                <div class="card">
                    <img :src="ad.img_url" class="card-img-top" >
                    <div class="card-body">
                        <h5 class="card-title">{{ ad.title }}</h5>
                        <p class="card-text" v-html="ad.description"></p>
                    </div>
                </div>
            </div>

        </div>
    </div>

</template>

<script>
    export default {
        name: "AdsShow",
        props:{
            ad:{
                type: Object,
                required: true
            }
        }
    }
</script>

<style scoped>

</style>