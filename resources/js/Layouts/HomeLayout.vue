<script>
import {defineComponent} from 'vue'
import {Head} from "@inertiajs/vue3";
import HeaderFront from "@/Components/HeaderFront.vue";
import Footer from "@/Components/Footer.vue";
import HeaderFrontAd from "@/Components/HeaderFrontAd.vue";
import FooterAs from "@/Components/FooterAs.vue";

export default defineComponent({
    name: "HomeLayout",
    components:{
        Head,
        HeaderFront,
        Footer,
        HeaderFrontAd,
        FooterAs,
    },
})
</script>




<template>
    <Head>
        <title>ВОД ОР по МСК | Главная</title>
    </Head>
    <HeaderFrontAd></HeaderFrontAd>
    <div>
        <slot/>
    </div>
    <FooterAs></FooterAs>
</template>

<style>

</style>
