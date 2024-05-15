<script setup>
import Pagination from "@/Components/Pagination.vue";
import Navbar from "@/Components/Navbar.vue";
import Footer from "@/Components/Footer.vue";

const props = defineProps({
    categorias: {
        type: Object,
    },
});

</script>

<template>
    <Navbar />
    <div class="" style="margin-top: 160px"></div>
    <div
        class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 px-4 md:px-0"
    >
        <div
            v-for="categoria in categorias.data"
            :key="categoria.id"
            class="card-container bg-white overflow-hidden shadow rounded-lg"
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
                <div style="text-align: justify">
                    <p class="text-gray-700 text-base">
                        {{ categoria.contenido }}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-4">
        <Pagination :links="categorias.links" />
    </div>
    <div class="" style="margin-top: -140px"></div>
    <Footer style="margin-top: 200px" />
</template>
<style>
.card-container {
    transition: transform 0.3s ease;
}

.card-container:hover {
    transform: scale(1.05); /* Ajusta el tamaño como desees */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08); /* Efecto de sombra */
}
</style>
