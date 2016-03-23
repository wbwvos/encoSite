
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>&Co Declaratie Administratie</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">	</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <!--<li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>-->
            <li><a href="#">Log out</a></li>
          </ul>
          <!--<form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>-->
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
		<a><img src="logo.png"></a>
		<hr>
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Declaraties <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Kilometerdeclaraties</a></li>
            <li><a href="#">Exporteren</a></li>
          </ul>
          <!--<ul class="nav nav-sidebar">
            <li><a href="">Nav item</a></li>
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
            <li><a href="">More navigation</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
          </ul>-->
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Declaraties</h1>

          <!--<div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
          </div>-->

          <!--<h2 class="sub-header">Section title</h2>-->
		  
		  <ul class="nav nav-pills" role="tablist">
		  <li role="presentation" class="active"><a href="#">Alles</a></li>
			<li role="presentation"><a href="#">Nieuw<span class="badge">2</span></a></li>
			<li role="presentation"><a href="#">Ge&euml;xporteerd<span class="badge">5</span></a></li>
			<li role="presentation"><a href="#">Gewijgerd <span class="badge">2</span></a></li>
	      </ul>
		  
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
				<th></th>
                  <th>#</th>
                  <th>Naam</th>
                  <th>Bedrag</th>
                  <th>Datum</th>
                  <th>Omschrijving</th>
				  <th>Locatie</th>
				  <th>Status</th>
                </tr>
              </thead>
              <tbody>
				<tr>
					<td><input type='checkbox'></input></td>
					<td>1</td>
					<td>J.D. Peeters <span class='glyphicon glyphicon-user' aria-hidden='true'></span></td>
					<td>&euro; 14,69</td>
					<td>12/1/2016</td>
					<td>Receptie Familie </td>
					<td>Amstelveen</td>
					<td><span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true' style='color:red'></span></td>
					<td><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span></td>
				</tr>
								<tr>
					<td><input type='checkbox'></input></td>
					<td>2</td>
					<td>D. de Greef <span class='glyphicon glyphicon-user' aria-hidden='true'></span></td>
					<td>&euro; 9,69</td>
					<td>4/2/2016</td>
					<td>Koffiezetapparaat</td>
					<td>Rotterdam</td>
					<td><span class='glyphicon glyphicon-question-sign' aria-hidden='true' style='color:orange'></span></td>
					<td><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span></td>
				</tr>
								<tr>
					<td><input type='checkbox'></input></td>
					<td>3</td>
					<td>L.A. van Gerstenwinkel <span class='glyphicon glyphicon-user' aria-hidden='true'></span></td>
					<td>&euro; 32,21</td>
					<td>19/1/2016</td>
					<td>Bruiloft Goossens</td>
					<td>Utrecht</td>
					<td><span class='glyphicon glyphicon-ok-sign' aria-hidden='true' style='color:green'></span></td>
					<td><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span></td>
				</tr>
				<tr>
					<td><input type='checkbox'></input></td>
					<td>4</td>
					<td>J.D. Peeters <span class='glyphicon glyphicon-user' aria-hidden='true'></span></td>
					<td>&euro; 14,69</td>
					<td>12/1/2016</td>
					<td>Receptie Familie </td>
					<td>Amstelveen</td>
					<td><span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true' style='color:red'></span></td>
					<td><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span></td>
				</tr>
								<tr>
					<td><input type='checkbox'></input></td>
					<td>5</td>
					<td>D. de Greef <span class='glyphicon glyphicon-user' aria-hidden='true'></span></td>
					<td>&euro; 9,69</td>
					<td>4/2/2016</td>
					<td>Koffiezetapparaat</td>
					<td>Rotterdam</td>
					<td><span class='glyphicon glyphicon-question-sign' aria-hidden='true' style='color:orange'></span></td>
					<td><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span></td>
				</tr>
								<tr>
					<td><input type='checkbox'></input></td>
					<td>6</td>
					<td>L.A. van Gerstenwinkel <span class='glyphicon glyphicon-user' aria-hidden='true'></span></td>
					<td>&euro; 32,21</td>
					<td>19/1/2016</td>
					<td>Bruiloft Goossens</td>
					<td>Utrecht</td>
					<td><span class='glyphicon glyphicon-ok-sign' aria-hidden='true' style='color:green'></span></td>
					<td><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span></td>
				</tr>
				<tr>
					<td><input type='checkbox'></input></td>
					<td>7</td>
					<td>J.D. Peeters <span class='glyphicon glyphicon-user' aria-hidden='true'></span></td>
					<td>&euro; 14,69</td>
					<td>12/1/2016</td>
					<td>Receptie Familie </td>
					<td>Amstelveen</td>
					<td><span class='glyphicon glyphicon-ok-sign' aria-hidden='true' style='color:green'></span></td>
					<td><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span></td>
				</tr>
								<tr>
					<td><input type='checkbox'></input></td>
					<td>8</td>
					<td>D. de Greef <span class='glyphicon glyphicon-user' aria-hidden='true'></span></td>
					<td>&euro; 9,69</td>
					<td>4/2/2016</td>
					<td>Koffiezetapparaat</td>
					<td>Rotterdam</td>
					<td><span class='glyphicon glyphicon-ok-sign' aria-hidden='true' style='color:green'></span></td>
					<td><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span></td>
				</tr>
								<tr>
					<td><input type='checkbox'></input></td>
					<td>9</td>
					<td>L.A. van Gerstenwinkel <span class='glyphicon glyphicon-user' aria-hidden='true'></span></td>
					<td>&euro; 32,21</td>
					<td>19/1/2016</td>
					<td>Bruiloft Goossens</td>
					<td>Utrecht</td>
					<td><span class='glyphicon glyphicon-ok-sign' aria-hidden='true' style='color:green'></span></td>
					<td><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span></td>
				</tr>

              </tbody>
            </table>
			<button type="button" class="btn btn-sm btn-default">Selecteer alles</button>
			<button type="button" class="btn btn-sm btn-default">Deselecteer alles</button>
			<button type="button" class="btn btn-sm btn-success">Exporteer</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
