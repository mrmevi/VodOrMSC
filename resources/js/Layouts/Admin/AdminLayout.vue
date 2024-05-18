<script>
import {defineComponent} from 'vue'
import {Head} from "@inertiajs/vue3";
import HeaderFront from "@/Components/HeaderFront.vue";
import HeaderAdmin from "@/Components/Admin/HeaderAdmin.vue";

export default defineComponent({
    name: "AdminLayout",
    components: {HeaderAdmin, HeaderFront, Head}
})
</script>

<template>
    <Head>
        <title>Отцы России | Админка</title>
    </Head>
    <HeaderAdmin></HeaderAdmin>
    <div>
        <slot/>
    </div>
</template>

<style scoped>

</style>
