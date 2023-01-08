<html>

<head>
    <title>Add Data</title>
</head>

<body>
    <?php
    $parts = parse_url($_SERVER['REQUEST_URI']);
    parse_str($parts['query'], $query);
    $id=$query['id'];
    $codigo = '1';
    $amount = $_POST['amount'];
    if (empty($id) || empty($amount)) {
        if (empty($id)) {
            echo "<font color='red'>id field is empty.</font><br/>";
        }
        if (empty($amount)) {
            echo "<font color='red'>amount field is empty.</font><br/>";
        } 
    } else { 
        $sql = $dbh->prepare("INSERT INTO users_confrontation( 
                             id_users, 
                             id_confrontation, 
                             codigo, 
                             amount) 
                             VALUES (
                             :_idusers,
                             :_idconfrontation,
                             :_codigo,
                             :_amount)");
            $sql->bindParam(':_idusers', $_SESSION['id']);
            $sql->bindParam(':_idconfrontation', $id);
            $sql->bindParam(':_codigo', $codigo);
            $sql->bindParam(':_amount', $amount);
            $sql->execute();

            header('Location: apuesta');

    } 
 
?>
</body>

</html>