<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        *{ 
            font-family: "Poppins", sans-serif;
            font-weight: 400;
            font-style: normal;
         }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">    
        <a class="navbar-brand me-5 fw-bold fs-3" href="index.php">Empire Hotel</a>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active me-2" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link  me-2" href="#">Rooms</a>
            </li>
            <li class="nav-item">
            <a class="nav-link  me-2" href="#">Facilities</a>
            </li>
            <li class="nav-item">
            <a class="nav-link  me-2" href="#">About us</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Contact us</a>
            </li>
        </ul>
        <div class="d-flex">
            <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2 " data-bs-toggle="modal" data-bs-target="#loginmodal">
            Login
            </button>
            <button type="button" class="btn btn-outline-dark shadow-none " data-bs-toggle="modal" data-bs-target="#registermodal">
            Register
            </button>
        </div>
        </div>
    </div>
    </nav>
         
    <div class="modal fade" id="loginmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    </div>

    <div class="modal fade" id="registermodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <form>
        <div class="modal-header">
            <h5 class="modal-title d-flex align-items-center">
            <i class="bi bi-person-lines-fill fs-3 me-2"></i>
            User Registration
            </h5>
            <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <div class="mb-3">
             <label class="form-label">Email address</label>
             <input type="email" class="form-control shdow-none">
        </div>
        <div class="mb-4">
             <label class="form-label">Password</label>
             <input type="password" class="form-control shdow-none">
        </div>
         <div class="d-flex align-items-center justify-content-between mb-2">
            <button type="submit"class="btn btn-dark shadow-none">
             LOGIN
            </button>
            <a href="javascript: void(0)"class="text-secondary text-decoration-none">Forget Password?</a>
         </div>
 </div>      
    </form>
      
    </div>
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
