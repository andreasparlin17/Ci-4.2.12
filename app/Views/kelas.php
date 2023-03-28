<h1>Hello</h1>
<?php foreach ($users as $u) : ?>

    <h1><?= $u['username'] ?></h1>

<?php endforeach ?>


<a href="<?= base_url('hello') ?>">pindah</a>