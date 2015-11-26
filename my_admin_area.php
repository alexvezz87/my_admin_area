<?php

//Autore: Alex Vezzelli - Alex Soluzioni Web
//url: http://www.alexsoluzioniweb.it/
 /**
 * @package my_admin_area
 */
/*
Plugin Name: My Admin Area
Plugin URI: 
Description: Plugin che genera un'area riservata personalizzata
Version: 1.0
Author: Alex Vezzelli - Alex Soluzioni Web
Author URI: http://www.alexsoluzioniweb.it/
License: GPLv2 or later
*/


//indico la cartella dove è contenuto il plugin
require_once (dirname(__FILE__) . '/my_admin_area.php');

//importo il file di installazione
require_once ('install_plugin.php');

//importo il file functions.php
require_once ('functions.php');


//creo la pagina di amministrazione personalizzata
register_activation_hook(__FILE__,'create_page');
function create_page(){
    create_my_admin_page();
}


?>