<script>
import {defineComponent} from 'vue'
import {useForm} from "@inertiajs/vue3";
import route from "ziggy-js";
import {Link} from "@inertiajs/vue3";

export default defineComponent({
    methods: {route},
    components: {
        Link
    },
    setup() {
        const form = useForm({
            email: null,
            password: null,
            password_confirmation: null,
        });

        function login() {
            form.post(route('user.login'))
        }

        return {form, login};
    },
    name: "Login"
})
</script>

<template>
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <div class="flex justify-between">
                    <h1 class=" text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Авторизация
                    </h1>
                    <Link :href="route('home.page')" class="text-2xl font-semibold text-blue-700 dark:text-white">
                        ОТЦЫ РОССИИ
                    </Link>
                </div>
                <form @submit.prevent="login" class="space-y-4 md:space-y-6">
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Введите email</label>
                        <input v-model="form.email" type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@mail.ru">
                        <span v-if="form.errors.email" class="text-sm text-red-600"> {{ form.errors.email }} </span>
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Введите пароль</label>
                        <input v-model="form.password" type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <div>
                        <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Повторите пароль</label>
                        <input v-model="form.password_confirmation" type="password" name="password_confirmation" id="password_confirmation" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <span v-if="form.errors.password" class="text-sm text-red-600"> {{ form.errors.password }} </span>
                    </div>
<!--                    <div v-if="$page.props.flash.error" class="text-sm text-red-600" role="alert">
                        {{$page.props.flash.error}}
                    </div>-->
                    <button type="submit" class="w-full text-blue-600 bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Войти</button>
                    <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                        Нет аккаунта? <Link :href="route('user.create')" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Зарегистрироваться</Link>
                    </p>
                </form>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
