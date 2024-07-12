<?php snippet ('header') ?>
<?php snippet ('nav') ?>


<body>
<!-- Ce modèle affiche le titre de la page "Explore - Mots Clés" ainsi que la liste des articles (souspages) associées -->

<h1>Explore - Mots-clés</h1>

<ul>
  <?php foreach (page('mots-cles')->children() as $mot_cle) : ?>
    <li><a href="<?= $mot_cle->url() ?>"><?= $mot_cle->title() ?></a></li>
 
  </ul>

</body>
</html>