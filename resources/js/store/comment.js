  
import {HTTP} from '../http'


export default {
    state: {
        comments: {},
        loadingComment: true,
        deep: 0,
        message: false,
        responseStatus: false
    },
    mutations: {
        setCommentsMutation(state, payload) {
            state.comments = payload;
        },
        setDeepMutation(state, payload) {
            state.deep = payload;
        },
        setLoadingMutation(state, payload) {
            state.loadingComment = payload;
        },
        setMessage(state, payload) {
            state.message = payload;
        },
        setResponswStatus(state, payload) {
            state.responseStatus = payload;
        }
    },
    actions: {
        async getCommentsAction(store) {
            store.commit('setLoadingMutation', true);
            const comments = await HTTP.get('comments');
            try {
                store.commit('setCommentsMutation', comments.data.comments);
                store.commit('setDeepMutation', comments.data.deep);
                store.commit('setLoadingMutation', false);
            } catch(e) {
                console.log(e);
            }
        },
        async AddCommentAction(store, payload) {
            const comment = await HTTP.post('comments', {
                comment: payload.comment,
                parent_id: payload.parent_id,
            })
            try {
                store.dispatch('getCommentsAction')
                store.commit('setMessage', comment.data.message)
                store.commit('setResponswStatus', comment.data.status)
                setTimeout(() => {
                    store.commit('setMessage', false)
                }, 2000)
            } catch(e) {
                console.log(e);
            }
        }
    },
    getters: {
        getComments(state) {
            return state.comments;
        },
        loadingComment(state) {
            return state.loadingComment
        },
        getMessage(state) {
            return state.message;
        },
        getResponseStatus(state) {
            return state.responseStatus;
        },
        getDeep(state) {
            return state.deep;
        }
    }
}