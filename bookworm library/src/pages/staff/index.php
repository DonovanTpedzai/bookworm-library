<?php
session_start();
if ($_SESSION['loggedIn'] == "Staff") {

    var_dump($_SESSION);
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tripago CMS</title>
        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous" defer></script>
        <!-- bootstrap -->
    </head>
    <!-- nav starts -->
    <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


    <!-- nav ends -->
    <body>
        <h1>
            Bookshelf
        </h1>

        <nav class="container">
            <div class="row">
                <div class="col">
                    <form action="#" method="get">
                        <button class="btn btn-primary btn-lg btn-block" type="submit" name="tab" value="hotelTab">Books</button>
                    </form>
                </div>
                <div class="col">
                    <form action="#" method="get">
                        <button class="btn btn-primary btn-lg btn-block" type="submit" name="tab" value="customerTab">Authors</button>
                    </form>
                </div>
                <div class="col">
                    <form action="#" method="get">
                        <button class="btn btn-primary btn-lg btn-block" type="submit" name="tab" value="staffTab">Year</button>
                    </form>
                </div>
                <div class="col">
                    <form action="#" method="post">
                        <button class="btn btn-info btn-lg btn-block" type="submit" name="logout" value="true">Logout</button>
                    </form>
                </div>
            </div>
        </nav>

        <br>
        <hr><br>

        <section>
            <h2>Current Book Available:</h2>

            <div id="booking-table">
                <!-- Header Row -->
                <div class="row p-4">
                    <div class="col">
                        Order No:
                    </div>
                    <div class="col">
                        Customer
                    </div>
                    <div class="col">
                        bookl
                    </div>
                    <div class="col">
                        Duration: 5 days
                    </div>
                    <div class="col">
                        Cost
                    </div>
                    <div class="col">

                    </div>
                    <div class="col">

                    </div>
                </div>
                <!-- Data -->
                <div class="row p-4">
                    <div class="col">
                        218456
                    </div>
                    <div class="col">
                        John
                    </div>
                    <div class="col">
                        Grand Hotel
                    </div>
                    <div class="col">
                        5 days
                    </div>
                    <div class="col">
                        800
                    </div>
                    <div class="col">
                        <button>
                            Generate Slip (csv)
                        </button>
                    </div>
                    <div class="col">
                        <button>
                            Cancel Order
                        </button>
                    </div>
                </div>
            </div>
        </section>

        </div>

        <br>
        <hr><br>

        <?php
        //  --- Tab / Page router ---

        if (isset($_GET['tab'])) {

            $tab = $_GET['tab'];

            switch ($tab) {
                case 'hotelTab':
                    echo "
                    <!-- hotels tab -->
                    <section>
                        <h2>
                            Hotels
                        </h2>
                        <div>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas id nam sunt necessitatibus porro neque nostrum possimus eveniet. Nemo blanditiis consequuntur eos porro perspiciatis labore facilis reprehenderit est harum veritatis?
                            </p>
                        </div>
                        <br>
                        <div>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas id nam sunt necessitatibus porro neque nostrum possimus eveniet. Nemo blanditiis consequuntur eos porro perspiciatis labore facilis reprehenderit est harum veritatis?
                            </p>
                        </div>
                    </section>                    
                    ";
                    break;

                case 'customerTab':
                    echo "
                    <!-- Customers tab -->
                    <section>
                        <h2>
                            Customers
                        </h2>
                        <div>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas id nam sunt necessitatibus porro neque nostrum possimus eveniet. Nemo blanditiis consequuntur eos porro perspiciatis labore facilis reprehenderit est harum veritatis?
                            </p>
                        </div>
                        <br>
                        <div>
                            <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus sit quibusdam vel libero, velit exercitationem quidem sequi quae magni sed numquam cumque alias omnis eos obcaecati aliquid accusamus expedita est.
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus sit quibusdam vel libero, velit exercitationem quidem sequi quae magni sed numquam cumque alias omnis eos obcaecati aliquid accusamus expedita est.
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus sit quibusdam vel libero, velit exercitationem quidem sequi quae magni sed numquam cumque alias omnis eos obcaecati aliquid accusamus expedita est.
                            </p>
                        </div>
                    </section>                    
                    ";
                    break;

                case 'staffTab':
                    echo "
                    <!-- Staff tab -->
                    <section>
                        <h2>
                            Staff
                        </h2>
                        <div>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas id nam sunt necessitatibus porro neque nostrum possimus eveniet. Nemo blanditiis consequuntur eos porro perspiciatis labore facilis reprehenderit est harum veritatis?
                            </p>
                            <ul>
                                <li>gkfjdhljreihjrtijhktrjh</li>
                                <li>gkfjdhljreihjrtijhktrjh</li>
                                <li>gkfjdhljreihjrtijhktrjh</li>
                                <li>gkfjdhljreihjrtijhktrjh</li>
                            </ul>
                        </div>
                        <br>
                        <div>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas id nam sunt necessitatibus porro neque nostrum possimus eveniet. Nemo blanditiis consequuntur eos porro perspiciatis labore facilis reprehenderit est harum veritatis?
                            </p>
                        </div>
                    </section>                    
                    ";
                    break;

                default:
                    echo "Error 500; Server router error";
                    break;
            }
        }

        if (isset($_POST['logout'])) {

            setcookie (session_id(), "", time() - 3600);
            session_destroy();
            session_write_close();

            header("Location:./../../index.php");
        }
        ?>


        

    </body>

    </html>

<?php
} else {

    echo "Error 403: Unauthorized Access..";
}
?>