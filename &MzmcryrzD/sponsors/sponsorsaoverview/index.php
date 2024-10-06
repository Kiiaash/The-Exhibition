<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 id="title">اسپانسر ها</h1>
    <br><br><br>
    <?php 
        $recall = new Recall();
        $recall -> selectAll("sponsers","ASC");

        $print = new Printer();
        $print-> print("../public/components/sponsers.show.php",$recall->fetched);
    ?>
</body>
</html>