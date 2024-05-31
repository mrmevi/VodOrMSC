<script>
import {defineComponent} from 'vue'
import {Link} from "@inertiajs/vue3";
import route from "ziggy-js";

export default defineComponent({
    name: "AboutUs",
    methods: {route},
    components: {Link}
})
</script>

<template>
    <div class="px-8 sm:px-14 xl:px-20 2xl:px-28 mt-32 lg:mt-64 xl:flex xl:space-x-24 2xl:space-x-36">
        <div class="xl:w-1/2 ">
            <img class="mx-auto" src="../../../../assets/images/BigLogo.jpg" alt="">
        </div>
        <div class="xl:w-1/2 pb-5 pt-8 px-8 border-2 border-gray-200 xl:border-0 xl:pb-0 xl:pt-0 xl:px-0">
            <h1 class="text-center font-sans font-bold text-2xl sm:text-4xl">Об организации</h1>
            <h2 class="pt-24 font-sans text-justify font-bold text-xl sm:text-3xl indent-8">В созданном движении «Отцы России» мы продолжим начатое дело и будем работать по основным направлениям на всероссийском и региональном уровнях.</h2>
            <p class="pt-20 font-sans text-justify font-normal text-sm sm:text-xl indent-8">Укрепление отцовства - наша общая задача в деле сохранения нашего народа и любимой страны. В обществе уже назрела необходимость возвращения отцовству былого авторитета основанного на мужестве нести ответственность. И никто, кроме самих отцов, этого не сделает.</p>
            <p class="font-sans text-justify font-normal text-sm sm:text-xl indent-8">Программу действий приняли все единодушно. Особые акценты прозвучали на темах наставничества, межнациональных отношений, профориентации. Важнейшим направлением отцовской работы считаем вопросы безопасности детства, поэтому продолжим совместную работу с Уполномоченными по правам ребёнка в регионах и главным омбудсменом нашей страны. В ближайшее время в стране будет готовиться Всероссийский съезд отцов, где и будет озвучена полная программа действий данного движения.</p>
            <div class="mt-8 max-lg:flex justify-center items-center max-lg:mx-auto">
                <Link :href="route('aboutUs.page')" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-800 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300">
                    Подробнее
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </Link>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
