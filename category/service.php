<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EV services/Services</title>
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



    <div class="servicecontainer">
        <h1>Welcome to my services</h1>
        <h3>we are giving 2 year service free off cost </h3><hr>
        <div class="service">
            <p>Petrol, Diesel, Hybrid or Electric - what’s the best mode of propulsion for your next luxury SUV? That’s what we set out to answer in our May 2022 issue as we assembled the latest vehicles from each genre – Audi Q5, BMW X3, Lexus NX 350h & Volvo XC40 Recharge – and headed out on an 800kms road trip to the hills. Filling up the remaining pages of our latest issue are our exciting first drive reports of the VW Virtus, Honda City e:HEV Hybrid, new Mercedes-Benz C-Class, and the updated Maruti Suzuki XL6. And, as always, there’s a whole lot more from the automotive industry and motorsports. Check it out here:

                Search By Year or Month
                Previous Issues
                Vol. 16 | Issue 6 | April 2022 April 2022
                Vol. 16 | Issue 5 | March 2022 March 2022
            </p>
        </div>
    </div>
    <?php include "footer.php" ;?>
</body>

</html>

