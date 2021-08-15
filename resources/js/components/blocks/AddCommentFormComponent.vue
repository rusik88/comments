<template>
    <form action="" method="POST" id="CommentForm" class="col col-lg-12 mt-4 mb-3" @submit.prevent="onSubmit">                         
        <h3 v-if="parent_id == 0">Добавить комментарий</h3>
        <h3 v-else>Ответ на комментарий с ID {{ parent_id }}</h3>
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
            <button v-if="parent_id > 0" v-on:click="closeForm" class="btn btn-danger">Закрыть</button>
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
            }
        },
        props: {
            parent_id: Number,
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
                            parent_id: this.parent_id 
                        }
                    )
                    this.$v.comment.$model = '';
                    this.$v.$reset();
                    const forms = document.querySelectorAll('.replyForm')
                    forms.forEach(function(form) {
                        form.classList.add('hide')
                    })
                    
                }
            },
            closeForm(event) {
                event.target.closest('.replyForm').classList.add('hide')
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