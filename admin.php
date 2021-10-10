<?php
session_start();

     if(!isset($_SESSION['success'])){
           header("location: ./index.php");
    }

include("./actions/Connect.php");

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

    <title><?php echo $_SESSION['name']; ?> | Love Action</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
</head>

<body>
    <div class="container-fluid">

        <header>
            <!-- navbar start here  -->
            <nav class="navbar navbar-expand-lg navbar-light bg-warning">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">

                        <!-- logo here, -->
                        <img src="./img/logo.png" alt="Logo" class="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#"><i class="fas fa-home"></i>
                                    Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fas fa-id-badge"></i> Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fas fa-envelope"></i> Messeges</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fas fa-bell"></i> Notification</a>
                            </li>
                        <li class="nav-item">
                                <a class="nav-link" href="./actions/logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
            <!-- navbar ends here  -->
        </header>
        <!-- header ends here. -->
        <!-- ------------------------------------- -->
        <!-- main start here  -->
        <main>
        <div class="gap"></div>
            <div class="mobileClock pt-sm-4  d-block d-md-none  ">
                <div class="title">
                    <h3 class="bg-primary p-2 text-center welcome">Welcome to Love Action</h3>
                </div>
                <script
                    language="JavaScript"> var now = new Date();
                        var dayNames =
                            new Array("রবিবার", "সোমবার", "মঙ্গলবার", "বুধবার", "বৃহস্পতিবার", "শুক্রবার", "শনিবার");
                        var monNames = new Array("জানুয়ারি", "ফেব্রুয়ারী", "মার্চ", "এপ্রিল", "মে", "জুন", "জুলাই", "আগস্ট", "সেপ্টেম্বর", "অক্টোবর", "নভেম্বর", "ডিসেম্বর");

                        document.write("আজ " + dayNames[now.getDay()] + "," + " " + monNames[now.getMonth()] + " " + now.getDate() + ", " + now.getFullYear());</script>
                <div id="todaysDate1"></div>

            </div>
            <!-- leftbar start  -->
            <div class="leftbar bar bg-primary shadow d-none d-md-block ">
                <!-- time section  -->
                <div class="Clock">
                    <script
                        language="JavaScript"> var now = new Date();
                            var dayNames =
                                new Array("রবিবার", "সোমবার", "মঙ্গলবার", "বুধবার", "বৃহস্পতিবার", "শুক্রবার", "শনিবার");
                            var monNames = new Array("জানুয়ারি", "ফেব্রুয়ারী", "মার্চ", "এপ্রিল", "মে", "জুন", "জুলাই", "আগস্ট", "সেপ্টেম্বর", "অক্টোবর", "নভেম্বর", "ডিসেম্বর");

                            document.write("আজ " + dayNames[now.getDay()] + "," + " " + monNames[now.getMonth()] + " " + now.getDate() + ", " + now.getFullYear());</script>
                    <div id="todaysDate"></div>
                </div>
                <!-- time ends here  -->
                <div class="delete">
                    <p>Extra Feature Coming Soon</p>
                    <p>Extra Feature Coming Soon</p>
                    <p>Extra Feature Coming Soon</p>
                    <p>Extra Feature Coming Soon</p>
                    <p>Extra Feature Coming Soon</p>

                    <p>Extra Feature Coming Soon</p>
                    <p>Extra Feature Coming Soon</p>
                    <p>Extra Feature Coming Soon</p>

                    <p>Extra Feature Coming Soon</p>
                    <p>Extra Feature Coming Soon</p>

                </div>
            </div>
            <!-- leftbar ends here  -->
            <!-- ----------------------------------------- -->
            <!-- midlebar start  -->
            <div class="midlebar shadow  py-3">
                <span><img style="height: 100px; width: 100px;" src="./accountUp/<?php echo $_SESSION['image'] ?>" alt=""></span>
                <span><?php echo $_SESSION['name']; ?></span>
                <p class="text-left">Update Your Post</p>
                <hr>
                <div class="PostArea  text-center shadow ">
                    <!-- post writing Area here, -->
                    <form action="./actions/post.php" method="post" enctype="multipart/form-data">
                        <div class="form-group ">
                            <input type="text" name="description" class="form-control py-3" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Whats in your mind?">
                            <small><label for="exampleInputFile">Image</label> </small>
                            <input type="file" name="image" class="form-control py-3" id="exampleInputFile"
                                aria-describedby="fileHelp" placeholder="Whats in your mind?">
                        </div>
                        <input type="submit" class="btn btn-primary mt-1 w-100" value="Post">
                    </form>
                </div>
                <hr>
                <h4>NewsFeed</h4>
                <!-- post writing area finish -->
                <hr>
                <!-- post controler codes -->
                <?php
                $name = $_SESSION["name"];
                $image = $_SESSION["image"];

                $result = mysqli_query($conn , "SELECT * FROM post ");
                while ($rows = mysqli_fetch_assoc($result)){
                ?>
                <!-- Post view Area start here .,, -->
                <div class="fullbody bordr">
                    <div class="devider d-flex bordr">
                        <img src="./uploads/<?php echo $rows['fevPhoto'] ?>" alt="" style="height:70px;width:70px;">
                        <div class="dateAndName">
                            <h3><?= $rows['name'] ?></h3>
                            <p><?= $rows['date'] ?></p>
                        </div>
                    </div>
                    <div class="banner p-4">
                        <img src="./uploads/<?php echo $rows['image']?>" class="container-fluid" alt="">
                    </div>
                    <div style="width:100%;" class="description container-fluid">
                    <span><?= $rows['description'] ?></span>
                    </div>
                </div>
                <br>
                <hr>
                <!-- Post view Area ends here .,, -->
            
            <?php } ?>
                </div>
            
            <!-- midlebar ends here  -->
            <!-- ---------------------------------------- -->
            <!-- rightbar start  -->
            <div class="rightbar bar bg-primary shadow  d-none d-md-block">
                <div class="delete">
                    <h3>Features</h3>
                    <hr>
                    <p>Extra Feature Coming Soon</p>
                    <p>Extra Feature Coming Soon</p>
                    <p>Extra Feature Coming Soon</p>
                    <p>Extra Feature Coming Soon</p>
                    <p>Extra Feature Coming Soon</p>

                    <p>Extra Feature Coming Soon</p>
                    <p>Extra Feature Coming Soon</p>
                    <p>Extra Feature Coming Soon</p>
                    <p>Extra Feature Coming Soon</p>
                    <p>Extra Feature Coming Soon</p>
                    <p>Extra Feature Coming Soon</p>
                    <p>Extra Feature Coming Soon</p>
                    <p>Extra Feature Coming Soon</p>

                </div>
            </div>
            <!-- rightbar ends here  -->
        </main>

        <footer>
            <p>
                Copyright &copy;
                <script>document.write(new Date().getFullYear());</script> | All Rights Reserved To <a
                    href="https://facebook.com/arwebacademy/"> AR Web Academy </a>. |
                Powered By <a href="https://facebook.com/ahsan.alam.bd/"> Ahsan Alam </a>.
            </p>
        </footer>











    </div>
    <!-- Optional JavaScript; -->

    <!--Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://www.thetimenow.com/ttn-embed.min.js"></script>
    <!-- time srcipt  -->
    <script>
        function doDate() {
            var str = "";
            var now = new Date();

            str += "Time:" + now.getHours() + ":" + now.getMinutes() + ":" + now.getSeconds();
            document.querySelector("#todaysDate1").innerHTML = str;
        }

        setInterval(doDate, 1000);
    </script>
    <script>
        function doDate() {
            var str = "";
            var now = new Date();

            str += "Time:" + now.getHours() + ":" + now.getMinutes() + ":" + now.getSeconds();
            document.querySelector("#todaysDate").innerHTML = str;
        }

        setInterval(doDate, 1000);
    </script>
</body>

</html>