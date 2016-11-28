<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Flat HTML5/CSS3 Login Form</title>
      <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="login-page">
      <div class="form">
            {{ Form::open(array('route' => 'login.attempt')) }}
              <input name="username" type="text" placeholder="username"/>
              <input name="name" type="text" placeholder="name"/>
              <input name="password" type="password" placeholder="password"/>
              <input name="email" type="text" placeholder="email address"/>
              <button>create</button>
              <p class="message">Already registered? <a href="#">Sign In</a></p>
            {{Form::close()}}
            {{Form::open(array('route' => 'login.attempt', 'class'=>'register-form')) }}
              <input name="username" type="text" placeholder="username"/>
              <input name="password" type="password" placeholder="password"/>
              <button>login</button>
              <p class="message">Not registered? <a href="#">Create an account</a></p>
            {{Form::close()}}
      </div>
    </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>

</body>
</html>
