<template>
 <Navbar />
    <h1 style="margin-top: 150px; text-align: center; font-size: 2rem;">CONTACTANOS</h1>
    <div class="container" id="body">
        <div class="card">
            <div class="imgBx">
                <img
                    src="/img/telefono.png"
                    style="width: 100px; margin-left: 84px"
                />
            </div>
            <div class="content">
                <h2>TELEFONO</h2>
                <br />
                <p style="text-align: center">3208207193</p>
                <p style="text-align: justify">
                    Marca el número y únete a la conversación que impulsará
                    nuestro proyecto de autos hacia adelante.
                </p>
            </div>
        </div>

        <div class="card">
            <div class="imgBx">
                <img
                    src="/img/email.png"
                    style="width: 100px; margin-left: 84px"
                />
            </div>
            <div class="content">
                <h2>EMAIL</h2>
                <br />
                <p style="text-align: justify">
                    atencionalcliente@gmail.com<br />
                    Envía un correo electrónico y sé parte del emocionante mundo
                    de los autos. Comparte tus ideas, preguntas o propuestas
                    para impulsar este proyecto aún más lejos.
                </p>
            </div>
        </div>

        <div class="card">
            <div class="imgBx">
                <img
                    src="/img/direccion.png"
                    style="width: 100px; margin-left: 84px"
                />
            </div>
            <div class="content">
                <h2>DIRECCIÓN</h2><br>
                <p style="text-align: justify;">
                    Calle 67N 28-09 Lomas <br>
                    Dirígete a nuestra ubicación y sumérgete en un mundo de emoción automotriz.
                </p>
            </div>
        </div>
    </div>
    <div class="mt-10"></div>

<Footer />
</template>

<script setup>
import Navbar from '@/Components/Navbar.vue';
import Footer from "@/Components/Footer.vue";
</script>
<style>
* {
    margin: 0;
    padding: 0;
    font-family: "Poppins", sans-serif;
}

#body {
    display: flex;
    justify-content: center;
    align-items: center;
}

.container {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    padding: 30px;
}

.container .card {
    max-width: 300px;
    width: 400px;
    height: 340px;
    background: #ffffff;
    margin: 15px;
    padding: 20px 15px;
    display: flex;
    flex-direction: column;
    transition: 0.3s ease-in-out;
}

.container .card .imgBx {
    width: 100%;
    height: auto;
}

.container .card .imgBx img {
    max-width: 100%;
    border-radius: 4px;
}

.container .card .content {
    padding: 10px 15px;
    text-align: center;
    color: #111;
    visibility: hidden;
    opacity: 0;
    transition: 0.3s ease-in-out;
}

.container .card:hover .content {
    visibility: visible;
    opacity: 1;
    margin-top: 0;
}
</style>
