<script>
import {defineComponent} from 'vue'

export default defineComponent({
    name: "NewsList",
})
</script>

<template>
    <div class="max-w-[1750px] max-h-[830px] mt-64 flex mx-auto space-x-32">
        <div class="w-1/2">
            <h1 class="pb-8 font-sans font-bold text-4xl">Последние событие</h1>
            <div class="pb-5 pt-8 px-8 border-2 border-gray-200">
                <img class="mx-auto" src="../../../assets/images/lastNews.jpg" alt="">
                <p  class="pt-8 font-sans font-medium text-sm">Гос. дума РФ | 24.02.2001</p>
                <h2 class="pt-4 font-sans font-bold text-2xl">Название мероприятия</h2>
                <p class="pt-5 text-justify font-sans font-normal text-base indent-8">
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                </p>
                <div class="mt-12 flex flex-col space-y-4 w-fit">
                    <a href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-800 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300">
                        Подробнее
                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="relative w-1/2">
            <h1 class="pb-8 font-sans font-bold text-4xl">Все новости</h1>
            <div v-for="i in 4" class="max-w-[550px] max-h-[160px] hover:bg-gray-200 mb-8 ml-11 px-2 py-2.5">
                <p class="mb-2 font-sans font-medium text-sm">Гос. дума РФ | 24.02.2001</p>
                <h2 class="mb-4 ml-12 font-sans font-bold text-2xl">Название новости</h2>
                <p class="font-sans font-normal text-base">
                    Duis aute irure dolor in reprehenderit in voluptate velit esse reprehenderit in voluptate velit esse cillu cillum dolore.
                </p>
            </div>
            <a href="#" class="block absolute bottom-0 right-0 text-indigo-800">перейти ко всем</a>
        </div>
    </div>
</template>

<style scoped>

</style>
