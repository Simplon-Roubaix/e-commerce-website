<?php
// On crée notre array $fichesproduits
$fichesproduits = array (
    '1' => array(
      'titre' => 'Samsung Galaxy S7',
      'description' => '',
      'resume' => 'Memorabile mirum quodam quodam agi est mirum quodam plebem videre ardore plebem infuso curulium videre.',
      'prix' => '100',
      'srcImageProduit' = 'img/samsunggalaxys7.jpg',
      'classDansLink' = 'a renseigner par taslim'
      ),
    '2' => array(
      'titre' => 'Iphone',
      'description' => 'blablablou',
      'resume' => 'Praesertim senatus plaga libidines praeter plaga se plaga libidines senatus praeter hac inusta hanc inusta.',
      'prix' => '5',
      'srcImageProduit' = 'img/iphone.png',
      'classDansLink' = 'a renseigner par taslim'
      ),
    '3' => array(
      'titre' => 'Samsung Galaxy S5',
      'description' => '',
      'resume' => 'Orientem quidem ad sane iactitabant feris latrociniis inrequietis inopinis in adfligebat adfligebat capiti et hac.',
      'prix' => '5',
      'srcImageProduit' = 'img/samsunggalaxys5.jpg',
      'classDansLink' = 'a renseigner par taslim'
      ),
    '4' => array(
      'titre' => 'Nokia 3210',
      'description' => 'blablablou',
      'resume' => 'Possumus si afferat intellegam sententiae quidem oratio quot habeat me non et non re plane.',
      'prix' => '5',
      'srcImageProduit' = 'img/Nokia3210.jpg',
      'classDansLink' = 'a renseigner par taslim'
      )
    );

// OK boucle for pour mettre 12 produits sur le site
// a chaque tour choisir une des cles du premier niveau au hasard
// puis faire des echos qui suit le modele suivant de materialize
// {
//     echo $element . '<br />'; // affichera $prenoms[0], $prenoms[1] etc.
// }

for (i = 0; i < 12 ; i++ ) {

  

  echo
  '<div class="row">
     <div class="col s12 m7">
       <div class="card">
         <div class="card-image">
           <img src="' . $['srcImageProduit'] . '">
           <span class="card-title">'. $['titre']. '</span>
         </div>
         <div class="card-content">
           <p>' . $['resume']. '</p>
         </div>
         <div class="card-action">
           <a href="#" class=".$['classDansLink'].">En savoir plus</a>
         </div>
       </div>
     </div>
   </div>';

}

// foreach($fichesproduits as $element)
// {
//     foreach ($element as $key => $value) {
//       # code...
//     }
// }
?>
