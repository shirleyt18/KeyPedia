<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Poppins:wght@300&display=swap"
        rel="stylesheet">
    <title>Register | Keypedia</title>
</head>

<body style="font-family: 'Poppins', sans-serif">
    {{-- setting button size & web background/font color on css --}}
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #3B4282; height: 70px">
        <div class="container-fluid mx-4">
            <a class="navbar-brand" href="/" style="font-family: 'Fredoka One', cursive; color:white">Keypedia</a>
            <div>
                <button class="btn btn-outline-light" type="submit" style="width: 95px">Login</button>
                {{-- tambahain hover jdi gelap sedikit --}}
                <button class="btn btn-light mx-2" type="submit" style="width: 95px;">Register</button>
                <span style="color: white">DateTime</span>
            </div>
        </div>
        </div>
    </nav>

    <div class="d-flex justify-content-center align-items-center" style="margin: 100px">
        <div class="card d-flex justify-content-center" style="width: 400px; height: 860px;">
            <h4 class="text-center" style="font-family: 'Fredoka One', cursive;">Register Page</h4>
            <form class="mx-4">
                {{-- Username --}}
                <div class="mb-4 mt-3">
                    <label for="exampleInputUsername1" class="form-label">Username</label>
                    <input type="text" class="form-control" id="exampleInputUsername1">
                </div>
                {{-- Email --}}
                <div class="mb-4">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                {{-- Password --}}
                <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                {{-- Confirm Password --}}
                <div class="mb-4">
                    <label for="exampleConfirmPassword1" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="exampleConfirmPassword1">
                </div>
                {{-- Address --}}
                <div class="mb-4">
                    <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                {{-- Gender --}}
                <div class="mb-4">
                    <label class="form-label d-block">Gender</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                            value="option1">
                        <label class="form-check-label" for="inlineRadio1">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                            value="option2">
                        <label class="form-check-label" for="inlineRadio2">Female</label>
                    </div>
                </div>
                {{-- Date of birth --}}
                <div class="mb-4">
                    <label for="exampleDOB1" class="form-label">Date of Birth</label>
                    <input type="date" class="form-control" id="exampleDOB1">
                </div>
                {{-- Register Button --}}
                <div class="d-flex justify-content-center">
                    {{-- create css for all button --}}
                    <button type="submit" class="btn"
                        style="width: 95px; background-color:#3B4282; color: white">Register</button>
                </div>
            </form>
        </div>
    </div>

    <footer style="background-color: #3B4282">
        <div class="text-center p-3" style="color: white">
            <span>Made by Keypedia CEO-ES-2021</span>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
