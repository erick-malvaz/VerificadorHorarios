import Incio from "./pag/incio.svelte";
import PagUs from "./pag/pag_us.svelte";
import PagRh from "./pag/pag_rh.svelte";
// import Ingresar from "./php/ingrear_nuevo_usu.php";

const routes = {
  '/':Incio,
  '/PagUsuarios':PagUs,
  '/PagRHumanos':PagRh
}

export default routes