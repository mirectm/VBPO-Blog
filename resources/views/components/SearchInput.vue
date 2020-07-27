<template>
    <div class="field">
        <label class="label">
            <input
            class="input is-hovered"
            type="text"
            v-model="searchQuery">
        </label>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                searchQuery:'',

            }
        },
        watch: {
            searchQuery(value) {
                this.$emit('searchQueryChanged', value)
            }
        },

    }
</script>
