<script>
import {defineComponent} from 'vue'
import {Link} from "@inertiajs/vue3";
import route from "ziggy-js";

export default defineComponent({
    name: "Footer",
    methods: {route},
    components:{
        Link,
    },
})
</script>

<template>
    <div class="mt-32 lg:mt-64 w-full bg-gray-900">
        <div class="py-20 text-center lg:text-left">
            <div class="lg:flex  lg:space-x-6 xl:space-x-16 3xl:space-x-20 4xl:space-x-24">
                <div class="lg:w-9/12  text-2xl lg:text-xl">
                    <ul class="lg:flex p-11 font-medium bg-gray-800 lg:space-x-8 xl:space-x-16">
                        <li>
                            <Link :href="route('home.page')"
                               class="block py-2 xl:ml-4 2xl:ml-4 text-white rounded">Главная</Link>
                        </li>

                        <li>
                            <Link :href="route('posts.page')"
                               class=" block py-2 text-white rounded">Новости</Link>
                        </li>
                        <li>
                            <Link href="#"
                               class=" block py-2 text-white rounded">Контакты</Link>
                        </li>
                        <li>
                            <Link :href="route('aboutUs.page')"
                               class=" block py-2 text-white rounded">Об организации</Link>
                        </li>
                    </ul>
                </div>
                <div class="flex justify-center mt-4 lg:mt-0">
                    <button type="button" class="rounded-lg px-4 py-1">
                        <img src="../../../assets/images/SocialIconsYouTube.svg" class="h-8" alt="SocialIconsYouTube">
                    </button>
                    <button type="button" class="rounded-lg px-4 py-1 ">
                        <img src="../../../assets/images/SocialIconsTG.svg" class="h-8" alt="SocialIconsTG">
                    </button>
                    <button type="button" class="rounded-lg px-4 py-1 ">
                        <img src="../../../assets/images/SocialIconsVK.svg" class="h-8" alt="SocialIconsVK">
                    </button>
                </div>
            </div>
            <div class="lg:ml-11 xl:ml-16">
                <p class="pt-5 lg:pl- font-sans text-white font-normal text-xl">Почта@mail.ru</p>
                <p class="font-sans text-white font-normal text-xl">Номер телефона</p>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
