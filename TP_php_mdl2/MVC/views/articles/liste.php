

<h1>Les Articles</h1>

<div class="row">
    <?php foreach ($article as $art) { ?>
        
        <div class="card col-4">
        <img class="card-img-top" src="<?= $art->image ?>" alt="">
        <div class="card-body">
            <h4 class="card-title"><?= $art->titre ?></h4>
            <p class="card-text"><?= $art->contenu ?></p>
            <p class="card-text"><?= $art->auteur ?></p>
            <p class="card-text"><?= $art->date_de_publication ?></p>
        </div>
    </div>
  <?php } ?>
</div>