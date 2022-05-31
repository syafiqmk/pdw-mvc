<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title'] ?></title>
    <!-- link css -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        #form {
            margin-top: 100px;
            width: 50vh;
        }
    </style>
</head>
<body>

    <div class="container" id="form">
        <h2>Login</h2>
        
        <!-- form -->
        <form action="<?= BASE_URL;?>/login/prosesLogin" method="post">
            <div class="mb-3">
                <label for="">Username</label>
                <input type="text" name="user" class="form-control" autocomplete="off" placeholder="Username" required>
            </div>
            <div class="mb-3">
                <label for="">Password</label>
                <input type="password" name="pass" class="form-control" autocomplete="off" placeholder="Password" required>
            </div>
            <div class="mb-3">
                <button class="btn btn-primary" type="submit">Login</button>
                <button class="btn btn-danger" type="reset">Reset</button>
            </div>
        </form>

        <!-- flasher -->
        <div class="row">
            <div class="col-lg-12">
                <?php Flasher::flash(); ?>
            </div>
        </div>
        
    </div>
    


    <!-- link javascript -->
    <script src="js/jsquery-3.6.0.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>