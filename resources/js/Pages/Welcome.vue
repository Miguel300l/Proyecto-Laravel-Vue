<template>
    <Head title="Welcome" />
    <div class="" style="margin-top: -24px; background-color: #f5f3f0">
        <Navbar />
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

        <section className="container-fluid py-5">
            <div
                className="row d-flex flex-wrap justify-content-center align-items-center"
            >
                <img src="/img/vision.png" style="width: 600px" />
                <div className="col-md-6">
                    <div
                        className="d-flex flex-column fs-5 nosotros"
                        style="text-align: justify"
                    >
                        <h5 className="fw-bold fs-4 titulos text-center">
                            VISIÓN
                        </h5>
                        <p>
                            Ser reconocidos como líderes en la industria
                            automotriz, destacándonos por nuestra integridad,
                            compromiso con la calidad y la satisfacción del
                            cliente, así como por nuestra contribución a la
                            movilidad sostenible. Aspiramos a expandir nuestra
                            presencia global y ser un referente en la innovación
                            tecnológica y el desarrollo de soluciones de
                            movilidad inteligente.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section className="container-fluid mt-2">
            <div
                className="row d-flex flex-wrap justify-content-center align-items-center"
            >
                <div className="col-md-6">
                    <div
                        className="d-flex flex-column fs-5 nosotros"
                        style="text-align: justify"
                    >
                        <h5 className="fw-bold fs-4 titulos text-center">
                            HISTORIA
                        </h5>
                        <p>
                            Hace décadas, un grupo de entusiastas de los
                            automóviles se unió con una visión: crear vehículos
                            excepcionales que desafiaran los límites de la
                            ingeniería y elevaran la experiencia de conducción.
                            Desde entonces, hemos sido líderes en la industria,
                            conocidos por nuestra pasión por la innovación y el
                            rendimiento Nuestros vehículos han conquistado
                            pistas de carreras y corazones de conductores en
                            todo el mundo Hoy, seguimos siendo un símbolo de
                            excelencia y progreso en la industria automotriz,
                            comprometidos con un futuro de movilidad sostenible
                            y emocionante.
                        </p>
                    </div>
                </div>
                <img
                    src="/img/historia.png"
                    style="width: 600px; height: 400px"
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
