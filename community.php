<?php
if($_POST){
  $name = $_POST['name'];
  $comment = $_POST['comment'];
  $handle = fopen("comments.html", "a");
  fwrite($handle,"<b>" . $name . "</b>: " . $comment . "<br>");
  fclose($handle);
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Community</title>
</head>
<body>
    <div class="topnav">
        <a href="index.html"><img src="https://i.ibb.co/yN5JCTd/FIGHT-COVID-19.png" class="logo"></a>
        <div class="nav">
            <a href="index.html">Home</a>
            <a href="community.php">Community</a>
            <a href="resources.html">Resources</a>
            <a href="emergency.html">Emergency</a>
            <a href="contact.html">Contact</a>
        </div>
    </div>
    <div class="main">
        <h5 style="color:aliceblue;">h</h5>
        <h2>Community</h2>
        <h4> This form is a way to connect our community and build strong supportive relations to help us all as we go through these tough times with COVID-19. Feel free to comment below and add to the converstaion and never forget the community you have here supporting you.</h4>
            <form action="" method="POST">
                <div class="comment">
                <input type="text" name="name" placeholder="Display name" class="form1" required/><br>
                <textarea name ="comment" class="form1" placeholder="Comment" row="50" column="100" required/></textarea><br>
                <input type="submit" value="Post comment" class="submit1"/><br>
                </div>
            </form>
        <h4 style="size: 45px;">Ongoing Conversations</h4>
                <?php include "comments.html"; ?>
    </div>
</body>
</html>
