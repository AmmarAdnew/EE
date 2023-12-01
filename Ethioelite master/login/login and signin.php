<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <div class="form-box">
                <h1 id="title">Sign Up</h1>
                <form id="signup-form">
                    <div class="input-group">
                        <input type="text" id="name-input" placeholder="First Name" required>
                        <input type="text" id="name-input1" placeholder="Last Name" required>
                        <input type="email" id="email-input" placeholder="Email" required>
                        <input type="text" id="phone-input" placeholder="Phone Number" required>
                        <select id="gender-input" required>
                            <option value="">Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        <input type="text" id="department-input" placeholder="Department" required>
                        <input type="password" id="password-input" placeholder="Password" required>
                        <input type="password" id="confirm-password-input" placeholder="Confirm Password" required>
                    </div>
                    <p>Forgot password? <a href="#">Click Here</a></p>
                    <div class="btn-field">
                        <button type="submit" id="signup-btn">Sign Up</button>
                        <button type="button" id="signin-btn" class="disable" ><a href="\Ethioelite master\resource\Resource.php">Sign In</a></button>
                    </div>
                </form>
            </div>
        </div>

        <script src="script.js"></script>
    </body>
</html>
