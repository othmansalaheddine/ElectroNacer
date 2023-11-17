
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="shortcut icon" type="x-icon" href="assets/png/EE.png">
   <title>LOG-IN</title>
</head>
<body style="background-image: url(assets/png/bg.png);">
<div class="container-fluid">
    <img class="img-fluid" src="assets/svg/LOGO.svg" alt="" style="margin-top: 2rem;margin-left: 36%;">

</div>
<form  action="verification.php" method="POST" style="background-color:  rgba(0, 0, 0, 76%);;border-radius: 5%;  " class="position-absolute top-50 start-50 translate-middle">
    <div class="container-fluid">
        <h1 style="font-family: 'stretch pro';color: aliceblue; padding-left: 12rem; padding-right: 12rem ; margin-top: 3rem;" class="h1">LOOG IN</h1>
    </div>
    <div class="input-group mb-3 container-sm" style="margin-top: 6rem;max-width: 60%;height: 3rem; ">
        <span class="input-group-text" id="basic-addon1">@</span>
        <input type="text" class="form-control" placeholder="username" name="username"aria-label="Username" aria-describedby="basic-addon1">
      </div>
      <div class="input-group mb-3 container-sm" style="margin-top: 3rem;max-width: 60%;height: 3rem; ">
        <span class="input-group-text" id="basic-addon1" >*</span>
        <input type="password" class="form-control" placeholder="password" name="password" id="exampleInputPassword1" aria-label="Username" aria-describedby="basic-addon1">
      </div>
    
    <div class="container-fluid" style="margin-left: 17rem;margin-top: 4rem;">
    <a href=""><button  type="submit" id='submit' value='LOGIN' class="btn  " style="margin-bottom: 2rem; align-self: center; background-color: #DBFF00;width: 18%;" >log in</button></a>
</div>
<?php
 if(isset($_GET['erreur'])){
 $err = $_GET['erreur'];
 if($err==1 || $err==2)
 echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
 }
 ?>
  </form>





















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>