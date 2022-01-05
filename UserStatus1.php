


<!DOCTYPE HTML>
<html>
<?php
function myFunction() {
    echo 'Have a great day'.'<br>';
 }
if (isset($_GET['name'])) {
    myFunction();
}
?>
<a href='index.php?name=true'>Execute PHP Function</a>
</html>



<?php if(check if user is logged in): ?>
<display users profile in html>
<?php else: ?>
<display an error>
<?php endif; ?>