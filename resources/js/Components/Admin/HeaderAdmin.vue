<script>
import {defineComponent} from 'vue'
import {Link} from "@inertiajs/vue3";
import route from "ziggy-js";

export default defineComponent({
    name: "HeaderAdmin",
    methods: {route},
    components:{
        Link,
    }
})
</script>

<template>
    <div class="bg-gray-900">
        <div class="max-w-[1600px] mx-auto">
            <div class="py-4 flex ">
                <div class="text-white w-1/12 hover:text-blue-600">
                    <a target="_blank" :href="route('home.page')" >К сайту</a>
                </div>
                <div class="text-white space-x-5">
                    <Link class="hover:text-blue-600" :href="route('admin.main')">Главная</Link>
                    <Link class="hover:text-blue-600" :href="route('posts.index')">Все посты</Link>
                    <Link class="hover:text-blue-600" :href="route('posts.create')">Добавить пост</Link>
                </div>
            </div>
        </div>
    </div>

</template>

<style scoped>

</style>
