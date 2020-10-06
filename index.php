<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bound GEN</title>

</head>
<body>

    <h1>Welcome to the Bound name Gen!</h1>
    <form action="index.php" method="POST">
        <input type="submit" name="GET" value="GET">
    </form>
    <hr>
    <h2>Your new bound name is: 

    <?php

$boundFirstName = "";
$boundLastName = "";

#region First Names
$firstNames = array(
    "Bound",
    "Babbon",
    "Boundo",
    "Bappo",
    "Broke",
    "Bronchitis",
    "Bibbly",
    "Boink",
    "Boudka",
    "Bazooka",
    "Big",
    "Boundlydoo",
    "Boo",
    "Bod",
    "Boop",
    "James Bound",
    "Bounce",
    "Bringo",
    "Bango",
    "Bongo",
    "Bish",
    "Bash",
    "Bosh"
);
#endregion

#region Last Names
$lastNames = array(
    "(Bee)",
    "(Mood)",
    "(mud jr)",
    "(mud)",
    "(moth)",
    "(month)",
    "(mobius)",
    "(bababee babadoo)",
    "(must)",
    "(mad)",
    "(mound)",
    "(Tayls)",
    "(Man)",
    "(Men(plural))",
    "(Mmmmmm)",
    "(Mouth)"
);
#endregion

$boundFirstNameIndex = array_rand($firstNames);
$boundLastNameIndex = array_rand($lastNames);

$boundFirstName = $firstNames[$boundFirstNameIndex];
$boundLastName = $lastNames[$boundLastNameIndex];

$boundName = $boundFirstName . " " . $boundLastName; 
echo $boundName;

?>

    </h2>

</body>
</html>

<!-- 
Bringo Bango Bongo
Bish Bash Bosh
-->

