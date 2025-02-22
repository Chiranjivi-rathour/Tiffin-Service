<?php
include("config.php");
session_start();

$frequency = isset($_GET['frequency']) ? trim($_GET['frequency']) : '';

// Default value if frequency is not found
$default_value = '';

// Determine the selected value
$selected_once = ($frequency === 'once') ? 'selected' : '';
$selected_weekly = ($frequency === 'weekly') ? 'selected' : '';
$selected_monthly = ($frequency === 'monthly') ? 'selected' : '';

$query = "SELECT * FROM `users`";
$data = mysqli_query($conn,$query);
$total_rows = mysqli_num_rows($data);
if($total_rows>0){
    while($rows = mysqli_fetch_assoc($data)){
        if($rows['username']==$_SESSION['username']){
          $user_order_id = $rows['user_id'];
        }
      }
    }

$order_id = '';
$quantity = '';
$tiffin_Type = '';  // variable name
$date = '';

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    // Validate if all required POST fields are set and not empty
    if (isset($_POST['order_id']) && 
        isset($_POST['quantity']) && 
        isset($_POST['tiffin_Type']) && 
        isset($_POST['date'])) {

        $order_id = ($_POST['order_id']);
        $quantity = ($_POST['quantity']);
        $tiffin_Type = ($_POST['tiffin_Type']);  // matching POST data
        $date = ($_POST['date']);

        // Prepare the SQL statement
        $sql = "INSERT INTO orders (order_id, quantity, tiffin_Type, date) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);

        if ($stmt) {
            // Bind parameters to the SQL statement
            mysqli_stmt_bind_param($stmt, "ssss", $param_order_id, $param_quantity, $param_tiffin_Type, $param_date);

            // Set parameters
            $param_order_id = $order_id;
            $param_quantity = $quantity;
            $param_tiffin_Type = $tiffin_Type;  // use the correct variable
            $param_date = $date;

            // Try to execute the statement
            if (mysqli_stmt_execute($stmt)) {
                header("Location: orderReciept.php");
                exit();
            } else {
                echo "Execute Error: " . mysqli_stmt_error($stmt);
            }

            mysqli_stmt_close($stmt);
        } else {
            echo "Prepare Error: " . mysqli_error($conn);
        }
    } else {
        echo "Error: Missing POST data.";
    }
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Order Reciept</title>
<link rel="icon" href="img/fabicon9.jpeg" type="image/icon type">
<!-- for the font-awesome icons -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
  integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />


<!-- for google fonts theme -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">


<style>


  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  font-family: "Josefin Sans", sans-serif;
  }

  i {
    cursor: pointer;
  }

  .bar {
    width: 20%;
    transition: all 0.5s ease-in;
  }

  .contact {
    width: 100%;
    height: 100vh;
    background-color: #161616;
    overflow: hidden;
    color: rgb(248, 239, 239);
    display: flex;
    justify-content: center;
    align-items: center;
    box-sizing: border-box;

  }


  .sidebar {
    width: 5%;
    height: 100vh;
    background-color: #A30000;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    position: fixed;
    top: 0.1px;
    transition: all 0.5s ease-in;
  }

  .logo {

    width: 25%;
    height: 100px;
    cursor: pointer;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;

  }

  .navlist {
    transition: all 1s ease-in-out;
    width: 100%;
    height: 80vh;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    background-color: #A30000;
  }

  .listitem {
    width: 100%;

  }

  .hamburger {

    color: #161616;
    display: none;
  }

  .sidebar .logo li {
    margin-bottom: 0px;
  }

  .logoContent {

    transition: all 1s ease-in-out;
  }

  .logoContent p {
    font-size: 14px;
    font-weight: bold;
    margin-top: 5px;
    margin-bottom: 30px;
  }

  .logoContent p:hover {
    color: #161616;
  }

  .hide {

    display: none;
  }

  .sidebar .logoImg {
    width: 100px;
    height: 100px;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .logoImg h1 {
    color: #161616;
    font-family: 'Water Brush', cursive;
    font-weight: bolder;
  }

  /* .logoImg img{
width: 100%;
height: 100px;
} */

  .bar {
    width: 20%;
  }

  .sidebar li {
    list-style-type: none;
    margin-bottom: 20px;

  }

  .sidebar li a {
    text-decoration: none;
    color: rgb(248, 239, 239);
    display: flex;
  }

  .sidebar li a i {
    font-size: 20px;
  }

  .sidebar span {
    margin-left: 15px;
    font-size: 20px;
    display: none;
    margin-top: -5px;
  }

  .sidebar a:hover {
    font-weight: bold;

    color: #161616;
  }

  .bar span {
    display: block;
  }

  .sidebar #logoImg {
    width: 20%;
    height: 20%;
  }

  .sidebar #logoImg img {
    width: 100%;
    height: 20%;
  }

  .sidebar li i {
    font-size: 20px;
  }

  .openSideBar {
    position: relative;
    /* left: 210px; */

    bottom: 1px;
    font-size: 50px;
  }


  #lightmode {
    display: none;
  }


  .homeContent {

    z-index: 1;
    width: 100%;
    height: 100vh;

  }

  .content {
    width: 100%;
    height: 100vh;
    color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    background-color: rgba(22, 22, 22, 0.8);
  }


  .listHover {
    background-color: white;
    color: #161616;
    font-weight: bolder;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 40px;
    margin-left: 180px;
    border-radius: 10px;
    margin-top: -50px;
    margin-bottom: 20px;
    visibility: hidden;

  }


  .sidebar li a i:hover {
    color: #161616;
  }



  .main {
    padding:50px 20px;
    width: 40%;
    border-radius: 15px;
    color: aliceblue;
    border: 2px solid rgb(156, 50, 50);
    box-shadow: rgb(156, 50, 50) 1px 1px 15px 1px;

  }


  .main h2 {
    text-align: center;
    color: rgb(156, 50, 50);
    font-size: 25px;
    margin: 30px 0px 40px 0px;
  }

  .main input {
    background-color: #161616;
    border: none;
    width: 60%;
    border-bottom: solid rgb(156, 50, 50) 2px;
    color: rgb(194, 197, 199);
    font-size: 15px;
    font-weight: bolder;
  }

  input:focus {
    outline: none;
    /* Removes the border when the input is clicked */

  }

  input[type='text'],
  input[type='date'] {

    font-weight: bolder;

  }

  input[type='date'] {
    color: rgb(194, 197, 199);

  }

  .button {
    background-color: rgb(156, 50, 50);
    height: 40px;
    width: 40%;
    margin-top: 10px;
    border-radius: 30px;
    cursor: pointer;
    color: white;
    font-weight: bold;
    transition: All 0.5s ease-in-out;
    font-size: 15px;
    border: none;
  }


 
 
  .button {
    text-decoration:none;
    color:white !important;
  }
  .button:hover{
    background-color: #fff;
  }
  .button:hover{
    color: #A30000 !important;
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

  #myOrders{
   
    color: #161616; 
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
  @media screen and (max-width: 769px) {
    .sidebar {
      width: 100%;

      transition: none;
      height: 70px;


    }

    .sidebar span {
      display: block;

    }

    #openSideBar {
      display: none;
    }

    .hamburger {
      display: block;
      font-size: 25px;
    }

    .openMenu {
      display: none;
    }

    .closeMenu {
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
    .contact {
      height: 150vh;
    }

    .content {
      height: 50vh;
    }

    .main {
      margin-top: 300px;
      height: 100vh;
      width: 90%;
    }

    .button {
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

  @media screen and (max-width: 768px) {
    .hamburger {
      margin-left: 600px;
    }

    .button {
      width: 20%;
    }
    .hamburger {
      display: block;
      font-size: 25px;
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

    
  @media screen and (max-width:700px) {
    .hamburger {
      margin-left: 140px;
    }

    .button {
      width: 50%;
    }
  }

  @media screen and (min-width: 1020px) {
    .logo {
      margin-top: 100px;
    }

    .navlist {
      margin-top: 0px;
    }
  }
</style>
</head>

<body>
<section class="contact">
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
            <a href="MyProfile.php" >
              <i class="fa fa-user listIcon"></i> <span>My Profile</span>
            </a>
          </li>
          <div id="logoutHover" class="listHover">My Profile</div>

          <li>
            <a href="MyOrder.php" id="myOrders" > <i class="fa fa-address-book-o listIcon"></i> <span>My Orders</span> </a>
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

      <div class="main">
        <h2>Order Now !</h2>
      
        <form id='orderForm' action="" method="POST" onsubmit="return validateForm()">
          <div class="feild">
            <input type="hidden" placeholder="order_id" id="order_id" name="order_id" value=<?php echo $user_order_id; ?> ><br><br>  
            <select style='backgrond:black;width:60%' name="quantity" id="quantity" >
                <option value="" disabled selected>Quantity</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select><br><br>
            <select style='color:#000;width:60%' name="tiffin_Type" id="tiffin_Type" >
                <option value="" disabled <?php echo ($frequency === '') ? 'selected' : ''; ?>>Select Frequency</option>
                <option value="once" <?php echo $selected_once; ?>>For once(Lunch)</option>
                <option value="once" <?php echo $selected_weekly; ?>>For once(Dinner)</option>
                <option value="weekly" <?php echo $selected_weekly; ?>>Weekly</option>
                <option value="monthly" <?php echo $selected_monthly; ?>>Monthly</option>
            </select><br><br>
            <input type="date" name="date" id='dateInput' style="color: rgb(194, 197, 199);" ><br><br>
            
            <button class="button" name="place_order" type="submit">Place Order</button>

            <br>
          </div>
        </form>
      </div>





    </div>
</section>

<hr style="border-color: gray;">


<?php include('footer.php'); ?>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const today = new Date().toISOString().split('T')[0];
        document.getElementById('dateInput').value = today;
    });
</script>
<script>
  function validateForm() {
    var form = document.getElementById('orderForm');
    var elements = form.elements;
    for (var i = 0; i < elements.length; i++) {
        var element = elements[i];
        if (element.type !== 'submit' && element.type !== 'button') {
            if (element.value.trim() === '') {
                alert('Please fill in all required fields.');
                return false; 
            }
        }
    }
    return true;
  }

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
          logo.style.marginTop="-440px";  







          });






 </script>
</body>

</html>


