<template>
    <Head title="Categorias" />

    <AuthenticatedLayout>
        <template #header>
            CATEGORIAS
        </template>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 px-4 md:px-0">
            <div v-for="categoria in categorias.data" :key="categoria.id" class="card-container bg-white overflow-hidden shadow rounded-lg">
                <img class="h-60 w-full object-fill" :src="`/storage/${categoria.avatar}`" alt="Categoria Image" />
                <div class="px-6 py-4">
                    <div style="text-align: center">
                        <div class="font-bold text-xl mb-2">
                            {{ categoria.titulo }}
                        </div>
                    </div>
                    <div style="text-align: justify">
                        <p class="text-gray-700 text-base">
                            {{ categoria.contenido }}
                        </p>
                    </div>
                </div>
                <div class="px-6 pt-4 pb-4 flex justify-between" style="justify-content: center">
                    <Link :href="route('categoria.edit', categoria)" class="text-sm text-gray-600 underline hover:text-gray-900">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full mr-2">Editar</button>
                    </Link>
                    <Link :href="route('categorias.destroy', categoria)" method="delete" class="text-sm text-gray-600 underline hover:text-gray-900">
                        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full" @click="mostrarMensaje()">Eliminar</button>
                    </Link>
                </div>
            </div>
        </div>

        <div class="mt-4">
            <Pagination :links="categorias.links" />
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Pagination from '@/Components/Pagination.vue';
import { Head, Link } from '@inertiajs/vue3';
import Swal from 'sweetalert2';


const props = defineProps({
    categorias: {
        type: Object
    }
});

const mostrarMensaje = () => {
    Swal.fire({
        title: 'Categoría eliminada',
        text: 'La categoría ha sido eliminada exitosamente.',
        icon: 'success'
    });
};

</script>

<style>
.card-container {
    transition: transform 0.3s ease;
}

.card-container:hover {
    transform: scale(1.05); /* Ajusta el tamaño como desees */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08); /* Efecto de sombra */
}
</style>
