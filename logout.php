<?php require_once("header.php");?>

<?php
if(isset($_SESSION["ID"]) && $_SESSION["STATUS"] ===1){
    $_SESSION["ID"] = "";
    $_SESSION["USER"] = "";
    $_SESSION["EMAIL"] = "";
    $_SESSION["STATUS"] = 0;
    $db = null;
    echo "<script>
    alert(`U bent uitgelogt`);
    location.href='index.php?page=login';
    </script>";
}
?>



<?php require_once("footer.php");?>
