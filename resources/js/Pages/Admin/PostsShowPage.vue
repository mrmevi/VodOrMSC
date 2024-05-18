<script>
import {defineComponent} from 'vue'
import AdminLayout from "@/Layouts/Admin/AdminLayout.vue";
import {Link} from "@inertiajs/vue3";
import route from "ziggy-js";

export default defineComponent({
    name: "PostShowPage",
    props: {
        posts: Object
    },
    components: {
        AdminLayout,
        Link,
    },
    methods:{
        edit(slug) {
            this.$inertia.get(route('posts.edit', slug))
        },
        destroy(id) {
            if (confirm('Точно блять?')) {
                this.$inertia.delete(route('posts.destroy', id))
            }
        },
    },
})
</script>

<template>
    <AdminLayout>
        <div class="mt-16 max-w-[1600px] mx-auto">

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Title
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Desc
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Content...
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Place
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Date
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Edite
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Del
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(post, id) in posts.data" :key="id"
                            class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <p class="truncate ... max-w-[350px]"> {{post.title}}</p>
                            </th>
                            <td class="px-6 py-4">
                                <p class="truncate ... max-w-[350px]">{{post.description}}</p>
                            </td>
                            <td class="px-6 py-4">
                                <p class="truncate ... max-w-[350px]">{{post.content}}</p>
                            </td>
                            <td class="px-6 py-4">
                                {{post.place}}
                            </td>
                            <td class="px-6 py-4">
                                {{post.date}}
                            </td>
                            <td class="px-6 py-4">
                                <Link @click="edit(post.slug)" href="" class="font-medium text-blue-600 hover:underline">Edit</Link>
                            </td>
                            <td class="px-6 py-4">
                                <Link @click="destroy(post.id)" href="" class="font-medium text-red-600 hover:underline">Del</Link>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </AdminLayout>
</template>

<style scoped>

</style>
