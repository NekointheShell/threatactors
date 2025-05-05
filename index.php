<?php
    $username = ''; // redacted
    $password = ''; // redacted

    if(
        !isset($_GET['username']) &&
        !isset($_GET['password'] &&
        $_GET['username'] == $username &&
        $_GET['password'] == $password
    ) {
        echo '<meta http-equiv="refresh" content="0;url=/login.php">';
    }

    else {
        $doc = <<<'EOF'

            <!DOCTYPE html>
            <html>
                <head>
                    <title>Threat Actors</title>
                </head>
                <body>
                    <!-- redacted. authorized eyes only. -->
                </body>
            </html>
        EOF;
        echo $doc;
    }
?>
