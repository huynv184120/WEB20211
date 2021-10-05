<html>
    <head>
        <title>Receiving Input</title>
    </head>
    <body>
        <h3>Thank you got your input</h3>
        <?php
            $name = $_POST["name"];
            $university = $_POST["university"];
            $yourclass = $_POST["yourclass"];
            $skills = $_POST["skills"];
            print ("your name is  $name");
            print ("your university is  $university");
            print ("your class is $yourclass");
            print ("skill : $skills");
        ?>
    </body>
</html>
