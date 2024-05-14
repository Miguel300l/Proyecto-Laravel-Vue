<template>
    <Head title="Log in" />
    <Navbar />
    <GuestLayout class="contenedor">
        <Link href="/" class="flex items-center justify-center">
            <ApplicationLogo class="h-20 w-20 fill-current text-gray-500" />
        </Link>

        <div v-if="form.errors.error || form.errors.success" class="mb-4 text-sm font-medium" :class="{'text-red-600': form.errors.error, 'text-green-600': form.errors.success}">
            {{ form.errors.error || form.errors.success }}
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

const submit = async () => {
    try {
        const response = await form.post(route("login"), {
            onFinish: () => {
                if (!form.errors.error) {
                    // Mostrar alerta de éxito solo si no hay errores
                    Swal.fire({
                        icon: 'success',
                        title: 'Inicio de sesión exitoso',
                        text: 'Bienvenido de vuelta',
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
