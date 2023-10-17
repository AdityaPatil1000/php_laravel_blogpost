<!DOCTYPE html>
<html>
<head>


 <!-- Google Fonts -->
 <link href="https://fonts.googleapis.com/css?family=Averia+Serif+Libre|Noto+Serif|Tangerine" rel="stylesheet">
        <!-- Styling for public area -->
        <link rel="stylesheet" href="static/css/public_styling.css">
        <meta charset="UTF-8">
    <title>PHP Button Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        .container1 {
            margin: 20px auto;
            width: 300px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 10px 15px;
            margin-top: 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #258cd1;
        }


        * { margin: 0px; padding: 0px; }

html { height: 100%; box-sizing: border-box; }
body {
  position: relative;
  margin: 0;
  padding-bottom: 6rem;
  min-height: 100%;
}
/* HEADINGS DEFAULT */
h1, h2, h3, h4, h5, h6 { color: #444; font-family: 'Averia Serif Libre', cursive; }
a { text-decoration: none; }
ul, ol { margin-left: 40px; }
hr { margin: 10px 0px; opacity: .25; }

/* FORM DEFAULTS */
form h2 {
        margin: 25px auto;
        text-align: center;
        font-family: 'Averia Serif Libre', cursive;
}
form input {
        width: 100%;
        display: block;
        padding: 13px 13px;
        font-size: 1em;
        margin: 5px auto 10px;
        border-radius: 3px;
        box-sizing : border-box;
        background: transparent;
        border: 1px solid #3E606F;
}
form input:focus {
        outline: none;
}
/* BUTTON DEFAULT */
.btn {
        color: white;
        background: #4E6166;
        text-align: center;
        border: none;
        border-radius: 5px;
        display: block;
        letter-spacing: .1em;
        margin: 10px 0px;
        padding: 13px 20px;
        text-decoration: none;
}
.container {
        width: 80%;
        margin: 0px auto;
}
/* NAVBAR */
.navbar {
        margin: 0 auto;
    overflow: hidden;
        background-color: #3E606F;
    border-radius: 0px 0px 6px 6px;
}
.navbar ul {
    list-style-type: none;
    float: right;
}
.navbar ul li {
    float: left;
    font-family: 'Noto Serif', serif;
}
.navbar ul li a {
    display: block;
    color: white;
    text-align: center;
    padding: 20px 28px;
    text-decoration: none;
}
.navbar ul li a:hover {
        color: #B9E6F2;
    background-color: #334F5C;
}

/* LOGO */
.navbar .logo_div {
        float: left; 
        padding-top: 5px;
        padding-left: 40px;
}
.navbar .logo_div h1 {
        color: #B9E6F2;
        font-size: 3em;
        letter-spacing: 5px;
        font-weight: 100;
        font-family: 'Tangerine', cursive;
}

/* FOOTER */
.footer {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  color: white;
  background-color: #73707D;
  text-align: center;
  width: 80%;
  margin: 20px auto 0px;
  padding: 20px 0px;
}



    </style>
</head>
<body>
    <h1>BLOGS</h1>
    
    <div class="container1">
        <?php
        if (isset($_POST['myButton'])) {
            echo "Button Clicked!";
        }
        ?>

        <form method="post" action="form.php"> <!-- Send data to process.php -->
            <input type="submit" name="myButton" value="Post">
        </form>
    </div>


     <!-- container - wraps whole page -->
     <div class="container">
                <!-- navbar -->
                <div class="navbar">
                        <div class="logo_div">
                                <a href="index.php"><h1>LifeBlog</h1></a>
                        </div>
                        <ul>
                          <li><a class="active" href="index.php">Home</a></li>
                          <li><a href="#news">News</a></li>
                          <li><a href="#contact">Contact</a></li>
                          <li><a href="#about">About</a></li>
                        </ul>
                </div>
                <!-- // navbar -->

                <!-- Page content -->
                <div class="content">
                        <h2 class="content-title">Recent Articles</h2>
                        <hr>
                        <!-- more content still to come here ... -->
                </div>
                <!-- // Page content -->

                <!-- footer -->
                <div class="footer">
                        <p>MyViewers &copy; <?php echo date('Y'); ?></p>
                </div>
                <!-- // footer -->

        </div>
        <!-- // container -->



        <ul>
        <?php
        // Create an array of items with URLs
        $items = array(
            'Google' => 'https://www.google.com',
            'Facebook' => 'https://www.facebook.com',
            'Twitter' => 'https://www.twitter.com',
            'OpenAI' => 'https://www.openai.com',
            'GitHub' => 'https://www.github.com'
        );

        // Loop through the array and create list items with links
        foreach ($items as $name => $url) {
            echo '<li><a href="' . $url . '">' . $name . '</a></li>';
        }
        ?>
    </ul>

    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        .container2 {
            margin: 20px auto;
            width: 300px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .link-button {
            display: inline-block;
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 10px 15px;
            margin: 10px;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }

        .link-button:hover {
            background-color: #258cd1;
        }
        </style>

<h1>Links in PHP</h1>
    
    <div class="container2">
        <a href="javascript:void(0);" class="link-button" id="link1">Link 1</a>
        <a href="javascript:void(0);" class="link-button" id="link2">Link 2</a>
    </div>

    <script>
        // JavaScript code to add functionality to the links
        document.getElementById('link1').addEventListener('click', function() {
            alert('Link 1 Clicked!');
        });

        document.getElementById('link2').addEventListener('click', function() {
            alert('Link 2 Clicked!');
        });
    </script>

<style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        .container4 {
            margin: 20px auto;
            width: 300px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        input[type="text"], input[type="email"], input[type="tel"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 10px 15px;
            margin-top: 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #258cd1;
        }
    </style>
</head>
<body>
    <h1>Form with Text Fields</h1>
    
    <div class="container">
        <form id="myForm" method="post" action="form.php" onsubmit="return validateForm()">
            <input type="text" name="name" id="name" placeholder="Name" required>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <input type="tel" name="mobile" id="mobile" placeholder="Mobile Number" required>
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>

    <script>
        function validateForm() {
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var mobile = document.getElementById('mobile').value;

            // Validate name (at least 2 characters)
            if (name.length < 2) {
                alert("Please enter a valid name.");
                return false;
            }

            // Validate email (basic format)
            var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
            if (!email.match(emailPattern)) {
                alert("Please enter a valid email address.");
                return false;
            }

            // Validate mobile number (10 digits)
            var mobilePattern = /^\d{10}$/;
            if (!mobile.match(mobilePattern)) {
                alert("Please enter a valid 10-digit mobile number.");
                return false;
            }

            return true;
        }
    </script>

</body>
</html>
