<template>
    <Head title="Categorias" />
    <AuthenticatedLayout>
        <template #header> CATEGORIAS </template>

        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 border-b border-gray-200">
                <h1
                    style="
                        text-align: center;
                        margin-top: 60px;
                        font-size: 2rem;
                    "
                >
                    ACTUALIZA TUS CATEGORIAS
                </h1>
                <div class="flex justify-center">
                    <form class="w-full sm:w-2/3 md:w-1/2 lg:w-1/3 xl:w-1/4 py-5 space-y-4" @submit="submit">
                        <div>
                            <InputLabel for="titulo" value="TITULO" />
                            <TextInput
                                id="titulo"
                                type="text"
                                class="mt-1 block w-full"
                                v-model="form.titulo"
                                placeholder="Titulo"
                            />
                            <InputError
                                class="mt-2"
                                :message="form.errors.titulo"
                            />
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
                            <InputError
                                class="mt-2"
                                :message="form.errors.contenido"
                            />
                        </div>
                        <div>
                            <img
                                v-if="form.imagen"
                                class="h-16"
                                :src="form.imagen"
                            />
                        </div>
                        <div>
                            <InputLabel for="avatar" value="AVATAR" />
                            <FileInput name="avatar" @change="onSelectAvatar" />
                            <InputError
                                class="mt-2"
                                :message="form.errors.avatar"
                            />
                        </div>
                        <div class="flex justify-center">
                            <PrimaryButton @click="submitWithAlert">
                                Actualizar categoria
                            </PrimaryButton>
                            <div v-if="showAlert" class="mt-4 text-green-600">
                                Categoria actualizada
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, useForm, usePage } from "@inertiajs/vue3";
import InputError from "@/Components/InputError.vue";
import TextInput from "@/Components/TextInput.vue";
import InputLabel from "@/Components/InputLabel.vue";
import FileInput from "@/Components/FileInput.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import Swal from 'sweetalert2';

const page = usePage();
const categoria = page.props.categoria;

const initialValues = {
    titulo: categoria.titulo,
    contenido: categoria.contenido,
    avatar: null,
    imagen: `/storage/${categoria.avatar}`,
};

const form = useForm(initialValues);
let showAlert = false;

const onSelectAvatar = (e) => {
    const file = e.target.files[0];
    form.avatar = file;
    if (file) {
        const reader = new FileReader();
        reader.onload = () => {
            form.imagen = reader.result;
        };
        reader.readAsDataURL(file);
    } else {
        form.imagen = "";
    }
};

const submit = async (e) => {
    e.preventDefault();
    const formData = new FormData();
    formData.append("titulo", form.titulo);
    formData.append("contenido", form.contenido);
    if (form.avatar) {
        formData.append("avatar", form.avatar);
    }

    try {
        await form.post(route("categoria.update", categoria));
        showAlert = true;
        setTimeout(() => {
            showAlert = false;
        }, 3000);
        Swal.fire({
            icon: 'success',
            title: 'Categoria actualizada',
            showConfirmButton: false,
            timer: 1500
        });
    } catch (error) {
        console.error("Error al enviar el formulario:", error);
    }
};
</script>
