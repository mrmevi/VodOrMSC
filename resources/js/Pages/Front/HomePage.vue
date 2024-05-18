<script>
import {defineComponent} from 'vue'
import HomeLayout from "@/Layouts/HomeLayout.vue";
import AboutUs from "@/Components/Home/AboutUs.vue";
import NewsListAd from "@/Components/Home/NewsListAd.vue";
import BannerFrontAd from "@/Components/Home/BannerFrontAd.vue";
import AboutUsAs from "@/Components/Home/AboutUsAs.vue";
import AuthorsAs from "@/Components/Home/AuthorsAs.vue";

export default defineComponent({
    name: "HomePage",
    components: {
        HomeLayout,
        BannerFrontAd,
        NewsListAd,
        AboutUs,
        AboutUsAs,
        AuthorsAs,
    },
    props:{
        posts: Object,
        firstPost: Object,
    },
})
</script>


<template>
    <HomeLayout>
        <BannerFrontAd></BannerFrontAd>
        <NewsListAd :posts="posts" :firstPost="firstPost"></NewsListAd>
        <AboutUsAs></AboutUsAs>
        <AuthorsAs></AuthorsAs>
    </HomeLayout>
</template>

<style>

</style>
