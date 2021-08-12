<template>
    <li>
        <span class="label">{{ node.label }}</span>
        <ul v-if="treeData[node.id] && treeData[node.id].length">
            <child v-for="child in treeData[node.id]" :node="child" :treeData="treeData"></child>
        </ul>
    </li>
</template>
<script>
export default {
    name: "child",
    props: {
        node: Object,
        treeData: Object,
    },
    mounted() {

    }
}
</script>

<style scoped>

</style>
