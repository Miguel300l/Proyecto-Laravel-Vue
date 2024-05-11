<script setup>
import Navbar from "@/Components/Navbar.vue";
import Footer from "@/Components/Footer.vue";
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
    <Head title="Welcome" />
    <div class="" style="margin-top: -24px; background-color: #f5f3f0">
        <Navbar> </Navbar>
        <div class="" style="margin-top: -8px">
            <div
                id="carouselExampleControlsNoTouching"
                class="carousel slide"
                data-bs-touch="false"
                data-bs-interval="false"
            >
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img
                            src="/img/car1.webp"
                            style="width: 160%; height: 600px"
                        />
                    </div>
                    <div class="carousel-item">
                        <img
                            src="/img/car2.jpg"
                            style="width: 2800px; height: 600px"
                        />
                    </div>
                    <div class="carousel-item">
                        <img
                            src="/img/car3.jpg"
                            style="width: 2800px; height: 600px"
                        />
                    </div>
                </div>
                <button
                    class="carousel-control-prev"
                    type="button"
                    data-bs-target="#carouselExampleControlsNoTouching"
                    data-bs-slide="prev"
                >
                    <span
                        class="carousel-control-prev-icon"
                        aria-hidden="true"
                    ></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button
                    class="carousel-control-next"
                    type="button"
                    data-bs-target="#carouselExampleControlsNoTouching"
                    data-bs-slide="next"
                >
                    <span
                        class="carousel-control-next-icon"
                        aria-hidden="true"
                    ></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

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

        <section className="container-fluid py-5">
            <div
                className="row d-flex flex-wrap justify-content-center align-items-center"
            >
                <div className="col-md-6">
                    <div
                        className="d-flex flex-column fs-5 nosotros"
                        style="text-align: justify"
                    >
                        <h5 className="fw-bold fs-4 titulos text-center">
                            QUE HACE CARS
                        </h5>
                        <p>
                            Es un proyecto que busca revolucionar la industria
                            automotriz mediante la integración de tecnologías
                            innovadoras y sostenibles. Desde su concepción, se
                            enfoca en desarrollar vehículos que no solo sean
                            eficientes en términos de consumo de combustible y
                            emisiones, sino que también ofrezcan una experiencia
                            de conducción segura, cómoda y conectada.
                        </p>
                    </div>
                </div>
                <img
                    src="/img/mision.png"
                    style="width: 600px; margin-top: 20px"
                />
            </div>
        </section>

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
<div class="p-4"></div>
        <Footer></Footer>
    </div>
</template>
<style>
/* Estilo para el menú hamburguesa */
.navbar-toggler-input {
    display: none;
}

.navbar-toggler {
    cursor: pointer;
    display: block;
    position: relative;
    padding: 10px 15px;
}

.navbar-toggler-icon {
    display: block;
    width: 30px;
    height: 3px;
    background-color: #000;
    transition: all 0.3s ease;
}

.navbar-toggler-icon::before,
.navbar-toggler-icon::after {
    content: "";
    display: block;
    width: 100%;
    height: 100%;
    background-color: #000;
    position: relative;
    justify-content: center;
    transition: all 0.3s ease;
}

.navbar-toggler-icon::before {
    top: -10px;
}

.navbar-toggler-icon::after {
    bottom: -10px;
}

.navbar-toggler-input:checked + .navbar-toggler .navbar-toggler-icon {
    background-color: transparent;
}

.navbar-toggler-input:checked + .navbar-toggler .navbar-toggler-icon::before {
    transform: rotate(45deg);
    top: 0;
}

.navbar-toggler-input:checked + .navbar-toggler .navbar-toggler-icon::after {
    transform: rotate(-45deg);
    bottom: 0;
}

@media (max-width: 993px) {
    .navbar-collapse {
        display: none;
    }

    .navbar-toggler-input:checked + .navbar-toggler + .navbar-collapse {
        display: block;
        text-align: center;
    }
}


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
