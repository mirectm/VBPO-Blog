<template>
    <div>
        <section class="hero is-white">
            <button
                @click="score++"
                class="button is-primary is-large is-centered mr-6 ml-6"
            >
                FILTER
            </button>

            <transition name="fade">
                <div v-show="score % 2 >= 1" class="box mr-6 ml-6">
                    <div class="container">

                        <div class="columns is-centered">
                            <div
                                class="column  is-5-tablet is-4-desktop is-4-widescreen"
                            >
                                <h1 class="title is-size-4 has-text-centered">
                                    Search post:
                                </h1>
                                <search-input
                                    @searchQueryChanged="search = $event"
                                />
                            </div>

                            <div
                                class="column is-5-tablet is-4-desktop is-4-widescreen"
                            >
                                <h1 class="title is-size-4 has-text-centered">
                                    Select post:
                                </h1>
                                <div class="select">
                                    <select
                                        class="is-hovered is-large"
                                        v-model="search"
                                    >

                                        <option
                                            v-for="post in posts"
                                            :key="post.id"
                                        >
                                            <p>{{ post.title }}</p>
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </transition>
        </section>
        <table class="table box is-striped  is-hoverable  mr-6 ml-6">
            <thead>
                <tr>
                    <th class="is-size-4 has-text-center-mobile">
                        <h1>POSTS</h1>
                    </th>
                </tr>
            </thead>

            <tbody>
                <tr v-for="post in filteredItems" :key="post.id">
                    <td class="pt-5 pb-5">
                        <router-link :to="'/posts/' + post.slug">
                            <h1 class="subtitle is-size-5 pb-2 ">
                                <strong>↪ </strong>{{ post.title
                                }}<small class="pb-5">
                                    {{ shorten(post.text, 280) }}
                                </small>
                            </h1>
                        </router-link>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
import SearchInput from "../components/SearchInput";

export default {
    components: {
        SearchInput
    },

    data() {
        return {
            posts: [],
            search: "",
            score: 2
        };
    },

    created() {
        axios
            .get("/api/posts")
            .then(response => {
                this.posts = response.data;
            })
            .catch(error => {
                return this.$router.push("/posts/404").catch(() => {});
            });
    },
    methods: {
        shorten(text, len = 100) {
            return _.truncate(text, { length: len });
        }
    },

    computed: {
        filteredItems() {
            return this.posts.filter(post => {
                return post.title
                    .toLowerCase()
                    .includes(this.search.toLowerCase());
            });
        }
    }
};
</script>

<style lang="scss" scoped>
small {
    color: #afafaf;
}

.table {
    a {
        color: #424242;
    }
}
.select,
.select select {
    width: 100%;
}
.fade-enter-active,
.fade-leave-active {
    transition: all 0.2s ease;
}
.fade-enter,
.fade-leave-to {
    opacity: 0.4;
}
</style>
