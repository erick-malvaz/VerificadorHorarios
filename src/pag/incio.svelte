<script>
  import {link} from "svelte-spa-router"

  let barras_correo=true;

  // Creas un objeto llamado Date, con el podemos obtener la fecha y hora actual
  var currentTime = new Date();
    let hora = currentTime.getHours();
    let minuto = currentTime.getMinutes();
    let dia = currentTime.getDate();
    let mes = currentTime.getMonth() + 1;
    let anno = currentTime.getUTCFullYear();

    let counter = 0
    const incr = () => (counter += 1)

    let codigo_correo
    let contrasena


    let clear
    $: {
      clearInterval(clear)
      clear = setInterval(incr, 1000)
      if(counter==60){
        if(minuto<59)
        minuto += 1
      else{
        minuto=0
        if(hora<23)
        hora += 1
      else
      hora = 0
  }
  counter=0
}
}

  function barraCodigo(){
    if(barras_correo)
      barras_correo=false
    else
      barras_correo=true
    codigo_correo=''
    contrasena=''
  }

function verifica(){
  if(codigo_correo == '' || codigo_correo == null || codigo_correo == ' ')
    alert("No hay datos")
  else
    if(barras_correo)
      alert("Hora Registrada a las: "+hora+":"+minuto)
      // alert(codigo_correo.length)
    else
      if(contrasena=='' || contrasena==null || contrasena==' ')
        alert("Falta Contraseña")
      else
        alert("Hora Registrada a las: "+hora+":"+minuto)
}

let codigo = codigo_correo;
if(codigo!=null){
  console.log("Tengo que colgar");
}
</script>

<main>
  <div class="card bienvenida" style="padding: 0%;">
    <div class="row" style="max-width: 100%; max-height: 100%;">
      <div class="col-5 mb-3" >
        <img class="img1" src="./img/cabeza.jpg" alt="Imagen1">
      </div>
      <div class="col-7 mb-3" >
        <div class="row" style="background-color: white; border:1px white solid; border-radius:0 30px 0 0;">
          <div class="col-4">
            <img class="img2" src="./img/logoENRYM.png" alt="Logo/Encrym">
          </div>
          <div class="col-1">
            <br>
            <h2 style="color: #FB7D0C;">|</h2>
          </div>
          <div class="col-6">
            <br>
            <h2 style="font-family: 'Rubik', sans-serif !important;">Verificador Entrada y Salida</h2>
          </div>
        </div>
        <div class="row" style="background-color: #F5F5F5;">
          <div class="col-12"><br></div>
          <div class="col-12"><h2>Inicio de Sesión</h2></div>
          <div class="col-12"><h5>Fecha: {dia+"/"+mes+"/"+anno}<br>Son las {hora+" horas con "+minuto+" minutos"}</h5></div>
          <div class="col-12"><br></div>
          <div class="col-6"><span>{barras_correo ? "Escanee Su Código de Barras:":"Ingrese Su Correo:"}</span></div>
          <div class="input-group mb-3" style="max-width: 677px;">
            <input type="text" class="form-control" autofocus autocomplete="off" bind:value={codigo_correo} aria-label="Recipient's username" aria-describedby="basic-addon2">
            <span class={barras_correo ? "":"input-group-text"} style={barras_correo ? "":"box-shadow: 10px 10px 10px 1px rgba(63, 61, 61, 0.2);"}>{barras_correo ? "":"@encrym.edu.mx"}</span>
          </div>
          <div class="col-12"><br></div>
          <div class="col-12">
            {#if barras_correo==false}
              <span>Contraseña:</span><br>
              <input type="password" id="contrasenna" autocomplete="off" bind:value={contrasena}><br><br>
            {/if}
            <button style="border: none; color:#FB7D0C; background-color: #F5F5F5;  text-decoration:double" on:click={barraCodigo}>{barras_correo ? "Utilizar Correo Electronico":"Utilizar Codigo de Barras"}</button>
          </div>
          <div class="col-12"><br></div>
          <div class="col-12">
            <button style="background-color: #FB7D0C; color: white; pading: 20px; font-size:20px" on:click={()=>verifica()}>Iniciar Sesión</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<style>
  *{
    font-family:"Helvetica Neue", Helvetica, Arial, sans-serif;
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
    margin: 0%;
    height: 105px;
  }

  h2{
    color: #7D7770;
  }

  h5{
    color: #7D7770;
  }

  /* se puede hacer una clase para no tener por separado los dos h y ahorrar unas líneas */
</style>