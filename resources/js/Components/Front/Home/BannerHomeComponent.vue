<script>
import {defineComponent} from 'vue'
import {Link} from "@inertiajs/vue3";
import route from "ziggy-js";

export default defineComponent({
    name: "BannerFront",
    methods: {route},
    components:{
        Link,
    }
})
</script>

<template>
    <section class="bg-center bg-no-repeat lg:bg-[url(/resources/assets/images/Banner3.jpg)] max-h-[740px] lg:bg-gray-200 bg-blend-multiply">
       <div class="max-lg:mt-8 lg:flex lg:mx-12 xl:mx-16 2xl:mx-28 3xl:mx-36 4xl:mx-48 items-center lg:space-x-8">
           <div class="max-lg:hidden mx-auto pt-8 items-center justify-center sm:max-xl:w-1/2">
               <img src="../../../../assets/images/BigLogoPNG.png" alt="">
           </div>
           <div class="2xl:pl-24 text-center mx-auto w-1/2 lg:py-52">
               <div class="2xl:w-fit sm:max-lg:mt-12 xl:mx-auto">
                   <h1 class="mb-2 2xl:text-left sm:text-2xl mb:text-3xl text-blue-700 font-extrabold tracking-tight leading-none">Всеросийсcкое общественное движение</h1>
                   <h1 class="mb-2 sm:text-4xl mb:text-6xl text-blue-700 font-extrabold tracking-tight leading-none">Отцы России</h1>
                   <h1 class="mb-4 sm:text-2xl mb:text-3xl text-blue-700 font-extrabold tracking-tight leading-none">по Московской области</h1>
               </div>
               <p class="mb-8 text-justify text-lg font-normal text-gray-900 indent-5">Движение призвано объединить инициативных, неравнодушных мужчин со всей России для привлечения внимания к проблеме ответственного отцовства и оказанию реальной помощи нашим детям.</p>
               <div class="flex sm:max-xl:mx-auto flex-col space-y-4 w-fit">
                   <Link :href="route('aboutUs.page')" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-800 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                       Подробнее
                       <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                           <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                       </svg>
                   </Link>
               </div>
           </div>
       </div>
    </section>
</template>

<style scoped>

</style>
