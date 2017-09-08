<?php
// On crée notre array $fichesproduits
$fichesproduits = array (
    '1' => array(
      'titre' => 'titre1',
      'description_courte' => 'BLABLABLA',
      'resume' => '',
      'prix' => '2',
      'srcImageProduit' = ''
      ),
    '2' => array(
      'titre' => 'titre',
      'description_courte' => 'blablablou',
      'resume' => '',
      'prix' => '5',
      'srcImageProduit' = ''
      ),
    '3' => array(
      'titre' => 'titre',
      'description_courte' => 'blablablou',
      'resume' => '',
      'prix' => '5',
      'srcImageProduit' = ''
      ),
    '4' => array(
      'titre' => 'titre',
      'description_courte' => 'blablablou',
      'resume' => '',
      'prix' => '5',
      'srcImageProduit' = ''
      )
    );

// création du pseudo code
// boucle for pour mettre 12 produits sur le site
// a chaque tour choisir une des cles du premier niveau au hasard
// puis faire des echos qui suit le modele suivant de aterialize
{
    echo $element . '<br />'; // affichera $prenoms[0], $prenoms[1] etc.
}
echo
'<div class="row">
   <div class="col s12 m7">
     <div class="card">
       <div class="card-image">
         <img src="'.METTRE SOURCE DE LIMAGE.'">
         <span class="card-title">'.METTRE TITRE.'</span>
       </div>
       <div class="card-content">
         <p>'.METTRE DESCRIPTION.'</p>
       </div>
       <div class="card-action">
         <a href="#">'.METTRE LIEN VERS PRODUIT.'</a>
       </div>
     </div>
   </div>
 </div>';

// foreach($fichesproduits as $element)
// {
//     foreach ($element as $key => $value) {
//       # code...
//     }
// }
?>
