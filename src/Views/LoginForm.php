<?php
namespace Views;

$server = $_SERVER["SERVER_NAME"];

namespace Views;


class LoginForm extends View
{
    public function __construct()
    {
        $this->content = <<<LOGIN_FORM
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Example Login Form</title>
        <link href="http://$server/public/style.css" rel="stylesheet">
    </head>
    <body>
<<<<<<< HEAD:src/Views/login.php
        <div class="container">
            <form class="form-signin" method="POST" action="auth">
                <h2 class="form-signin-heading">Please sign in</h2>
                <label for="username" class="sr-only">Username</label>
                <input type="text" id="username" class="form-control" placeholder="Username" required autofocus name="username" />
                <label for="password" class="sr-only">Password</label>
                <input type="password" id="password" class="form-control" placeholder="Password" required name="password" />
                <div class="radio">
                    <label>
                        <input type="radio" name="auth" value="in-memory" checked> In Memory
                        <input type="radio" name="auth" value="file-based"> File Based
                    </label>
                </div>
                <button class="btn" name="Login" type="submit" value="Login" />Login</button>
=======
        <div align="center">
            <form method="POST" action="/auth">
                Username: <input type="text" name="username" size="15" /><br />
                Password: <input type="password" name="password" size="15" /><br />
                <p><input type="submit" value="Login" /></p>
>>>>>>> upstream/master:src/Views/LoginForm.php
            </form>
        </div>
    </body>
</html>
LOGIN_FORM;
    }
}
