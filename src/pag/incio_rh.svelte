<script>
  let usu;
  let con;
</script>

<main>
  <nav class="navbar navbar-expand-lg" style="background-color: #F5F5F5; height: 150px;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img style="max-height: 140px;" src="https://latinrev.flacso.org.ar/sites/default/files/logos/logo_encrym-01_2_-_coordinacion_editorial_intervencion.png" alt=""></a>

      <h1 style="color: #FB7D0C; margin-right:15px;">|</h1>

      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <h1 style="color:#7D7770">Inicio de Sesion Reursos Humanos</h1>
      </div>
    </div>
  </nav>
  <div class="card">
    <img src="../public/img/restaura_foto.png" class="img1">
    <div class="card-body">
      <h5 class="card-title">Por favor ingresa los siguientes datos:</h5>
      <span>Usuario:</span><br>
      <input type="text" id="contrasenna" autocomplete="off" bind:value={usu}><br><br>
      <span>Contraseña:</span><br>
      <input type="password" id="contrasenna" autocomplete="off" bind:value={con}><br><br>
      <button style="background-color: #FB7D0C; color: white; pading: 20px; font-size:20px; border-style: none; border-radius: 5px;">Iniciar Sesion</button>
    </div>
  </div>

</main>

<style>
  .card{
    margin: auto;
    margin-top: 20px;
    width: 35%;
    height: 670px;
    border-radius: 30px;

  }

  .img1{
    object-fit: cover;
    border-radius: 30px 30px 0px 0px;
    /* width: 100%; */
    height: 100%;

  }

  input{
    border: 0;
    border-radius: 12px;
    height: 3rem;
    width: 90%;
    margin: 0px;
    box-shadow: 10px 10px 10px 1px rgba(63, 61, 61, 0.2);
  }

</style>