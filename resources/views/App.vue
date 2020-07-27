<template>
    <div class="container is-three-fifths pt-2 mt-6 mb-6">

        <posts-index />
        <router-view/>

    </div>
</template>

<script>
import PostsIndex from "./components/PostsIndex";

export default {
    components: {
        PostsIndex
    }
};
</script>

<style lang="scss" scoped>
@import "../sass/app.scss";

</style>
