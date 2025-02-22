<?php
  include("config.php");
      
  $fusername = ''; 
  $fcomment = '';


if($_SERVER['REQUEST_METHOD'] == "POST") {
// If there were no errors, gxo ahead and insert into the database
 
  if( isset( $_POST['fusername']) ||  isset( $_POST['fcomment'])  ) {
      
      $fusername = trim($_POST['fusername']);
      $fcomment = trim($_POST['fcomment']);
    
  } 

  $sql = "INSERT INTO feedback (fusername,fcomment) VALUES (?,?)";

  $stmt = mysqli_prepare($conn, $sql);

  if ($stmt)
  {
      mysqli_stmt_bind_param($stmt, "ss", $param_fusername,$param_fcomment);

      // Set these parameters
      $param_fusername = $fusername;
      $param_fcomment = $fcomment;
       
      // Try to execute the query
      if (mysqli_stmt_execute($stmt))
      {
    }
      else{
          echo "Something went wrong... cannot redirect........................@@@!";
      }

  }

  mysqli_stmt_close($stmt);
  
  }
  else{
    echo "";
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
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
.home{
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
.bgvideo{
    width: 100%;
    height: 100vh;
    position: absolute;
    top: 0;
    left: 0;
    object-fit: cover;
    width: 100%;
    height: 100%;
    pointer-events: none;

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
    transition: all 1.2s ease-in-out;
    margin-left: -100px;
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
.content p{
    font-size: 20px;
    text-align: center;
    /* color:rgba(220, 220, 220,0.5); */
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
.content img {
 margin-right: -1000px;
 transition: all 1.2s ease-in-out;
}
.content h1{
   font-size: 40px;
   font-family: 'Amatic SC', cursive;
   margin-top: -50px;
   margin-bottom: 5px;
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
.orderBtn{
    background-color: #A30000;
    display: flex;
    justify-content: center;
    align-items:center;
    width:10%;
    height: 40px;
    color:rgb(248, 239, 239) ;
    border-radius: 20px;
    transition:all 0.2s ease-in;
    cursor: pointer;
    font-weight: bold;
    font-size: 20px;
}
.orderBtn:hover{
    background-color:white;
    color: #A30000 !important;

}
.orderBtn:hover {
    background-color: white;
}
.orderBtn a{
    text-decoration: none !important;
    color: white !important;
    text-decoration-color:white !important;
}
.orderBtn:hover{
    color: #A30000 !important;
}

#admin{
    text-decoration:none;
    color:grey;
    cursor:text;
}

#home{
    color:#161616;
}
.content p{
    color:grey;
}
.howItsWork {
    background-color:#161616;
}
.howItsWork , .feebackSection{
    width:100%;
height:100vh;
    color: rgb(248, 239, 239);
    display: flex;
    justify-content: center;
    align-items: center;
padding-left:100px;


}

.howItsWork .left{
    width:100%;
    height:auto;
    color: rgb(248, 239, 239);
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction:column;


}

.howItsWork .left h1{
    font-size:50px;
}

.howItsWork .left div{
    width:50%;
    height:100px;
    border: 2px solid rgb(156, 50, 50);
    cursor:pointer;
    display: flex;
    justify-content: center;
    align-items: flex-start;
    flex-direction:column;
    padding-left:20px;
    padding-right:20px;
}
.howItsWork .left div:hover{
    box-shadow: rgb(156, 50, 50) 1px 1px 20px 1px;
}
.howItsWork .left .orderOption{
    height:250px;
}
.howItsWork .left div h2 a {
    color: #A30000;
}
.howItsWork .left div p {
    color:grey;
}
.howItsWork .left .cOption{
    height:150px;
}

.feebackSection{
    height:auto;
    background-color:#161616;
    flex-direction:column;  
}
.customerFeedback{
    width:100%;
    height:auto;
    color: rgb(248, 239, 239);
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction:column;
}

.customerFeedback td{
    width:100%;
    height:150px;
    border: 2px solid rgb(156, 50, 50);
    box-shadow: rgb(156, 50, 50) 1px 1px 15px 1px;
    display: flex;
    justify-content:center;
    align-items:  flex-start;
    flex-direction:column;
    padding-left:50px;
    margin: 20px;
    color:white;
    margin-bottom:100px;
}

.customerFeedback td h1{
color:white;
}
.customerFeedback td p{
    color:grey;
}

:root{
    --primary-color:rgb(248, 239, 239);
    --secondary-color:#161616; 
}



.content h1{
    font-size: 40px;
}

.sidebar li a i:hover{
   color:var(--secondary-color);
}


.contactForm{
    margin-top:100px;
    width: 40%;
    height:60vh;
    margin-bottom:150px;
}

.main {
    padding:50px 0px !important;
    width: 100%;
    border-radius: 15px;
    color: var(--primary-color);
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

.main input ,.main textarea {
    background-color:var(--secondary-color);
    border: none;
    width: 60%;
    border-bottom: solid rgb(156, 50, 50) 2px;
    color: var(--primary-color);
    font-size: 15px;
    font-weight: bolder;
}
.main textarea {
    border: solid rgb(156, 50, 50) 2px;
    padding:15px;
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
    width: 20%;
    margin-top: 10px;
    border-radius: 30px;
    cursor: pointer;
    color: var(--primary-color);
    font-weight: bold;
    transition:All 1s ease-in-out;
    font-size:15px;
    border: none;
}
td p a{
      text-decoration:none;
      color: #A30000;
    font-weight:bold;
    }

.button:hover {
    background-color: var(--primary-color);
   
}

.button ~ p{
    font-weight: bold;
}

.button a{
    text-decoration: none;
    color: var(--primary-color);
    text-decoration-color:var(--primary-color);
}
.button:hover, .button a{
    color: #A30000;
}
.main .feild {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    font-size: 13px;
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

#delete{
    cursor:pointer;
    margin-left:150px;
    text-align:center;
    color: #A30000;
    font-weight:bold;
}
#delete:hover{
    text-decoration:underline;
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
    .bgvideo{
        object-fit: fill;
      
    }
    .content{
        padding: 20px;
    }
    .content h1{
        font-size: 25px;
        margin-bottom: 5px;
    }
    .content p{
        font-size: 15px;
    }
    .orderBtn{
        width:100px;
        height:30px;
        font-size:15px;
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

    .howItsWork,.feebackSection{
    width: 100%;
    height:auto;
   flex-direction:column;
   padding-left:0px;
}

.howItsWork .right {
    padding-left: 0px;
}
.howItsWork .left h1 {
    font-size: 35px;
}
.howItsWork .left div h2{
    font-size: 20px;

    }
    .howItsWork .left{
        padding-left:0px;
        margin-bottom:150px;
    }

}
    
    @media screen and (max-width: 768px){
        .hamburger{
            margin-left:600px;
        }   
       
        .content img {
            height: 200px;
            margin-right:0px;
            transition:none;
           }

    }

    @media screen and (max-width:481px){
        footer{
            height: 150vh;
            padding-left: 0px;
        }
        .frow1{
            height: 140vh;
        }
        .howItsWork,.feebackSection{
    width: 100%;
    height:auto;
   flex-direction:column;
   padding-left:0px;
}

.howItsWork .right {
    padding-left: 0px;
    height:50vh;
}
.howItsWork .left h1 {
    font-size: 35px;
}
.howItsWork .left div h2{
    font-size: 20px;

    }
    .howItsWork .left{
        padding-left: 0px;
        height:130vh;
    }
    .howItsWork .left div {
    height: 200px;
}

.howItsWork .left .orderOption {
    height: 450px;
}
.howItsWork .left .cOption {
    height: 200px;
}

        video{
    width:250px;
    aspect-ratio: auto 250 / 200;
    height: 200px;
}

.contactForm {
    margin-top:0px;
    width: 90%;
    height: 60vh;
}
.customerFeedback div{
    width: 90%;  
}
    }

    
    @media screen and (max-width:700px){
        .hamburger{
            margin-left:140px;
        }   
        .content img{
            margin-right:0px;
            transition:none;
            height: 120px;
            margin-bottom: 20px;
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
</style>

  </head>
  <body>
    <section class="home">
      <video playsinline autoplay muted loop class="bgvideo">
        <!-- <source src="image/bgHome.mp4" type="video/mp4" class="video" /> -->
      </video>
      <div class="homeContent">

        <nav id="sidebar" class="sidebar">
          
          <div class="logo" id="logo">
            <li class="logoImg">
              <h1>Apna <br> Dabba</h1>
            </li>
            <div class="logoContent hide" id="logoContent">
          
              <p>Tiffin Service</p>
            </div>
            <div class="hamburger" id="hamburger">
              <i class="fa fa-bars " id="openMenu"></i> 
            <i class="fa fa-times " id="closeMenu" st
            yle="display: none;"></i>        
            </div>
          </div>
        




<div class="navlist" id="navlist">


          <li>
            <a href="home.php" id="home">
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
            <a href="register.php"> <i class="fa fa-user-o listIcon"></i> <span>Sign in</span> </a>
          </li>
          <div id="signHover " class="listHover">Signin</div>
          <li>
            <a href="login.php"> <i class="fa fa-user-plus  listIcon"></i> <span>Login</span> </a>
          </li>
          <div id="loginHover" class="listHover">Login</div>
         
         
      

          <li>
            <i class="fa fa-chevron-circle-right  listIcon  openSideBar closeSideBar" id="openSideBar"></i>
          </li>

        </div>
        </nav>
        <div class="content" id="content">
          <img src="img/logo3.png" alt=""  id="contentImg"/>
          <h1>Happiness is homemade.</h1>
    
          <p>
            If you are troubled by the boring food <a id="admin" href="adminForm.php">o</a>f the mess, then order tiffin with your favorite food.
          </p>
          <br>
          <div class="orderBtn">
           <a href="register.php">Order Now</a>
          </div>
         
        </div>

       
      </div>
    </section>
    <section class="howItsWork">
   
<div class="left">
<h1>How its works </h1> <br>

<div>
<h2> <a href="register.php"> <i class="fa fa-user-o"> </i></a>  First you have to Signin </h2>
<p>Go to the Home page Sidebar you will see the Signin icon </p>
</div>


<div>
    <h2><a href="login.php"> <i class="fa fa-user-plus"> </i></a> Then You have to Login</h2>
    <p>  Either You can login your id and password
 </p>
</div>

<div class="orderOption">
    <h2> <a href="menu.php"> <i class="fa fa-cutlery listIcon" ></i></a> Book Your Tiffin</h2>
    <p> 1. Click the Order Button and Book Your Tiffin According to your need.
</p> <br>
<p>2. Customer will checked User Id from the My Profile then entered in the order form and other details. </p> <br>
<p>3. Then Click the Order button and get your Order Reciept.</p> <br>
</div>

<div class="cOption">
    <h2><a href=""><i class="fa fa-eye"></i></a> Customer can also See</h2> <br> 
    <p>1. Your Profile ,</p>
    <p>2. Your Order History</p>
</div>


</div>



        </section>

<section class="feebackSection">

<div class="contactForm">
      <div class="main">
        <h2>Give Your Feedback </h2>
        
        
    <form action="" method="POST">
        
        <div class="feild">
          
            <input type="text" placeholder="Name" name="fusername" required><br><br>
           
            <textarea name="fcomment" id="" cols="40" rows="4" placeholder="enter your feedback..."></textarea>                
            
            <br><br>

            <button class="button" type="submit" >Submit</button>
        
        </div>

  </form>
           
  <?php


            if(isset($_GET['delete'])){

            $Id = $_GET['id'];
            $q = "DELETE from feedback where id = $Id";
            if(mysqli_query($conn,$q) == true){
            
            }
            else{

                echo "problem in deletion";
            }
            }
   ?>
  
  </div>
   
     </div>

<div class="customerFeedback">
    <table>
 
 <?php
            $query = "SELECT * FROM feedback";

            $data = mysqli_query($conn,$query);
            $total_rows = mysqli_num_rows($data);

            // number of records

            if($total_rows>0){
                while($rows = mysqli_fetch_assoc($data)){
          ?>
          
        
       <td><h1><i class="fa fa-user-o"></i> <?php echo $rows['fusername'];?></h1> <br>
        <p><?php   echo $rows['fcomment'] ;?></p>
        <p id="delete"><a href="home.php?id=<?php echo $rows['id'];?>&delete=true"><?php   echo "Delete";?></a></p>

        </td>

</div>

<?php
}
}
?>
</table>
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

closeMenu.style.display="none";
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
