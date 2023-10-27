<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal PHP</title>
</head>
<body>
    <h3>Principal PHP</h3>
    <?php include 'condb.php';?>

    <br/><br/>
    <?php
    $sql = "SELECT idrecurso, nome, local, valor, url FROM recurso";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["idrecurso"]. " - Nome: " . $row["nome"]. " " . $row["url"]. "<br>";
        echo '<img src="' . $row["url"].'" alt="Salao de Festas" style="width: 520px;">';
      }
    } else {
      echo "0 results";
    }
    
    mysqli_close($conn);
    ?>

</body>
</html>