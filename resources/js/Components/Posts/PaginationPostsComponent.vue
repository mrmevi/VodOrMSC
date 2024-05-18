<script>
import {defineComponent} from 'vue'
import {Link} from "@inertiajs/vue3";

export default defineComponent({
    name: "PaginationPostsComponent",
    components:{
        Link,
    },
    props:{
        links: Object
    },
    methods: {
        paginationCheck() {
            return this.links.prev != null || this.links.next != null;
        },
    },
})
</script>

<template>

    <div v-if="paginationCheck()">
        <div class="justify-center flex space-x-6">
            <button class="font-sans font-normal text-xl pointer-events-none">
                <Link v-bind:class="{'font-bold text-2xl pointer-events-auto': links.prev}"
                    :href="links.prev">
                    < Назад
                </Link>
            </button>
            <button class="font-sans font-normal text-xl pointer-events-none">
                <Link v-bind:class="{'font-bold text-2xl pointer-events-auto': links.next}"
                    :href="links.next">
                    Вперед >
                </Link>
            </button>
        </div>
    </div>


</template>

<style scoped>

</style>
