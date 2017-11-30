<a href="<?= get_permalink(); ?>" class="item">
    <img src="<?= $fields['artiste_profil'][url]; ?>" alt="" width="400" height="225">
    <div class="item__info">
        <h3 class="">
            <?= $fields['artist_surname']; ?>
            <span><?= $fields['artist_name']; ?></span>
        </h3>
        <p class=""><?= $fields['artist_job']; ?></p>
    </div>
</a>