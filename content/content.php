<?php include_once "../db/connect.php";
$id = $_GET["id"];
$sql = "SELECT * FROM book WHERE id= $id";
$sql = "SELECT * FROM book WHERE id=$id";
$result = $obj->query($sql);
$row = $result->fetch(PDO::FETCH_ASSOC); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../header/style.css">

    <link rel="stylesheet" href="style.css">
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>

    <title>ireadbooks</title>
</head>

<body>
    <?php include_once "../header/header.php"; ?>

    <div class="bgg d-flex w-100 ">
        <div class="img    my-5 ">
            <img src="<?php echo $row["img"]; ?>">
        </div>
        <div class="  w-40  my-5 me-3 p-5 ms-5">
            <h1>ชื่อหนังสือ:
                <?php echo $row["book"]; ?>
            </h1>
            <h1>
                <?php echo $row["bookeng"]; ?>
            </h1>
            <h1>นักเขียน:
                <?php echo $row["author"]; ?>
            </h1>
        </div>
    </div>
    <div class="d-flex ">
        <div class=" w-50  m-5 p-3">
            <p>ผู้เขียน:
                <?php echo $row["author"]; ?>
            </p>
            <p>ผู้แปล:
                <?php echo $row["translator"]; ?>
            </p>
            <p>สำนักพิมพ์:
                <?php echo $row["printingpress"]; ?>
            </p>
            <p>พิมพ์เมื่อ:
                <?php echo $row["t"]; ?>
            </p>
            <p>ISBN:
                <?php echo $row["isbn"]; ?>
            </p>
        </div>
        <div class="w-50  my-5 me-3">
            <h2>Score
                <?php echo $row["score"]; ?>/10
            </h2>
            <p>
                <?php echo $row["content"]; ?>
        </div>
</body>

</html>