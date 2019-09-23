<template>
    <b-row>

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

        <b-col cols="12">
            <b-pagination-nav :link-gen="linkGen" :number-of-pages="last_page" ></b-pagination-nav>
        </b-col>

    </b-row>
</template>

<script>

    import axios from 'axios';

    export default {
        name: "Content",
        data(){
            return {
                ads: [],
                last_page: null,
                currentPage: null,
                rows: null,
                perPage: null,
            }
        },
        mounted(){
            axios({
                url: 'http://localhost/api/ads',
                method: 'get'
            })
                .then(res => {
                    this.ads = res.data.data;
                    this.last_page = res.data.last_page;
                    // this.currentPage = res.data.current_page;
                    // this.rows = res.data.total;
                    // this.perPage = res.data.per_page;

                    console.log(res.data.data)
                })
        },
        methods:{
            addThreePoints(text){
                return text.split(' ', 10).join(' ') + '...';
            },
            linkGen(pageNum) {
                return pageNum === 1 ? '?' : `?page=${pageNum}`
            }
        }
    }
</script>

<style scoped>

</style>