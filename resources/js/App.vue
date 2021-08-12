<template>
    <comments :tree-data="treeData" ></comments>
</template>

<script>
    import Comments from "./components/CommentsComponent";
    export default {
        data: function() {
            return {
                treeDataGroup:
                    {
                        0: [
                            {'label': "TEST1", id: 1},
                            {'label': "TEST2", parent: 2},
                            {'label': "TEST3", parent: 3},
                        ],
                        1: [
                            {'label': "TEST5", id: 5},
                            {'label': "TEST6", id: 6},
                            {'label': "TEST7", id: 7},
                        ],
                        2: [
                            {'label': "TEST8", id: 8},
                            {'label': "TEST9", id: 9},
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
            console.log(this.treeDataGroup);
        }
    }
</script>
