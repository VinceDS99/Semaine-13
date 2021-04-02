<?php

// // application/controllers/Produits.php

defined('BASEPATH') OR exit('No direct script access allowed');


class FormuC2 extends CI_Controller 

{

public function formu2()
{

$this->output->enable_profiler(TRUE);

// Chargement des assistants 'form' et 'url'
$this->load->helper('form', 'url'); 

$this->load->view('FormuV2');
}
}


?>