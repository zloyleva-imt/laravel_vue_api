<template>

    <div class="container">
        <div class="row justify-content-center">

            <div class="col-12 col-md-6 my-2" v-for="item in ads" :key="item.id">
                <div class="card">
                    <img :src="item.img_url" class="card-img-top" >
                    <div class="card-body">
                        <div class="text-small "><b>Author:</b> <i>{{ item.user.name }}</i></div>
                        <h5 class="card-title">{{ item.title }}</h5>
                        <p class="card-text" v-html="addThreePoints(item.description)"></p>
                        <a :href="`/ads/${item.id}`" class="btn btn-primary">Read more</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

</template>

<script>
    export default {
        name: "AdsIndex",
        props:{
            ads:{
                type: Array,
                required: true
            }
        },
        methods:{
            addThreePoints(text){
                return text.split(' ', 10).join(' ') + '...';
            }
        }
    }
</script>

<style scoped>

</style>