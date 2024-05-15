<template>
    <div>
        <Head title="Register" />
        <Navbar />
        <div style="margin-top: 108px"></div>
        <GuestLayout class="contenedor">
            <Link href="/" class="flex items-center justify-center">
                <ApplicationLogo class="h-20 w-20 fill-current text-gray-500" />
            </Link>
             <!-- Agregamos un div con condicional v-if para mostrar el overlay -->
        <div v-if="isLoading" class="absolute inset-0 bg-gray-300 opacity-50 z-50 flex justify-center items-center">
            <svg class="animate-spin h-10 w-10 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A8.004 8.004 0 0112 4V0C6.486 0 2 4.486 2 10h4v7.291zm9.131-11.423A8.003 8.003 0 0116 20v-4c3.077 0 5.624-2.217 6.169-5.131H15.13z"></path>
            </svg>
        </div>

            <form @submit.prevent="submit">
                <div>
                    <InputLabel for="name" value="Name" />
                    <TextInput
                        id="name"
                        type="text"
                        class="mt-1 block w-full"
                        v-model="form.name"
                        required
                        autofocus
                        autocomplete="name"
                    />
                    <InputError class="mt-2" :message="form.errors.name" />
                </div>

                <div class="mt-3">
                    <InputLabel for="email" value="Email" />
                    <TextInput
                        id="email"
                        type="email"
                        class="mt-1 block w-full"
                        v-model="form.email"
                        required
                        autocomplete="username"
                    />
                    <InputError class="mt-2" :message="form.errors.email" />
                </div>

                <div class="mt-3">
                    <InputLabel for="password" value="Password" />
                    <TextInput
                        id="password"
                        type="password"
                        class="mt-1 block w-full"
                        v-model="form.password"
                        required
                        autocomplete="new-password"
                    />
                    <InputError class="mt-2" :message="form.errors.password" />
                </div>

                <div class="mt-3">
                    <InputLabel
                        for="password_confirmation"
                        value="Confirm Password"
                    />
                    <TextInput
                        id="password_confirmation"
                        type="password"
                        class="mt-1 block w-full"
                        v-model="form.password_confirmation"
                        required
                        autocomplete="new-password"
                    />
                    <InputError
                        class="mt-2"
                        :message="form.errors.password_confirmation"
                    />
                </div>
                <div class="mt-4 flex justify-center">
                    <Link
                        :href="route('login')"
                        class="text-sm text-gray-600 underline hover:text-gray-900"
                    >
                        Iniciar sesión
                    </Link>
                </div>
                <div
                    class="mt-4 flex flex-col items-end"
                    style="justify-content: center"
                >
                    <PrimaryButton
                        class="w-full"
                        :class="{ 'opacity-25': form.processing || loading }"
                        :disabled="form.processing || loading"
                    >
                        <!-- Mostrar el texto "Registrarse" o el indicador de carga -->
                        <span v-if="!loading">Registrarse</span>
                        <svg
                            v-if="loading"
                            class="animate-spin h-5 w-5 mr-3 border-gray-500 border-2 rounded-full"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                        >
                            <circle
                                class="opacity-25"
                                cx="12"
                                cy="12"
                                r="10"
                                stroke="currentColor"
                                stroke-width="4"
                            />
                            <path
                                class="opacity-75"
                                fill="currentColor"
                                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A8.014 8.014 0 014.709 12H2c0 3.86 2.821 7.068 6.491 7.682l-.991-2.391zM12 20c1.3 0 2.514-.312 3.585-.854l-.992-2.39A6.03 6.03 0 0014 15.291V12h-4v7zm6-7.682A8.014 8.014 0 0121.291 12H22c0-3.86-2.821-7.068-6.491-7.682l.991 2.391zM19.582 5.146l-2.39.992A6.03 6.03 0 0014 8.709V12h4V5.999h-.418z"
                            />
                        </svg>
                    </PrimaryButton>
                </div>
            </form>
        </GuestLayout>


    </div>
</template>

<script setup>
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import GuestLayout from "@/Layouts/GuestLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import Navbar from "@/Components/Navbar.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";

const form = useForm({
    name: "",
    email: "",
    password: "",
    password_confirmation: "",
    terms: false,
});

let loading = false;

const submit = async () => {
    try {
        loading = true; // Habilitar el estado de carga

        await form.post(route("register"), {
            onFinish: () => {
                form.reset("password", "password_confirmation");
                loading = false; // Cambiar el estado de carga después de completar la solicitud
            },
        });
    } catch (error) {
        // Manejo de errores
        console.error("Error al enviar el formulario:", error);
        loading = false; // Asegúrate de cambiar el estado de carga en caso de error
    }
};
</script>

<style scoped>
.contenedor {
    width: 100%;
    height: 100vh;
    background-image: url("https://hips.hearstapps.com/hmg-prod/images/bugatti-chiron-super-sport-300-2-1632494813.jpg");
    background-size: cover;
    background-position: center;
}
</style>
