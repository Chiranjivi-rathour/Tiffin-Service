
<?php 

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true){
    header("location : login.php");
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Order Now</title>
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
    height: auto;
    
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



.main {
    height: 630px;
    width: 40%;
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
input[type='text'] ,input[type='date']{
  
font-weight: bolder;

}
input[type='date']{
    color: rgb(194, 197, 199);

}

.button {
    background-color: rgb(156, 50, 50);
    height: 40px;
    width: 20%;
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
    background-color:white;
color: #A30000;
}

#submit{
    display: flex;
    align-items: center;
    justify-content: center;
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


.orderReceipt{
   
    width:60%;
    height:auto;
    display: flex;
    justify-content: center;
    align-items:center;
    flex-direction: column;
    background-color:#161616;
    color:white;
    position: absolute;
   top: 20px;       
   left: 350px;
   padding:50px 0px;
   
}

caption{
    background-color:#161616;
    height: 70px;
   border: 2px solid rgb(194, 197, 199);
   padding-top: 15px;
   font-size: 25px;
}
table{
    font-size: 20px;
    border-spacing: 15px;
    
}
.theading{
    font-size: 30px;
}
table, th, td {  
   
    border: 1px solid rgb(194, 197, 199); 
   
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

  #sTiffinImg{
      height: 150px;
      opacity: 0.5;
  }

  #print , #back{
    
      width: 12%;
  }

  #myOrders{
    color: #161616; 
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
    
    .logo {

margin-top: -450px;
/* margin-top:500px; */
margin-bottom: 20px;
width: 100%;
height: 70px;
flex-direction: row;
justify-content: space-around;

}

.navlist {
margin-top: -1100px;
padding-top: 20px;

/* margin-top:-25px; */
width: 100%;
height: 100vh;

}
    .contact{
        height: 150vh;
    }
   .content{
       height: 50vh;
   }
    .main{
        margin-top: 300px;
        height: 100vh;
        width: 90%;
    }
 .button{
    transition: none;
 }

 .orderReceipt{

    width:100%;
    height: 150vh;
top: 100px;
    left: 0px;
}
table{
    font-size: 15px;
    margin:0px 20px 0px 20px;
}
#print ,#back{
    width: 30%;
    font-size: 15px;
}
    }
    
    @media screen and (max-width:481px){
        #sTiffinImg{
            height: 50px;
           
        }  
     table{
         font-size: 10px;
     }
    }

    @media screen and (max-width: 768px){
        .hamburger{
            margin-left:600px;
        }   
        .button{
            width: 20%;
        }
    }
    @media screen and (max-width:700px){
        .hamburger{
            margin-left:140px;
        }   
        .button{
            width: 50%;
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
    <section class="contact">

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
            <a href="menuActive.php"> <i class="fa fa-cutlery listIcon"></i> <span>Menu</span> </a>
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
            <a href="MyProfile.php" id="myprofile">
              <i class="fa fa-user listIcon"></i> <span>My Profile</span>
            </a>
          </li>
          <div id="logoutHover" class="listHover">My Profile</div>

          <li>
            <a href="MyOrder.php" id="myOrders"> <i class="fa fa-address-book-o listIcon"></i> <span>My Orders</span> </a>
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
  


      <div class="orderReceipt" id="orderReceipt">
      
        
       <?php

            include("config.php");
 
            $query = "SELECT * FROM users,orders 
            WHERE users.user_id = orders.order_id";            
        
            $data = mysqli_query($conn,$query);
            $total_rows = mysqli_num_rows($data);

            if($total_rows>0){
                while($rows = mysqli_fetch_assoc($data)){
                    if($rows['username']==$_SESSION['username']){
                                  
          ?>                 

        <table style='margin-bottom:30px' id="table">  
          
        <caption>Order ID <?php echo "ORDID_0" . htmlspecialchars($rows['id']); ?></caption>
        
          <tr><td>Name of Customer</td>
            <td id="sName"><?php echo $rows['username'];?></td>
           
           
            <td>Mobile No. </td>

           <td  id="sPhoneNum"><?php echo $rows['phone'];?></td>
          <tr>

            <td>Address</td>
            <td id="sAddress" ><?php echo $rows['address'];?></td>

           <td>Order Date</td>
           <td id="sorderDate"><?php echo $rows['date'];?></td>
          </tr>  
          <tr>
            <td>Tiffin type</td>
            <td id="sTiffinType"> <?php echo $rows['tiffin_Type'];?></td>
           
          
            <td>Tiffin Image</td>
            <td id="tdImg">
                <img id="sTiffinImg" src="<?php 
                    if ($rows['tiffin_Type'] === 'monthly') {
                        echo 'img/monthly.jpeg';
                    } elseif ($rows['tiffin_Type'] === 'weekly') {
                        echo 'img/weekly.jpeg'; 
                    } else {
                        echo 'img/single.jpeg';
                    }
                ?>" alt="">
            </td>
          </tr>  
          <tr> 
            <?php
                    switch($rows['tiffin_Type']){
                        case "For Once":{
                           echo "<td>"."Total days"."</td>";
                           echo "<td>"."1"."</td>";
                           echo "<td>"."Tiffin Cost"."</td>";
                           echo "<td>"."50rs"."</td>";
                            break;
                        }
                        case "weekly":{
                            echo "<td>"."Total days"."</td>";
                            echo "<td>"."7"."</td>";
                            echo "<td>"."Tiffin Cost"."</td>";
                            echo "<td>"."350rs"."</td>";
                            break;
                        }
                        case "monthly":{
                            echo "<td>"."Total days"."</td>";
                            echo "<td>"."30"."</td>";
                            echo "<td>"."Tiffin Cost"."</td>";
                            echo "<td>"."1500rs"."</td>";
                            break;
                        }
                        default :
                         echo "";
                        break;
                        }
            ?>
            <!-- <td>Total days</td>
            <td id="sTotalDays"></td>
            <td>Tiffin Cost</td>
         <td id="sTiffincost"></td> -->
          </tr>  
            
       

          
          
          
          <?php
                    }

                }
 
            } 

   ?>
          </table>  
   
   <br> 
          <button class="button" id="print">Print</button>
          <button class="button" id="back">Back</button>

      </div>
</div>
    </section>

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
          logo.style.marginTop="445px";


          
          });

          closeMenu.addEventListener('click',()=>{
          openMenu.style.display="block";
          closeMenu.style.display="none";

          navlist.style.marginTop="-1100px";
          logo.style.marginTop="-440px";  







          });



//for print 

let print = document.getElementById('print');
// let main= document.getElementById('main');
let back= document.getElementById('back');
let table= document.getElementById('table');

back.addEventListener('click',()=>{
    window.location.replace("orderNow.php");
});

print.addEventListener('click', ()=>{
  sidebar.style.marginLeft="-200px";

    orderReceipt.style.marginLeft="-200px";
  orderReceipt.style.color="black";
    table.style.color="black";
    window.print();
   
});

window.addEventListener('click', ()=>{
    sidebar.style.marginLeft="0px";
    // main.style.visibility="visible";
    orderReceipt.style.color="white";
    table.style.color="rgb(194, 197, 199)";

    orderReceipt.style.marginLeft="0px";
   

})




    </script>
  </body>
</html>
