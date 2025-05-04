<?php
    if(!isset($_GET['loggedin'])) {
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
