<template>
    <li>
        <span class="label">{{ node.label }}</span>
        <ul v-if="treeData[node.id] && treeData[node.id].length && deep > counter">
            <child v-for="child in treeData[node.id]" :key="child.id" :node="child" :treeData="treeData" :deep="deep" :counter="counter + 1"></child>
        </ul>
    </li>
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
