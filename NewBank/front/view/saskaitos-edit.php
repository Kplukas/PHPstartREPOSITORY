<main>
<h1>Redaguoti sąskaitą</h1>

<form action="<?= URL ?>saskaitos/update/<?= $saskaita['id'] ?>" method="post">
 
    <input type="hidden" name="likutis" value="<?= $saskaita['likutis']?>">
    <label for="vardas">Vardas:</label>
    <input type="text" name="vardas" value="<?= $saskaita['vardas'] ?>">
    <label for="pavarde">Pavardė:</label>
    <input type="text" name="pavarde" value="<?= $saskaita['pavarde'] ?>">
    <input type="hidden" name="numeris" value="<?= $saskaita['numeris'] ?>">
    <label for="asmenskodas">Asmens kodas:</label>
    <input type="text" name="asmenskodas" value="<?= $saskaita['asmenskodas'] ?>">

    <button type="submit">mygtukas</button>
</form>
</main>