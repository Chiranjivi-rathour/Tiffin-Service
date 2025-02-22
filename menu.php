<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Menu</title>
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
  
 
/* --------sidebar------- */
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  font-family: "Josefin Sans", sans-serif;
}
body{
    background-color: #161616; 
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
.menu{
    width: 100%;
    height:100vh;
    /* background-color: #161616; */
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
    transition: all 1.2s ease-in-out;
  
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

#menu{
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
    
    .content{
        padding: 20px;
    }
    .content h1{
        font-size: 25px;
        margin-bottom: 5px;
    }
    
    .orderBtn{
        width:100px;
        height:30px;
        font-size:15px;
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
    @media screen and (max-width:700px){
        .hamburger{
            margin-left:140px;
        }   
        .content img{
            height: 150px;
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




.content{

    box-sizing: border-box;
    width:100%;
    height:100vh;
    color: white;
    display: flex;
    justify-content: center;
    align-items:center;
  flex-direction: column;
  /* background-image: url('image/tiffinBg1.png'); */
  background-size: cover;
 background-blend-mode: darken;
  background-color: rgba(22, 22, 22,1);
 
}
.content h1{
    font-size: 45px;
}
.listHover{
    background-color:white;
    color: #161616;
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
  font-weight: bolder;
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
.orderBtn:hover {
    background-color: white;
}
.orderBtn a{
    text-decoration: none;
    color: white;
    text-decoration-color:white;
}
.orderBtn a:hover{
    color: #A30000;
}

.slider{
    width: 800px;
    height: 500px;
     overflow: hidden;
    
}

.slides{
    width: 500%;
    height: 500px;
    display: flex;
   
}
.slide img{
    width: 800px;
    height: 500px;
    opacity: 0.6;
}

.slides input{
    display: none;
}
.slide{
    width: 20%;
    transition: 2s;
}

/* manual navigation */
.navigation-manual{
   
    position: absolute;
    width: 800px;
    margin-top: -40px;
    display: flex;
    justify-content: center;
   
}
.manual-btn{
    border: 2px solid black;
    padding: 5px;
    border-radius: 10px;
    cursor: pointer;
    transition: 1s;
}
.manual-btn:not(:last-child){
margin-right: 40px;

}
.manual-btn:hover{
    background-color: black;
}
#radio1:checked ~.first{
    margin-left: 0;
}
#radio2:checked ~.first{
    margin-left: -20%;
}
#radio3:checked ~.first{
    margin-left: -40%;
}
#radio4:checked ~.first{
    margin-left: -60%;
}

/* automatic navigation */

.navigation-auto{
    position: absolute;
    display: flex;
    width: 800px;
    justify-content: center;
    margin-top: 460px;
}
.navigation-auto div{
    border: 2px solid black;
    padding: 5px;
    border-radius: 10px;
    transition: 2s;
}
.navigation-auto div:not(:last-child){
    margin-right:40px;
}

#radio1:checked ~ .navigation-auto .auto-btn1{
background: black;
}
#radio2:checked ~ .navigation-auto .auto-btn2{
    background: black;
    }
    #radio3:checked ~ .navigation-auto .auto-btn3{
        background: black;
        }
        #radio4:checked ~ .navigation-auto .auto-btn4{
            background: black;
            }

/* for menulist */
.menuList{
    /* margin-left: -1000px; */
    width: 100%;
    height: 100vh;
    background-color:#161616;
    color: white;
    display: flex;
    justify-content: center;
    align-items:center;
    /* transition: all 1.7s ease-out; */
}
table{
    font-size: 20px;
    border-spacing: 15px;
    
}
.theading{
    font-size: 30px;
}
table, th, td {  
   
    border: 1px solid white; 
   
    border-collapse: collapse;  
  }  
  th, td {  
    padding: 20px;  
  }  
  table#alter tr:nth-child(even) {  
    background-color: #eee;  
  }  
  table#alter tr:nth-child(odd) {  
    background-color: #fff;  
  }  
  table#alter th {  
    color: white;  
    background-color: gray;  
  }

    /* for menu categories */




    .categories{
        width: 100%;
   height: 100vh;
        background-color:#161616;
        color: white;
        display: flex;
        justify-content: center;
        align-items:center;
      flex-direction: column;
    }
    .categories h1{
        font-size: 40px;
    }
   .categories .optionMenu{
width:70%;
height:80vh;
display: flex;
justify-content: center;
align-items:center;
   }
   .categories .optionMenu .options{
       width:33% ;
       height: 65vh;
       background-color:rgba(255, 255, 255,0.1);
       display: flex;
        justify-content: space-around;
        align-items:center;
      flex-direction: column;
   }
   .categories .optionMenu .options > p{
font-size: 25px;
   }
   .categories .optionMenu .options div{
       width: 90%;
       opacity: 0.5;
       cursor: pointer;
   }
   .categories .optionMenu .options div:hover{
       opacity: 0.9;
   }
   .categories .optionMenu .options div img{
       width: 100%;
       height: 300px;
     
   }
   .options h3{
       font-size: 25px;
   }
   .categories .optionMenu .options .orderBtn{
    padding:10px 30px !important;
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

   /* --------MEDIA QUERY------- */

/* ------FOR MOBLIE VIEW------ */


/* AND */
        /* FOR TABLET VIEW */
@media screen and (max-width: 769px){
    
    .content{
        padding-top: 150px;
       margin-left: 100px;
    }
    .slider {
        width: 700px;
      
       
    }
    .slider ~ .orderBtn{
        width: 25%;
        height: 70px;
    }
    .slide img {
        opacity:1;
    }
    .menuList {
    
        margin-left: 70px;
        height: 100vh;
       
    }
    .navigation-auto {
        position: absolute;
        display: flex;
        width: 800px;
        justify-content: center;
        margin-top: 268px;
    }
    table{
      margin: 50px;
        font-size: 20px;
        border-spacing: 15px;
    }
    .theading{
        font-size: 25px;
    }
    
      th, td {  
        padding:5px;  
      } 

      .categories{
        height: 350vh;
        margin-left: 80px;
    }
    .categories h1{
        margin-top: 100px;
        font-size: 40px;
        margin-bottom: 50px;
    
    }
    .categories .optionMenu {
        width: 100%;
        height:300vh;
      flex-direction: column;
    
    
   }
   
  
  .categories .optionMenu .options{
      width:70% ;
      height:100vh;
     margin-bottom: 40px;
  }
 
  .categories .optionMenu .options div img {

   height: 400px;
}
.options h3 {
   font-size: 30px;
}
.categories .optionMenu .options .orderBtn {
    padding:20px 30px !important;
   font-size: 25px;
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

@media screen and (max-width: 481px){
    .slider{
        display:none;
    }
     .content{
        margin-left: 0px;
         height: 10vh;
    
     }
     .slider ~ .orderBtn{
         display: none;
     }
     .homeContent {
    height: 20vh;
   
             }
            .logo .logoImg h1{
                font-size: 20px;
            }
             .menu{
                 height:30vh;
             
             }
             .menu h1{
                 font-size: 25px;
             }
             .menuList{
                 margin-left: 0px;
                 height: 70vh;
             }
             .theading{
                 font-size: 12px;
             }
             table{
                 margin: 50px;
                 font-size: 10px;
             }
             .categories{
                 height: 200vh;
               margin-left: 0px;
             }
             .categories h1{
                 margin-top: 100px;
                 font-size: 30px;
             
             }
             .categories .optionMenu {
                 width: 100%;
                 height:250vh;
               flex-direction: column;
             
            }
            
            .categories .optionMenu .options > p{
                font-size:17px;
                   }
           .categories .optionMenu .options{
               width:70% ;
               height:50vh;
              
           }
           .categories .optionMenu .options div img {
         
            height: 200px;
        }
        .options h3 {
            font-size: 20px;
        }
        .categories .optionMenu .options .orderBtn {
            padding:20px 30px !important;
            font-size: 15px;
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
    <section class="menu">
     
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
            <a href="menu.php" id="menu"> <i class="fa fa-cutlery listIcon" ></i> <span>Menu</span> </a>
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
         
<h1>Tiffin Menu</h1>
<br> 
<div class="slider">
  <div class="slides">
      <input type="radio" name="radio-btn" id="radio1">
      <input type="radio" name="radio-btn" id="radio2">
      <input type="radio" name="radio-btn" id="radio3">
      <input type="radio" name="radio-btn" id="radio4">
   

      <!-- slider image -->
      <div class="slide first">
          <img src="img/menu1.png" alt="">
      </div>
      <div class="slide">
          <img src="img/menu2.jpg" alt="">
      </div>
      <div class="slide">
          <img src="img/menu3.jpg" alt="">
      </div>
      <div class="slide">
          <img src="img/menu4.jpg" alt="">
      </div>

   
 
     <!-- automatic navigation -->
     <div class="navigation-auto">
      <div class="auto-btn1"></div>
      <div class="auto-btn2"></div>
      <div class="auto-btn3"></div>
      <div class="auto-btn4"></div>
  </div>

</div>
  <!-- maunal navigation -->
  <div class="navigation-manual">
      <label for="radio1" class="manual-btn"></label>
      <label for="radio2" class="manual-btn"></label>
      <label for="radio3" class="manual-btn"></label>
      <label for="radio4" class="manual-btn"></label>
  </div>
</div>

<br> 

          <div class="orderBtn">
           <a href="register.php"> Order Now</a>
          </div>

      </div>
     
    </section>

      <section class="menuList" id="menuList">
        <table>  
         
          <tr class="theading"><th>Days</th><th>Lunch</th><th>Dinner</th></tr>  
          <tr><td>Monday</td>
            <td>Masoor Daal + Rice + Roti + Seasonal Veg. + Salad</td>
            <td>Seasonal Veg. + Roti + Rice + Salad</td></tr>  
          <tr>
            <td>Tuesday</td>
            <td>Chole + Puri + Rice</td>
            <td>Seasonal Veg. + Roti + Rice + Salad</td>
          </tr>  
          <tr>
            <td>Wednesday</td>
            <td>Curry + Rice + Roti + Salad</td>
            <td>Roti + Kofta + Rice + Salad</td>
          </tr>  
          <tr>
            <td>Thursday</td>
            <td>Aalu Dam + Roti + Rice + Salad</td>
            <td>Veg Biriyani + Salad + Gravy</td>
          </tr>  
          <tr>
            <td>Friday</td>
            <td>Daal + Roti + Rice + Rayta + Seasonal Veg.</td>
            <td>Aalu Paratha</td>
          </tr>
          <tr>
            <td>Saturday</td>
            <td>Mix Veg. + Rice + Daal + Salad</td>
            <td>Roti + Rice + Seasonal Veg. + Salad</td>
          </tr>
          <tr>
            <td>Sunday</td>
            <td>Chole Bhature</td>
            <td>Paneer + Pulav + Puri + Salad + Gulab Jamun</td>
          </tr>
          </table>  




        
      </section>

    <section class="categories">
     <h1>Book Your Tiffin Now</h1>

      <div class="optionMenu">
        <div class="options">
          <div>
            <img src="img/single.jpeg" alt="">
          </div>
  
          <h3>Only For One Time</h3>
          <p>50 rs.</p>
          <div class="orderBtn">
            <a href="register.php"> Order Now</a>
          </div> <br>
        </div>
    
    

      <div class="options">
     <div>
      <img src="img/weekly.jpeg" alt="">
     </div>
        <h3>For a Week</h3>
        <p>350 rs.</p>
        <div class="orderBtn">
          <a href="register.php"> Order Now</a>
        </div> <br>
      </div>

  

    <div class="options">
    <div>
      <img src="img/monthly.jpeg" alt="">
    </div>
      <h3>For a Month</h3>
      <p>1500 rs.</p>
      <div class="orderBtn">
        <a href="register.php"> Order Now</a>
      </div> <br>
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



//slider
var counter=1;
setInterval(function(){
    document.getElementById('radio' + counter).checked =true;
    counter++;
    if(counter >4){
        counter =1;
    }
},4000);


window.addEventListener('load', ()=>{
    sidebar.style.marginLeft="0px";
   
   
  

    
});






    </script>
  
  </body>
</html>
