<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reCAPTCHA Example</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    <form id="myForm" action="mail" method="post" onsubmit="return validateForm()">
    <input type="text" name="name" required>
    <input type="text" name="email">

    <input type="text" name="number">

        <div class="g-recaptcha" data-sitekey="6LdSuIwnAAAAAHLR4N5zkh_ixMTEKojGuYu8q7On"></div>
        <br>
        <button type="submit" id="submitButton" name="all_form_submit">Submit</button>
    </form>

    <script>
        function validateForm() {
            // Check reCAPTCHA response
            var recaptchaResponse = grecaptcha.getResponse();
            if (recaptchaResponse.length === 0) {
                alert("Please complete the reCAPTCHA challenge.");
                return false;
            }

            // Disable submit button and change text to "Please Wait"
            var submitButton = document.getElementById("submitButton");
            submitButton.disabled = true;
            submitButton.innerText = "Please Wait...";

            return true; // Form will be submitted
        }
    </script>
</body>
</html>
