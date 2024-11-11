<?php
include_once "../db/connect.php";
include "../pagination/pagination.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../header/style.css">
    <link rel="stylesheet" href="../main/dec.css">
    <link rel="stylesheet" href="style.css">
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
<style>
.ctn {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    max-width: 100%;
    
}
.book  img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
    </style>
    <title>ireadbooks_th</title>
</head>

<body>
    <?php include_once "../header/header.php"; ?>

    <h1 class="s">
        <?php
        if ($_GET['ctg'] == "New_Arrivals") {
            echo "New Arrivals";
        } else {
            echo $_GET['ctg'];
        } ?>
    </h1>
    <?php if (isset($_GET['se']) && $num == 0) {
        echo "<h4 class='m-5 fw-light'> Search not found</h4>";
    } ?>
    <main class="content">
        <?php
        if ($_GET['ctg'] == "New_Arrivals") {
            $sql = "SELECT * FROM book ORDER BY `t-upload` DESC LIMIT $start,$per_page";
            $result = $obj->query($sql);
        }
        if ($_GET['ctg'] == "HITS") {
            $sql = "SELECT * FROM book WHERE more LIKE '%HITS%' ORDER BY `t-upload` DESC LIMIT $start,$per_page";
            $result = $obj->query($sql);
        }
        if ($_GET['ctg'] == "Reccommend") {
            $sql = "SELECT * FROM book WHERE more LIKE '%Reccommend%' ORDER BY `t-upload` DESC LIMIT $start,$per_page";
            $result = $obj->query($sql);

        }
        if ($_GET['ctg'] == "Search") {
            if (isset($_GET['se'])) {
               // $search = $_GET["se"];   
          
                $result = $obj->prepare("SELECT * FROM book WHERE book LIKE :search OR bookeng LIKE :search OR author LIKE :search ORDER BY `t-upload` DESC");
                $result->bindParam(':search', $search, PDO::PARAM_STR);
                $result->execute();
                //$result->fetchAll(PDO::FETCH_ASSOC);
                

                //$sql = "SELECT * FROM book WHERE book LIKE '%$search%' OR bookeng LIKE '%$search%' OR author LIKE '%$search%'ORDER BY `t-upload` DESC";
            }
        }

       // $result = $obj->query($sql); ?>
        <div class="ctn">
            <?php
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) { ?>
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
            <?php }
            ?>
        </div>
    </main>
    <?php if ($pages > 1) { ?>
        <div class="pg mt-5">
            <ul class="pagination ">
                <li>
                    <?php if ($_GET["page_nr"] == 1) {
                        echo "<a>First</a>";
                    } else { ?>
                        <a
                            href="?ctg=<?php echo $_GET['ctg'] ?><?php echo isset($_GET['se']) ? '&se=' . $_GET['se'] : '' ?>&page_nr=1">First</a>
                    <?php } ?>
                </li>
                <?php if (isset($_GET['page_nr']) && $_GET['page_nr'] > 1) { ?>
                    <li><a
                            href="?ctg=<?php echo $_GET['ctg'] ?><?php echo isset($_GET['se']) ? '&se=' . $_GET['se'] : '' ?>&page_nr=<?php echo $_GET['page_nr'] - 1; ?>">Previous</a>
                    </li>
                <?php } else { ?>
                    <li><a>Previous</a></li>
                <?php } ?>
                <span class="page_number d-flex">
                    <?php for ($i = 1; $i <= $pages; $i++) {

                        if ($i == $_GET["page_nr"]) {
                            echo "<li><a class='active' >" . $i . "</a></li>";
                        } else {
                            echo "<li><a href='?ctg=" . $_GET['ctg'] . (isset($_GET['se']) ? '&se=' . $_GET['se'] : '') . "&page_nr=" . $i . "'>" . $i . "</a></li>";
                        }
                    }
                    ?>
                </span>
                <?php if (isset($_GET['page_nr']) && $_GET['page_nr'] < $pages) { ?>
                    <li><a
                            href="?ctg=<?php echo $_GET['ctg'] ?><?php echo isset($_GET['se']) ? '&se=' . $_GET['se'] : '' ?>&page_nr=<?php echo $_GET['page_nr'] + 1 ?>">Next</a>
                    </li>
                <?php } else { ?>
                    <li><a>Next</a></li>
                <?php } ?>
                <li>
                    <?php if ($_GET["page_nr"] == $pages) {
                        echo "<a>Last</a>";
                    } else { ?>
                        <a
                            href="?ctg=<?php echo $_GET['ctg'] ?><?php echo isset($_GET['se']) ? '&se=' . $_GET['se'] : '' ?>&page_nr=<?php echo $pages; ?>">Last</a>
                    <?php } ?>
                </li>
            </ul>
        </div>
    <?php } ?>
</body>
</html>