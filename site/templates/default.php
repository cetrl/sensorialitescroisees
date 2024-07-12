<?php snippet ('header') ?>
<body>
    <!-- logo retour accueil -->
    <!-- <header class="header">
        <a href="<?= $site->url() ?>"><?= $site->title() ?></a>
    </header> -->

    <!-- navigation
        pour chaque dossier (1-pages....), l'ajoute dans la navigation -->


    <main>
        <h1><?= $page->title() ?></h1>
        <p><?= $page->text() ?></p>
    </main>

</body>
</html>