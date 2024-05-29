<script>
import {defineComponent} from 'vue'
import {Link, useForm} from "@inertiajs/vue3";
import route from "ziggy-js";

import AdminLayout from "@/Layouts/Admin/AdminLayout.vue";

import ClassicEditor from "@ckeditor/ckeditor5-build-classic";
import CKEditor from '@ckeditor/ckeditor5-vue';

export default defineComponent({
    name: "PostEditPage",
    methods: {route},
    components: {
        Link,
        AdminLayout,
        ckeditor: CKEditor.component
    },
    props: {
        post: Object,
        postImageUrl: String,
    },
    data() {
        return {
            editor: ClassicEditor,
            editorConfig: {
                mediaEmbed:{previewsInData:true},
            }
        };
    },
    setup(props) {
        const form = useForm({
            title: props.post.title,
            description: props.post.description,
            content: props.post.content,
            place: props.post.place,
            date: props.post.date,
        });

        function update() {
            form.put(route('posts.update', props.post.id))
        }

        return {form, update};
    },
})
</script>

<template>
    <AdminLayout>
        <div class="max-w-[1600px] mx-auto">
            <div class="mt-8 flex justify-between">
                <p class="font-sans font-bold text-3xl ">Редактирование поста</p>
                <Link :href="route('posts.index')">
                    <button type="button"
                            class="text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Вернуться назад
                    </button>
                </Link>
            </div>
            <hr class="h-px bg-gray-300 border-0">
            <div class="mt-12">
                <form @submit.prevent="update">
                    <div>
                        <div class="mb-8">
                            <label for="default-input"
                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                            <span v-if="form.errors.title" class="text-sm text-red-600"> {{ form.errors.title }} </span>
                            <input v-model="form.title" type="text" id="title"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/2 p-2.5 ">
                        </div>
                        <div class="mb-8">
                            <label for="default-input"
                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                            <span v-if="form.errors.description" class="text-sm text-red-600"> {{ form.errors.description }} </span>
                            <input v-model="form.description" type="text" id="description"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/2 p-2.5 ">
                        </div>

                        <div class="mb-8">
                            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Content</label>
                            <span v-if="form.errors.content" class="text-sm text-red-600"> {{ form.errors.content }} </span>
                            <ckeditor :editor="editor" v-model="form.content" :config="editorConfig"></ckeditor>
                        </div>

<!--                        <div class="mb-8">
                            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Content</label>
                            <span v-if="form.errors.content" class="text-sm text-red-600"> {{ form.errors.content }} </span>
                            <textarea v-model="form.content" id="content" rows="4"
                                      class="block p-2.5 w-1/2 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                      placeholder="Write your thoughts here..."></textarea>
                        </div>-->

                        <div class="mb-8">
                            <label for="default-input"
                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Place</label>
                            <span v-if="form.errors.place" class="text-sm text-red-600"> {{ form.errors.place }} </span>
                            <input v-model="form.place" type="text" id="place"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/2 p-2.5 ">
                        </div>
                        <div class="mb-8">
                            <label for="default-input"
                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date</label>
                            <span v-if="form.errors.date" class="text-sm text-red-600"> {{ form.errors.date }} </span>
                            <input v-model="form.date" type="date" id="date" value="2024-01-01" min="2018-01-01"/>
                        </div>
                        <button type="submit" class="text-white font-sans font-sm rounded-[0.5rem] bg-blue-900 px-6 py-4">
                            Изменить пост
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </AdminLayout>
</template>

<style scoped>

</style>
