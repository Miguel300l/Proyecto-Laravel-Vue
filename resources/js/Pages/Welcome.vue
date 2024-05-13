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

<div class="p-4"></div>
        <Footer></Footer>
    </div>
</template>
<script setup>
import Navbar from "@/Components/Navbar.vue";
import Footer from "@/Components/Footer.vue";

</script>

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

</style>
