<template>

    <div class="container">
        <div class="row justify-content-center">

            <div class="col-12">
                <form>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title"
                               :value="ad.title" placeholder="Enter title" @input="changeInputHandler">
                    </div>
                    <div class="form-group">
                        <label for="Description">Description</label>
                        <textarea class="form-control" id="Description" rows="3" name="description"
                                  :value="ad.description" @input="changeInputHandler"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="Image">Image URL</label>
                        <input type="text" class="form-control" id="Image" aria-describedby="emailHelp" name="img_url"
                               :value="ad.img_url" placeholder="Enter Image URL" @input="changeInputHandler">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>

        </div>
    </div>

</template>

<script>
    export default {
        name: "AdsEdit",
        props:{
            ad:{
                type: Object,
                required: true
            }
        },
        data(){
            return {
                updatedAd:{
                    title: null,
                    description: null,
                    img_url: null,
                }
            }
        },
        methods:{
            changeInputHandler(e){
                this.updatedAd[e.target.name] = e.target.value
            }
        }
    }
</script>

<style scoped>

</style>