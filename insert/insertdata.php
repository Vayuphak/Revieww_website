<?php
include_once "../db/connect.php";
$name = $_POST["name"];
$author = $_POST["author"];
if(isset($_POST["eng"])){
    $eng = $_POST["eng"];
}
else{
    $eng ="";
}
$score = $_POST["score"];
$content = $_POST["content"];
$translator = $_POST["translator"];
$printingpress = $_POST["printingpress"];
$time = $_POST["time"];
$isbn = $_POST["isbn"];
if(isset($_POST["more"])){
$more = $_POST["more"];
$emmore=implode(",",$more);
}
else{
    $emmore="";
}

$statusMsg = "";
$targetDir = "../upload/";
if (isset($_POST["submit"])) {
    if (!empty($_FILES["img"]["name"])) {
        $fileName = basename($_FILES["img"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
        $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
        if (in_array($fileType, $allowTypes)) {
            if (move_uploaded_file($_FILES["img"]["tmp_name"], $targetFilePath)) {
                $insert = $obj->prepare("INSERT INTO book(book,author,img,bookeng,score,content,translator,printingpress,t,isbn,more,`t-upload`) VALUES (?,?,?,?,?,?,?,?,?,?,?,NOW())");
                $insert->bindParam(1, $name);
                $insert->bindParam(2, $author);
                $insert->bindParam(3, $targetFilePath);
                $insert->bindParam(4, $eng);
                $insert->bindParam(5, $score);
                $insert->bindParam(6, $content);
                $insert->bindParam(7, $translator);
                $insert->bindParam(8, $printingpress);
                $insert->bindParam(9, $time);
                $insert->bindParam(10, $isbn);
                $insert->bindParam(11, $emmore);
                $insert->execute();
                header("location:../update/update.php");
                exit(0);
            }
        }
    }
}

?>