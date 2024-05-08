<script setup>
import { Head, Link } from "@inertiajs/vue3";
import Navbar from "@/Pages/Navbar.vue";
import Footer from "@/Pages/Footer.vue";
defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});

function handleImageError() {
    document.getElementById("screenshot-container")?.classList.add("!hidden");
    document.getElementById("docs-card")?.classList.add("!row-span-1");
    document.getElementById("docs-card-content")?.classList.add("!flex-row");
    document.getElementById("background")?.classList.add("!hidden");
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
</style>
