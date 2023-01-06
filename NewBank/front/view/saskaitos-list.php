<h1>Saskaitos:</h1>
<ul>
<?php foreach($saskaitos as $saskaita) : ?>

<li>
    <?= $saskaita['title'] ?>
    <a href="<?= URL . 'saskaitos/edit/'. $saskaita['id'] ?>"> Redaguoti</a>
    <form action="<?= URL . 'saskaitos/delete/'. $saskaita['id'] ?>" method="post">
        <button type="submit">delete</button>
    </form>
</li>

<?php endforeach ?>

</ul>