<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Pagination from '@/Components/Pagination.vue';
import { Head, Link } from '@inertiajs/vue3';

const props = defineProps({
    categorias: {
        type: Object
    }
});
</script>

<template>
    <Head title="Categorias" />

    <AuthenticatedLayout>
        <template #header>
            CATEGORIAS
        </template>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4" style="width: 1200px;">
            <div v-for="categoria in categorias.data" :key="categoria.id" class="bg-white overflow-hidden shadow rounded-lg">
                <img class="h-60 w-full object-cover" :src="`/storage/${categoria.avatar}`" alt="Categoria Image">
                <div class="px-6 py-4">
                    <div style="text-align: center">
                        <div class="font-bold text-xl mb-2">{{ categoria.titulo }}</div>
                    </div>
                    <div style="text-align: justify;">
                        <p class="text-gray-700 text-base">{{ categoria.contenido }}</p>
                    </div>
                </div>
                <div class="px-6 pt-4 pb-4 flex justify-between" style="justify-content: center;">
                    <Link
                    :href="route('categoria.edit', categoria)"
                    class="text-sm text-gray-600 underline hover:text-gray-900"
                >
                     <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full mr-2">Editar</button>
                </Link>
                     <Link
                     :href="route('categorias.destroy', categoria)" method="delete"
                     class="text-sm text-gray-600 underline hover:text-gray-900"
                     >
                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">Eliminar</button>
            </Link>
                </div>
            </div>
        </div>

        <div class="mt-4">
            <pagination :links="categorias.links" />
        </div>
    </AuthenticatedLayout>
</template>
<style>
    .overflow-hidden {
        overflow: hidden;
    }

    .flex {
        display: flex;
    }

    .flex-col {
        flex-direction: column;
    }

    .justify-between {
        justify-content: space-between;
    }

    .h-full {
        height: 100%;
    }
</style>
