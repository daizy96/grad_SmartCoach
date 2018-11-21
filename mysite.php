<?php session_start(); ?>
<html>
<head>
    <title>Smart Coach</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="mysiteDes.css">
</head>
<body>
    <header id="header">
        <img src="gym.jpg" id="logo">
        <p id="title">Smart Coach Stats</p>
    </header>
    <div id="stats">
        <form action="mysite.php" method="post">
            <table id="Table">
                <tr>
                    <th>Id</th>
                    <th>Video Id</th>
                    <th>Value</th>
                    <th>Coach Check</th>
                </tr>
                <tr>
                <?php
                    require_once("checkvideoController.php");
                    $video = new checkvideoController();
                    echo "<br>";
                    $videoRow = $video->SELECT_checkvideo();
                    while ($row=mysqli_fetch_assoc($videoRow)){
                ?>
                    <td><?php echo $row['Id'];?></td>
                    <td><?php echo $row['VideoId'];?></td>
                    <td><?php echo $row['Value'];?></td>
                    <td><?php echo $row['CoachCheck'];?></td>
                </tr>
                <?php }  ?>
            </table>
        </form>
    </div>
</body>


</html>
