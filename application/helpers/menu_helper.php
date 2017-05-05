<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
if (!function_exists('menu')) {

    function menu($datos_sesion) {
        $ci = & get_instance();
        //~ if(isset($ci->session->userdata['logged_in'])){
			//~ print_r($ci->session->userdata['logged_in']);
		//~ }
        ?>
        
        <li>
			<a href="#"><i class="fa fa-user-o"></i> <span class="nav-label">Usuarios</span><span class="fa arrow"></span></a>
			<ul class="nav nav-second-level collapse">
				<li><a href="<?php echo base_url() ?>profile">Perfiles</a></li>
				<li><a href="<?php echo base_url() ?>users">Usuarios</a></li>
				
			</ul>
		</li>
		<li>
			<a href="#"><i class="fa fa-building"></i> <span class="nav-label">Clientes</span><span class="fa arrow"></span></a>
			<ul class="nav nav-second-level collapse">
				<li><a href="<?php echo base_url() ?>client">Clientes</a></li>

			</ul>
		</li>
		<li>
			<a href="#"><i class="fa fa-building"></i> <span class="nav-label">Franquicias</span><span class="fa arrow"></span></a>
			<ul class="nav nav-second-level collapse">
				<li><a href="<?php echo base_url() ?>franchises">Franquicias</a></li>
				<li><a href="search_results.html">Edición de Datos / Asignación de Servicios</a></li>
				<li><a href="lockscreen.html">Resumen Financiero</a></li>
				<li><a href="lockscreen.html">Perfil Franquicia</a></li>
				
			</ul>
		</li>
		
		<li>
			<a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Ordenes de Servicio</span></a>
			
		</li>
		<li>
			<a href="<?php echo base_url() ?>services"><i class="fa fa-delicious"></i> <span class="nav-label">Servicios</span></a>
			
		</li>

        <?php
    }

}
