<template>
    <li class="node-tree">
        <span class="label">{{ node.label }}</span>
        <ul v-if="node.children && node.children.length">
            <child v-for="child in node.children" :node="child"></child>
        </ul>
    </li>
</template>

<script>

export default {
    name: "child",
    props: {
        node: Object
    },

}
</script>

<style scoped>

</style>
