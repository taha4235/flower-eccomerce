<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eccomerce flour website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.3.slim.min.js"
        integrity="sha256-ZwqZIVdD3iXNyGHbSYdsmWP//UBokj2FHAxKuSBKDSo=" crossorigin="anonymous"></script>
</head>
<?php
include("db.php");
include("insert.php");
?>
<body>
    <div class="container">
        <nav>
            <div class="info-1">
                <h3 class="logo">flower <span>.</span></h3>
            </div>
            <div class="info-2">
                <ul>
                    <li><a href="index.html">home</a></li>
                    <li><a href="index.html">about</a></li>
                    <li><a href="index.html">product</a></li>
                    <li><a href="index.html">contact</a></li>
                </ul>
            </div>
            <div class="info-3">
                <ul>
                    <li><a href="index.html"><i class="fa-solid fa-heart"></i></a></li>
                    <li><a href="index.html"><i class="fa-sharp fa-solid fa-cart-shopping"></i></a></li>
                    <li><a href="index.html"><i class="fa-solid fa-user"></i></a></li>
                </ul>
            </div>
        </nav>
        <center>
            <div class="main-content">
                <h3 class="first-title">fresh flowers</h3>
                <h4>natural & beautiful flowers</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut distinctio quis <br> officiis neque
                    minima temporibus exercitationem cupiditate, eius minus culpa</p>
                <button>shop now</button>
            </div>
        </center>
    </div>
    <!-------------------contaier-2------------------------>
    <div class="about-container">
        <center>
            <h3 class="title-about">about <span>us</span></h3>
            <div class="all-div">
                <div class="first-div-video">
                    <video src="images/about-vid.mp4" loop autoplay muted></video>
                </div>
                <div class="first-div-info">
                    <h3 class="title-questions">why you shoose us?</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus blanditiis <br>,
                        necessitatibus eligendi autem omnis facilis earum suscipit libero <br></p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus blanditiis <br>,
                        necessitatibus eligendi autem omnis facilis earum suscipit libero <br></p>
                    <button>learn more</button>
                </div>
            </div>
        </center>
    </div>
    <br>
    <!----------------icon container---------------------->
    <div class="latest-products">
        <center>
            <h3 class="lastest-title">lastest product</h3>
            <div class="all-products-latest">
                <div class="first-prod">
                    <div class="info-about-prod">
                        <span>-10%</span>
                        <img src="images/img-1.jpg" alt="">
                        <div class="add-to-cart-section cart1">
                            <form method="POST">
                                <input type="text" placeholder="enter quantity" class="quant" name="quant"><button class="b" name="add">add</button>
                            </form>
                        </div>
                        <h3 class="flower-title active1">flower pot</h3>
                        <p class="price">15.99$</p>
                    </div>
                </div>
                <div class="first-prod">
                    <span>-10%</span>

                    <div class="info-about-prod">
                        <img src="images/img-2.jpg" alt="">
                        <div class="add-to-cart-section cart2">
                            <form method="POST">
                                <input type="text" placeholder="enter quantity" name="quant"class="quant"><button class="b" name="add">add</button>
                            </form>
                        </div>
                        <h3 class="flower-title active2">flower pot</h3>
                        <p class="price">15.99$</p>
                    </div>
                </div>
                <div class="first-prod">
                    <span>-10%</span>

                    <div class="info-about-prod">
                        <img src="images/img-3.jpg" alt="">
                        <div class="add-to-cart-section cart3">
                            <form method="POST">
                                <input type="text" placeholder="enter quantity" class="quant"><button class="b">add</button>
                            </form>
                        </div>
                        <h3 class="flower-title active3">flower pot</h3>
                        <p class="price">15.99$</p>
                    </div>
                </div>
                <div class="first-prod">
                    <span>-10%</span>
                    <div class="info-about-prod">
                        <img src="images/img-4.jpg" alt="">
                        <div class="add-to-cart-section cart4">
                            <form method="POST">
                                <input type="text" placeholder="enter quantity" name="quant" class="quant"><button class="b" name="add">add</button>
                            </form>
                        </div>
                        <h3 class="flower-title active4">flower pot</h3>
                        <p class="price">15.99$</p>
                    </div>
                </div>
                <div class="first-prod">
                    <span>-10%</span>

                    <div class="info-about-prod cart5">
                        <img src="images/img-5.jpg" alt="">
                        <div class="add-to-cart-section">
                            <form method="POST">
                                <input type="text" placeholder="enter quantity" class="quant" name="quant"><button class="b" name="add">add</button>
                            </form>
                        </div>
                        <h3 class="flower-title active5">flower pot</h3>
                        <p class="price">15.99$</p>
                    </div>
                </div>
                <div class="first-prod">
                    <span>-10%</span>

                    <div class="info-about-prod">
                        <img src="images/img-6.jpg" alt="">
                        <div class="add-to-cart-section cart6">
                            <form method="POST">
                                <input type="text" placeholder="enter quantity" class="quant" name="quant"><button class="b" name="add">add</button>
                            </form>
                        </div>
                        <h3 class="flower-title active6">flower pot</h3>
                        <p class="price">15.99$</p>
                    </div>
                </div>

            </div>
        </center>
    </div>
    <br>
    <!--------------------reviews container------------------->
    <div class="contact-container">
      <center>
        <h3 class="contact-title">contact <span>me</span></h3>
        <div class="container-2-contact">
         <div class="first-co">
            <form  method="POST">
               <input type="text" name="name" id="name" placeholder="your name">
               <input type="text" name="lastname" id="lastname" placeholder="your lastname">
               <input type="text" name="email" id="email" placeholder="your email">
               <textarea name="msg" id="" cols="30" rows="10" placeholder="write a message"></textarea>
              <button class="send" name="send">send</button>
            </form>
         </div>
         <div class="second-co">

         </div>
        </div>
      </center>
    </div>
    <br>
    <footer>
      <div class="links-4">
        <h3 class="title-qiuk">qiuk links</h3>
        <ul>
            <li><a href="index.html">home</a></li>
            <li><a href="index.html">about</a></li>
            <li><a href="index.html">product</a></li>
            <li><a href="index.html">contact</a></li>
        </ul>
      </div>
      <div class="links-4">
        <h3 class="title-qiuk">extra links</h3>
        <ul>
            <li><a href="index.html">my account</a></li>
            <li><a href="index.html">my order</a></li>
            <li><a href="index.html">my favorite</a></li>
           
        </ul>
      </div>
      <div class="links-4">
        <h3 class="title-qiuk">locations</h3>
        <ul>
            <li><a href="index.html">lebanon</a></li>
            <li><a href="index.html">usa</a></li>
            <li><a href="index.html">germany</a></li>
        
        </ul>
      </div>
      <div class="links-4">
        <h3 class="title-qiuk">contact info</h3>
        <ul>
            <li><a href="index.html">+96171735478</a></li>
            <li><a href="index.html">tahakourani99@gmail.com</a></li>
            <li><a href="index.html">  <img src="images/payment.png" alt=""></a></li>
          
        </ul>
      </div>
    </footer>
</body>


<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function () {
        $(".active1").click(function () {
            $(".cart1").toggle()
            var quant = document.getElementsByClassName("quant")
            if(quant>=1&&quant<=10){
                alert("your paper is"+quant*15.99)
            }
        })
    
        $(".active2").click(function () {
            $(".cart2").toggle()
            var quant = document.getElementsByClassName("quant")
            if(quant>=1&&quant<=10){
                alert("your paper is"+quant*15.99)
            }
        })
        $(".active3").click(function () {
            $(".cart3").toggle()
            var quant = document.getElementsByClassName("quant")
            if(quant>=1&&quant<=10){
                alert("your paper is"+quant*15.99)
            }
        })
        $(".active4").click(function () {
            $(".cart4").toggle()
            var quant = document.getElementsByClassName("quant")
            if(quant>=1&&quant<=10){
                alert("your paper is"+quant*15.99)
            }
        })
        $(".active5").click(function () {
            $(".cart5").toggle()
            var quant = document.getElementsByClassName("quant")
            if(quant>=1&&quant<=10){
                alert("your paper is"+quant*15.99)
            }
        })
        $(".active6").click(function () {
            $(".cart5").toggle()
            var quant = document.getElementsByClassName("quant")
            if(quant>=1&&quant<=10){
                alert("your paper is"+quant*15.99)
            }
            else{
                document.write(alert("you lose"))
            }
        })

    })
</script>

</html>