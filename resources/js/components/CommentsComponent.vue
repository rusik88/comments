<template>
    <div class="tree">
        <ul class="tree-list">
            <li v-for="item in treeData[0]">
                <span>{{ item.label }} - {{ item.id }}</span>
                <ul v-if="treeData[item.id] && treeData[item.id].length">
                    <comments-child v-for="child in treeData[item.id]" :node="child" :treeData="treeData"></comments-child>
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
            treeData: Object
        },
        components: {
            CommentsChild
        },
        mounted() {
           // console.log(this.treeData[1]);
        }

    }
</script>

<style>
    .tree-list ul {
        padding-left: 16px;
        margin: 6px 0;
    }
</style>
