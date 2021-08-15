<template>
    <div class="tree">
        <div class="comment-block">
            <div class="comment" v-for="item in treeData[0]" :key="item.id">
                <div class="media-body media-body-main">
                    <div class="review">
                        <h5 class="mt-0">{{ item.id }}. <span class="reviewDate">{{ item.created_at | moment('DD.MM.YYYY H:mm') }}</span></h5>
                        <div class="commentText">
                            {{ item.comment }}
                        </div>
                        <div class="commentReply" v-if="deep > counter">
                            <button v-on:click="triggerForm" class="commentReply btn btn-sm btn-primary">Ответить</button>
                            <div class="replyForm hide">
                                <AddCommentForm :parent_id="item.id" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="comment-block" v-if="treeData[item.id] && treeData[item.id].length && deep > counter">
                    <comments-child v-for="child in treeData[item.id]" :key="child.id" :node="child" :treeData="treeData" :deep="deep" :counter="counter + 1"></comments-child>
                </div>
            </div>
        </div>
    </div>
</template>


<script>
    import CommentsChild from "./CommentsChildComponent";
    import AddCommentForm from "./AddCommentFormComponent";
    export default {
        name: "CommentsComponent",
        props: {
            treeData: Object,
            deep: Number,
            counter: Number,
        },
        components: {
            CommentsChild,
            AddCommentForm
        },
        methods: {
            triggerForm: function(event) {
                event.target.nextElementSibling.classList.remove('hide')
            }
        },
        mounted() {
            
        }
    }
</script>

<style>
    .tree .comment-block {
        padding-left: 20px;
    }
    .tree .review {
        margin: 15px 0;
    }
    .hide {
        display:none;
    }
    .show {
        display:block;
    }
</style>