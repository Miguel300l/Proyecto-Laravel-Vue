<template>
    <Head title="Log in" />
    <Navbar />
    <div style="margin-top: 100px"></div>
    <GuestLayout class="contenedor">
        <Link href="/" class="flex items-center justify-center">
            <ApplicationLogo class="h-20 w-20 fill-current text-gray-500" />
        </Link>

        <div v-if="form.errors.error || form.errors.success" class="mb-4 text-sm font-medium" :class="{'text-red-600': form.errors.error, 'text-green-600': form.errors.success}">
            {{ form.errors.error || form.errors.success }}
        </div>

        <!-- Agregamos un div con condicional v-if para mostrar el overlay -->
        <div v-if="isLoading" class="absolute inset-0 bg-gray-300 opacity-50 z-50 flex justify-center items-center">
            <svg class="animate-spin h-10 w-10 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A8.004 8.004 0 0112 4V0C6.486 0 2 4.486 2 10h4v7.291zm9.131-11.423A8.003 8.003 0 0116 20v-4c3.077 0 5.624-2.217 6.169-5.131H15.13z"></path>
            </svg>
        </div>

        <form @submit.prevent="submit">
            <div>
                <InputLabel for="email" value="Email" />
                <TextInput
                    id="email"
                    type="email"
                    class="mt-1 block w-full"
                    v-model="form.email"
                    autofocus
                    autocomplete="username"
                    required
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
                    autocomplete="current-password"
                />
                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div
                class="mt-4 flex justify-between"
                style="justify-content: center"
            >
                <Link
                    :href="route('register')"
                    class="text-sm text-gray-600 underline hover:text-gray-900"
                >
                    Registrarse
                </Link>
            </div>

            <div class="mt-6">
                <PrimaryButton
                    class="w-full"
                    :class="{ 'opacity-25': form.processing }"
                    :disabled="form.processing"
                >
                    Iniciar sesión
                </PrimaryButton>
            </div>
        </form>
    </GuestLayout>
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
import Swal from 'sweetalert2';

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    email: "",
    password: "",
    remember: false,
});
let isLoading = false;
const submit = async () => {
    try {
        isLoading = true;
        const response = await form.post(route("login"), {
            onFinish: () => {
                if (!form.errors.error) {
                    // Mostrar alerta de éxito solo si no hay errores
                    Swal.fire({
                        icon: 'success',
                        title: 'Inicio de sesión exitoso',
                        text: 'Bienvenido',
                    });
                }
                form.reset("password");
            },
        });
    } catch (error) {
        // Mostrar alerta de error
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Hubo un problema al iniciar sesión. Por favor, inténtalo de nuevo más tarde.',
        });
        console.error("Error al iniciar sesión:", error);
    }
    finally {
        isLoading = false; // Ocultar el loading una vez que se ha procesado el formulario
    }
};
</script>

<style>
.contenedor {
    width: 100%;
    height: 100vh;
    background-image: url("https://hips.hearstapps.com/hmg-prod/images/bugatti-chiron-super-sport-300-2-1632494813.jpg");
    background-size: cover;
    background-position: center;
}
</style>
