<h1>Saskaitos:</h1>
<ul>
<?php foreach($saskaitos as $saskaita) : ?>

<li>
    <?= $saskaita['title'] ?>
    <a href="<?= URL . 'saskaitos/edit/'. $saskaita['id'] ?>"> Redaguoti</a>
</li>

<?php endforeach ?>

</ul>