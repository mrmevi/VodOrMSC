<script>
import {defineComponent} from 'vue'

import HomeLayout from "@/Layouts/Front/HomeLayout.vue";

import BannerHomeComponent from "@/Components/Front/Home/BannerHomeComponent.vue";
import NewsListHomeComponent from "@/Components/Front/Home/NewsListHomeComponent.vue";
import AboutHomeComponent from "@/Components/Front/Home/AboutHomeComponent.vue";

export default defineComponent({
    name: "HomePage",
    components: {
        HomeLayout,
        BannerHomeComponent,
        NewsListHomeComponent,
        AboutHomeComponent,
    },
    props:{
        posts: Object,
        firstPost: Object,
    },
})
</script>


<template>
    <HomeLayout>
        <BannerHomeComponent></BannerHomeComponent>
        <NewsListHomeComponent :posts="posts" :firstPost="firstPost"></NewsListHomeComponent>
        <AboutHomeComponent></AboutHomeComponent>
    </HomeLayout>
</template>

<style>

</style>
