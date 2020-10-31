<template>
    <div class="articles">
        <div class="container-fluid">
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#articleModal">Add article</button>
            <div class="card card-body" v-for = "post in posts" :key="post.postId">
                <h3>{{post.title}}</h3>
                <p>{{post.description}}</p>
            </div>
            <!-- <div class="container-fluid">
                <ul class="pagination">
                    <li :class="[{disabled: !pagination.prev_page_url}]" class="page-item"><a class="page-link" href="#" @click="fetchArticles(pagination.prev_page_url)">Previous</a></li>
                    <li class="page-item disabled"><a class="page-link text-dark" href="#">Page {{pagination.current_page}} of {{pagination.last_page}}</a></li>
                    <li :class="[{disabled: !pagination.next_page_url}]" class="page-item"><a class="page-link" href="#" @click="fetchArticles(pagination.next_page_url)">Next</a></li>
               </ul>
            </div> -->
        <!--Start Modal row-->
            <div class="modal fade.active" id="articleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form  @submit.prevent="addArticle" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="form-group">
                                    <input v-model="form.title" type="text" name="title" placeholder="Title"
                                        class="form-control" :class="{ 'is-invalid': form.errors.has('title') }">
                                    <has-error :form="form" field="title"></has-error>
                                </div>

                                <div class="form-group">
                                    <input v-model="form.description" type="text-area" name="description" placeholder="Description"
                                        class="form-control" :class="{ 'is-invalid': form.errors.has('description') }">
                                    <has-error :form="form" field="description"></has-error>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-center">
                                <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                                <button type="submit" id="" class="btn btn-primary btn-link">Submit
                                    <div class="ripple-container"></div>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <!--End Modal row-->  
        </div>
    </div>
</template>

<script>
export default {
    computed: {
        posts(){
            return this.$store.getters.getArticles;
        }
    },

    mounted() {
        this.$store.dispatch("allArticles")
    },

    data() {
        return {
            form: new Form({
                title: '',
                description: '',
            }),
            // articles: [],
            // article: {
            //     postId: '',
            //     title: '',
            //     description: '',
            // },
            // pagination:{},
        }
    },

    // created() {
    //    this.fetchArticles();
    // },

    methods: {
        // fetchArticles(page_url){
        //     page_url = page_url || 'api/articles'
        //     let vm = this;
        //     fetch(page_url)
        //        .then(res => res.json())
        //        .then( res =>{
        //            this.articles = res.data;
        //            vm.makePagination(res);
        //        })
        //        .catch(err => console.log(err));
        // },

        addArticle(){
            this.form.post('api/articles/new')
            .then(resp => {
                    $('#articleModal').modal('hide');
                    this.$store.dispatch("allArticles");
                })
        },


        makePagination(res){
            let pagination = {
                current_page: res.current_page,
                last_page: res.last_page,
                next_page_url: res.next_page_url,
                prev_page_url: res.prev_page_url,ed
            }

            this.pagination = pagination;
        }
    },
}
</script>