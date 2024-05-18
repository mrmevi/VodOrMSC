<template>
    <Carousel  v-bind="settings" :breakpoints="breakpoints">
        <Slide v-for="(img, id) in images" :key="images.length">
            <div class="carousel__item "><img alt="image" :src="img.url"></div>
        </Slide>

        <template #addons>
            <Pagination />
            <Navigation />
        </template>
    </Carousel>
</template>

<script>
import { defineComponent, ref } from 'vue'
import { Carousel, Navigation, Slide, Pagination } from 'vue3-carousel'
import 'vue3-carousel/dist/carousel.css'
export default defineComponent({
    name: 'ExamplePagination',
    props:{
        images: Array,
    },
    components: {
        Pagination,
        Carousel,
        Slide,
        Navigation,
    },
    data: () => ({
        // carousel settings
        settings: {
            itemsToShow: 1,
            snapAlign: 'center',
        },
        // breakpoints are mobile first
        // any settings not specified will fallback to the carousel settings
        breakpoints: {
            // 700px and up
            700: {
                itemsToShow: 1,
                snapAlign: 'center',
            },
        },
    }),
})
</script>
