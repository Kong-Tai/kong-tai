import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

export default new Vuex.Store({
    state: {
        posts: [],
    },
    getters: {},
    actions: {
        getAllPosts({
            commit
        }) {
            axios
                .get("/post/get_all")
                .then(response => {
                    commit("setPosts", response.data)
                    console.log(response.data)
                })
        },
    },

    mutations: {
        setPosts(state, response) {
            state.posts = response.data;
        },
    }
});
