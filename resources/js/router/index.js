import Vue from "vue";
import VueRouter from "vue-router";
import SinglePost from "../../views/components/SinglePost";

Vue.use(VueRouter);

const routes = [
    {
        path: "/posts/:slug",
        name: "single.post",
        component: SinglePost
    }
];

const router = new VueRouter({
    mode: "history",
    routes
});

export default router;
