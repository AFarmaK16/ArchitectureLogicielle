<?php

//generer menu
function genereMenu($con){
  $reqCons="SELECT  * FROM  categorie order by libelle ";
  $resultat=mysqli_fetch_all(mysqli_query($con,$reqCons),MYSQLI_ASSOC);
  $chaine="";
  $i=0;
  foreach($resultat as $ligne){
    $libelle=$ligne['libelle'];
    $id=$ligne['id'];
    $send=$id."*spe";
    $details='ShowDetails("'.$send.'")';
    $chaine=$chaine."<li onclick='$details' ><a href='#' id='$id'>$libelle</a></li>";
  }

    $chaine=$chaine."";
    return $chaine;
}
//afficher article
function AfficherArticle($categorie,$con,$dest){
  if ($dest=="spe") {
    $reqCons="SELECT  * FROM  article a ,categorie c  where c.id=a.categorie and a.categorie=$categorie";
  }
  else{
    $reqCons="SELECT  * FROM  article where id=$categorie";
  }
  $resultat=mysqli_fetch_all(mysqli_query($con,$reqCons),MYSQLI_ASSOC);
  $chaine="";
  $i=0;
  foreach($resultat as $ligne){
    $titre=$ligne['titre'];
    $contenu=$ligne['contenu'];
    $dateCreation=$ligne['dateCreation'];
    $dateM=$ligne['dateModification'];
    $chaine=$chaine." <div class='card'>
    <div class='card-header card-header-primary'>
      <h4 class='card-title'>$titre</h4>
    </div>
    
    Creation:$dateCreation<br>
    Modification:$dateM<br>
    $contenu
    </div>";
  }

    $chaine=$chaine."";
    return $chaine;
}

//afficger resume article
function articleResume($con)
{
  $reqCons="SELECT  * FROM  article ";
  $resultat=mysqli_fetch_all(mysqli_query($con,$reqCons),MYSQLI_ASSOC);
  $chaine="";
  $i=0;
  foreach($resultat as $ligne){
    $titre=$ligne['titre'];
    $contenu=$ligne['contenu'];
    $dateCreation=$ligne['dateCreation'];
    $dateM=$ligne['dateModification'];
    $send=$ligne['id']."*all";
    $details='ShowDetails("'.$send.'")';
    $chaine=$chaine." <div class='card' onclick='$details'>
    <div class='card-header card-header-primary'>
      <h4 class='card-title'>$titre</h4>
    </div>
    
    [Creation:$dateCreation----
    Modification:$dateM]<br>".mb_substr($contenu, 0, 18, 'UTF-8')."...
    
    </div><br></br>";
  }

    $chaine=$chaine."";
    return $chaine;
}

?>