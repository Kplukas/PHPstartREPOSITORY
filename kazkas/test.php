<?php
echo '<pre>';
print_r($_POST);
//if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//    $show = $_POST['show'] ?? [];
//    header('Location: http://localhost/manodarbai/testing/kazkas/test.php?a='.$count);
//    die;
//}
//if (isset($_GET['a'])) {
//    $show = $_GET['a'];
//}
//else {
//
//}

$rand = rand(5, 10);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testas</title>
</head>
<body>
    <button type="submit" value="<?php $rand ?>" action="http://localhost/manodarbai/testing/kazkas/test.php" method="post">Rand</button>
    <?php if(isset($show)) : ?>
            <?php for($i=0; $i < count($show); $i++) ?>
                <h2> <?php $show[$i] ?></h2>
            <?php endfor ?>
    <?php else : ?>

    <?php endif ?>            
</body>
</html>