
<template>
    <div class="comment">
        <div class="media-body media-body-main">
            <div class="comment">
                <h5 class="mt-0">
                    {{ node.id }}. 
                    <span class="commentDate">{{ node.created_at | moment('DD.MM.YYYY H:mm') }}</span>
                </h5>
                <div class="commentText">
                    {{ node.comment }}
                </div>
                <div class="commentReply" v-if="deep > counter">
                    <button v-on:click="triggerForm" class="btn btn-sm btn-primary">Ответить</button>
                    <div class="replyForm hide">
                        <AddCommentForm :parent_id="node.id" />
                    </div>
                </div>
            </div>
        </div>
        <div class="comment-block" v-if="treeData[node.id] && treeData[node.id].length && deep > counter">
            <child v-for="child in treeData[node.id]" :key="child.id" :node="child" :treeData="treeData" :deep="deep" :counter="counter + 1"></child>
        </div>
    </div>
</template>
<script>
import AddCommentForm from "./AddCommentFormComponent";
export default {
    name: "child",
    props: {
        node: Object,
        treeData: Object,
        deep: Number,
        counter: Number
    },
    components: {
        AddCommentForm
    },
    methods: {
        triggerForm: function(event) {
            event.target.nextElementSibling.classList.remove('hide')
        }
    },
    mounted() {
        console.log();
    }
}
</script>

<style scoped>
</style>