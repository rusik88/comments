<template>
    <div class="tree">
        <ul class="tree-list">
            <li v-for="item in treeData[0]">
                <span>{{ item.label }} - {{ item.id }}</span>
                <ul v-if="treeData[item.id] && treeData[item.id].length && deep > counter">
                    <comments-child v-for="child in treeData[item.id]" :key="child.id" :node="child" :treeData="treeData" :deep="deep" :counter="counter + 1"></comments-child>
                </ul>
            </li>
        </ul>
    </div>
</template>


<script>
    import CommentsChild from "./CommentsChildComponent";
    export default {
        name: "CommentsComponent",
        props: {
            treeData: Object,
            deep: Number,
            counter: Number,
        },
        components: {
            CommentsChild
        },
        mounted() {
            //console.log(this.counter, this.deep)
        }

    }
</script>

<style>
    .tree-list ul {
        padding-left: 16px;
        margin: 6px 0;
    }
</style>
