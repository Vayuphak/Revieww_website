<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="../header/style.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        textarea {
            width: 1200px;
            height: 150px;
        }

        main form input[type="text"] {

            width: 300px;
            padding: 5px;
            margin-right: 10px;
            border-radius: 5px;

        }
    </style>
    <title>Document</title>
</head>

<body>
    <?php include "../header/header.php" ?>
    <main>
        <form action="../insert/insertdata.php" method="post" class="up container" enctype="multipart/form-data">
            <h1 class="mt-3 text-center">Update</h1>
            <div class="x form-group">
                <label class="m-3">Book TH</label>
                <input type="text" name="name" class="form-control m-3 width:50px">
            </div>
            <div class="form-group">
                <label class="m-3">Book ENG</label>
                <input type="text" name="eng" class="form-control m-3 width:50px">
            </div>
            <div class="form-group">
                <label class="m-3">Author</label>
                <input type="text" name="author" class="form-control m-3">
            </div>
            <div class="form-group">
                <label class="m-3">Score</label>
                <input type="text" name="score" placeholder="/10" class="form-control m-3">
            </div>
            <div class="form-group">
                <label class="m-3">Image</label>
                <input type="file" name="img" class="form-control m-3"
                    accept="image/gif, image/jpeg, image/png, image/jpg">
            </div>
            <div class="form-group">
                <label class="m-3">Content</label>
                <textarea name="content" class="form-control m-3"></textarea>
            </div>
            <div class="form-group">
                <label class="m-3">Translator</label>
                <input type="text" name="translator" class="form-control m-3"></ร>
            </div>
            <div class="form-group">
                <label class="m-3">สำนักพิมพ์</label>
                <input type="text" name="printingpress" class="form-control m-3"></ร>
            </div>
            <div class="form-group">
                <label class="m-3">พิมพ์เมื่อ</label>
                <input type="text" name="time" class="form-control m-3"></ร>
            </div>
            <div class="form-group">
                <label class="m-3">ISBN</label>
                <input type="text" name="isbn" class="form-control m-3"></ร>
            </div>
            <div class="form-group m-3">
                <label></label>
                <input type="checkbox" name="more[]" class="m-3" value="Reccommend">Reccommend
                <input type="checkbox" name="more[]" class="m-3" value="HITS">HITS
            </div>

            <input type="submit" name="submit" value="UPDATE" class="btn btn-success my-2">

        </form>
    </main>
</body>

</html>