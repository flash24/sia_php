<html lang="en"><head>        <meta charset="utf-8">        <meta name="viewport" content="width=device-width, initial-scale=1.0">        <meta name="description" content="">        <meta name="author" content="">           <form action="/sia_php/login" id="EmpleadoLoginForm" method="post"  class="form-signin">            <div class="panel panel-primary">                <input type="hidden" name="_method" value="POST">                <div class="panel-heading">                    <h2 class="form-signin-heading">Iniciar Sesion</h2>                </div>                <input  placeholder="Usuario"class="form-control" name="data[Empleado][usuario]" maxlength="50" type="text" id="EmpleadoUsuario" required="required">                <input class="form-control" placeholder="Password" name="data[Empleado][password]" type="password" id="EmpleadoPassword" required="required">                 <!--<input type="text"  placeholder="Email address" autofocus="">-->                 <!--<input type="password" class="form-control" placeholder="Password">-->                <label class="checkbox">                    <input type="checkbox" value="remember-me"> Remember me                </label>                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>            </div>        </form>        <?phpSecurity::setHash('blowfish');        $hash = Security::hash('123');        echo $hash;        ?>        <!-- Bootstrap core JavaScript    ================================================== -->    <!-- Placed at the end of the document so the pages load faster -->