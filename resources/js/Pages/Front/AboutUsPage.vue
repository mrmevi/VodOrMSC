<script>
import {defineComponent} from 'vue'
import AboutUsLayout from "@/Layouts/AboutUsLayout.vue";
import AuthorsAboutUsComponent from "@/Components/AboutUs/AuthorsAboutUsComponent.vue";
import BannerAboutUsComponent from "@/Components/AboutUs/BannerAboutUsComponent.vue";
import DescriptionAboutUsComponent from "@/Components/AboutUs/DescriptionAboutUsComponent.vue";
import DirectionAboutUsComponent from "@/Components/AboutUs/DirectionAboutUsComponent.vue";
import DirectionAboutUsComponentForSm from "@/Components/AboutUs/DirectionAboutUsComponentForSm.vue";

export default defineComponent({
    name: "AboutUsPage",
    components: {
        AboutUsLayout,
        DescriptionAboutUsComponent,
        BannerAboutUsComponent,
        DirectionAboutUsComponent,
        DirectionAboutUsComponentForSm,
        AuthorsAboutUsComponent,
    }
})
</script>

<template>
    <AboutUsLayout>
        <div class="mt-20 xl:mt-36 px-14 xl:px-20 2xl:px-28">
            <DescriptionAboutUsComponent></DescriptionAboutUsComponent>
            <BannerAboutUsComponent></BannerAboutUsComponent>
            <DirectionAboutUsComponent></DirectionAboutUsComponent>
            <AuthorsAboutUsComponent></AuthorsAboutUsComponent>
        </div>
    </AboutUsLayout>
</template>

<style scoped>

</style>
