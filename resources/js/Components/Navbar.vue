<template>
    <Head title="Navbar" />
    <div>
        <header>
            <!-- Navbar con botón hamburguesa -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-color-blue p-3 fixed-top" id="menu" style="background-color: #4e4e4e;">
                <img src="/img/logo1.png" alt="img_logo" width="170px">
                <input type="checkbox" id="toggle-menu" class="navbar-toggler-input" />
                <label for="toggle-menu" class="navbar-toggler">
                    <span class="navbar-toggler-icon"></span>
                </label>
                <div class="navbar-collapse">
                    <Link v-if="$page.props.auth.user"></Link>

                    <template v-else>
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-white">
                            <Link :href="route('welcome')" class="rounded-md px-3 py-2">INICIO</Link>
                            <Link :href="route('nosotros')" class="rounded-md px-3 py-2">NOSOTROS</Link>
                            <Link :href="route('categoria')" class="rounded-md px-3 py-2">CATEGORIA</Link>
                            <Link :href="route('contacto')" class="rounded-md px-3 py-2">CONTACTO</Link>
                            <Link :href="route('login')" class="rounded-md px-3 py-2">INICIAR SESIÓN</Link>
                        </ul>
                    </template>
                </div>
            </nav>
        </header>
    </div>
</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3';
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
        content: '';
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
