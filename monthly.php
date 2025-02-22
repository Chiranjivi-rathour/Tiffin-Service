



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Order Details</title>
  <link rel="icon" href="img/fabicon9.jpeg" type="image/icon type">

  <!-- <link rel="stylesheet" href="../CSS/userProfile.css" /> -->

  <!-- for the font-awesome icons -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />


  <!-- for google fonts theme -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Water+Brush&display=swap" rel="stylesheet">

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

    .userProfile {
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
      padding: 0px 10px;
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
    .logoImg h1 ,  .sidebar .logo li i{
      color: #161616;
      font-size:40px;
      font-weight: bolder;
      padding-right:5px;
    }
    .sidebar .logoImg {
      width: 100px;
      height: 100px;
      display: flex;
      justify-content: center;
      align-items: center;
    }

  

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
    padding-left:260px;
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


    /* for menulist */
    .userProfileTbl {

      width: 100%;
      height: 800px;
      background-color: #161616;
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      transition: all 1.7s ease-out;
    }

    .userProfileTbl h1 {
      font-size: 35px;
      margin-bottom: 30px;
    }

    table {
      font-size: 20px;
      border-spacing: 15px;

    }

    .theading {
      font-size: 30px;
    }

    table,
    th,
    td {

      border: 1px solid white;

      border-collapse: collapse;
    }

    th,
    td {
      padding: 20px;
    }

    /* table#alter tr:nth-child(even) {
      background-color: #eee;
    }

    table#alter tr:nth-child(odd) {
      background-color: #fff;
    }

    table#alter th {
      color: white;
      background-color: gray;
    } */

    #monthly{
      color: #161616;
      font-weight:bolder;
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



    }

    @media screen and (max-width: 768px) {
      .hamburger {
        margin-left: 600px;
      }

    }

    @media screen and (max-width:700px) {
      .hamburger {
        margin-left: 140px;
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
  <section class="userProfile">
    <!-- <video playsinline autoplay muted loop class="bgvideo">
      <source src="image/bgHome.mp4" type="video/mp4" class="video" /> 
      </video> -->
    <div class="homeContent">

    <nav id="sidebar" class="sidebar">
            
            <div class="logo" id="logo">
              <li class="logoImg">
                <i class="fa fa-user-circle"></i>
                <h1>Chiranjivi</h1>
                <!-- <img src="image/logo3.png" alt="" /> -->
              </li>
             
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
              <a href="weekly.php" id="weekly">
                <i class="fa fa-calendar listIcon"></i> <span>Weekly</span>
              </a>
            </li>

            <li class="orderType">
              <a href="monthly.php" id="monthly">
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
      <div class="content">

        <section class="userProfileTbl" id="userProfileTbl">
          <h1>Order Details</h1>
               <table>   <theading>
            <th>
                user ID
            </th>
            <th>
               User Name
            </th>
            <th>
                Email
            </th>
            <th>
              Address
            </th>
            <th>
               Phone
            </th>
            <th>
                Order ID
            </th>
            <th>
                Quantity
            </th>
            <th>
                Tiffin Type
            </th>
            <th>
               Date
            </th>
                </theading></table> 
      
      <?php
            include("config.php");


            $query = "SELECT users.user_id, users.username, users.email , users.phone ,users.address ,orders.id,orders.order_id, orders.quantity,orders.tiffin_Type,orders.date
            FROM users,orders 
            WHERE users.user_id=orders.order_id";


            $data = mysqli_query($conn,$query);
            $total_rows = mysqli_num_rows($data);

            // number of records
            // echo $total_rows;

            //display the rows returns
             if($total_rows > 0){

          //display the rows returns
            while($rows = mysqli_fetch_assoc($data)){
                if($rows['tiffin_Type']=="monthly"){

                
        ?>   
                    
                    
        <table>
        <tr> 
          <td><?php echo "UID_0" . htmlspecialchars($rows['user_id']);?></td>
          <td><?php echo $rows['username'];?></td>
          <td><?php echo $rows['email'];?></td>
          <td><?php echo $rows['address'];?></td>
          <td><?php echo $rows['phone'];?></td>
          <td><?php echo "ORDID_0" . htmlspecialchars($rows['id']);?></td>
          <td><?php echo $rows['quantity'];?></td>
          <td><?php echo $rows['tiffin_Type'];?></td>
          <td><?php echo $rows['date'];?></td>
        </tr>
     


      </table>

      <?php
                
                }

        } 
    } 

        ?>




        </section>


      </div>
  </section>

  <script src="userProfile.js"></script>
</body>

</html>






 