<template>
    <footer style="background: #4e4e4e; margin-top: -30px">
        <div className="container-fluid bg-color-blue px-5 pt-5">
            <div className="row">
                <div className="col-lg-5 mt-lg-0">
                    <div className="mx-4 te">
                        <p className=" text-white fs-4 fw-semibold text-center">
                            <img src="img/icon/people-fill.svg" />
                            ¿QUE HACE CARS
                        </p>
                        <p className="text-muted1 fs-6 text-white">
                            Es un proyecto que busca revolucionar la industria
                            automotriz mediante la integración de tecnologías
                            innovadoras y sostenibles.
                        </p>
                    </div>
                </div>
                <div className="col-lg-3 mt-lg-0 mt-5">
                    <p className="fs-4 fw-semibold text-center text-white">
                        <img src="img/icon/arrow.svg" />
                        NAVEGACION
                    </p>
                    <div className="text-muted1 text-center text-white">
                        <ul class="navbar-nav ms-auto mb-2 text-white">
                            <Link
                                :href="route('welcome')"
                            >
                                INICIO
                            </Link>
                            <Link
                                :href="route('nosotros')"
                                >
                                NOSOTROS
                            </Link>
                            <Link
                                :href="route('categoria')"
                                >
                                CATEGORIA
                            </Link>
                            <Link
                                :href="route('contacto')"
                                >
                                CONTACTO
                            </Link>
                            <Link
                                :href="route('login')"
                                >
                                INICIAR SESIÓN
                            </Link>
                        </ul>
                    </div>
                </div>

                <div className="col-lg-4">
                    <div className="ps-3">
                        <p className="fs-4 fw-semibold text-center  text-white">
                            <img src="img/icon/clock.svg" />
                            HORARIO DE ATENCION
                        </p>
                        <p
                            className="d-flex justify-content-between text-muted1 fs-6 text-white"
                        >
                            Lunes a Viernes:
                            <span> 8:00 AM A 4:00 PM </span>
                        </p>
                        <br />
                        <p
                            className="d-flex justify-content-between text-muted1 fs-6 text-white"
                        >
                            Sabados y Domingos:
                            <span> 10:00 AM A 4:00 PM </span>
                        </p>
                    </div>
                </div>
            </div>
            <br />
            <div className="d-flex flex-wrap justify-content-center pb-3">
                <a
                    href="https://www.facebook.com/LosCochesColombia"
                    target="_blank"
                    className="text-decoration-none"
                >
                    <img src="/img/icon/facebook.svg" />
                </a>

                <a
                    href="https://twitter.com/LosCochesCol"
                    target="_blank"
                    className="ms-4 text-decoration-none"
                >
                    <img src="/img/icon/twitter.svg" />
                </a>

                <a
                    href="https://www.instagram.com/loscochescol/"
                    target="_blank"
                    className="ms-4 text-decoration-none"
                >
                    <img src="/img/icon/instagram.svg" />
                </a>

                <a
                    href="https://api.whatsapp.com/send/?phone=573168305339&text&type=phone_number&app_absent=0"
                    target="_blank"
                    className="ms-4 text-decoration-none"
                >
                    <img src="/img/icon/whatsapp.svg" />
                </a>
            </div>
        </div>
    </footer>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
</script>
