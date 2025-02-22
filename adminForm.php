<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Form</title>
    <link rel="icon" href="img/fabicon9.jpeg" type="image/icon type">



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

        /* for login form */
        .container {
            background: #000;
            height: 100vh;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .main {
            height: 330px;
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
            background-color: black;
            border: none;
            width: 60%;
            border-bottom: solid rgb(156, 50, 50) 2px;
            color: rgb(194, 197, 199);


        }

        input:focus {
            outline: none;
            /* Removes the border when the input is clicked */

        }

        input[type='text'],
        input[type='password'] {
            font-size: 15px;
            font-weight: bolder;

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
            transition: All 1s ease-in-out;
            font-size: 17px;
            border: none;
        }


        .button:hover {
            background-color: #fff;
            color: #A30000;
        }


        .button a {
            text-decoration: none;
            color: white;
            text-decoration-color: white;
        }

        .button a:hover {
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
    </style>



</head>

<body>
    <div class="container">
        <div class="main">
            <h2>For Admin Only</h2>
            <div class="feild">
                <input type="text" placeholder="Enter Admin Name" name="adminname" id="adminName"><br><br>
                <input  placeholder="Enter Password" name="password" type="password" id="adminPassword"><br><br>

                <button class="button" id="submit">
                    submit
                </button>

                <br>

            </div>
        </div>

        <script>
                let adminName = document.getElementById('adminName').value;
             
                let adminPassword = document.getElementById('adminPassword').value;
              

                
            // for admin name & password confiramtion
            console.log(' for admin name & password confiramtion')
            let submit = document.getElementById('submit');

            submit.addEventListener('click', () => {
                let adminName = document.getElementById('adminName').value;
                let adminPassword = document.getElementById('adminPassword').value;
                console.log(adminName + adminPassword);


                if (adminName == "chiranjivi" && adminPassword == "12345") {
                    window.location = "adminPannel.php";
                    adminName.value=" ";
                    adminPassword.value=" ";
                    alert("You are successfully entered to Admin Pannel");
                } else {
                    console.log('error');
                    alert("please enter correct data!");
                }
            });    
        </script>
</body>

</html>