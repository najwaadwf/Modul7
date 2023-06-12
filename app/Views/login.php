<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        {
            box-sizing: border-box;
        }

        body {
        font-size: 17px;
        font-family: 'Poppins';
        font-weight: bold;
        color: #5f0f40;
        background: linear-gradient(to right bottom, #ffe4f3, #ffbeef);
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0;
        padding: 0;
    }

    .container {
        align-items: center;
        max-width: 300px;
        width: 20cm;
        height: 8cm;
        padding: 30px;
        background-color: #ffeef2;
        border-radius: 50px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    h1 {
        color: #44001a;
        text-align: center;
        margin-bottom: 10px;
    }

    table {
        width: 100%;
    }

    th,
    td {
        padding: 10px;
        text-align: left;
    }

    th {
        width: 30%;
    }

    button {
        align-items: center;
        background-image: linear-gradient(144deg, #af40ff, #5b42f3 50%, #00ddeb);
        border: 0;
        border-radius: 50px;
        box-shadow: rgba(151, 65, 252, 0.2) 0 15px 30px -5px;
        box-sizing: border-box;
        color: #ffffff;
        display: flex;
        font-family: 'Poppins';
        font-size: 18px;
        justify-content: center;
        line-height: 1em;
        max-width: 100%;
        min-width: 140px;
        padding: 3px;
        text-decoration: none;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        white-space: nowrap;
        cursor: pointer;
        transition: all .3s;
    }

    button:active,
    button:hover {
        outline: 0;
    }

    button span {
        background-color: rgb(5, 6, 45);
        padding: 10px 24px;
        border-radius: 50px;
        width: 100%;
        height: 100%;
        transition: 300ms;
    }

    button:hover span {
        background: none;
    }

    button:active {
        transform: scale(0.9);
    }

    .flash-message {
        width: 100%;
        text-align: center;
        margin-bottom: 20px;
    }
    </style>
</head>

<body>
    <?php if (!empty(session()->getFlashdata('pesan'))) : ?>
        <div class="flash-message">
            <div class="alert alert-warning alert-dismissible" role="alert">
                <?php echo session()->getFlashdata('pesan'); ?>
            </div>
        </div>
    <?php endif; ?>
    <div class="container">
        <div class="row align-middle min-vh-100">
            <form action="<?= base_url('/login') ?>" method="post">
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="email">Username/Email address</label>
                    <input id="email" class="form-control" name="username" value="<?= old('username') ?>" />
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control" />
                </div>

                <button>
                    <span class="text">Sign In</span>
                </button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>
