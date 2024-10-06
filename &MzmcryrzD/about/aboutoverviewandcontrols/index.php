<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <h1 id="title">درباره</h1>
    <?php
    $recall = new Recall();
    $recall->selectAll("about","DESC");
    $recall->fetched;
    //var_dump($recall->fetched);
    $printer = new Printer();
    $printer->print("../public/components/about.card.php",$recall->fetched);
    ?>
    <script src="../javascript/about.js"></script>
</body>

</html>