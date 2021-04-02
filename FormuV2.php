<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>Liste des produits</title>
</head>
<body>

<body>
<h1>Liste des produits</h1>

<div class="row">
<div class="col-12">    
<?php 
foreach ($liste_produits as $row) 
{
    echo"<p>".$row->an_id."</p>";
    echo"<p>".$row->an_prix."</p>";
    echo"<p>".$row->an_ref."</p>";
    echo"<p>".$row->an_offre."</p>";
    echo"<p>".$row->an_titre."</p>";     
}
?>
</div>
</div>


</body>
</html>