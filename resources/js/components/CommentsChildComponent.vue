
<template>
    <div class="comment">
        <div class="media-body media-body-main">
            <div class="review">
                <h5 class="mt-0">
                    {{ node.id }}. 
                    <span class="reviewDate">{{ node.created_at | moment('DD.MM.YYYY H:mm') }}</span>
                </h5>
                <div class="commentText">
                    {{ node.comment }}
                </div>
            </div>
        </div>
        <div class="comment-block" v-if="treeData[node.id] && treeData[node.id].length && deep > counter">
            <child v-for="child in treeData[node.id]" :key="child.id" :node="child" :treeData="treeData" :deep="deep" :counter="counter + 1"></child>
        </div>
    </div>
</template>
<script>
export default {
    name: "child",
    props: {
        node: Object,
        treeData: Object,
        deep: Number,
        counter: Number
    },
    mounted() {
        console.log();
    }
}
</script>

<style scoped>
</style>