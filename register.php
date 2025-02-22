<?php
require_once "config.php";

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

$address = ''; 
$phone = '';
$email = '';


if ($_SERVER['REQUEST_METHOD'] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Username cannot be blank";
    }
    else{
        $sql = "SELECT user_id FROM users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set the value of param username
            $param_username = trim($_POST['username']);

            // Try to execute this statement
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    $username_err = "This username is already taken";
 
                }
                else{
                    $username = trim($_POST['username']);
                }
            }
            else{
                echo "Something went wrong";
            }
        }
    }

    // mysqli_stmt_close($stmt);


// Check for password
if(empty(trim($_POST['password']))){
    $password_err = "Password cannot be blank";

}
elseif(strlen(trim($_POST['password'])) < 5){
    $password_err = "Password cannot be less than 5 characters";
}
else{
    $password = trim($_POST['password']);
}

// Check for confirm password field
if(trim($_POST['password']) !=  trim($_POST['confirm_password'])){
    $password_err = "Passwords should match";

}


// If there were no errors, go ahead and insert into the database
if(empty($username_err) && empty($password_err) && empty($confirm_password_err))
{

    if( isset( $_POST['address']) ||  isset( $_POST['phone']) ||  isset( $_POST['email'])  ) {
        $address = trim($_POST['address']);
        $phone = trim($_POST["phone"]);
        $email = trim($_POST["email"]); 
    } 
    $sql = "INSERT INTO users (username,password,address,phone,email ) VALUES (?,?,?,?,?)";

    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt)
    {
        mysqli_stmt_bind_param($stmt, "sssss", $param_username, $param_password,$param_address,$param_phone,$param_email);

        // Set these parameters
        $param_username = $username;
        $param_password = $password;
        $param_address = $address;
        $param_phone = $phone;
        $param_email = $email;
      
      
        // Try to execute the query
        if (mysqli_stmt_execute($stmt))
        {
            header("location: login.php");
        }
        else{
            echo "Something went wrong... cannot redirect!";
        }
    }
    mysqli_stmt_close($stmt);
    }
    mysqli_close($conn);
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign in</title>
    <link rel="icon" href="img/fabicon9.jpeg" type="image/icon type">

    <!-- for the font-awesome icons -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
      crossorigin="anonymous"
    />


    <!-- for google fonts theme -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">



<style>
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  font-family: "Josefin Sans", sans-serif;
}
i{
    cursor: pointer;
}
.bar{
    width: 20%;
    transition: all 0.5s ease-in;
}
.contact{
    width: 100%;
    height: 100vh;
    background-color:#161616;
    overflow: hidden;
    color: rgb(248, 239, 239);
    display: flex;
    justify-content: center;
    align-items: center;
    box-sizing: border-box;

}


.sidebar{
    width:5%;
    height: 100vh;
    background-color:#A30000 ;
    display: flex;
    justify-content: center;
    align-items:center;
    flex-direction: column;
    position:fixed;
    top: 0.1px;
    transition: all 0.5s ease-in;
}
.logo{

    width:25%;
height:100px;
cursor: pointer;
display: flex;
justify-content: center;
align-items:center;
flex-direction: column;

}
.navlist{
    transition: all 1s ease-in-out;
    width: 100%;
    height: 80vh;
    display: flex;
    justify-content: center;
    align-items:center;
    flex-direction: column;
    background-color:#A30000 ;
}
.listitem{
    width: 100%;

}
.hamburger{
  
 color:#161616;
    display: none;
}

.sidebar .logo li{
    margin-bottom: 0px;
}
.logoContent{

    transition: all 1s ease-in-out; 
}

.logoContent p{
    font-size:14px;
    font-weight: bold;
    margin-top: 5px;
    margin-bottom: 30px;
}
.logoContent p:hover{
    color: #161616;
}
 .hide{
  
    display: none;
}
.sidebar .logoImg{
    width:100px;
    height:100px;
    display: flex;
    justify-content: center;
    align-items:center;
}
.logoImg h1{
    color: #161616;
    font-family: 'Water Brush', cursive;
    font-weight: bolder;
}
/* .logoImg img{
width: 100%;
height: 100px;
} */

.bar{
    width: 20%;
}
.sidebar li{
    list-style-type: none;
    margin-bottom: 20px;
   
}
.sidebar li a{
    text-decoration: none;
    color:rgb(248, 239, 239) ;
    display: flex;
}
.sidebar li a i{
    font-size:20px;  
}
.sidebar span{
    margin-left: 15px;
    font-size:20px;
    display: none;
margin-top: -5px;
}
.sidebar a:hover{
  font-weight: bold;

    color:#161616;
}
.bar span{
    display: block;
}
.sidebar #logoImg{
    width: 20%;
    height: 20%;
}
.sidebar #logoImg img{
    width: 100%;
    height:20%;
}
.sidebar li i{
    font-size: 20px;
}
.openSideBar{
    position:relative;
/* left: 210px; */

bottom: 1px;
font-size: 50px;
}


#lightmode{
    display: none;
}


.homeContent{
   
    z-index: 1;
    width: 100%;
    height: 100vh;
    
}

.content{
    width:100%;
    height: 100vh;
    color: white;
    display: flex;
    justify-content: center;
    align-items:center;
  flex-direction: column;
  background-color: rgba(22, 22, 22,0.8);
}


.listHover{
    background-color:white;
    color: #161616;
    font-weight: bolder;
    display: flex;
    justify-content: center;
    align-items:center;
    width: 100%;
    height: 40px;
  margin-left: 180px;
  border-radius: 10px;
  margin-top: -50px;
  margin-bottom: 20px;
visibility: hidden;
  
}


.sidebar li a i:hover{
   color:#161616;
}

#signin{
    color:#161616;
}






/* --------MEDIA QUERY------- */

/* ------FOR MOBLIE VIEW------ */

/* AND */
        /* FOR TABLET VIEW */
@media screen and (max-width: 769px){
    .sidebar{
        width:100%;
    
      transition: none;
    height: 70px;
   
    
    } 
    
    .sidebar span{
        display:block;
    
    }
    
    #openSideBar{
        display: none;
    }
    
    .hamburger{
        display:block;
        font-size: 25px;
    }
    .openMenu{
        display: none;
    }
    .closeMenu{
        display: none;
    }
    
    .logo{
    
      margin-top: -450px;
    /* margin-top:500px; */
    margin-bottom: 20px;
        width: 100%;
        height:70px;
        flex-direction: row;
        justify-content:space-around;
       
    }
    .navlist{
       margin-top: -1100px;
      padding-top: 20px;
      
        /* margin-top:-25px; */
        width: 100%;
        height: 100vh;
    
    }
   
    
  
    }
    
    @media screen and (max-width: 768px){
        .hamburger{
            margin-left:600px;
        }   
       
    }
    @media screen and (max-width:700px){
        .hamburger{
            margin-left:140px;
        }   
        
    }
    @media screen and (min-width: 1020px){
.logo{
    margin-top: 100px;
}
.navlist{
    margin-top: 0px;
}
    }



    /* for register form */

    .container {
        background:#161616;
        height: 100vh;
        width: 70%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    .main {
        padding:50px 0px !important;
        width: 60%;
        border-radius: 15px;
        color: aliceblue;
        border: 2px solid rgb(156, 50, 50);
        box-shadow: rgb(156, 50, 50) 1px 1px 15px 1px;
      
    }
    
    .main h2 {
        text-shadow: rgb(156, 50, 50) 1px 1px 5px;

        text-align: center;
        color: rgb(156, 50, 50);
        font-size: 25px;
        margin: 30px 0px 40px 0px;
    }
    
    .main input {
        background-color:#161616;
        border: none;
        width: 60%;
        border-bottom: solid rgb(156, 50, 50) 2px;
        color: rgb(194, 197, 199);
        font-size: 15px;
        font-weight: bolder;
    }
    
    input:focus {
        outline: none ;/* Removes the border when the input is clicked */
      
      }
    input[type='text'] , input[type='password']{
    
    font-weight: bolder;
    
    }

    .button {
        background-color: rgb(156, 50, 50);
        height: 40px;
        width: 30%;
        margin-top: 10px;
        border-radius: 30px;
        cursor: pointer;
     color: white;
        font-weight: bold;
        transition:All 1s ease-in-out;
        font-size:15px;
        border: none;
    }
    
    
    .button:hover {
        background-color: #fff;
        color: #A30000;
    }
    
    .button ~ p{
        font-weight: bold;
    }
   
    .button a{
        text-decoration: none;
        color: white;
        text-decoration-color:white;
    }
    .button a:hover{
        color: #A30000;
    }
    .main .feild {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        font-size: 13px;
    }
    
    .login a {
        text-decoration: none;
        color: green;
        cursor: pointer;
    }
    
    .login a:hover {
        text-decoration: underline;
    }
    
    footer p{
     color: rgb(248, 239, 239);
 }

footer{
    width: 100%;
    height: 300px;
    background-color:#161616;
    color:rgb(190, 188, 188);
    display: flex;
    justify-content:center;
    align-items: center;
    flex-direction: column;
}
footer p{
    color:rgb(130, 130, 130);
}
footer >div{
    width: 95%;
   margin-left: 5%;
}
footer h3, footer p{
cursor: pointer;
}

.frow1{
    padding:0px 30px 0px 30px;
    height: 250px;
    display: flex;
    justify-content: space-evenly;
    align-items: center;
}
.frow2{
    height: 50px;
  text-align: center;
}
.frow1 >div{
    width: 25%;
    height: 250px;
    display: flex;
    justify-content:center;
    align-items: center;
    flex-direction: column;
}

footer .fcol p a{
    color:rgb(130, 130, 130);
    text-decoration: none;
    text-decoration-color: white;
}
    
    
    /* MEDIA QUERY */
    
    /* MOBILE VIEW */
  

    /* TABLET VIEW */
    @media screen and (max-width: 769px){
        .contact{
            height: 150vh;
        }
       .content{
           height: 50vh;
       }
       .container{
           width: 100%;
       }
        .main{
            margin-top: 300px;
            width: 90%;
        }
      .button{
          width: 30%;
          transition: none;
      }
      footer{
        height:130vh;  
        margin-left: 0px;
        padding-left: 60px;
    }
    .frow1{
        flex-direction: column;
        align-items: flex-start;
        height:125vh;
     width: 100%;
     margin-left: 0px;
    }
    .frow1 >div{
        align-items: flex-start;
        width: 100%;
       height: 300px;
       
    }
      
    }

    @media screen and (max-width: 481px) {

        .button{
            width: 50%;
        }

        footer{
            height: 150vh;
            padding-left: 0px;
        }
        .frow1{
            height: 140vh;
        }
    }
  
</style>

  </head>
  <body>
    <section class="contact">

    <?php 
    echo $username_err , $password_err, $confirm_password_err;

    ?>
      <!-- <video playsinline autoplay muted loop class="bgvideo">
      <source src="image/bgHome.mp4" type="video/mp4" class="video" /> 
      </video> -->
      <div class="homeContent">

        <nav id="sidebar" class="sidebar">
          
          <div class="logo" id="logo">
            <li class="logoImg">
              <h1>Apna <br> Dabba</h1>
              <!-- <img src="image/logo3.png" alt="" /> -->
            </li>
            <div class="logoContent hide" id="logoContent">
          
              <p>Tiffin Service</p>
            </div>
            <div class="hamburger" id="hamburger">
              <i class="fa fa-bars " id="openMenu"></i> 
            <i class="fa fa-times " id="closeMenu" style="display: none;"></i>        
            </div>
          </div>
        




<div class="navlist" id="navlist">


          <li>
            <a href="home.php">
              <i class="fa fa-home  listIcon" id="home"></i><span>Home</span>
            </a>
          </li>
          <div id="homeHover" class="listHover">Home</div>

          <li>
            <a href="menu.php"> <i class="fa fa-cutlery listIcon" ></i> <span>Menu</span> </a>
          </li>
          <div id="menuHover" class="listHover">Menu</div>
          <li>
            <a href="about.php">
              <i class="fa fa-info-circle  listIcon"></i> <span>About us</span>
            </a>
          </li>
          <div id="aboutHover" class="listHover">About</div>
          <li>
            <a href="contact.php">
              <i class="fa fa-phone-square  listIcon"></i> <span>Contact us</span>
            </a>
          </li>
          <div id="contactHover" class="listHover">Contact</div>
          <li>
            <a href="register.php" id="signin"> <i class="fa fa-user-o listIcon"></i> <span>Sign in</span> </a>
          </li>
          <div id="signHover " class="listHover">Signin</div>
          <li>
            <a href="login.php"> <i class="fa fa-user-plus  listIcon"></i> <span>Login</span> </a>
          </li>
          <div id="loginHover" class="listHover">Login</div>
          
          
          <div id="themeHover" class="listHover">Theme</div>

          <li>
            <i class="fa fa-chevron-circle-right  listIcon  openSideBar closeSideBar" id="openSideBar"></i>
          </li>

        </div>
        </nav>
        <div class="content">
      


<div class="container">
  <div class="main">
      <h2>Register Yourself Here!</h2>


<form action="" id='signupForm' method="POST">
            <div class="feild"><input type="text" placeholder="Username" name="username"><br><br>
                <input type="text" placeholder="Phone Number" name="phone"> <br><br>
                <input type="text" placeholder="Address" name="address"><br><br>
                <input type="text" placeholder="Email ID" name="email"><br><br>
                <input type="text" placeholder="Password" name="password"><br><br>
                <input type="text" placeholder="Confirm Password" name="confirm_password"><br><br>

                <button class="button">Create Account</button>
            
                <br>
                <p style="color: gray;">Already Signing Up? <span class="login"> <a href="login.php">Login</a> </span> </p>
    </form>


</div>
 
</div>





    </section>


    <hr style="border-color: gray;">


    <?php include('footer.php'); ?>
    <script>


window.addEventListener('load', ()=>{
    sidebar.style.marginLeft="0px";
   
   
    let contentImg=document.getElementById('contentImg');
    contentImg.style.marginRight="0px";
    
});

      // for open side bar
let openSideBar=document.getElementById('openSideBar');
let sidebar=document.getElementById('sidebar');
let listHover=document.querySelectorAll('.listHover');
let listIcon=sidebar.querySelectorAll('.listIcon');
let navlist=document.getElementById('navlist');
let logo=document.getElementById('logo');

openSideBar.addEventListener('click', ()=>{
    sidebar.style.transitionDuration="0.5s";

 sidebar.classList.toggle('bar');
 navlist.classList.toggle('listitem');
 
 let logoContent=document.getElementById('logoContent');
 logoContent.classList.toggle('hide');




});







listIcon[0].addEventListener("mouseover", ()=>{
    listHover[0].style.visibility="visible";
});

listIcon[0].addEventListener("mouseout", ()=>{
    listHover[0].style.visibility="hidden";
});  
listIcon[1].addEventListener("mouseover", ()=>{
    listHover[1].style.visibility="visible";
});

listIcon[1].addEventListener("mouseout", ()=>{
    listHover[1].style.visibility="hidden";
});

listIcon[2].addEventListener("mouseover", ()=>{
    listHover[2].style.visibility="visible";
});

listIcon[2].addEventListener("mouseout", ()=>{
    listHover[2].style.visibility="hidden";
});

listIcon[3].addEventListener("mouseover", ()=>{
    listHover[3].style.visibility="visible";
});

listIcon[3].addEventListener("mouseout", ()=>{
    listHover[3].style.visibility="hidden";
});

listIcon[4].addEventListener("mouseover", ()=>{
    listHover[4].style.visibility="visible";
});

listIcon[4].addEventListener("mouseout", ()=>{
    listHover[4].style.visibility="hidden";
});

listIcon[5].addEventListener("mouseover", ()=>{
    listHover[5].style.visibility="visible";
});

listIcon[5].addEventListener("mouseout", ()=>{
    listHover[5].style.visibility="hidden";
});



listIcon[6].addEventListener("mouseover", ()=>{
    listHover[6].style.visibility="visible";
});

listIcon[6].addEventListener("mouseout", ()=>{
    listHover[6].style.visibility="hidden";
});




let openMenu=document.getElementById('openMenu');
let closeMenu=document.getElementById('closeMenu');
openMenu.addEventListener('click',()=>{
   

openMenu.style.display="none";
closeMenu.style.display="block";

navlist.style.marginTop="-25px";
logo.style.marginTop="380px";


 
});

closeMenu.addEventListener('click',()=>{
openMenu.style.display="block";
closeMenu.style.display="none";

navlist.style.marginTop="-1100px";
logo.style.marginTop="-450px";

});


    </script>
  </body>
</html>
