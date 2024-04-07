<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navigation</title>
    <style>
        #nav-container {
            background-color: #5524f8;
            overflow: hidden;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
        }

        #logo {
            height: 4rem;
        }

        #icon-image {
            height: 4rem;
        }

        .navbar-links {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            width: 100%;
            margin-top: 20px;
            display: none; /* Hide by default on smaller screens */
        }

        .navbar-links a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
        }

        .navbar-links a:hover {
            background-color: #ddd;
            color: rgb(229, 101, 22);
        }

        #toggle {
            display: block;
            cursor: pointer;
        }

        @media screen and (min-width: 768px) {
            .navbar-links {
                display: flex;
                flex-direction: row;
                align-items: center;
                margin-top: 0;
            }

            #toggle {
                display: none;
            }
        }
    </style>
    <script src="https://kit.fontawesome.com/472926979a.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="nav-container">
        <div class="navbar-toggle">
            <a href="#"><img id="logo" src="../../Assets/images/WhatsApp Image 2023-12-23 at 20.59.59.jpeg" alt="Logo"></a> 
        </div>
        <div class="navbar-links" id="navbar-links">
            <a href="#">Home</a>
            <a href="#">About Us</a>
            <a href="#">Programming Tutorials</a>
            <a href="#">Website Design</a> 
            <a class="contact" href="#">Contact</a>  
        </div>
        <div id="toggle" onclick="toggleBtnClick()">
            <img id="icon-image" src="../../Assets/images/align-justify.png" alt="">
        </div>   
    </div>

    <script>
        function toggleBtnClick() {
            var menuContainer = document.getElementById("navbar-links");
            if (menuContainer.style.display === "block") {
                menuContainer.style.display = "none";   
            } else {
                menuContainer.style.display = "block";
            }
        }
    </script>
</body>
</html>
