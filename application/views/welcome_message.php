<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login y Registro</title>

</head>
<body>

<div id="container">
	<div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h2><login></h2>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="Correo">Correo</label>
                    <input type="text" name="Correo" id="Correo" class="form-comtrol">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" name="password" id="password" class="form-comtrol">
                </div>
                <input type="submit" value="Ingresar" class="btn btn-primary">
            </form>
            <input type="submit" value="Registrar" class="btn btn-primary">
    </div>

</div>

</body>
</html>
