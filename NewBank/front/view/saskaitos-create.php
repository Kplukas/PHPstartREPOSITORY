<main>


<h1>Nauja sąskaita</h1>

<form action="<?php URL ?>/saskaitos/save" method="post">
    <label for="vardas">Vardas:</label>
    <input type="text" name="vardas">
    <label for="pavarde">Pavardė:</label> 
    <input type="text" name="pavarde">
    <label for="asmenskodas">Asmens kodas:</label> 
    <input type="text" name="asmenskodas">
    <input type="hidden" name="likutis" value="0,00">
    <input type="hidden" name="numeris" value="LT0155555<?= rand(10000000000,99999999999) ?>">

    <button type="submit">Sukurti</button>
</form>

</main>