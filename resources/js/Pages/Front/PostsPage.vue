<script>
import {defineComponent} from 'vue'
import PostsLayout from "@/Layouts/PostsLayout.vue";
import PaginationPostsComponent from "@/Components/Posts/PaginationPostsComponent.vue";
import PostListAdComponent from "@/Components/Posts/PostListAdComponent.vue";

export default defineComponent({
    name: "PostsPage",
    components: {
        PaginationPostsComponent,
        PostsLayout,
        PostListAdComponent
    },
    props:{
        posts: Object
    }

})
</script>

<template>
    <PostsLayout>
        <div>
            <PostListAdComponent :posts="posts.data"></PostListAdComponent>
            <PaginationPostsComponent :links="posts.links"></PaginationPostsComponent>
        </div>
    </PostsLayout>
</template>

<style scoped>

</style>
