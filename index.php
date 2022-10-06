<?php require_once("header.php");?>
<?php
    if(isset($_GET["page"])){
        $page = $_GET["page"];
    } else {
        $page = "login.php";
    }

    if($page){
        include( $page . ".php");
    } else {
        $page = "login.php";
    }
    
?>

<?php require_once("footer.php");