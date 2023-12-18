<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classement</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php include_once "./header.php"; include_once "./connxionBD.php"; $i = 1;?>

<div class="content-wrapper">
<?php 
        try {
            $query = $bdd->prepare("SELECT * FROM Joueur");
            $query->execute();
            $detailsJoueur = $query->fetchAll(PDO::FETCH_ASSOC);
        
        } catch (PDOException $e) {
            die('Erreur lors de la récupération des détails du joueur : ' . $e->getMessage());
        }
        
    ?>

<h1 style = text-align:center;>Classement</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Position</th>
      <th scope="col">Pseudo</th>
      <th scope="col">Temps</th>
      <th scope="col">Points</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table-success">
      <th scope="row"><?php echo $i ?></th>
      <td><?php echo htmlspecialchars($detailsJoueur[0]['nom'],ENT_QUOTES,'UTF-8')?></td>
      <td><?php echo htmlspecialchars($detailsJoueur[0]['bio'],ENT_QUOTES,'UTF-8')?></td>
      <td>100K</td>
    </tr>
    <tr>
      <th scope="row"><?php echo ++$i ?></th>
      <td><?php echo htmlspecialchars($detailsJoueur[1]['nom'],ENT_QUOTES,'UTF-8')?></td>
      <td><?php echo htmlspecialchars($detailsJoueur[1]['bio'],ENT_QUOTES,'UTF-8')?></td>
      <td>10000</td>
    </tr>
    <tr>
      <th scope="row"><?php echo ++$i ?></th>
      <td><?php echo htmlspecialchars($detailsJoueur[2]['nom'],ENT_QUOTES,'UTF-8')?></td>
      <td><?php echo htmlspecialchars($detailsJoueur[2]['bio'],ENT_QUOTES,'UTF-8')?></td>
      <td>50000</td>
    </tr>
    <tr>
      <th scope="row"><?php echo ++$i ?></th>
      <td><?php echo htmlspecialchars($detailsJoueur[3]['nom'],ENT_QUOTES,'UTF-8')?></td>
      <td><?php echo htmlspecialchars($detailsJoueur[3]['bio'],ENT_QUOTES,'UTF-8')?></td>
      <td>50000</td>
    </tr>
  </tbody>
</table>

    
</div>

<?php include_once "./footer.php"; ?>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
