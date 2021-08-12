  
import {HTTP} from '../http'


export default {
    state: {
        reviews: {},
        loadingReview: true,
        //message_success: false
    },
    mutations: {
        setReviewsMutation(state, payload) {
            state.reviews = payload;
        },
        setLoadingMutation(state, payload) {
            state.loadingReview = payload;
        },
        /*setMessageSuccess(state, payload) {
            state.message_success = payload;
        }*/
    },
    actions: {
        async getReviewsAction(store) {
            store.commit('setLoadingMutation', true);
            const reviews = await HTTP.get('comments');
            console.log(reviews.data.comments);
            try {
                store.commit('setReviewsMutation', reviews.data.comments);
                store.commit('setLoadingMutation', false);
            } catch(e) {
                console.log(e);
            }
        },
        async AddReviewAction(store, payload) {
            const review = await HTTP.post('add-review', {
                text: payload.text_val
            })
            try {
                store.dispatch('getReviewsAction')
                store.commit('setMessageSuccess', 'Review was added')
                setTimeout(() => {
                    store.commit('setMessageSuccess', false)
                }, 2000)
            } catch(e) {
                console.log(e);
            }
        }
    },
    getters: {
        getReviews(state) {
            return state.reviews;
        },
        loadingReview(state) {
            return state.loadingReview
        },
        /*getMessageSuccess(state) {
            return state.message_success;
        }*/
    }
}