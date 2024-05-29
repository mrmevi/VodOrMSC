<script>
import {defineComponent} from 'vue'
import {Head} from "@inertiajs/vue3";

import HeaderComponent from "@/Components/Front/HeaderComponent.vue";
import FooterComponent from "@/Components/Front/FooterComponent.vue";

export default defineComponent({
    name: "PostsLayout",
    components: {
        HeaderComponent,
        FooterComponent,
        Head,
    }
})
</script>

<template>
    <Head>
        <title>ВОД ОР по МСК | Новости</title>
    </Head>
    <HeaderComponent></HeaderComponent>
    <div>
        <slot/>
    </div>
    <FooterComponent></FooterComponent>
</template>

<style>

</style>
