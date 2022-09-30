<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookworm|Library</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous" defer></script>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
    />
    <!-- bootstrap -->
</head>
<style>
body {
  /* background-image: url('https://www.brockworthlink.org.uk/wp-content/uploads/2020/05/bookshelf-3981515_1280.png'); */
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
<!-- https://www.brockworthlink.org.uk/wp-content/uploads/2020/05/bookshelf-3981515_1280.png -->
<body>

   <h1 class="container">Bookworm local library</h1></p> 
    <br><hr><br>

    <!-- Customer -->
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <h2>
                    Login
                </h2>
                <form action="#" method="post">
                    <input type="email" name="customerEmail" placeholder="staff ID" >
                    <input type="password" name="custmerPassword" placeholder="password" >
                    <button type="submit" name="submit" value="customerLogin">Login</button>
                </form>
            </div>
            <div class="col-sm">
                <h2>
                    Register
                </h2>
                <form action="#" method="post">
                    <input type="email" name="customerEmail" placeholder="Email Address.." >
                    <input type="text" name="customerUsername" placeholder="Username.." >
                    <input type="password" name="custmerPassword" placeholder="Enter password.." >
                    <input type="password" name="custmerPasswordConfirm" placeholder="Confirm entered password.." >
                    <button type="submit" name="submit" value="customerRegister">Register</button>
                </form>
            </div>
        </div>
    </div>

    <br><hr><br>

    <!-- Staff -->
    <div class="container">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Staff Login
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li>
                    <a class="dropdown-item" href="#">
                        <div>
                            <form action="#" method="post">
                                <input type="text" name="staffId" placeholder="staff ID" >
                                <input type="password" name="staffPassword" placeholder="password" >
                                <button type="submit" name="submit" value="staffLogin">Login</button>
                            </form>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Staff -->

    <?php
    
        // --- Authentication Router ---
        if ( isset($_POST['submit']) ) {

            $submitType = $_POST['submit'];
            
            switch ($submitType) {

                case 'customerLogin':
                    session_start();
                    $_SESSION['loggedIn'] = "Customer";
                    header("Location: ./pages");
                    break;

                case 'customerRegister':
                    session_start();
                    $_SESSION['loggedIn'] = "New Customer";
                    header("Location: ./pages");
                    break;

                case 'staffLogin':
                    session_start();
                    $_SESSION['loggedIn'] = "Staff";
                    header("Location: ./pages/staff");
                    break;
                
                default:
                    echo "Invalid Login. Please log in as a registered user, or register as a new user on the system.";
                    break;
            }

        }
        // -- Authentication Router 
    ?>
</body>

</html>