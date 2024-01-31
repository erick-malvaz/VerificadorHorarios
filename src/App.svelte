<script>
  let tusuario=3;
  let barras_correo=true;
  let titulo=['Verificador Entrada y Salida', 'Administración'];
  let imagen=['./img/cabeza.jpg', './img/encrym.jpg'];

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


  {#if tusuario!=1 && tusuario!=0}
  <div id="tipousuario">
    <button on:click={()=>tusuario=0} style="width: 60px; height: 60px; background: none; margin: 9px "><i class="bi bi-person-circle"></i></button>
    <button on:click={()=>tusuario=1}>Administrador</button>
  </div>
  {:else}
    <div class="card bienvenida">
        <div class="row">
          <div class="col-5" style="margin: 0px; padding:0;">
            <img class="img1" src={imagen[tusuario]} alt="">
          </div>
          <div class="col-7" style="margin: 0; padding:0;">
            <div class="row" style="background-color: white; max-width:100%">
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
            <div class="row mb-5" style="background-color: #F5F5F5; max-width:100%; height:695px; border-radius:0px 0px 30px 0px; padding: 10px;">
              <div class="row">
                <div class="col-12">
                  <div class="row">
                    <h2>{tusuario==0 ? "Registro de Horas":"Inicio de Sesión"}</h2>
                  </div>
                  <div class="row">
                    <h5>Fecha: {dia+"/"+mes+"/"+anno}<br>Son las {hora+" horas con "+minuto+" minutos"}</h5>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <span>{barras_correo ? "Ingrese Su Codigo de Barras:":"Ingrese Su Correo"}</span><br>
                  <input type={barras_correo ? "number":"email"}>
                </div>
              </div>
              <div class="col-12">
                <span>Contraseña:</span><br>
                <input type="password" id="Contraseña"><br><br>
                <button style="border: none; color:#FB7D0C; background-color: #F5F5F5;  text-decoration:double" on:click={barraCodigo}>{barras_correo ? "Utilizar Correo Electronico":"Utilizar Codigo de Barras"}</button>
              </div>
              <div class="col-12">
                <button type="submit" style="background-color: #FB7D0C; color: white; pading: 20px; font-size:20px">{tusuario==0 ? "Registrar Hora":"Ingresar"}</button>
                <button style="background-color: #D3D3D3; color: #7D7770; pading: 20px; font-size:20px" on:click={volver}>Volver</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    {/if}

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
    height: 105px;
  }

  h2{
    color: #7D7770;
  }

  h5{
    color: #7D7770;
  }
</style>