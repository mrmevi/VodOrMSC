<template>
    <div class="">
        <Carousel id="gallery" :items-to-show="1" :wrap-around="false" v-model="currentSlide">

            <Slide v-for="(img) in images" :key="images.length">
                <div class="carousel__item  max-h-[600px]"><img alt="" :src="img.url"></div>
            </Slide>
        </Carousel>


        <Carousel
            id="thumbnails"
            :items-to-show="4"
            :wrap-around="false"
            v-model="currentSlide"
            ref="carousel"
        >
            <Slide v-for="(img, length) in images" :key="images.length">
                <div class="carousel__item m-4 " @click="slideTo(length)"><img class="" :alt="length" :src="img.url">
                </div>
            </Slide>
        </Carousel>
    </div>
</template>

<script>
import {defineComponent} from 'vue'
import {Carousel, Navigation, Slide} from 'vue3-carousel'

import 'vue3-carousel/dist/carousel.css'

export default defineComponent({
    name: 'Gallery',
    components: {
        Carousel,
        Slide,
        Navigation,
    },
    props: {
        images: Array,
    },
    data: () => ({
        currentSlide: 0,
    }),
    methods: {
        slideTo(val) {
            this.currentSlide = val
        },
    },
})
</script>
