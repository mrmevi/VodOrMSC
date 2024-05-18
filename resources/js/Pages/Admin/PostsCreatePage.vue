<script>
import {defineComponent, ref} from 'vue'
import AdminLayout from "@/Layouts/Admin/AdminLayout.vue";
import {Link, useForm} from "@inertiajs/vue3";
import route from "ziggy-js";
import {FwbFileInput} from "flowbite-vue";

import ClassicEditor from "@ckeditor/ckeditor5-build-classic";
import CKEditor from '@ckeditor/ckeditor5-vue';


export default defineComponent({
    name: "PostsAdmin",
    components: {
        AdminLayout,
        FwbFileInput,
        ckeditor: CKEditor.component
    },
    data() {
        return {
            editor: ClassicEditor,
            editorConfig: {
                mediaEmbed:{previewsInData:true},
            }
        };
    },
    setup() {
        const previewImage = ref(null);

        const handleFileChange = (event) => {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = () => {
                    previewImage.value = reader.result;
                };
                reader.readAsDataURL(file);
            } else {
                previewImage.value = null;
            }
        };

        const form = useForm({
            title: null,
            description: null,
            content: null,
            place: null,
            date: null,
            thumbnail: null,
            files:  ref([])
        });


        function store() {
            form.post(route('posts.store'))
        }

        return {
            form,
            store,
            previewImage,
            handleFileChange,
        };
    },
})
</script>

<script setup>

</script>



<template>
    <AdminLayout>
        <div class="max-w-[1600px] mx-auto">
            <p class="mt-6 font-sans font-bold text-3xl ">Добавление поста</p>
            <hr class="mt-2 h-px bg-gray-300 border-0">
            <div class="mt-12">
                <form @submit.prevent="store">
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

                        <div class="flex items-center space-x-6 pb-8">
                            <label class="block">
                                <input type="file" name="thumbnail" id="thumbnail" @input="form.thumbnail = $event.target.files[0]" @change="handleFileChange" class="block w-full text-sm text-slate-500
                                    file:mr-4 file:py-2 file:px-4
                                    file:rounded-full file:border-0
                                    file:text-sm file:font-semibold
                                    file:bg-violet-50 file:text-blue-700
                                    hover:file:bg-violet-100
                                "/>
                            </label>
                            <div v-if="previewImage" class="shrink-0">
                                <img :src="previewImage" class="h-36 w-36 object-cover " alt="">
                            </div>
                            <span v-if="form.errors.thumbnail" class="text-sm text-red-600"> {{ form.errors.thumbnail }} </span>
                        </div>

                        <fwb-file-input class="my-8 max-w-[500px]" v-model="form.files" dropzone multiple />

                        <button type="submit" class="text-white font-sans font-sm rounded-[0.5rem] bg-blue-900 px-6 py-4">
                            Добавить пост
                        </button>

                    </div>
                </form>
            </div>
        </div>
    </AdminLayout>
</template>

<style scoped>

</style>
