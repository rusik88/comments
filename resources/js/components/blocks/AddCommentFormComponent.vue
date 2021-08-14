<template>
    <form action="" method="POST" id="CommentForm" class="col col-lg-12 mt-4 mb-3" @submit.prevent="onSubmit">                         
        <h3>Добавить комментарий</h3>
        <message v-if="getMessage" :message="getMessage" :status="getResponseStatus"></message>
        <div v-if="$v.comment.$dirty">
            <hr v-if="$v.$invalid">
            <div class="invalidBlock" v-if="!$v.comment.required">
                <div class="alert alert-danger" role="alert">Введите комментарий</div>
            </div>
            <div class="invalidBlock" v-if="!$v.comment.minLength">
                <div class="alert alert-danger" role="alert">Вы ввели {{ comment.length }} из {{ $v.comment.$params.minLength.min }}</div>
            </div>
        </div>
        <div class="form-group mt-3">
            <textarea
                v-model="comment"
                @blur="$v.comment.$touch()"
                name="comment"  class="form-control"  rows="3" placeholder="Комментарий"></textarea>
        </div>
        <div class="text-right">
            <button  type="submit" :disabled="this.$v.$invalid" class="btn btn-primary">Добавить</button>
        </div>
    </form>
</template>

<script>
    import { required, minLength } from 'vuelidate/lib/validators'
    import  Message from '../common/MessageComponent.vue'
    export default {
        data() {
            return {
                comment: '',
                form: {}
            }
        },
        validations: {
            comment: {
                required,
                minLength: minLength(10)
            }
        },
        components: {
            Message
        },
        methods: {
            onSubmit() {
                if(!this.$v.$invalid) { 
                    this.$store.dispatch('AddCommentAction', {
                            comment: this.$v.comment.$model,
                            parent_id: 0
                        }
                    )
                    this.$v.comment.$model = '';
                    this.$v.$reset();
                }
            }
        },
        computed: {
            getMessage() {
                return this.$store.getters.getMessage
            },
            getResponseStatus() {
                return this.$store.getters.getResponseStatus
            }
        }
    }
</script>

<style scoped>
    
</style>