<!DOCTYPE html>
<html>
<head>
    <title>Slide Nav simple example</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        .nav {
            overflow: hidden;
            background-color: rgb(41, 38, 38);
            top: 0;
        }

        .nav a {

                float: right;
            color: white;
            text-align: center;

            text-decoration: none;
            font-size: 17px;
            border: none;
            border-radius: 0%;
            background-color: rgb(41, 38, 38);

            width: 10%;
            margin: 0;
            padding-bottom: 2%;
            padding-top: 2%;
            overflow: hidden;
            -webkit-transition: all 0.2s ease-out;
                -moz-transition: all 0.2s ease-out;
                -ms-transition: all 0.2s ease-out;
                -o-transition: all 0.2s ease-out;
                transition: all 0.2s ease-out;
        }

        .nav a.active {
                background: #666600;
                color: white;
        }

        .nav a:hover {
                background: #666600;
            color: white;
        }
    </style>
</head>
<body>
    
    <div class="nav">
        <nav>
            <a href="#section4">Our Services</a>
            <a href="#section3">Contact Us</a>
            <a href="#section2">About Us</a>
            <a href="#section1">Home</a>
        </nav>
    </div>
    <div id="section1" class="section">
        <div class="text-wr">
            <h1 class="title">
                <div class="title-top">Slide Nav Example</div>
                <div class="title-tx">Created by Piotr Kumorek</div>
            </h1>
        </div>
    </div>
    <div id="section2" class="section">
        <div class="text-wr">
            <h1 class="title">Section 2</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
        </div>
    </div>
    <div id="section3" class="section">
        <div class="text-wr">
            <h1 class="title">Section 3</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
        </div>
    </div>
    <div id="section4" class="section">
        <div class="text-wr">
            <h1 class="title">Section 4</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
        </div>
    </div>
    
    <script src="dist/slideNav.js" type="text/javascript"></script>
    <script>
	    window.slide = new SlideNav({
		changeHash: true    
	    });
    </script>
</body>
</html>
