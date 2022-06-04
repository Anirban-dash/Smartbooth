<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smartbooth|Admin</title>
    <link href="../img/favicon.ico" rel="icon">
    <style>
    body {
        background: #000
    }

    .card {
        border: none;
        height: 320px
    }

    .forms-inputs {
        position: relative
    }

    .forms-inputs span {
        position: absolute;
        top: -18px;
        left: 10px;
        background-color: #fff;
        padding: 5px 10px;
        font-size: 15px
    }

    .forms-inputs input {
        height: 50px;
        border: 2px solid #eee
    }

    .forms-inputs input:focus {
        box-shadow: none;
        outline: none;
        border: 2px solid #000
    }

    .btn {
        height: 50px
    }

    .success-data {
        display: flex;
        flex-direction: column
    }

    .bxs-badge-check {
        font-size: 90px
    }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="hhttps://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
            <h2>Admin Login</h2>
                <div class="card px-5 py-5" id="form1">
                    <form action="userAdd.php">
                    <div class="form-data" v-if="!submitted">
                        <div class="forms-inputs mb-4"> <span>Username</span> <input autocomplete="off"
                                type="text" v-model="email"
                                v-bind:class="{'form-control':true, 'is-invalid' : !validEmail(email) && emailBlured}"
                                v-on:blur="emailBlured = true" required>
                        </div>
                        <div class="forms-inputs mb-4"> <span>Password</span> <input autocomplete="off" type="password"
                                v-model="password"
                                v-bind:class="{'form-control':true, 'is-invalid' : !validPassword(password) && passwordBlured}"
                                v-on:blur="passwordBlured = true" required>
                        </div>
                        <div class="mb-3"> <button type="submit"
                                class="btn btn-dark w-100">Login</button> </div>
                    </div>
</form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>