<template>

    <div class="modal" :class="{ 'is-active': showModal }">

        <div class="modal-background">
        </div>

            <div class="modal-card">

                <header class="modal-card-head">
                    <p class="modal-card-title is-size-5 has-text-left pl-4 pr-4">{{ post.title }}</p>
                </header>

                <section class="modal-card-body  has-text-left">
                    <small class="pl-4 pr-4 is-size-6">{{ post.text }}</small>
                </section>

                <footer class="modal-card-foot">
                    <div class="pl-4">
                        <router-link :to="'/'">
                            <button class="  button is-primary">Close</button>
                        </router-link>
                    </div>
                </footer>

            </div>
    </div>
</template>

<script>
export default {
    name: "SinglePost",
    props: {
        showModal: {
            type: Boolean,
            default: true
        }
    },
    data() {
        return {
            post: {}
        };
    },

    created() {
        axios.get("/api/posts/" + this.$route.params.slug).then(response => {
            this.post = response.data;
        });
    }
};
</script>
