<template>
    <div  class="alertSuccess">
        <div 
            class="alert"  
            v-bind:class="{ 'alert-success': status, 'alert-danger': !status }"
            role="alert"
        >{{ message }}</div>
    </div>
</template>

<script>
    export default {
        props: {
            status: Boolean,
            message: String,
        },
        mounted() {
            console.log(status)
        }
    }
</script>

<style scoped>
    .alertSuccess {
        position:fixed;
        text-align:center;
        top:0;
        left:0;
        width:100%;
    }
</style>