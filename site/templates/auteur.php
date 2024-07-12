<?php snippet ('header') ?>
<?php snippet ('nav') ?>


<body>
<!-- Ce modèle affiche le titre de la page "Explore - Auteurs" ainsi que la liste des articles (souspages) associées -->

<h1>Explore - Auteurs</h1>

<ul>
  <?php foreach ($page->children() as $sous_page) : ?>
    <li><a href="<?= $sous_page->url() ?>"><?= $sous_page->title() ?></a></li>
  <?php endforeach ?>
</ul>


</body>
</html>