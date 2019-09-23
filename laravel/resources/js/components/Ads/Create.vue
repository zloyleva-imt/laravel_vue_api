<template>

    <div class="container">
        <div class="row justify-content-center">

            <div class="col-12">
                <form @submit.prevent="submitHandler">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title"
                               required placeholder="Enter title" @input="changeInputHandler">
                    </div>
                    <div class="form-group">
                        <label for="Description">Description</label>
                        <textarea class="form-control" id="Description" rows="3" name="description"
                                  required @input="changeInputHandler"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="Image">Image URL</label>
                        <input type="text" class="form-control" id="Image" aria-describedby="emailHelp" name="img_url"
                               required placeholder="Enter Image URL" @input="changeInputHandler">
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>

        </div>
    </div>

</template>

<script>
    export default {
        name: "AdsCreate",
        props:{
            routes:{
                type: Object,
                required: true
            }
        },
        data(){
            return {
                ad:{
                    title: null,
                    description: null,
                    img_url: null,
                }
            }
        },
        methods:{
            changeInputHandler(e){
                this.ad[e.target.name] = e.target.value
            },
            submitHandler(){
                axios({
                    url: this.routes.ads,
                    method: 'post',
                    data:this.ad,
                })
                    .then(res => {
                        // location.href = res.data.redirect;
                    })
            }
        }
    }
</script>

<style scoped>

</style>