<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Pannel</title>
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


<head>
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
    width:20%;
    height: 100vh;
    background-color:#A30000 ;
    display: flex;
    justify-content: center;
    align-items:center;
    flex-direction: column;
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
    width: 100%;
    height: 80vh;
    display: flex;
    justify-content: center;
    align-items:flex-start;
    flex-direction: column;
    background-color:#A30000 ;
    padding-left: 30px;
   
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



 
.sidebar .logoImg{
    width:300px;
    height:100px;
    display: flex;
    justify-content: center;
    align-items:center;
}
.logoImg h1{
    font-size: 30px;
    color: #161616;
    font-weight: bolder;
}

.sidebar .logoImg i{
    font-size: 40px;
    color: #161616;
    margin-right: 10px;
}

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
    font-size:15px;
margin-top: -5px;
}
.sidebar a:hover{
  font-weight: bold;
  color:#161616;
  text-shadow:#161616 1px 1px 5px;

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
bottom: 1px;
font-size: 50px;
}





.homeContent{
   
    z-index: 1;
    width: 100%;
    height: auto;
    
}

.content{
  
margin-top: -100vh;
    width:100%;
    height: auto;
    color: white;
    display: flex;
    justify-content: center;
    align-items:center;
  flex-direction: column;
}



.sidebar li a i:hover{
   color:#161616;
}

.down{
    margin-left: 10px;   
}

/* #orderType1{
    display: none;
    /* transition: all 3s ease-in-out; 
    }
*/

/* .showOrderType{
    display: block;
}  */

.content > h1{
    margin-left: 200px;
    margin-bottom: 80px;
    font-size: 30px;
    color: rgb(156, 50, 50);
    text-shadow: rgb(156, 50, 50) 1px 1px 5px;
}
.row1 ~ h1{
    margin-top: 80px;

}
.row{
    margin-left: 250px;
    width: 100%;
    height: 120px;
    margin-bottom: 0px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 10px;
}

.row div{
    cursor: pointer;
    border: 2px solid rgb(156, 50, 50);
    box-shadow: rgb(156, 50, 50) 1px 1px 15px 1px;    margin: 10px;
    display: flex;
    justify-content: center;
    align-items: center; 
    flex-direction: column;
    text-align: center;
    transition: all 0.5s ease-in-out;
   padding: 10px;
}
.row1 div{
    height: 200px;
    width: 500px;
}
.row2 div{
    height: 200px;
    width: 325px;
}
.row div:hover{
color: rgb(156, 50, 50);
border: 2px solid rgb(156, 50, 50);
box-shadow: rgb(156, 50, 50) 1px 1px 15px 1px;
text-shadow:rgb(156, 50, 50) 1px 1px 5px;
}
.row > a{
    text-decoration: none;
    text-decoration-style: none;
    color:rgb(207, 210, 213);
}
.row div > h1{
    font-size: 30px;
    color:gray;
}

.row div > p{
    font-size: 25px;
    font-weight:bold ;
   
}



    </style>
</head>


<body>
    
    <section class="contact" id="contact">
        <!-- <video playsinline autoplay muted loop class="bgvideo">
        <source src="image/bgHome.mp4" type="video/mp4" class="video" /> 
        </video> -->
        <div class="homeContent">
  
          <nav id="sidebar" class="sidebar">
            
            <div class="logo" id="logo">
              <li class="logoImg">
                <i class="fa fa-user-circle"></i>
                <h1>Mr Chiranjivi</h1>
                <!-- <img src="image/logo3.png" alt="" /> -->
              </li>
             
              <div class="hamburger" id="hamburger">
                <i class="fa fa-bars " id="openMenu"></i> 
              <i class="fa fa-times " id="closeMenu" style="display: none;"></i>        
              </div>
            </div>
          
  
  
  
  
  <div class="navlist" id="navlist">
  
  
            <li>
              <a href="adminPannel.php">
                <i class="fa fa-home  listIcon" id="home"></i><span>Home</span>
              </a>
            </li>
            <li>
              <a href="users.php"> <i class="fa fa-user-plus  listIcon"></i> <span>Customers Details</span> </a>
            </li>

           
            <li>
              <a href="orders.php" > <i class="fa fa-book listIcon "></i><span>All Orders</span> </a>
            </li>


            <li id="orderType1">
              <a href="for_Once.php">
                <i class="fa fa-calendar listIcon"></i> <span>Single Time</span>
              </a>
            </li>
            <li class="orderType">
              <a href="weekly.php">
                <i class="fa fa-calendar listIcon"></i> <span>Weekly</span>
              </a>
            </li>

            <li class="orderType">
              <a href="monthly.php">
                <i class="fa fa-calendar listIcon"></i> <span>Monthly</span>
              </a>
            </li>

            <li>
              <a href="home.php">
                <i class="fa fa-arrow-circle-o-right  listIcon"></i> <span>Logout</span>
              </a>
            </li>
         
           
  
  
          </div>
          </nav>



          <div class="content" id="content">
            <h1>Customers Details</h1>
            <p></p>
            <div class="row row1">
              <a href="users.php">
                <div class="customers">
                  <h1>Total Customers</h1>

                  <?php
                  
                  include("config.php");
                    $query = "SELECT * FROM `users`";
                    $data = mysqli_query($conn,$query);
                    $total_rows = mysqli_num_rows($data);

                    //number of records

                    echo "<p>".$total_rows."</p>";

                  ?>

                </div>
              </a>
              
              <a href="orders.php">
                <div class="orders">
                  <h1>Total Orders</h1>
                  
                  <?php
                    $query = "SELECT * FROM `orders`";
                    $data = mysqli_query($conn,$query);
                    $total_rows = mysqli_num_rows($data);

                    //number of records
                    echo "<p>".$total_rows."</p>";

                  ?>

                  </div>
              </a>
             
            </div>
  
            <h1>Tiffin Order Type</h1>
            
       <div class="row row2  ">
         <a href="for_Once.php">
          <div class="single">
            <h1> Total Single Day Orders</h1>
           
           <?php
                    $query = "SELECT * FROM `orders` WHERE `tiffin_Type`='once'";
                    $data = mysqli_query($conn,$query);
                    $total_rows = mysqli_num_rows($data);

                    //number of records
                    echo "<p>".$total_rows."</p>";

            ?>

          </div>
         </a>
       
         <a href="weekly.php">
          <div class="weekly">
            <h1>Total Weekly Orders</h1>
            
            <?php
                    $query = "SELECT * FROM `orders` WHERE `tiffin_Type`='weekly' ";
                    $data = mysqli_query($conn,$query);
                    $total_rows = mysqli_num_rows($data);

                    //number of records
                    echo "<p>".$total_rows."</p>";
            ?>

          </div>
         </a>
        
         <a href="monthly.php">
          <div class="monthly">
            <h1>Total Monthly Orders</h1>
            
            <?php
                    $query = "SELECT * FROM `orders` WHERE `tiffin_Type`='Monthly'";
                    $data = mysqli_query($conn,$query);
                    $total_rows = mysqli_num_rows($data);

                    //number of records
                    echo "<p>".$total_rows."</p>";
                    
            ?>

          </div>
         </a>
  
       </div>
        
        </div>
  
  
      </section>
  
    <script>
        // for open side bar



let navlist=document.getElementById('navlist');
let logo=document.getElementById('logo');




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
// let typeDown=document.getElementById('typeDown');
// typeDown.addEventListener('click',()=>{
//   let orderType = document.getElementById('orderType1');

 
//   orderType.classList.toggle('showOrderType');
// })


    </script>  
</body>



</html>
