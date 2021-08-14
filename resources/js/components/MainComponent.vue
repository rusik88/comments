<template>
    <div>
        <div class="vueDynamic">
            <main class="py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">Комментарии</div>
                                <div class="container-fluid">
                                    <div class="row">

                                    </div>
                                </div>
                                <hr>
                                <addCommentForm />
                                <hr>
                                <div v-if="!loadingComment" class="card-body" >
                                    <comments  :tree-data="getCommentsData" :deep="deep" :counter="counter"></comments>
                                </div>
                                <loading v-else></loading>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

    </div>
</template>

<script>
    import Comments from "./blocks/CommentsComponent"
    import AddCommentForm from './blocks/AddCommentFormComponent'
    import Loading from './common/LoadingComponent'
    export default {
        data: function() {
            return {
                deep: 10,
                counter: 1
            }
        },
        components: {
            Comments,
            AddCommentForm,
            Loading
        },
        mounted() {
            this.$store.dispatch('getCommentsAction')
        },
        computed: {
            getCommentsData() {
                return this.$store.getters.getComments;
            },
            loadingComment() {
                return this.$store.getters.loadingComment;
            },
            getDeep() {
                return this.$store.getters.deep;
            },
        }
    }
</script>
