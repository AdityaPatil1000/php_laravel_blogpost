<!DOCTYPE html>
<html>
<head>
    <title>Form with Text Fields</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        .container {
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
        <form id="myForm" method="post" action="process.php" onsubmit="return validateForm()">
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
