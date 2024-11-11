<?php
include_once "../db/connect.php";
$start = 0;
$per_page = 16;
if ($_GET['ctg'] == "New_Arrivals") {
    $sql = "SELECT * FROM book";
} elseif ($_GET['ctg'] == "HITS") {
    $sql = "SELECT * FROM book WHERE more LIKE '%HITS%'";
} elseif ($_GET['ctg'] == "Reccommend") {
    $sql = "SELECT * FROM book WHERE more LIKE '%Reccommend%'";
} elseif ($_GET['ctg'] == "Search") {
    
    if (isset($_GET['se'])) {
        $search = $_GET['se'];
        $sql = "SELECT * FROM book WHERE book LIKE '%$search%' OR bookeng LIKE '%$search%' OR author LIKE '%$search%'";
    }

}
$result = $obj->query($sql);
$num = $result->rowCount();
$pages = ceil($num / $per_page);
if (isset($_GET['page_nr'])) {
    $page = intval($_GET['page_nr']); // Convert to integer
    $start = ($page - 1) * $per_page;

} else {
    $_GET["page_nr"] = 1;
}
?>