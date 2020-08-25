<html>
    <head>
        <style>
            /* Style the body */
            body {
                font-family: Arial;
                margin: 0;
            }

            /* Header/Logo Title */
            .header {
                padding: 60px;
                text-align: center;
                background: #1abc9c;
                color: white;
                font-size: 30px;
            }

            /* Page Content */
            .content {padding:20px;}
            input[type=submit] {
                background-color: #1abc9c;
                width: 50%;
                color: white;
                padding: 16px 32px;
                margin: 4px 2px;
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <div class="header">
            <h1> FACTORY DESIGN PATTERN </h1>
            <p> This is a factory design pattern example </p>
        </div>
        <div class="content">
            <center>
                <form method="post">
                    <input type="submit" name="directSpace" value="Direct Space" />
                    <input type="submit" name="groupSpace" value="Group Space" />
                    <input type="submit" name="clear" value="Clear" />
                </form>
            </center>
        </div>
        <?php
        require "vendor/autoload.php";

        use Test\factories\DirectSpaceFactory;
        use Test\factories\GroupSpaceFactory;

        $directLogger = new DirectSpaceFactory();
        $groupLogger = new GroupSpaceFactory();

        if(isset($_POST['directSpace'])) {
            $logger = $directLogger->createSpace();
            $logger->log();
        }
        if(isset($_POST['groupSpace'])) {
            $logger = $groupLogger->createSpace();
            $logger->log();
        }
        if(isset($_POST['clear'])) {
            ob_get_clean ();
        }
        ?>
    </body>
</html>
