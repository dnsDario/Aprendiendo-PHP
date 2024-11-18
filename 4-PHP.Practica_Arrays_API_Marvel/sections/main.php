<main>
    <section>
        <h4>La próxima película de Marvel: <?= $untilMessage ?></h4>
        <h1> <?= $data["title"] ?></h2>
            <h3> Fecha de estreno: <?= $data["release_date"] ?></h3>
            <img src="<?= $data["poster_url"] ?>" alt="poster_peli" style="border-radius: 16px">
            <p><?= $data["overview"] ?></p>
    </section>

    <section>
        <h4>Y la siguiente: <?= $untilMessage ?></h4>
        <h1> <?= $data["following_production"]["title"] ?></h1>
        <h3> Fecha de estreno: <?= $data["following_production"]["release_date"] ?></h3>
        <img src="<?= $data["following_production"]["poster_url"] ?>" alt="poster_peli" style="border-radius: 16px">
        <p><?= $data["following_production"]["overview"] ?></p>
    </section>
</main>
