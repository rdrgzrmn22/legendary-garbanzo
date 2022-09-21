<?php
session_start();

if (($_GET['reset'] ?? false) == true) {
    session_destroy();
    header('Location: index.php');
} else {
    $view = $_SESSION['view'] ?? 1;
    if ($view == 5 && $view < 10) {
       function msg(){
        echo "<strong>Thank you for visiting the page a lot.</strong>";
       }
    } else if ($view == 10) {
        header('Location: congratulations.php');
    } 
    $_SESSION['view'] = $view + 1;
}
?>

<h1>Hello</h1>
<p>You have visited this page <?= $view ?> times</p>
<p><a href="?reset=true">Reset</a></p>

<?php
 if ($view == 5 ){
    msg();
 }
?>
