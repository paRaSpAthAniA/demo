<?php
setcookie("username","abc",time()+60*60*24*7);
setcookie("username","john",time()+60*60*24*7);

?>

<!-- <html>
<body>
 
// if(isset($_COOKIE["username"]))
// {
//     echo "Welcome " . $_COOKIE["username"];
// }
// else
// {
//     echo "Cookie not set";
// }
// 
</body>
</html> -->

<!-- <html>
<body>
    
    // if (isset($_COOKIE["username"])) {
    //     echo "Welcome " . $_COOKIE["username"];
    // } else {
    //     echo "Cookie not set";
    // }
    
</body>     
</html> -->

<?php
setcookie("secureUser","SecureJohn",time() + (86400 * 30),"/","", true, true);
echo "Secure and HTTP-only cookie is set";
header("Location: second.php" 
); 
?>
