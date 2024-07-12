<?php snippet ('header') ?>
<?php snippet ('nav') ?>


<body>
<!-- Ce modèle affiche le titre de la page "Explore - Mots Clés" ainsi que la liste des articles (souspages) associées -->


<ul>
  <?php foreach ($page->children() as $sous_page) : ?>
    <li><a href="<?= $sous_page->url() ?>"><?= $sous_page->title() ?></a></li>
  <?php endforeach ?>
</ul>


</body>
</html>