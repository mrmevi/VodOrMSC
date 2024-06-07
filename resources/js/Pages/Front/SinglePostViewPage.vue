<script>
import {defineComponent} from 'vue'

import PostsLayout from "@/Layouts/Front/PostsLayout.vue";

import GalleryForDesktop from "@/Components/Front/SinglePostView/GalleryForDesktop.vue";
import SliderForPhone from "@/Components/Front/SinglePostView/SliderForPhone.vue";

import {FwbCarousel} from 'flowbite-vue';

export default defineComponent({
    name: "SinglePostViewPage",
    components: {
        PostsLayout,
        SliderForPhone,
        GalleryForDesktop,
        FwbCarousel,
    },
    props: {
        post: Object,
        images: Array,
    },
})
</script>

<template>
    <PostsLayout>
        <div class="mt-20 xl:mt-36 px-8 sm:px-12 xl:px-20 2xl:px-28">
            <div class="text-center mx-auto max-w-[900px]">
                <h1 class="mb-10 font-sans font-bold text-2xl sm:text-4xl 2xl:text-5xl">{{ post.data.title }}</h1>
                <p v-if="post.data.description" class="mb-10 font-sans text-justify text-gray-700 font-normal text-sm sm:text-xl 2xl:text-2xl indent-8 mx-auto max-w-[700px]">
                    {{ post.data.description }}
                </p>
                <div>
                    <p v-if="!post.data.place" class="mb-5 text-left font-sans font-medium text-sm 2xl:text-base mx-auto max-w-[700px]">{{ post.data.date }}</p>
                    <p v-if="post.data.place" class="mb-5 text-left font-sans font-medium text-sm 2xl:text-base mx-auto max-w-[700px]">{{ post.data.place }} | {{ post.data.date }}</p>
                </div>
            </div>

            <img class="mx-auto max-h-[600px] xl:max-h-[600px] 2xl:max-h-[750px] mt-16"
                 :src="post.data.thumbnail" alt="">

            <div>
                <p v-html="post.data.content" class="ck-content mt-10 font-sans text-justify text-gray-700 font-normal text-base sm:text-xl 2xl:text-2xl indent-8 mx-auto max-w-[900px]">
                </p>
            </div>

            <div v-if="images.length > 0" class="mt-12 mx-auto xl:hidden max-w-[750px]">
                <SliderForPhone :images="images"></SliderForPhone>
            </div>

            <div v-if="images.length > 0" class="mt-12 max-xl:hidden mx-auto max-w-[900px]">
                <GalleryForDesktop :images="images"></GalleryForDesktop>
            </div>
        </div>
    </PostsLayout>
</template>

<style>

</style>
