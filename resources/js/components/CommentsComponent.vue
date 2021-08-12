<template>
    <div class="tree">
        <ul class="tree-list">
            <li v-for="item in treeData">
                <span>{{ item.label }}</span>
                <ul v-if="item.children && item.children.length">
                    <comments-child v-for="child in item.children" :node="child"></comments-child>
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
            treeData: Array
        },
        components: {
            CommentsChild
        },
        mounted() {

        }

    }
</script>

<style>
    .tree-list ul {
        padding-left: 16px;
        margin: 6px 0;
    }
</style>
