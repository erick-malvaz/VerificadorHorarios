<script>
  import {link} from "svelte-spa-router"

</script>

<main>
  <nav class="navbar navbar-expand-lg" style="background-color: #F5F5F5; height: 150px;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img style="max-height: 140px;" src="https://latinrev.flacso.org.ar/sites/default/files/logos/logo_encrym-01_2_-_coordinacion_editorial_intervencion.png" alt=""></a>

      <h1 style="color: #FB7D0C; margin-right:15px;">|</h1>

      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <h1 style="color:#7D7770">Menu De R. Humanos</h1>
      </div>
    </div>
  </nav>
  <!-- <img src="../public/img/calendarioAzteca.png" alt="" style="rotate: 40deg;"> -->
  <form action="./php/ingrear_nuevo_usu.php" method="post">
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="text" class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  <a href="/PagUsuarios" use:link>sfksdfksdfk</a>
</main>