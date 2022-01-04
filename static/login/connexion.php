<?php
$username;
$password;
try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=ykamis', 'root', '');
  } catch (Exception $e) {
    die('Erreur: '.$e->getMessage());
  }
if(isset($_POST['Connecter']) && !empty($_POST['username']) && !empty($_POST['password']))
{
    $username = htmlspecialchars($_POST['username']); 
    $password = htmlspecialchars($_POST['password']);
    $sha_Pass = md5(sha1($password));
    $sql = 'SELECT * FROM user WHERE prenom = ? AND password = ?';
    $req = $pdo->prepare($sql);
    $req->execute(array($username, $sha_Pass));
    $connect = $req->fetch();
    // var_dump($connect);
    if($connect){
      echo '<div class="loader">
      <h1>Veuillez patientez...</h1>
    </div>
    <script>
       setTimeout(function(){ $(\'.loader\').fadeOut(\'slow\'); }, 3000);
    </script>';  
        
        $_SESSION['username'] = $username;
             
        header('Refresh: 5; url=../index.php');
     
    }
    else{
        header('Location: index.php');
        exit();
    }
}
  
?>
<body>
<script src="jquery-3.6.0.min.js"></script>
<script src="jquery.min.js"></script>
<script src="bootstrap\dist\js\bootstrap.min.js"></script>
<script src="bootstrap4-toggle/js/bootstrap4-toggle.min.js"></script>
<script src="push/bin/push.min.js"></script>
<script src="push/bin/serviceWorker.min.js"></script>
</body>
</html>