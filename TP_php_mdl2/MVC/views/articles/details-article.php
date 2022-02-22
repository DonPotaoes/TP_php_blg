<?php include __DIR__ . '/../parties/header.php'; ?>



<h1><?= $art->titre ?></h1>



<div class="row">
    <div class="col-4">
        <img src="<?= $art->image ?>" alt="" class="img-fluid thumbnail">
    </div>

     <div class="col-8">
         <dl>
             <dd>Contenu</dd>
             <dt><?= $art->contenu ?></dt>
             
             <dd>Auteur</dd>
             <dt><?= $art->auteur ?></dt>
             
             <dd>Date de publication</dd>
             <dt><?= $art->date_de_publication ?></dt>

         </dl>
     </div>

</div>