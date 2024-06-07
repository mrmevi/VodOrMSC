<script>
import {defineComponent} from 'vue'
import {Link} from "@inertiajs/vue3";
import route from "ziggy-js";

export default defineComponent({
    name: "PostsListComponents",
    methods: {route},
    props:{
        posts: Object
    },
    components:{
        Link,
    },
})
</script>

<template>
    <div class="px-8 sm:px-14 xl:px-20 2xl:px-28 mt-20">
        <h1 class="mb-8 divide-solid font-sans font-bold text-center lg:text-left text-2xl sm:text-5xl lg:indent-24">Все новости</h1>
        <hr class="mb-16 h-px bg-gray-300 border-0">

        <div v-for="(post, id) in posts" :key="id"
             class="mb-16 xl:flex mx-auto xl:space-x-24 2xl:space-x-44">


            <div class="xl:w-4/12 xl:relative">
                <img class="xl:absolute top-0 left-0 mx-auto w-full h-full object-cover object-center" :src="post.thumbnail" alt="">
            </div>


            <div class="py-8 2xl:py-14 max-xl:mx-auto max-w-[700px]">
                <div>
                    <p v-if="!post.place" class="mb-2 font-sans font-medium text-sm">{{ post.date }}</p>
                    <p v-if="post.place" class="mb-2 font-sans font-medium text-sm">{{ post.place }} | {{ post.date }}</p>
                </div>
                <Link :href="route('posts.view', post.slug)" class="mb-4 font-sans font-bold text-xl sm:text-3xl">{{post.title}}</Link>
                <p v-if="post.description" class="pt-6 text-justify font-sans font-normal text-sm sm:text-base">
                    {{post.description}}
                </p>
            </div>

            <hr class="xl:hidden mb-16 h-px bg-gray-400 border-0">

        </div>

    </div>
</template>

<style scoped>

</style>
