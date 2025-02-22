<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About us</title>
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
.about{
    width: 100%;
    height:200vh;
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
#about{
    color:#161616;
}

/* .homeContent{
   
    z-index: 1;
    width: 100%;
    height: 100vh;
    
} */

.content{
    width:100%;
    height: 100vh;
    color: white;
    display: flex;
    justify-content: center;
    align-items:center;
 
  background-color: rgba(22, 22, 22,0.8);
}

.content h1{
    font-size: 40px;
}
.content p{
    padding:0px 150px 0px 150px;
}
.leftContent{
    width: 50%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items:center;
    flex-direction: column;
    padding-left: 100px;
}
.rightContent{
    width: 50%;
    height: 100vh;
    display: flex;
    justify-content:flex-start;
    align-items:center;
}
.rightContent div{
    width: 80%;
    height: 60vh;
}
.rightContent div img{
    width: 100%;
    height: 60vh;
}

.profile{
    width:100%;
    height:100vh;
    color: white;
    display: flex;
    justify-content: center;
    align-items:center;
    flex-direction:column ;
 padding:0px 50px 0px 150px;
  background-color: #161616;
 
}
.profile > h1{
    font-size: 45px;
}
.profile > div{
    display: flex;
    justify-content: space-around;
    align-items:center;
    width: 50%;
    height: 500px;

}


.profile .profileImg{
    border-radius: 15px;
    cursor: pointer;
    width: 300px;
    height: 400px;
    background-color: #A30000;
    display: flex;
    justify-content: center;
    align-items:center;
    flex-direction:column ;
}
.profile .profileImg div{
   
    width: 250px;
    height: 250px;
    background-color:white;
}
.profile .profileImg div img{
    width: 100%;
    height: 250px;
transition: all 1s ease-in;
}
.profile .profileImg div img:hover{
    transform: scale(0.9);
}
.profile .profileImg .profileName{
    
    width: 250px;
    height: 50px;
    background-color:#161616;
    display: flex;
    justify-content: center;
    align-items:center;
    transition: all 0.7s ease-in;
}
.profile .profileImg .profileName:hover{
    background-color: white;
    color: #A30000;
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
  top:20px;
}


/* --------MEDIA QUERY------- */


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
    .homeContent{
   
      
        height: 300vh;
        
    }
    .content{

        height: 150vh;
        flex-direction: column;
      
    }
  .leftContent ,.rightContent{
      width: 100%;
      height: 70vh;
  }
  .leftContent{
    padding-left: 0px;
}
.rightContent {
    justify-content: center;

}
.about{
    height: 350vh;
}
.profile{
    height: 150vh;
}
.profile > div {
 flex-direction: column;
    justify-content: space-around;
   
    width: 50%;
    height:150vh;
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
top:100px;
font-size:30px;
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

    /* ------FOR MOBLIE VIEW------ */
@media screen and (max-width:481px){
    .about {
        height: 400vh;
    }
    .homeContent {
        width: 100%;
        height: 350vh;
    }
    .content {

        height: 190vh; 
}

.leftContent, .rightContent {
    width: 100%;
    height: 150vh;
}
.rightContent div {
    width: 90%;
    height: 60vh;
}
.rightContent div img {

    height: 60vh;
}
.profile {
    width: 100%;
    height: 150vh;
    margin-left: -50px;
}
.profile > div {
height: 120vh;
    width: 100%;
 
}

.profile > h1 {
    text-align: center;
    font-size: 30px;
}
.profile .profileImg {
   width: 250px;
  height: 300px;
    
}
.profile .profileImg div {
    width: 200px;
    height: 200px;
   
}
.profile .profileImg div img {
  
    height: 200px;
   
}
.profile .profileImg .profileName {
    width: 200px;
    height: 30px;
   
}
.profile .profileImg .profileName h1{
    font-size: 20px;
}

.content p {
    padding: 0px 60px 0px 60px;
}

footer{
            height: 150vh;
            padding-left: 0px;
        }
        .frow1{
            height: 140vh;
        }
        .content h1 {
    font-size:30px;
        }
 #username{
top:100px;
font-size:20px;
}
}
</style>



  </head>
  <body>
    <section class="about">
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
            <a href="homeActive.php">
              <i class="fa fa-home  listIcon" id="home"></i><span>Home</span>
            </a>
          </li>
          <div id="homeHover" class="listHover">Home</div>

          <li>
            <a href="menuActive.php"> <i class="fa fa-cutlery listIcon" ></i> <span>Menu</span> </a>
          </li>
          <div id="menuHover" class="listHover">Menu</div>
          <li>
            <a href="aboutActive.php" id="about">
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
         
        <h1 id="username"> <i class="fa fa-user listIcon"></i> Username</h1>


            <div class="leftContent">
                <h1>About us</h1>
                <p>
                 

                 We have created this website for the purpose of opening tiffin service in the university campus main for the hostelors and teachers, working Stuff and any kind of people who want to get tiffin and converting it into an online platform. 
                 
                 Our website removes the problem of offline management by bringing Tiffin Management System online platform.
                 
                 This website is user friendly for both the owner and the customers. And because of this, the problems that existed in offline management are getting removed.
                 
                 
                 With this, both the order data and the customer details of the customers are protected and the customer also gets access to view his data using user I'd and password. 
                 
                 
                 Due to this it becomes very easy for the owner to manage the tiffin service.</p>
                             </div>
      <div class="rightContent">
          <div>
            <img src="img/tiffinBg1.png" alt="">
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






let openMenu=document.getElementById('openMenu');
let closeMenu=document.getElementById('closeMenu');
openMenu.addEventListener('click',()=>{
   
openMenu.style.display="none";
closeMenu.style.display="block";

navlist.style.marginTop="-25px";
logo.style.marginTop="430px";


 
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
