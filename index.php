<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online voting system</title>

    <!-- bootsrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body class="bg-dark">
    <h1 class="text-info text-center p-3">Online voting System</h1>
    <div class="bg-info">
        <h2 class="text-center">Login</h2>
        <div class="container text-center py-2">
            <form action="./actions/login.php" method="POST" >
                <div class="mb-3">
                    <input type="text" class="form-control w-50 m-auto" name="username" placeholder="Enter your name" required="required">

                </div>
                <div class="mb-3">
                    <input type="text" class="form-control w-50 m-auto" name="mobile" placeholder="Enter your mobile" required="required" maxLength="10" minLength="10">

                </div>
                <div class="mb-3">
                    <input type="password" class="form-control w-50 m-auto" name="password" placeholder="Enter your password" required="required">

                </div>
                <div class="mb-3 ">
                    <select name="std" class="form-select w-50 m-auto">
                        <option value="group">Group</option>
                        <option value="voter">Voter</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-dark my-4 ">
                    Login
                </button>
                <p >
                    Don't have a account?
                    <a href="partials/registration.php" class="text-white">Register here</a>
                </p>
            </form>
        </div>
    </div>
</body>
</html>