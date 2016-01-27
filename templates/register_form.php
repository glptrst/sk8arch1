<form action="register.php" method="post">
    <fieldset>
        <div class="form-group">
            <label for="InputEmail">Email address</label><br />
            <input class="form-control" name="email" placeholder="Email" type="email"/>
        </div>
        <div class="form-group">
            <label for="InputUsername">Username</label><br />
            <input autofocus class="form-control" name="username" placeholder="Username" type="text"/>
        </div>
        <div class="form-group">
            <label for="InputPassword">Password</label><br />
            <input class="form-control" name="password" placeholder="Password" type="password"/>
        </div>
        <div class="form-group">
            <label for="ConfirmPassword">Confirm password</label><br />
            <input class="form-control" name="confirmation" placeholder="Password" type="password"/>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Register</button>
        </div>
    </fieldset>
</form>
