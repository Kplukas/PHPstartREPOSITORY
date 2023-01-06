<h1>Redaguoti sąskaitą</h1>

<form action="<?= URL ?>/saskaitos/update/<?= $saskaita['id'] ?>" method="post">

    <div>title<input type="text" name="title" value="<?= $saskaita['title'] ?>"></div> 
    <div>kazkas<input type="text" name="kazkas" value="<?= $saskaita['kazkas'] ?>"></div> 
    <div>belekas<input type="text" name="belekas" value="<?= $saskaita['belekas'] ?>"></div> 

    <button type="submit">mygtukas</button>
</form>