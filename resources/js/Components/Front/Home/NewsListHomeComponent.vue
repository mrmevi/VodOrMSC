<script>
import {defineComponent} from 'vue'
import {Link} from "@inertiajs/vue3";
import route from "ziggy-js";

export default defineComponent({
    name: "NewsList",
    methods: {route},
    components: {Link},
    props: {
        posts: Object,
        firstPost: Object,
    },
})
</script>

<template>
    <div class="px-8 sm:px-14 xl:px-20 2xl:px-28 lg:flex lg:space-x-16 xl:space-x-24 2xl:space-x-36 mt-32 lg:mt-64">


        <div v-if="firstPost" class="lg:w-1/2">
            <h1 class="pb-8 font-sans font-bold text-center text-2xl sm:text-2xl md:text-2xl lg:text-3xl xl:text-4xl">
                Последнее событие</h1>

            <div class="pb-5 pt-8 px-8 border-2 border-gray-200">


                <div class="">
                    <img class="mx-auto max-h-[600px] lg:max-h-[600px]" :src="firstPost.data.thumbnail" alt="">
                </div>
                <div>
                    <p v-if="!firstPost.data.place" class="mb-2 font-sans font-medium text-sm">{{ firstPost.data.date }}</p>
                    <p v-if="firstPost.data.place" class="mb-2 font-sans font-medium text-sm">{{ firstPost.data.place }} | {{ firstPost.data.date }}</p>
                </div>
                <h2 class="pt-4 font-sans font-bold text-2xl">{{ firstPost.data.title }}</h2>
                <p v-if="firstPost.data.description" class="pt-5 text-justify font-sans font-normal text-base indent-8">
                    {{ firstPost.data.description }}
                </p>
                <div class="mt-12 flex flex-col space-y-4 w-fit">
                    <Link :href="route('posts.view', firstPost.data.slug)"
                          class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-800 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300">
                        Подробнее
                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </Link>
                </div>
            </div>
        </div>

        <div v-if="posts" class="relative pt-8 lg:pt-0 lg:w-1/2">
            <h1 class="pb-8 font-sans font-bold text-center text-2xl sm:text-2xl md:text-2xl lg:text-3xl xl:text-4xl">
                Все новости</h1>

            <div v-for="(post, id) in posts.data" :key="id"
                 class="hover:bg-gray-200 mb-4 sm:ml-11 sm:px-2 py-2.5">
                <div>
                    <p v-if="!post.place" class="mb-2 font-sans font-medium text-sm">{{ post.date }}</p>
                    <p v-if="post.place" class="mb-2 font-sans font-medium text-sm">{{ post.place }} | {{ post.date }}</p>
                </div>
                <h2 class="text-clip overflow-hidden ... max-h-[100px] mb-2 sm:ml-12 font-sans font-bold text-2xl">
                    <Link :href="route('posts.view', post.slug)">{{ post.title }}</Link>
                </h2>
                <p v-if="post.description" class="text-clip overflow-hidden ... max-h-[100px] 3xl:mr-8 font-sans font-normal text-base">
                    {{ post.description }}
                </p>
            </div>

            <div class="lg:hidden flex sm:max-xl:mx-auto flex-col space-y-4 w-fit">
                <Link :href="route('posts.page')"
                      class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-800 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    Ко всем
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                         fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </Link>
            </div>
            <Link :href="route('posts.page')"
                  class="max-lg:hidden text-center block sm:absolute sm:bottom-0 sm:right-0 text-indigo-800">перейти
                ко всем
            </Link>
        </div>


        <span v-if="!firstPost">Постов нет</span>


    </div>
</template>

<style scoped>

</style>
