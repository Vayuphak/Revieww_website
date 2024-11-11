<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="style.css">

    <title>Book review</title>
</head>

<body>
    <section class="bar  navbar sticky-top">
        <div class="logo m-4">
            <h4 class="fw-bolder "><a href="../main/index.php">Book review</a></h4>
            <form action="../category/category.php" id="myForm" method="get">
            <input type="hidden" name="ctg" value="Search">
                <input class="tf mx-3" type="text" placeholder="" name="se" required>
                <span onclick="submitForm()"><i class="fa-solid fa-magnifying-glass "
                        style="color: #ffffff;"></i></span>

            </form>
            <script>
                function submitForm() {
                    
                    let searchInput = document.querySelector('input[name="se"]');
                    if (searchInput.value.trim() === "") {
                        alert("Please enter a search term.");
                        return;
                    }
                    document.getElementById("myForm").submit();
                }
            </script>
        </div>
        <div class="d-flex  ">
            <ul class="d-flex list-inline justify-content-center">

                <li class="mx-3 mt-3"><a href="#">LIKE</a></li>
                <li class="mx-3 mt-3"><a href="mailto:chomphunuch45@gmail.com"><i class="fa-solid fa-envelope mx-3 "></i></a></li>
            </ul>
        </div>
    </section>

</body>

</html>