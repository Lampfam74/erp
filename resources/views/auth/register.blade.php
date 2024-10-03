<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/style.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<title>SEMIG-SA | ERP</title>
</head>
<body style="overflow-x:auto;">
    <div class="container login-container">
      <div class="row">
        <div class="col-md-6 ads" style="padding: 20%">
          <h1><span id="fl">SEMIG</span><span><sup id="sl">SA</sup></span></h1>
          <div class="text-center" >
            EXPLOITATION
          </div>
        </div>
        <div class="col-md-6 login-form">
          <div class="profile-img">
            <img src="img\logo.jpg" alt="profile_img" height="140px" width="140px;">
          </div>
          <h3>register</h3>
          <form method="POST" action="{{ route('register') }}">
          @csrf
            <div class="form-group">
              <input type="name" class="form-control" name="name" placeholder="name" :value="old('name')">
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" placeholder="Email" :value="old('email')">
            </div>
            <div class="form-group">
                <select class="form-select form-control" name="profil"
							required aria-label="Default select example">
							<option value="DC">Directrice Commercial </option>
							<option value="RC">Responsable Commercial</option>
							<option value="RC">Responsable Commercial</option>
							<option value="AC">Agent Commercial</option>
							<option value="DE">Directeur Exploitation</option>
                            <option value="RE" >Responsable  Exploitation</option>
							<option value="CC">Chef Comptable</option>
							<option value="AE">Agent Exploitation</option>
							<option value="autres">autres</option>
				</select>
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Mot de passe" >
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="password_confirmation" placeholder="confirmation Mot de passe">
              </div>
            <div class="form-group">
              <button type="submit" class="btn btn-success btn-lg btn-block">Register</button>
            </div>
            <div class="form-group forget-password">
                <a href="{{ route('login') }}">Se connecter </a>
            </div>
          </form>
          @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
        </div>
      </div>
    </div>
</body>
</html>