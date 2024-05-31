<script>
import {defineComponent} from 'vue'
import {Link} from "@inertiajs/vue3";
import route from "ziggy-js";

export default defineComponent({
    name: "HeaderFront",
    methods: {
        route,
        toggleBurgerMenu: function() {
            this.isActiveBurgerMenu = !this.isActiveBurgerMenu;
        }
    },
    data() {
        return {
            isActiveBurgerMenu: true
        }
    },

    components: {
        Link,
    },

})
</script>



<template>
    <nav class="bg-gray-900 w-full z-20 top-0 start-0 border-b border-gray-200">

        <div class="mx-6 lg:mx-8 xl:mx-10 2xl:mx-16 3xl:mx-24 sm:flex sm:flex-wrap sm:items-center sm:justify-between py-2">

            <Link :href="route('home.page')" class="items-center max-sm:justify-center max-sm:flex space-x-3 rtl:space-x-reverse">
                <img class="h-10" src="../../../assets/images/LogoHeader.png" alt="logoHeader">
            </Link>

            <div class="sm:flex md:order-2 sm:space-x-4 lg:space-x-3 rtl:space-x-reverse">

                <button @click="toggleBurgerMenu()"
                        class="hidden sm:flex lg:hidden items-center justify-center p-2 w-10 h-10 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 ">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                    </svg>
                </button>

                <div class="mm:pt-4 sm:pt-0 flex items-center justify-center gap-5">
                    <button type="button" class="rounded-lg py-1 ">
                        <a href="https://www.youtube.com/@VodORMSC" target="_blank">
                            <img src="../../../assets/images/SocialIconsYouTube.svg" class="h-8"
                                 alt="SocialIconsYouTube">
                        </a>
                    </button>
                    <button type="button" class="rounded-lg py-1 ">
                        <Link href="#">
                            <img src="../../../assets/images/SocialIconsTG.svg" class="h-8" alt="SocialIconsTG">
                        </Link>
                    </button>
                    <button type="button" class="rounded-lg py-1 ">
                        <a href="https://vk.com/ro_vod_otcy_rossii_msk" target="_blank">
                            <img src="../../../assets/images/SocialIconsVK.svg" class="h-8" alt="SocialIconsVK">
                        </a>
                    </button>
                </div>

                <div class="sm:hidden flex items-center justify-center pt-3">
                    <button @click="toggleBurgerMenu()"
                            class="sm:hidden flex items-center justify-center w-10 h-10 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 ">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                        </svg>
                    </button>
                </div>


            </div>

            <div class=" items-center justify-between hidden md:max-lg:hidden w-full md:flex md:w-auto md:order-1"
                 id="navbar-sticky">
                <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-900 space-x-4 xl:space-x-6 2xl:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
                    <li>
                        <Link :href="route('home.page')"
                              class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 ">
                            Главная
                        </Link>
                    </li>
                    <li>
                        <Link :href="route('posts.page')"
                              class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">
                            Новости
                        </Link>
                    </li>
                    <li>
                        <a href="#"
                           class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500">Контакты</a>
                    </li>
                    <li>
                        <Link :href="route('aboutUs.page')"
                              class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">
                            Об организации
                        </Link>
                    </li>
                </ul>
            </div>

        </div>

        <div v-bind:class="{hidden: isActiveBurgerMenu}" class="w-full" >
            <ul class="sm:flex flex-col text-center text-xl font-medium rounded-lg bg-gray-900">
                <li>
                    <Link :href="route('home.page')" class="block py-2 px-3 text-white rounded">Главная</Link>
                </li>
                <li>
                    <Link :href="route('posts.page')" class="block py-2 px-3 text-white rounded">Новости</Link>
                </li>
                <li>
                    <a href="#" class="block py-2 px-3 text-white rounded">Контакты</a>
                </li>
                <li>
                    <Link :href="route('aboutUs.page')" class="block py-2 px-3 text-white rounded">Об организации</Link>
                </li>
            </ul>
        </div>

    </nav>


</template>

<style scoped>

</style>
