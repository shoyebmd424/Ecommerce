<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../image/style.css">
    <style>
        body{
            background: #6a7a76;
        }
        *{
            margin: 0;
            padding: 0;
        }
        .servicecontainer{
            border-radius: 2rem;
    box-shadow: 0 0 8px 0;
        }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"> E-Vehiles</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active " aria-current="page" href="/EV_site/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Category</a>
                    </li>
                </ul>
                <a href="additem.php"> <button class="btn btn-outline-success addbtn" type="submit">Add Category</button></a>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>



<!-- About container -->
    <div class="servicecontainer">
        <h1>About us </h1>
        <h3>We are provide Electric vehicles </h3>
        <hr>
        <div class="service">
            <p>
                autoX, been fuelled by passionate motoring junkies since September 2006!

                Our reviews meet the highest standards of editorial quality & integrity. Our readers and fans rate the
                quality of our content among the best in the motoring world globally.

                Our vision is to be the most influential, informative and entertaining automotive resource in India. Our
                mission is to put our fans in the driver’s seat of the most exciting industry in the country, and in
                doing so to find nuances in a story that no one else sees, to uncover a new perspective for our readers
                and fans.

                We are bound not only by a passion for what we do, but also by the values of transparency and
                objectivity in everything we do. Everything we do is driven by: Heart. Soul. Passion. Emotion.

                Comnet Publishers Pvt. Ltd. (an ISO 9001:2008 & 14001:2004 certified company) is a part of the leading
                Exhibitions India Group - a trade promotion group established in 1987.
            </p>
        </div>
        <hr>
        <h1> Contact us </h1>
        <p>shoyebmd424@gmail.com</p>
    </div>
    <?php include "footer.php"; ?>

</body>

</html>