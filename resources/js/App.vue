<template>
    <comments :tree-data="treeDataGroup" :deep="deep" :counter="counter"></comments>
</template>

<script>
    import Comments from "./components/CommentsComponent";
    export default {
        data: function() {
            return {
                deep: 2,
                counter: 1,
                treeDataGroup:
                    {
                        0: [
                            {'label': "TEST1", id: 1},
                            {'label': "TEST2", id: 2},
                            {'label': "TEST3", id: 3},
                        ],
                        1: [
                            {'label': "TEST5", id: 4},
                            {'label': "TEST6", id: 5},
                            {'label': "TEST7", id: 6},
                        ],
                        2: [
                            {'label': "TEST8", id: 7},
                            {'label': "TEST9", id: 8},
                        ],
                        6: [
                            {'label': "TEST10", id: 9},
                            {'label': "TEST11", id: 10},
                        ],
                    }
                ,
                treeData: [
                    {
                        label: "A cool folder",
                        children: [
                            {
                                label: "A cool sub-folder 1",
                                children: [
                                    {label: "A cool sub-sub-folder 1"},
                                    {label: "A cool sub-sub-folder 2"}
                                ]
                            },
                            {label: "This one is not that cool"}
                        ]
                    },
                    {
                        label: "A cool folder2",
                        children: [
                            {
                                label: "A cool sub-folder 12",
                                children: [
                                    {label: "A cool sub-sub-folder 12"},
                                    {label: "A cool sub-sub-folder 22"}
                                ]
                            },
                            {label: "This one is not that cool 2"}
                        ]
                    }
                ]
            }
        },

        components: {
            Comments
        },
        mounted() {

        }
    }
</script>
