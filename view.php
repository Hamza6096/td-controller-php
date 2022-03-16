
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>

<div class="container col-6">
Afficher un tableau HTML des notes donc 2 colonnes et 6 rangées (dont une d'entête).
<table class="table">
        <thead>
            <tr>
                <th>Prénom</th>
                <th>Note</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($notes as $prenom => $note) {
            ?>
                <tr>
                    <td><?= $prenom ?></td>
                    <td><?= $note ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <td>MOYENNE</td>
                <td><?= $moyenne?></td>
            </tr>
        </tfoot>
    </table>
</div>

</body>

</html>