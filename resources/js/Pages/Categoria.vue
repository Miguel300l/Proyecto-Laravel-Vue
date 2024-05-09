<template>
      <Navbar />
      <div class="row row-cols-1 row-cols-md-3 g-4 mx-3 mt-6">
        <div class="col">
          <div class="card">
            <img src="/img/card1.webp" class="card-img-top" />
            <div class="card-body">
              <h5 class="card-title" style="text-align: center">Titulo</h5>
              <p class="card-text" style="text-align: justify">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Architecto, rem, porro similique accusantium at dicta corrupti
                dignissimos repudiandae in quaerat delectus, ut fuga assumenda
                ipsum iste ratione enim necessitatibus laborum.
              </p>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <img src="/img/card2.webp" class="card-img-top" />
            <div class="card-body">
              <h5 class="card-title" style="text-align: center">Titulo</h5>
              <p class="card-text" style="text-align: justify">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Architecto, rem, porro similique accusantium at dicta corrupti
                dignissimos repudiandae in quaerat delectus, ut fuga assumenda
                ipsum iste ratione enim necessitatibus laborum.
              </p>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <img src="/img/card3.webp" class="card-img-top" />
            <div class="card-body">
              <h5 class="card-title" style="text-align: center">Titulo</h5>
              <p class="card-text" style="text-align: justify">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Architecto, rem, porro similique accusantium at dicta corrupti
                dignissimos repudiandae in quaerat delectus, ut fuga assumenda
                ipsum iste ratione enim necessitatibus laborum.
              </p>
            </div>
          </div>
        </div>
      </div>

      <h1 style="text-align: center; margin-top: 60px; font-size: 2rem;">CREA TUS CATEGORIAS</h1>

      <div class="container mt-10">
        <div class="container-form">
        <form class="formulario">
            <div class="mb-3" style="text-align: center">
                <label for="titulo" class="form-label">Título</label>
                <input type="text" class="form-control" id="titulo">
            </div>
            <div class="mb-3" style="text-align: center;">
                <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div style="text-align: center;">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
      </div>
    </div>
<div class="p-10"></div>
  </template>

  <script setup>
  import Navbar from "@/Pages/Navbar.vue";
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
