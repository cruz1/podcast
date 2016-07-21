<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="name" content="Fridrik Njalsson">
        <title>in progress</title>
        <link rel="stylesheet" href="style.css">
        <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.4.min.js"></script>


    </head>
    <body>
        <!-- toggle menu for small screens -->
        <script type="text/javascript">
            $(document).ready(function(){
                $('.handle').click(function(){
                    $('nav ul').toggleClass('showing');
                });
            });
        </script>
         <!-- nav bar -->
        <nav>
            <ul class="menuToggle">
                <li><a href="#">podcast</a></li>
                <li><a href="#">afhverju við</a></li>
                <li><a href="#">contact</a> us</li>
            </ul>
        </nav>
        <div class="handle"> Menu </div>
        <!-- header -->
        <h1 class="header">Podcast Alla fostudaga</h1>
        <!-- text  -->
        <section>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ullamcorper leo a dui euismod elementum. Donec facilisis pellentesque erat nec elementum. Pellentesque lobortis, orci et molestie pellentesque, est dui venenatis erat, eget scelerisque lorem enim in massa. Praesent eleifend vehicula nibh, id sagittis odio sodales eu. Proin finibus commodo magna, sed scelerisque tellus pulvinar accumsan. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque molestie nisi vitae lectus efficitur rutrum. Quisque ut massa et lacus congue semper eleifend ac massa. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus in eros leo. Nunc vehicula vulputate pharetra. Fusce sit amet mattis risus. Sed commodo ullamcorper facilisis. Morbi vitae magna enim. Sed auctor, dui non aliquam semper, ex elit malesuada metus, quis consequat enim sem id magna. Morbi rutrum tellus a massa egestas, vitae rhoncus nibh elementum.


        </section>
        
        <div class="utvarp">
            <h1 class="header">Hlustaðu á útvarp</h1>
            <a href="javascript:window.open('http://vefutvarp.visir.is/player/#/fmextra','tónlist fyrir gáfað fólk')"><img src="images/playtakki.png" alt="" /></a>
        </div>
        <div class="why">
            <h1 class="header">Afhverju hlusta a okkur?</h1>
            <ul>
                <li>Við erum fagets</li>
                <li>Við suckum dick</li>
                <li>Metal</li>
            </ul>
        </div>
        <!-- contact us -->
        <div class="contact">
            <!-- header -->
            <h1 class="header">Contact us</h1>
            <!-- form -->
            <form class="" action="index.php" method="post">
                <input type="text" name="contactName" value="" placeholder="name (optional)"><br>
                <textarea name="contactInput" rows="8" cols="40"></textarea><br>
                <input class="inputButton" type="submit" name="contactButton" value="send us">

            </form>
            <?php
                if (isset($_POST['contactButton'])) {
                    $name = $_POST['contactName'];
                    $text = $_POST['contactInput'];
                    echo "todo: skrifa email forrit sem sendir uppl.";

                }
             ?>
        </div>
        <footer>
            <div class="footer">
                <span>njalsson.is   -   </span>
                <span> 7777777</span>
            </div>
        </footer>
    </body>
</html>
