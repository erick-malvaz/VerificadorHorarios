<script>
  import {link} from "svelte-spa-router"

  let tusuario=0;
  let barras_correo=true;
  let titulo=['Verificador Entrada y Salida', 'Administración'];
  let imagen=['./img/cabeza.jpg', './img/encrym.jpg'];

  // Creas un objeto llamado Date, con el podemos obtener la fecha y hora actual
  var currentTime = new Date();
    let hora = currentTime.getHours();
    let minuto = currentTime.getMinutes();
    let dia = currentTime.getDate();
    let mes = currentTime.getMonth() + 1;
    let anno = currentTime.getUTCFullYear();

  console.log(hora+":"+minuto)

  function volver(){
    tusuario=3
    barras_correo=true
  }
  function barraCodigo(){
    if(barras_correo)
      barras_correo=false
    else
      barras_correo=true
  }
</script>

<main>
    <div class="card bienvenida" style="padding: 0%;">
      <div class="row" style="max-width: 100%; max-height: 100%;">
        <div class="col-5 mb-3" >
          <img class="img1" src={imagen[tusuario]} alt="">
        </div>
        <div class="col-7 mb-3" >
          <div class="row" style="background-color: white; border:1px white solid; border-radius:0 30px 0 0;">
            <div class="col-4">
              <img class="img2" src="https://latinrev.flacso.org.ar/sites/default/files/logos/logo_encrym-01_2_-_coordinacion_editorial_intervencion.png" alt="">
            </div>
            <div class="col-1">
              <br>
              <h2 style="color: #FB7D0C;">|</h2>
            </div>
            <div class="col-6">
              <br>
              <h2>{titulo[tusuario]}</h2>
            </div>
          </div>
          <div class="row" style="background-color: #F5F5F5;">
            <div class="col-12"><br></div>
            <div class="col-12"><h2>{tusuario==0 ? "Registro de Horas":"Inicio de Sesión"}</h2></div>
            <div class="col-12"><h5>Fecha: {dia+"/"+mes+"/"+anno}<br>Son las {hora+" horas con "+minuto+" minutos"}</h5></div>
            <!-- <div class="col-12"><br></div> -->
            <div class="col-12"><br></div>
            <div class="col-12"><span>{barras_correo ? "Escanee Su Código de Barras:":"Ingrese Su Correo:"}</span><input type={barras_correo ? "text":"text"} autofocus autocomplete="off"></div>
            <div class="col-12"><br></div>
            <div class="col-12">
              {#if barras_correo==false}
                <span>Contraseña:</span><br>
                <input type="password" id="contrasenna" autocomplete="off"><br><br>
              {/if}
              <button style="border: none; color:#FB7D0C; background-color: #F5F5F5;  text-decoration:double" on:click={barraCodigo}>{barras_correo ? "Utilizar Correo Electronico":"Utilizar Codigo de Barras"}</button>
            </div>
            <!-- <div class="col-12"><br></div> -->
            <div class="col-12"><br></div>
            <div class="col-12">
              <button style="background-color: #FB7D0C; color: white; pading: 20px; font-size:20px"><a href={tusuario==0 ? "/PagUsuarios":"/PagRHumanos"} use:link>Iniciar Sesión</a></button>
            </div>
          </div>
        </div>
      </div>
    </div>

</main>

<style>
  #tipousuario{
    position: absolute;
    width: 100%;
    height: 100%;
    background-color:#FB7D0C;
    color: white;
    border-radius: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
  }

  button{
    border-radius: 5px;
    border: 0;
    margin-right: 10px;
  }

  .btnSeleccion{
    background: none;
    border-radius: 100%;
    border: 5px!important;
  }

  input{
    border: 0;
    border-radius: 12px;
    height: 3rem;
    width: 90%;
    margin: 0px;
    box-shadow: 10px 10px 10px 1px rgba(63, 61, 61, 0.2);
  }

  .bienvenida{
    background-color: #F5F5F5;
    margin: auto;
    margin-top: 50px;
    height: 800px;
    width: 1290px;
    border: none;
    border-radius: 30px;
    box-shadow: 10px 10px 10px 1px rgba(63, 61, 61, 0.2);
  }

  .img1 {
    object-fit: cover;
    border-radius: 30px 0px 0px 30px;
    height: 800px;
    max-width: 100%;
  }

  .img2{
    margin: 0%;
    height: 105px;
  }

  h2{
    color: #7D7770;
  }

  h5{
    color: #7D7770;
  }

  a{
    text-decoration: none;
    color: white;
  }
</style>