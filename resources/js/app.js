import Vue from "vue";
import App from "../views/App.vue";
import router from "./router";
import "./bootstrap";

new Vue({
    router,
    render: h => h(App)
}).$mount("#app");

/*
import Vue from "vue";
import VueRouter from "vue-router";
Vue.use(VueRouter);
import "./bootstrap";
import Vuetify from "../plugins/vuetify";

import PostsIndex from "../views/components/PostsIndex";
import SinglePost from "../views/components/SinglePost";

import App from "../views/App";//nedavam

const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/",
            name: "posts.index",
            component: PostsIndex
        },
        {
            path: "/posts/:slug",
            name: "single.post",
            component: SinglePost
        }
    ]
});

const app = new Vue({
    vuetify: Vuetify,
    el: "#app",
    components: { App },
    router
});
*/
