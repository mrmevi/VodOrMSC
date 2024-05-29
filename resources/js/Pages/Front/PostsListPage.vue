<script>
import {defineComponent} from 'vue'

import PostsLayout from "@/Layouts/Front/PostsLayout.vue";

import NewsListPostsComponent from "@/Components/Front/PostsList/NewsListPostsComponent.vue";
import PaginationPostsComponent from "@/Components/Front/PostsList/PaginationPostsComponent.vue";

export default defineComponent({
    name: "PostsListPage",
    components: {
        PostsLayout,
        NewsListPostsComponent,
        PaginationPostsComponent
    },
    props:{
        posts: Object
    }

})
</script>

<template>
    <PostsLayout>
        <div>
            <NewsListPostsComponent :posts="posts.data"></NewsListPostsComponent>
            <PaginationPostsComponent :links="posts.links"></PaginationPostsComponent>
        </div>
    </PostsLayout>
</template>

<style scoped>

</style>
