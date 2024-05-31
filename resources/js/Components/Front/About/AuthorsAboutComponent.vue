<script>
import {defineComponent} from 'vue'

export default defineComponent({
    name: "AuthorsAboutUsComponent"
})
</script>

<template>
    <div class="sm:px-14 xl:px-20 2xl:px-28 mt-32 lg:mt-64">
        <h1 class="pb-12 text-center font-sans font-bold text-2xl">Представители организации</h1>
        <div class="grid grid-cols-1 lg:grid-cols-2 2xl:grid-cols-3 gap-4">
            <div class="mx-auto mb-8 xl:mb-0 bg-gray-200 py-10 px-4 sm:px-12 text-center max-w-[400px] max-h-[500px]">
                <img class="rounded-full" src="../../../../assets/images/Authors/Habyzov.jpg" alt="">
                <h2 class="pt-2 font-sans font-bold text-xl sm:text-2xl">Хабузов Алексей Владимирович</h2>
                <p class="pt-2 font-sans font-normal text-sm">Председатель Всероссийского общественного движения "Отцы
                    России" по Московской области</p>
            </div>
            <div class="mx-auto mb-8 xl:mb-0 bg-gray-200 py-10 px-4 sm:px-12 text-center max-w-[400px] max-h-[500px]">
                <img class="rounded-full" src="../../../../assets/images/Authors/Usaev2.png" alt="">
                <h2 class="pt-2 font-sans font-bold text-xl sm:text-2xl">Исаев Дмитрий Сергеевич</h2>
                <p class="pt-2 font-sans font-normal text-sm ">Заместитель председателя Всероссийского общественного
                    движения "Отцы России" по Московской области</p>
            </div>
            <div class="mx-auto mb-8 xl:mb-0 bg-gray-200 py-10 px-4 sm:px-12 text-center max-w-[400px] max-h-[500px]">
                <img class="rounded-full" src="../../../../assets/images/Authors/Myxcuev2.png" alt="">
                <h2 class="pt-2 font-sans font-bold text-xl sm:text-2xl">Мухсиев Александр Георгиевич</h2>
                <p class="pt-2 font-sans font-normal text-sm">Заместитель председателя Всероссийского общественного
                    движения "Отцы России" по Московской области</p>
            </div>
            <div class="mx-auto mb-8 xl:mb-0 bg-gray-200 py-10 px-4 sm:px-12 text-center max-w-[400px] max-h-[500px]">
                <img class="rounded-full" src="../../../../assets/images/Authors/Shlyev2.png" alt="">
                <h2 class="pt-2 font-sans font-bold text-xl sm:text-2xl">Шлюев Денис Александрович</h2>
                <p class="pt-2 font-sans font-normal text-sm">Заместитель председателя Всероссийского общественного
                    движения "Отцы России" по Московской области</p>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
