<?php
    if(isset($_SESSION['user']) && isset($_SESSION['password'])){
?>
    <h2>Super logado <?php echo $_SESSION['user']; ?></h2>




<?php
    } else {
        require_once("index.php");
    }
?>

