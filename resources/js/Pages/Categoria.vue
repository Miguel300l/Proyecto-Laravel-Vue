<template>
    <Navbar />
    <div class="row row-cols-1 row-cols-md-3 g-4 mx-3 mt-6">
        <div class="col">
            <div class="card">
                <img src="/img/card1.webp" class="card-img-top" />
                <div class="card-body">
                    <h5 class="card-title" style="text-align: center">
                        Porsche
                    </h5>
                    <p class="card-text" style="text-align: justify">
                        Son reconocidos por su impresionante velocidad y
                        potencia, con motores que pueden generar desde 300 hasta
                        más de 700 caballos de fuerza. Equipados con una
                        variedad de motores, desde boxer de seis cilindros.
                    </p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <img src="/img/card2.webp" class="card-img-top" />
                <div class="card-body">
                    <h5 class="card-title" style="text-align: center">
                        McLaren
                    </h5>
                    <p class="card-text" style="text-align: justify">
                        Destacan por su impresionante velocidad y potencia,
                        gracias a motores de alto rendimiento que pueden generar
                        desde alrededor de 500 hasta más de 800 caballos de
                        fuerza, dependiendo del modelo específico.
                    </p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <img src="/img/card3.webp" class="card-img-top" />
                <div class="card-body">
                    <h5 class="card-title" style="text-align: center">
                        Bugatti
                    </h5>
                    <p class="card-text" style="text-align: justify">
                        Son la personificación del lujo, la velocidad y la
                        exclusividad. Con velocidades máximas que superan los
                        400 km/h y motores que generan más de 1,500 caballos de
                        fuerza, estos vehículos están en la cima del rendimiento
                        automotriz.
                    </p>
                </div>
            </div>
        </div>
    </div>

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
    <div class="p-10"></div>
    <Footer />
</template>

<script setup>
import { useForm } from "@inertiajs/vue3";
import InputError from "@/Components/InputError.vue";
import TextInput from "@/Components/TextInput.vue";
import InputLabel from "@/Components/InputLabel.vue";
import Navbar from "@/Components/Navbar.vue";
import Footer from "@/Components/Footer.vue";
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

const submit = (e) => {
    e.preventDefault();
    form.post(route("categoria.store"));
};
</script>

<style>
.card {
    transition: transform 0.3s ease;
}

.card:hover {
    transform: translateY(-5px);
}

.formulario {
    max-width: 800px;
    margin: 0 auto;
}

.container-form {
    max-width: 800px;
    margin: 0 auto;
    border: 1px solid #0c0a0a;
    padding: 20px;
}
</style>
