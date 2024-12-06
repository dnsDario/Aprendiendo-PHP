<main>
    <!--<?php var_dump($data);?> -->
    <section>
        <h4>La próxima película de Marvel se estrenará: <?= $until_message ?></h4>
        <h1> <?= $title ?></h2>
            <h3> Fecha de estreno: <?= $release_date ?></h3>
            <img src="<?= $poster_url ?>" alt="poster_peli" style="border-radius: 16px">
            <p><?= $overview ?></p>
    </section>

    <section>
        <h4>Y la siguiente a <?=$title?> se estrenará en: <?= $until_message2 ?></h4>
        <h1> <?= $following_production["title"] ?></h1>
        <h3> Fecha de estreno: <?= $following_production["release_date"] ?></h3>
        <img src="<?= $following_production["poster_url"] ?>" alt="poster_peli" style="border-radius: 16px">
        <p><?= $following_production["overview"] ?></p>
    </section>
</main>
