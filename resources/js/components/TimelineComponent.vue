<template>
</template>

<script>
    export default {
        data: function() {
            return {
                posts: []
            }
        },
        methods: {
            getPosts() {
                axios.get('/api/posts')
                    .then((res) => {
                        this.posts = res.data;
                        console.log(this.posts);
                    });
            }
        },
        mounted() {
            this.getPosts();
        }
    }
</script>
