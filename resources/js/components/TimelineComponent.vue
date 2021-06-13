<template>
<!-- <div>
    <div v-for="(post, index) in posts" :key="index">
        {{ post.body }}
    </div>
</div> -->
<div  class="border border-gray-300 rounded-lg mb-8">
    <div v-for="(post, index) in posts" :key="index">
        <div class="flex p-4 border-b border-b-gray-400">
            <!-- User photo -->
            <div class="mr-2 flex-shrink-0">
                <a href="">
                    <img
                        src=""
                        alt=""
                        class="rounded-full mr-2"
                        width="50"
                        height="50"
                    >
                </a>
            </div>

            <div class="w-full">
                <!-- Name -->
                <div class="mb-1">
                    <h5 class="font-bold">
                        <a href="">
                            <!-- {{ post.user_id ? post.user_id : "Ich habe eine Frage!!" }} -->
                        </a>
                    </h5>
                </div>

                <!-- Body -->
                <a href="">
                    <p class="text-sm mb-2 break-all">
                        {{ post.body }}
                    </p>
                </a>

                <!-- Number of commnet, Post date... -->
                <div class="lg:flex lg:items-center">
                    <!-- Number of comment -->
                    <a href="">
                        <div class="flex items-center hover:bg-gray-200 rounded-lg px-2 py-1">
                            <svg viewBox="0 0 20 20" class="text-green-500 mr-1 w-3">
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g class="fill-current">
                                        <path d="M14,11 L8.00585866,11 C6.89706013,11 6,10.1081436 6,9.00798298 L6,1.99201702 C6,0.900176167 6.89805351,0 8.00585866,0 L17.9941413,0 C19.1029399,0 20,0.891856397 20,1.99201702 L20,9.00798298 C20,10.0998238 19.1019465,11 17.9941413,11 L17,11 L17,14 L14,11 Z M14,13 L14,15.007983 C14,16.1081436 13.1029399,17 11.9941413,17 L6,17 L3,20 L3,17 L2.00585866,17 C0.898053512,17 0,16.0998238 0,15.007983 L0,7.99201702 C0,6.8918564 0.897060126,6 2.00585866,6 L4,6 L4,8.99349548 C4,11.2060545 5.78916089,13 7.99620271,13 L14,13 Z" id="Combined-Shape"></path>
                                    </g>
                                </g>
                                </svg>

                            <span class="text-xs text-green-500">
                                2
                                <!-- {{ count($post->comments) . (count($post->comments) == 1 ? ' Antwort' : ' Antworten') }} -->
                            </span>
                        </div>
                    </a>

                    <!-- Post date -->
                    <div class="lg:ml-4 ml-6">
                        <p class="text-xs text-gray-500">{{ post.created_at }} gepostet</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- @forelse ($posts as $post)
        @include('_post')
    @empty
        <p class="p-4">Noch keine Fragen.</p>
    @endforelse -->

    <!-- {{ $posts->links() }} -->
</div>
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
                        this.posts = res.data.data;
                        console.log(this.posts);
                    });
            }
        },
        mounted() {
            this.getPosts();
        }
    }
</script>
