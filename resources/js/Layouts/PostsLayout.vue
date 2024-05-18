<script>
import {defineComponent} from 'vue'
import {Head} from "@inertiajs/vue3";
import FooterAs from "@/Components/FooterAs.vue";
import HeaderFrontAd from "@/Components/HeaderFrontAd.vue";

export default defineComponent({
    name: "PostsLayout",
    components: {
        FooterAs,
        HeaderFrontAd,
        Head,
    }
})
</script>


<template>
    <Head>
        <title>ВОД ОР по МСК | Новости</title>
    </Head>
    <HeaderFrontAd></HeaderFrontAd>
    <div>
        <slot/>
    </div>
    <FooterAs></FooterAs>
</template>

<style>

</style>
