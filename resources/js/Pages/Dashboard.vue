<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import { Head, useForm  } from '@inertiajs/vue3';
import InputError from "@/Components/InputError.vue";
import TextInput from "@/Components/TextInput.vue";
import InputLabel from "@/Components/InputLabel.vue";
import FileInput from "@/Components/FileInput.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";

const initialvalues = {
    titulo: "",
    contenido: "",
    avatar: null,
};

const form = useForm(initialvalues);

const onSelecAvatar = (e) => {
    const files = e.target.files;
    if (files.length) {
        form.avatar = files[0];
    }
};

const submit = (e) =>{
    e.preventDefault();
    form.post(route('categoria.store'))
}
</script>

<template>
    <Head title="Categorias" />

    <AuthenticatedLayout>
        <template #header>
            CATEGORIAS
        </template>

        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 border-b border-gray-200">

    <h1 style="text-align: center; margin-top: 60px; font-size: 2rem">
        CREA TUS CATEGORIAS
    </h1>
    <div class="flex justify-center">
        <form class="w-1/3 py-5 space-y-4" @submit="submit">
            <div>
                <InputLabel for="titulo" value="TITULO" />
                <TextInput
                    id="titulo"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.titulo"
                    placeholder="Titulo"
                />
                <InputError class="mt-2" :message="form.errors.titulo" />
            </div>

            <div>
                <InputLabel for="contenido" value="CONTENIDO" />
                <TextInput
                    id="contenido"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.contenido"
                    placeholder="Caracteristicas"
                />
                <InputError class="mt-2" :message="form.errors.contenido" />
            </div>

            <div>
                <InputLabel for="avatar" value="AVATAR" />
                <FileInput name="avatar" @change="onSelecAvatar" />
                <InputError class="mt-2" :message="form.errors.avatar" />
            </div>
            <div class="flex justify-center">
                <PrimaryButton> Crear categoria </PrimaryButton>
            </div>
        </form>
    </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
