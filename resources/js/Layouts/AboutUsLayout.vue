<script>
import {defineComponent} from 'vue'
import {Head} from "@inertiajs/vue3";
import HeaderFrontAd from "@/Components/HeaderFrontAd.vue";
import FooterAs from "@/Components/FooterAs.vue";

export default defineComponent({
    name: "AboutUsLayout",
    components: {
        HeaderFrontAd,
        FooterAs,
        Head,
    }
})
</script>


<template>
    <Head>
        <title>ВОД ОР по МСК | О Нас</title>
    </Head>
    <HeaderFrontAd></HeaderFrontAd>
    <div>
        <slot/>
    </div>
    <FooterAs></FooterAs>
</template>

<style>

</style>
