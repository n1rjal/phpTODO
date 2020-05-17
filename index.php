<?php
    session_start();
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="./index.css">
    </head>
    <body>
        <header class="head">
            <div class="form-holder">
            <form action="db.php" method="POST">
                <h1>
                    Register Your Task Here
                    <p class="muted">Made my nirjal paudel</p>
                </h1>
                <br>
                
                <label for="task">Ttype</label><br>
                <input type="text" class="type" name="type" placeholder="task type here"><br>
                <label for="task">Body</label><br>
                <textarea class="body" name="body" placeholder="task body here"></textarea><br>
                <input type="submit" class="sub">
            </form>
            </div>
        </header>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    
        <h1 style="margin-left:10vh">TODO ITEMS</h1>
    <div class="table-holder">


        <?php

        include 'dbconn.php';

        $query="SELECT * FROM tasklist";
        $result=mysqli_query($connection,$query);
        $row = mysqli_fetch_assoc($result);

        if ($row){
            ?>
            <table>
        
            <thead>
                <tr>
                    <th>Tag</th>
                    <th>Text</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
            while($row = mysqli_fetch_assoc($result))
            

            { ?>
            <tr>
                <td>
                    <?php echo "".$row["tag"]; ?>
                </td>
                
                <td>
                    <?php echo "".$row["body"]; ?>
                </td>

                <td>
                    <a href="remove.php?id=<?php echo $row["id"]?>
                    ">Remove</a>
                    <?php
                        
                    ?>
                </td>
            </tr>
                <?php
            }
        }
        else{
            echo "<h1>NO TASK FOUND. some</h1><br>";
            echo "<br><h1>TASK</h1>";
        }
        ?>
        </tbody>
        </table>
    </div>
        <script src="" async defer></script>
    </body>
</html>
