<script>
import {defineComponent} from 'vue'

export default defineComponent({
    name: "Authors"
})
</script>

<template>
    <div class="mt-64 max-w-[1750px] max-h-[516px] mx-auto">
        <h1 class="pb-10 text-center font-sans font-bold text-4xl">Представители организации</h1>
        <div class="flex space-x-12">
            <div v-for="i in 4" class="bg-gray-200 py-10 px-12 text-center max-w-[400px] max-h-[420px]">
                <img class="rounded-full" src="../../../assets/images/Autor.jpg" alt="">
                <h2 class="pt-2 font-sans  text-nowrap font-bold text-2xl">Пупкин Иван Валисьевич</h2>
                <p class="font-sans  font-normal text-sm indent-8">Председатель палаты министров</p>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
