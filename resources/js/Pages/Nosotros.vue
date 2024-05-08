<template>
    <Navbar />
    <section>
        <img src="/img/carnosotros.jpg" style="width: 100%; height: 600px" />
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
                            MISIÓN
                        </h5>
                        <p>
                            Brindar a nuestros clientes una experiencia
                            excepcional en la adquisición y mantenimiento de
                            vehículos, ofreciendo productos y servicios de la
                            más alta calidad, seguridad y confiabilidad. Nos
                            comprometemos a satisfacer las necesidades de
                            movilidad de nuestros clientes con un enfoque
                            centrado en la excelencia, la innovación y el
                            servicio al cliente.
                        </p>
                    </div>
                </div>
                <img
                    src="/img/mision.png"
                    style="width: 600px; margin-top: 20px"
                />
            </div>
        </section>
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
                    <h5 className="fw-bold fs-4 titulos text-center">VISIÓN</h5>
                    <p>
                        Ser reconocidos como líderes en la industria automotriz,
                        destacándonos por nuestra integridad, compromiso con la
                        calidad y la satisfacción del cliente, así como por
                        nuestra contribución a la movilidad sostenible.
                        Aspiramos a expandir nuestra presencia global y ser un
                        referente en la innovación tecnológica y el desarrollo
                        de soluciones de movilidad inteligente.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section
        class="video d-flex align-items-center justify-content-center"
        style="margin-top: 10px"
    >
        <div class="text-center">
            <p class="fs-1 fw-semibold titulos" style="padding: 20px">
                INNOVACIÓN
            </p>
            <video
                controls
                class="border border-1 border-secondary rounded"
                style="width: 1100px; height: 600px"
            >
                <source src="/img/video.mp4" type="video/mp4" />
            </video>
        </div>
    </section>

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
                        HISTORIA
                    </h5>
                    <p>
                        Hace décadas, un grupo de entusiastas de los automóviles
                        se unió con una visión: crear vehículos excepcionales
                        que desafiaran los límites de la ingeniería y elevaran
                        la experiencia de conducción. Desde entonces, hemos sido
                        líderes en la industria, conocidos por nuestra pasión
                        por la innovación y el rendimiento Nuestros vehículos
                        han conquistado pistas de carreras y corazones de
                        conductores en todo el mundo Hoy, seguimos siendo un
                        símbolo de excelencia y progreso en la industria
                        automotriz, comprometidos con un futuro de movilidad
                        sostenible y emocionante.
                    </p>
                </div>
            </div>
            <img src="/img/historia.png" style="width: 600px; height: 400px" />
        </div>
    </section>
</template>

<script setup>
import Navbar from "@/Pages/Navbar.vue";
</script>
