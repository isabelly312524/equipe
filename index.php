<?php
include 'dados.php';
include 'funcao.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conheça nossa equipe!</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
</head>
<body>
     <div class="container py-5">
        <h1 class="mb-4 text-center">Conheça Nossa Equipe</h1>
        <div class="row">
            <?php foreach ($equipe as $membro) {
                renderizar_card_membro($membro);
            } ?>
        </div>
    </div>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>