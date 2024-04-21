<html>
<head>
    <title>a humble gate</title>
    <style>
        body {
	    display: flex;
	    justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        form {
            align-items: center;
        }
        button {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <form method="post" action="checking.php">
        <label for="input">Secrets:</label>
        <input type="text" id="input" name="input">
        <button type="submit">Submit</button>
    </form>
</body>
</html>
