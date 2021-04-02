<?php

// // application/controllers/Produits.php

defined('BASEPATH') OR exit('No direct script access allowed');


class FormuC extends CI_Controller 

{

public function formu()
{

$this->output->enable_profiler(TRUE);

// Chargement des assistants 'form' et 'url'
$this->load->helper('form', 'url'); 

// Chargement de la librairie 'database'
$this->load->database(); 

if ($this->input->post()) 
{ // 2ème appel de la page: traitement du formulaire

$data = $this->input->post();

//var_dump($data) ;
//echo $_POST['Prix'];
$budgetmax = $_POST['Prix'];
$type=$_POST['Type'];
$ville=$_POST['Ville'];
// Exécute la requête 
$results = $this->db->query("SELECT an_prix,an_id,an_ref,an_offre,an_titre FROM waz_annonces,waz_biens WHERE an_prix < $budgetmax AND bi_type = '$type' AND bi_local='$ville' AND waz_annonces.an_id=waz_biens.bi_id");  

// Récupération des résultats    
$aListe = $results->result();   

// Ajoute des résultats de la requête au tableau des variables à transmettre à la vue   
$aView["liste_produits"] = $aListe;

//var_dump($aView);

$this->load->view('FormuV2', $aView);
//redirect("FormuC2/formu2");
} 

else 
{ // 1er appel de la page: affichage du formulaire
    $this->load->view('FormuV');
}
}
}


?>