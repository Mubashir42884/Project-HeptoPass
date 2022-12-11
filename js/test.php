<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width,
                   initial-scale=1.0">
    <title>Test</title>

</head>
 
<body>
    <center>
        <br><br>
        <div class="container">
            <form action="#" name="regForm" class="regForm">
                <div>
                    <label>Username:</label>
                    <input type="text" size="40" onkeyup="validateForm()">
                    <span  id="uidError">Error</span>
                </div>
                <div>
                    <label>Phone no:</label>
                    <input type="text"
                        id="number" size="40">
                    <span id="error"></span>
                </div>
                <button type="submit">
                    Submit
                </button>
            </form>
        </div>
    </center>

    <script src="myscript.js"></script>
</body>
</html>