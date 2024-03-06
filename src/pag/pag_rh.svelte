<script>
  import {link} from "svelte-spa-router"

</script>

<main>

  <nav class="navbar navbar-expand-lg" style="background-color: #F5F5F5; height: 150px;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img style="max-height: 140px;" src="./img/logoENRYM.png" alt="CABEZA"></a>
      <h1 style="color: #FB7D0C; margin-right:15px;">|</h1>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <h1 style="color:#7D7770">Menu De Recursos Humanos</h1>
      </div>
    </div>
  </nav>
  <div class="card carta">
    <button class="boton" type="button" data-bs-toggle="modal" data-bs-target="#historial">Historial</button>
    <button class="boton" type="button" data-bs-toggle="modal" data-bs-target="#nuevo_usuario">Nuevos Usuarios</button>
    <button class="boton" type="button" data-bs-toggle="modal" data-bs-target="#eliminar_usuario">Eliminar Usuarios</button>
    <button class="boton" type="button" data-bs-toggle="modal" data-bs-target="#permiso">Permisos</button>
  </div>

  <div id="historial" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Modal del Historial</h4>
        </div>
        <div class="modal-body">
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla neque, perspiciatis alias doloremque dicta a incidunt laborum animi tempora harum mollitia voluptatum maiores nesciunt nam voluptate reprehenderit, voluptatibus quo veritatis.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  <div id="nuevo_usuario" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Modal Nuveo Usuario</h4>
        </div>
        <div class="modal-body">
          <form>
            <label>pNombre</label>
            <br>
            <input type="text" class="inputs">
            <br>
            <br>
            <label>Apellido Paterno</label>
            <br>
            <input type="text" class="inputs">
            <br>
            <br>
            <label>Apellido Materno</label>
            <br>
            <input type="text" class="inputs">
            <br>
            <br>
            <label>Curp</label>
            <br>
            <input type="text" class="inputs">
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary">Registrar</button>
        </div>
      </div>
    </div>
  </div>

  <div id="eliminar_usuario" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Modal Eliminar Usuario</h4>
        </div>
        <div class="modal-body">
          <form>
            <label>Introduce el Id de Usuario</label>
            <br>
            <input type="text" class="inputs">
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary">Eliminar</button>
        </div>
      </div>
    </div>
  </div>

  <div id="permiso" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Modal Permisos</h4>
        </div>
        <div class="modal-body">
          <form>
            <label>Introduce el Id de Usuario</label>
            <br>
            <input type="text" class="inputs">
            <br><br>
            <label>Tipo de Permiso</label>
            <select name="" id="">
              <option value=1>Acceso</option>
              <option value=2>Vacaciones</option>
              <option value=3>Baja Temporal</option>
              <option value=4>Entrada Tarde</option>
              <option value=5>Salida Antes</option>
              <option value=6>Incapacidad Medica</option>
            </select>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary">Registrar</button>
        </div>
      </div>
    </div>
  </div>
</main>

<style>
  .carta{
    background-image: url("../../public/img/fondrh.png");
    background-repeat: no-repeat;
    background-position:left;
    background-size: cover;
    display: flex;
    justify-content:space-around;
    align-items: center;
    height: 750px;
    width: 50%;
    margin: auto;
    margin-top: 15px;
  }

  .boton{
    background-color: #FB7D0C;
    border-style: none;
    width: 200px;
    font-size: 1.2rem;
    color: white;
    border-radius: 10px;
    padding: 15px 0;
  }

  .inputs{
    width: 90%;
    border-radius: 5px;
    border-style: none;
    box-shadow: 10px 10px 10px 1px rgba(63, 61, 61, 0.2);
  }
</style>