<script>
import {defineComponent} from 'vue'
import {Head} from "@inertiajs/vue3";
import AdminHeaderComponent from "@/Components/Admin/AdminHeaderComponent.vue";

export default defineComponent({
    name: "AdminLayout",
    components: {AdminHeaderComponent, Head}
})
</script>

<template>
    <Head>
        <title>Отцы России | Админка</title>
    </Head>
    <AdminHeaderComponent></AdminHeaderComponent>
    <div>
        <slot/>
    </div>
</template>

<style scoped>

</style>
