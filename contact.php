<?php
if($_POST["message"]) {
    mail("zkirsner@umich.edu", "Form to email message", $_POST["message"], "From: an@email.address");
}
?>