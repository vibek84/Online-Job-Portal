<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <title>Register</title>
    <style>
        body{
            background-image:url(bgimage.jpg);
            background-size:cover;
        }
        form{
            background-color: #fff;
            margin-top:6em;
            margin-left:30em;
            margin-right:10em;
            padding: 30px;
            box-shadow: 10px 10px 8px 10px #888888;
        }
    </style>
</head>
<body>
    <div class="container">
    <form>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <p style="text-align:center;">New User ? <br>Create Acoount <a href="register.php">Sign Up</a></p>
</form>
    </div>
</body>
</html>