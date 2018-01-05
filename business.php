<!DOCTYPE html>
<html>
<head>
	<title>Business</title>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
	</script>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="/IKA/css/custom.css">
	<link href="/IKA/css/other.css" rel="stylesheet">
  <style>
  div.relative {
    position: relative;
    left: 600px;
  }

	p{
			/*align-content: center;*/
			align-items: center;
			width: 600px;
			/*padding: 10px;*/
			border: 0px ;
			margin: 0 auto;
	}

  </style>
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
            <div class="navbar-header">
				<a class="navbar-brand" href="/IKA/">ΙΚΑ</a>
			</div>
			<ul class="nav navbar-nav homenav">
				<li class="active">
					<a href="#">Αρχική</a>
				</li>
			</ul>
			<ul class="nav navbar-nav mynavbar">
                <li>
					<a href="#">Αναζήτηση</a>
				</li>
				<li>
					<a href="#">Γλώσσα</a>
				</li>
				<li>
					<a href="/IKA/login.php">Είσοδος/Έγγραφη</a>
				</li>
			</ul>
		</div>
	</nav>
	<nav class="main-menu">
        <ul>
			<li>
				<a href="/IKA/"><i class="fa fa-home fa-2x"></i> <span class="nav-text">Αρχική</span></a>
			</li>
			<li class="has-subnav">
				<a href="#"><i class="fa fa-files-o" ></i> <span class="nav-text">Ασφάλεια</span></a>
			</li>
			<li class="has-subnav">
				<a href="/IKA/pension.php"><i class="fa fa-money"></i> <span class="nav-text">Σύνταξη</span></a>
			</li>
			<li class="has-subnav">
				<a href="/IKA/business.php"><i class="fa fa-building"></i> <span class="nav-text">Επιχειρήσεις</span></a>
			</li>
			<li>
				<a href="#"><i class="fa fa-credit-card"></i> <span class="nav-text">Οφειλές</span></a>
			</li>
			<li>
				<a href="#"><i class="fa fa-wheelchair"></i> <span class="nav-text">Άτομα με ειδικές Αναπηρίες</span></a>
			</li>
			<li>
				<a href="#"><i class="fa fa-newspaper-o"></i> <span class="nav-text">Ενημερώσεις</span></a>
			</li>
			<li>
				<a href="#"><i class="fa fa-question-circle-o"></i> <span class="nav-text">Συχνές Ερωτήσεις</span></a>
			</li>
			<li>
				<a href="#"><i class="fa fa-info fa-2x"></i> <span class="nav-text">Επικοινωνία</span></a>
			</li>
		</ul>
	</nav>

	<div class="mymenu">
	    <h1 style="text-align:center;"> Επιχειρήσεις </h1>
	    <br/>
	    <br/>
	    <br/>

	    <section class="c-fi">
	        <div class="c-fi-wrapper">
	            <div class="c-fi-grid">

	                        <div class="c-fi-cell">
	                            <a class="c-fi-link ga-event" data-event-action="Feature Image Click" href="/benefits/retirement/" style="background-image:url(/IKA/img/shakehands.jpg)">
	                                <div class="c-fi-text">Εργοδοσία</div>
	                            </a>
	                        </div>
	                        <div class="c-fi-cell">
	                            <a class="c-fi-link ga-event" data-event-action="Feature Image Click" href="/benefits/medicare/prescriptionhelp/" style="background-image:url(/IKA/img/index.jpeg)">
	                                <div class="c-fi-text">Ηλεκτρονική Εκδοση Βεβαιώσεων</div>
	                            </a>
	                        </div>
													<br/>
	                        <div class="c-fi-cell">
	                            <a class="c-fi-link ga-event" data-event-action="Feature Image Click" href="https://faq.ssa.gov/ics/support/KBAnswer.asp?questionID=3704" style="background-image:url(/IKA/img/calc.jpg)">
	                                <div class="c-fi-text">Υπολογισμός ενσήμων</div>
	                            </a>
	                        </div>

	            </div>
	        </div>
	    </section>
	</div>


</body>
</html>