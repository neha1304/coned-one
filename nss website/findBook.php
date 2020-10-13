<?php

require './connect.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/findbook.css">

    <title>find book</title>
    <style>
        label {
            font-size: 1.3rem;
        }
    </style>
</head>

<body>

    <div class=" jumbotron col-12 ">
        <h1>Audio Books Section</h1>
    </div>


    <div class="container col-10">
        <form method="post" action="./displayBook.php">


            <div class="form-group col-md-4">
                <label for="education">Education</label>
                <select id="education" name="education" class="form-control" required>

                    <option name="nursery" value="nursery" selected>Nursery</option>
                    <option name="junior" value="junior">Junior</option>
                    <option name="senior" value="senior">Senior</option>


                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="category">Type of Book </label>
                <select id="category" name="type" class="form-control" required>
                    <option name="rhymes" value="rhymes" selected>rhymes</option>

                    <option name="shortstories" value="shortstories">Short stories</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="language">Language </label>
                <select id="language" name="language" class="form-control" required>
                    <option name="english" value="english" selected>English</option>
                    <option name="hindi" value="hindi">Hindi</option>
                    <option name="marathi" value="marathi">Marathi</option>
                </select>
            </div>


            <button type="submit" value="submit" name="submit" class="form-group col-3 col-md-1 offset-4 offset-md-1 btn btn-dark">Search</button>

        </form>
        <form class="form-inline">
            <div class="input-group col-md-4">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Options</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01">
                    <option selected>Choose...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="input-group col-md-4">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Options</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01">
                    <option selected>Choose...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </form>


        <!--trial for form-inline  -->
        <!-- <form class="form-inline">
            <div class="form-group mb-2">
                <label for="staticEmail2" class="sr-only">Email</label>
                <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="email@example.com">
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <label for="inputPassword2" class="sr-only">Password</label>
                <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary mb-2">Confirm identity</button>
        </form> -->
        <!-- <p>
                <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Link with href
                </a>
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    Button with data-target
                </button>
            </p>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                </div>
            </div> -->
    </div>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>


</html>