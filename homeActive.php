<?php 

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true){
    header("location : login.php");
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
.content h1{
   font-size: 20px;
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
.orderBtn :hover{
    color: #A30000 !important;
}

#home{
    color:#161616;
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


#username{
    position: absolute;
    right:15px;
  top:60px;
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

    .content h1 i{
   
    margin-bottom:20px;
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

    #username{

    right:15px;
  top:150px;
}
    }
    
    @media screen and (max-width: 768px){
        .hamburger{
            margin-left:600px;
        }   
        .content img{
            height: 200px;
            
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
    }
    @media screen and (max-width:700px){
        .hamburger{
            margin-left:140px;
        }   
        .content img{
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
            <a href="homeActive.php" id="home">
              <i class="fa fa-home  listIcon" id="home"></i><span>Home</span>
            </a>
          </li>
          <div id="homeHover" class="listHover">Home</div>

          <li>
            <a href="menuActive.php"> <i class="fa fa-cutlery listIcon" ></i> <span>Menu</span> </a>
          </li>
          <div id="menuHover" class="listHover">Menu</div>
          <li>
            <a href="aboutActive.php">
              <i class="fa fa-info-circle  listIcon"></i> <span>About us</span>
            </a>
          </li>
          <div id="aboutHover" class="listHover">About</div>
          <li>
            <a href="contactActive.php">
              <i class="fa fa-phone-square  listIcon"></i> <span>Contact us</span>
            </a>
          </li>
          <div id="contactHover" class="listHover">Contact</div>
          <li>
            <a href="MyProfile.php">
              <i class="fa fa-user listIcon"></i> <span>My Profile</span>
            </a>
          </li>
          <div id="logoutHover" class="listHover">My Profile</div>

          <li>
            <a href="myOrder.php"> <i class="fa fa-address-book-o listIcon"></i> <span>My Orders</span> </a>
          </li>
          <div id="loginHover" class="listHover">My Orders</div>
         

          <li>
            <a href="logout.php">
              <i class="fa fa-arrow-circle-o-right  listIcon"></i> <span>Logout</span>
            </a>
          </li>
          <div id="logoutHover" class="listHover">Logout</div> 
         


          
          

          <li>
            <i class="fa fa-chevron-circle-right  listIcon  openSideBar closeSideBar" id="openSideBar"></i>
          </li>

        </div>
        </nav>
        <div class="content">
            
        <h1 id="username"><i class="fa fa-user listIcon"></i>
        <?php
                    include("config.php");
                    $query = "SELECT * FROM `users`";
                    $data = mysqli_query($conn,$query);
                    $total_rows = mysqli_num_rows($data);
                    
                    if($total_rows>0){
                        while($rows = mysqli_fetch_assoc($data)){
                            if($rows['username']==$_SESSION['username']){
                   
                    echo $_SESSION['username'];
        }

    }
   
} ?>

</h1>

          <img src="img/logo3.png" alt="" />
        
        
          <h1>  
         
         <br>
         <?php
                    $query = "SELECT * FROM `users`";
                    $data = mysqli_query($conn,$query);
                    $total_rows = mysqli_num_rows($data);
                    
                    if($total_rows>0){
                        while($rows = mysqli_fetch_assoc($data)){
                            if($rows['username']==$_SESSION['username']){
                   
                      echo "<h1>".  " Welcome   ". $rows['username'] ." !!" ."</h1>";
        }

    }
   
} 
else{
    echo "Table has No records";
}
?>
         
     
        
        </h1>
    
          <p>
            Now you can book tiffin according to you, so what are you waiting for, go and book food that tastes like home !          </p>
          <br>

          <div class="orderBtn">
         <a href="orderNow.php">Order Now</a>
          </div>
        </div>
      </div>
    </section>


    <hr style="border-color: gray;">
    <?php include('footer.php'); ?>
    <script>

// for open side bar
let openSideBar=document.getElementById('openSideBar');
let sidebar=document.getElementById('sidebar');
let listHover=document.querySelectorAll('.listHover');
let listIcon=sidebar.querySelectorAll('.listIcon');
let navlist=document.getElementById('navlist');
let logo=document.getElementById('logo');

openSideBar.addEventListener('click', ()=>{

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



listIcon[7].addEventListener("mouseover", ()=>{
    listHover[7].style.visibility="visible";
});

listIcon[7].addEventListener("mouseout", ()=>{
    listHover[7].style.visibility="hidden";
});









let openMenu=document.getElementById('openMenu');
let closeMenu=document.getElementById('closeMenu');
openMenu.addEventListener('click',()=>{


openMenu.style.display="none";
closeMenu.style.display="block";

navlist.style.marginTop="-25px";
logo.style.marginTop="445px";


 
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
