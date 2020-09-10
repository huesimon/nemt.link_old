<template>
    <div class="phone-body">
        This is the Phone Body
    </div>
</template>

<script>
import posts from "../../social/posts"
import filters from "../../social/filters"
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {
                posts,
                filters
            };
        },
    }
</script>
