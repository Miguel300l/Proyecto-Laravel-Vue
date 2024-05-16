<template>
    <Head title="Categorias" />

    <AuthenticatedLayout>
        <template #header> CATEGORÍAS </template>

        <div class="mt-4 mb-4">
            <input
                type="text"
                v-model="busqueda"
                placeholder="Buscar categorías..."
                class="p-2 border rounded-md w-full"
            />
        </div>

        <div
            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-1 px-2 md:px-0"
            style="margin-left: 30px;"
        >
            <div
                v-for="categoria in categoriasFiltradas"
                :key="categoria.id"
                class="card-container bg-white overflow-hidden shadow rounded-lg"
                style="margin-right: 30px; margin-bottom: 40px; position: relative;"
            >
                <img
                    class="h-60 w-full object-fill"
                    :src="`/storage/${categoria.avatar}`"
                    alt="Categoria Image"
                />
                <div class="px-6 py-4">
                    <div style="text-align: center">
                        <div class="font-bold text-xl mb-2">
                            {{ categoria.titulo }}
                        </div>
                    </div>
                    <div style="text-align: justify;">
                        <p class="text-gray-700 text-base">
                            {{ categoria.contenido }}
                        </p>
                    </div>
                    <div style="margin-top: 60px;"></div>
                </div>
                <div
                    class="card-actions flex justify-center absolute bottom-4 left-0 right-0"
                >
                    <Link
                        :href="route('categoria.edit', categoria)"
                        class="text-sm text-gray-600 underline hover:text-gray-900"
                    >
                        <button
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-full mr-2" style="margin-right: 30px;"
                        >
                            Editar
                        </button>
                    </Link>
                    <Link
                        :href="route('categorias.destroy', categoria)"
                        method="delete"
                        class="text-sm text-gray-600 underline hover:text-gray-900"
                    >
                        <button
                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full"
                            @click="mostrarMensaje()"
                        >
                            Eliminar
                        </button>
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
import { ref, computed } from "vue";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import Pagination from "@/Components/Pagination.vue";
import { Head, Link } from "@inertiajs/vue3";
import Swal from "sweetalert2";

const props = defineProps({
    categorias: {
        type: Object,
    },
});

const busqueda = ref("");

const categoriasFiltradas = computed(() => {
    return props.categorias.data.filter((categoria) => {
        const titulo = categoria.titulo.toLowerCase();
        const contenido = categoria.contenido.toLowerCase();
        const busquedaLower = busqueda.value.toLowerCase();
        return titulo.includes(busquedaLower) || contenido.includes(busquedaLower);
    });
});

const mostrarMensaje = () => {
    Swal.fire({
        title: "Categoría eliminada",
        text: "La categoría ha sido eliminada exitosamente.",
        icon: "success",
        allowOutsideClick: false
    });
};
</script>

