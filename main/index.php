<?php include "../db/connect.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="dec.css">
    <link rel="stylesheet" href="../sheader/style.css">
    <link rel="stylesheet" href="../header/style.css">
   
    <title>ireadbooks_th</title>
</head>

<body>
    <?php include_once "../header/header.php";
    include_once "../sheader/sheader.php"; ?>

    <h1 class="s">So Hot Right Now</h1>
    <main class="content">
        <h2 class="mx-5 mt-5 ">New Arrivals</h2>
        <div class="ctn ">

            <?php $sql = "SELECT * FROM book ORDER BY `t-upload` DESC LIMIT 4";
            $result = $obj->query($sql);


            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                ?>
                <!-- #region -->




                <div class="book my-5 ">
                    <a href="../content/content.php?id=<?php echo $row['id'] ?>">
                        <div class="img">


                            <img src="<?php echo $row['img']; ?>">
                        </div>
                    </a>
                    <a href="../content/content.php?id=<?php echo $row['id'] ?>" class="text-decoration-none">
                        <div class="name">
                            <h3>
                                <?php echo $row['book']; ?>
                            </h3>
                            <h4 class="author text-dark">
                                <?php echo $row['author'];
                                ?>
                            </h4>
                        </div>
                    </a>
                </div>




            <?php } ?>



        </div>
        <h2 class="mx-5 mt-5 ">HITS</h2>
        <div class="ctn">

            <?php $sql = "SELECT * FROM book WHERE more LIKE '%HITS%' ORDER BY `t-upload` DESC LIMIT 4";
            $result = $obj->query($sql);


            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                ?>
                <!-- #region -->




                <div class="book">
                    <a href="../content/content.php?id=<?php echo $row['id'] ?>">
                        <div class="img">


                            <img src="<?php echo $row['img']; ?>">
                        </div>
                    </a>
                    <a href="../content/content.php?id=<?php echo $row['id'] ?>" class="text-decoration-none">
                        <div class="name">
                            <h3>
                                <?php echo $row['book']; ?>
                            </h3>
                            <h4 class="author text-dark">
                                <?php echo $row['author'];
                                ?>
                            </h4>
                        </div>
                    </a>
                </div>




            <?php } ?>



        </div>
        <h2 class="mx-5 mt-5 ">Reccommend</h2>
        <div class="ctn">

            <?php $sql = "SELECT * FROM book WHERE more LIKE '%Reccommend%' LIMIT 4";
            $result = $obj->query($sql);


            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                ?>
                <!-- #region -->




                <div class="book">
                    <a href="../content/content.php?id=<?php echo $row['id'] ?>">
                        <div class="img">


                            <img src="<?php echo $row['img']; ?>">
                        </div>
                    </a>
                    <a href="../content/content.php?id=<?php echo $row['id'] ?>" class="text-decoration-none">
                        <div class="name">
                            <h3>
                                <?php echo $row['book']; ?>
                            </h3>
                            <h4 class="author text-dark">
                                <?php echo $row['author'];
                                ?>
                            </h4>
                        </div>
                    </a>
                </div>




            <?php } ?>



        </div>



    </main>
</body>

</html>