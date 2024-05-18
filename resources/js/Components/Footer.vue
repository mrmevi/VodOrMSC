<script>
import {defineComponent} from 'vue'

export default defineComponent({
    name: "Footer"
})
</script>

<template>
    <div class="mt-64 w-full bg-gray-900">
        <div class="max-w-[1750px] flex space-x-60 py-20 mx-auto">
            <div class="w-9/12">
                <h1 class="pb-7 text-white">ЛОГОТИП</h1>
                <ul class="flex flex-col p-11 font-medium bg-gray-800 space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
                    <li>
                        <a href="#"
                           class=" block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Главная</a>
                    </li>
                    <li>
                        <a href="#"
                           class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Новости</a>
                    </li>
                    <li>
                        <a href="#"
                           class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Представители</a>
                    </li>
                    <li>
                        <a href="#"
                           class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Контакты</a>
                    </li>
                    <li>
                        <a href="#"
                           class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Об
                            организации</a>
                    </li>
                </ul>
                <p class="pt-5 font-sans text-white font-normal text-sm">Почта@mail.ru</p>
                <p class="font-sans text-white font-normal text-sm">Номер телефона</p>
            </div>
            <div class="flex">
                <button type="button" class="rounded-lg px-4 py-1 ">
                    <img src="../../assets/images/SocialIconsYouTube.svg" class="h-8" alt="SocialIconsYouTube">
                </button>
                <button type="button" class="rounded-lg px-4 py-1 ">
                    <img src="../../assets/images/SocialIconsTG.svg" class="h-8" alt="SocialIconsTG">
                </button>
                <button type="button" class="rounded-lg px-4 py-1 ">
                    <img src="../../assets/images/SocialIconsVK.svg" class="h-8" alt="SocialIconsVK">
                </button>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
