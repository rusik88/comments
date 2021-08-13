<template>
    <div>
        <div class="vueDynamic">

            <main class="py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">Reviews</div>
                                <div class="container-fluid">
                                    <div class="row">

                                    </div>
                                </div>
                                <hr>
                                <div v-if="!loadingReview" class="card-body" >
                                    <comments  :tree-data="getReviewsData" :deep="deep" :counter="counter"></comments>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

    </div>
</template>

<script>
    import Comments from "./components/CommentsComponent";
    export default {
        data: function() {
            return {
                deep: 10,
                counter: 1
            }
        },
        components: {
            Comments
        },
        mounted() {
            this.$store.dispatch('getReviewsAction')
        },
        computed: {
            getReviewsData() {
                return this.$store.getters.getReviews;
            },
            loadingReview() {
                return this.$store.getters.loadingReview;
            },
        }
    }
</script>
