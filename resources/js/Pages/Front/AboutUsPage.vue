<script>
import {defineComponent} from 'vue'

import AboutLayout from "@/Layouts/Front/AboutLayout.vue";

import DescriptionAboutComponent from "@/Components/Front/About/DescriptionAboutComponent.vue";
import BannerAboutComponent from "@/Components/Front/About/BannerAboutComponent.vue";
import DirectionAboutComponent from "@/Components/Front/About/DirectionAboutComponent.vue";
import AuthorsAboutComponent from "@/Components/Front/About/AuthorsAboutComponent.vue";

export default defineComponent({
    name: "AboutUsPage",
    components: {
        AboutLayout,
        DescriptionAboutComponent,
        BannerAboutComponent,
        DirectionAboutComponent,
        AuthorsAboutComponent,
    }
})
</script>

<template>
    <AboutLayout>
        <div class="mt-20 xl:mt-36 px-8 sm:px-14 xl:px-20 2xl:px-28">
            <DescriptionAboutComponent></DescriptionAboutComponent>
            <BannerAboutComponent></BannerAboutComponent>
            <DirectionAboutComponent></DirectionAboutComponent>
            <AuthorsAboutComponent></AuthorsAboutComponent>
        </div>
    </AboutLayout>
</template>

<style scoped>

</style>
