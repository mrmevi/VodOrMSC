<script>
import {defineComponent} from 'vue'

export default defineComponent({
    name: "BannerAboutUsCompontnt"
})
</script>

<template>
    <div class="mt-12 max-w-[1280px] mx-auto">
        <img  class="mx-auto" src="../../../assets/images/AboutUsBanner.jpg" alt="">
        <div class="bg-gray-100 xl:flex">
            <div class="my-8 xl:my-20 ml-4 xl:ml-12 max-xl:mr-12 xl:w-1/2">
                <p class="mb-6 font-sans text-gray-700 font-semibold text-sm ">НАШИ ЦЕЛИ</p>
                <h1 class="mb-6 font-sans font-bold text-2xl">18 ноября 2021 года, состоялась учредительная конференция по созданию Всероссийского общественного движения «Отцы России»</h1>
                <p class="font-sans text-gray-700 text-justify font-normal text-base indent-8">Наши основыне цели сосредоточены на темах наставничества, межнациональных отношений, профориентации. Важнейшей целью отцовской работы считаем вопросы безопасности детства, поэтому продолжим совместную работу с Уполномоченными по правам ребёнка в регионах и главным омбудсменом нашей страны. В ближайшее время в стране будет готовиться Всероссийский съезд отцов, где и будет озвучена полная программа действий данного движения.</p>
            </div>
            <div class="my-8 xl:my-20 ml-4 xl:ml-12 mr-12 xl:w-1/2">
                <p class="mb-6 font-sans text-gray-700 font-semibold text-sm ">НАШИ НАПРАВЛЕНИЯ</p>
                <h1 class="mb-6 font-sans font-bold text-2xl">В созданном движении «Отцы России» мы будем работать по 10 основным направлениям на всероссийском и региональном уровнях:</h1>
                <p class="font-sans text-gray-700 text-justify font-normal text-base indent-8">
                    Наставничество;
                    Спорт и продвижение здорового образа жизни;
                    Сохранение культурного наследия и исторической памяти;
                    Военно-патриотическое воспитание «Отец солдата»;
                    Социология и семья;
                    Безопасность семьи и детства;
                    Реабилитация и коррекция детей с зависимостями;
                    Адресная помощь;
                    Медиапроект «Отец России»;
                    Научно-исследовательская работа.
                </p>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
