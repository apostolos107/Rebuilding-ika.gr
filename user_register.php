<!DOCTYPE html>
<?php
    session_start();
    $_SESSION['message']='';
    require_once 'login_db.php';
    $conn = new mysqli($hn,$un,$pw,$db);
    if($conn->connect_error) die($conn->connect_error);
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $email = $_POST['Email'];
        $query = "SELECT * FROM Login WHERE email='$email'";
        $result = $conn -> query($query);
        if(!$result) die ($conn->error);
        if($result->num_rows!=0){
            $_SESSION['message']='The email exists';
        }
        if($_POST['Pwd']==$_POST['RePwd']){
            $username = $_POST['Username'];
            $surname = $_POST['Surname'];
            $amka = $_POST['AMKA'];
            $afm = $_POST['AFM'];
            $doy = $_POST['DOY'];
            $id = $_POST['ID'];
            $street = $_POST['street'];
            $password = $_POST['Pwd'];
            $var = 0;
            if (isset($_POST['boss'])){
                $var = 1;
                $boss = $_POST['boss'];
            }
            if (isset($_POST['pension'])){
                $var = $var + 1 ;
                $pension = $_POST['pension'];
            }
            $query = "INSERT INTO User VALUES"."('$id','$afm','$amka','$doy','$username','$surname','$street')";
            $result = $conn -> query($query);
            if(!$result) echo " INSERT failed $query<br>". $conn->error;
            $query ="INSERT INTO Login VALUES" . "('$email','$id','$password','$var')";
            $result = $conn -> query($query);
            if(!$result) echo " INSERT failed $query<br>". $conn->error;
            $_SESSION['welcome']="Μόλις δημιουργήθηκε ο λογαριασμός σας";
            $_SESSION['login'] = 1;
            $_SESSION['username'] = $username;
            header("location:profile.php");
        }else{
            $_SESSION['message']="The passwords do not match";
        }
    }
 ?>

<html lang="en">
<head>

    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>

    <title>Εγγραφή</title>

    <!-- Bootstrap Core CSS -->
    <link href="./css/host_register.css" rel="stylesheet"/>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>

<body >
    <!-- Navbar -->
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="/IKA/">ΙΚΑ</a>
        </div>
        <ul class="nav navbar-nav homenav">
          <li class="active"><a href="#">Εγγραφή</a></li>
        </ul>
      </div>
    </nav>
    <div class="container">
    <h1 class="welcome text-center">Καινούργιος Λογαριασμός</h1>
        <div class="card card-container">
            <h2 class='login_title text-center'><b>Εγγραφή</b></h2>
            <form class="form-signin" method="post" action="user_register.php">
                <h2><font color="red"><?=$_SESSION['message']?></font></h2>
                <span id="reauth-email" class="reauth-email"></span>
                <p class="input_title">Email</p>
                <input type="text" id="inputEmail" class="login_box" placeholder="user01@email.com" name="Email" required="True" autofocus="True"/>
                <p class="input_title">Όνομα</p>
                <input type="text" id="inputUserName" class="login_box" placeholder="Απόστολος" name="Username" required="True" autofocus="True"/>
                <p class="input_title">Επώνυμο</p>
                <input type="text" id="inputSurname" class="login_box" placeholder="Πλακιάς" name="Surname" required="True" autofocus="True"/>
                <p class="input_title">Α.Μ.Κ.Α.</p>
                <input type="text" id="AMKA" class="login_box" placeholder="1121332342" name="AMKA" required="True" autofocus="True"/>
                <p class="input_title">Α.Φ.Μ.</p>
                <input type="text" id="AFM" class="login_box" placeholder="1211345345" name="AFM" required="True" autofocus="True"/>
                <p class="input_title">ΔΟΥ</p>
                <input type="text" id="DOY" class="login_box" placeholder="Γλυφάδας" name="DOY" required="True" autofocus="True"/>
                <p class="input_title">Αριθμός Μητρώου Ασφάλισης</p>
                <input type="text" id="ID" class="login_box" placeholder="1312313132" name="ID" required="True" autofocus="True"/>
                <p class="input_title">Οδός Κατοικίας</p>
                <input type="text" id="street" class="login_box" placeholder="ευδόξου 13" name="street"/>
                <p class="input_title">Κωδικός</p>
                <input type="password" id="inputPassword" class="login_box" placeholder="******" name="Pwd" required="True"/>
                <p class="input_title">Επαλήθευση Κωδικού</p>
                <input type="password" id="inputRePassword" class="login_box" placeholder="******" name="RePwd" required="True"/>
                <div class="checkbox" id="safe">
                    <label ><input type="checkbox"  onclick="checkAddress(this)" name="pension" id="pension" value="2">Συνταξιούχος</label>
                </div>
                <!-- <div id="safe_info" style="display:none;">
                    <p class="input_title">ΙΚΑ κωδικός</p>
                    <input type="text" id="ika_code" class="login_box" placeholder="1313113" name="ika_code"/>
                    <p class="input_title">Ψευδώνυμο</p>
                    <input type="text" id="inputUserName" class="login_box" placeholder="User1234" name="Username"/>
                </div> -->
                <div class="checkbox" id="booss">
                    <label ><input type="checkbox"  onclick="checkBoss(this)" name="boss" id="boss" value="1">Εργοδότης</label>
                </div>
                <!-- <div id="boss_info" style="display:none;">
                    <p class="input_title">Κωδικός Εργοδότη</p>
                    <input type="text" id="boss_code" class="login_box" placeholder="1313113" name="boss_code"/>
                </div> -->
                <br>
                <button class="btn btn-lg btn-primary" type="submit">Εγγραφή</button>
				<a href="/IKA/login.php" class="text-right">Έχετε ήδη Λογαριασμό;</a>
            </form><!-- /form -->
        </div><!-- /card-container -->
    </div><!-- /container -->
</body>
<script>
    function checkAddress(checkbox)
    {
        if (checkbox.checked)
        {
            document.getElementById("safe_info").style.display="block";
        }
        else
        {
            document.getElementById("safe_info").style.display="none";
        }
    }
    function checkBoss(checkbox)
    {
        if (checkbox.checked)
        {
            document.getElementById("boss_info").style.display="block";
        }
        else
        {
            document.getElementById("boss_info").style.display="none";
        }
    }

</script>
</html>
