<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel = 'stylesheet' type='text/css' href='css/style.css' />
        <link rel = 'stylesheet' type='text/css' href='css/style2.css' />
        <script>
            function myFunction() {
                var element = document.body;
                element.classList.toggle("light-mode");
            }
        </script>
        <style>
            .light-mode {
                background-color: #333333;
                color: #333333;
                transition: all 0.5s ease-in-out;
        }
        </style>
    </head>
    <body>
       <label for="changeTheme">
           <input type="checkbox" id = "changeTheme" onclick="myFunction()" />
       </label>
       <div></div>
       <div><a href="home.php"><button class="home">HOME</button></a></div>
       <div><button class="about">About us</button></div>
       <div><button class="contact">Contact us</button></div>
    </body>
</html>