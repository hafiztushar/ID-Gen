<html>
    <head>
        <title>
           Register form
        </title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div id="register">
            <form action="register.php" method="post">
                <h2>Register Here</h2>
                <p>Students Name:</p>
                <input type="text" placeholder="" name="name">
                <p>Students Department:</p>
                <input type="text" placeholder="" name="dept">
                <p>Students Program:</p>
                <input type="text" placeholder="" name="program">
                <p>Students Country:</p>
                <input type="text" placeholder="" name="country">            
                <p>Registration Year:</p>
                <input type="text" placeholder="" name="year">
                <p></p>
                <input type="submit" class="submit">
            </form>
        </div>
        <div id="search">
            <form action="idcard.php" method="post">
                <p>Show Id Card by Id:</p>
                <input type="text" placeholder="" name="id">
                <input type="submit" class="submit">
            </form>
            <form action="idcard.php" method="post">
                <p>Show Id Card by Name:</p>
                <input type="text" placeholder="" name="name">
                <input type="submit" class="submit">
            </form>
            
            <form action="idcard.php" method="post">
                <p>Show Id Cards by Department:</p>
                <input type="text" placeholder="" name="dept">
                <input type="submit" class="submit">

            </form>
            <form action="idcard.php" method="post">
                <p>Show Id Cards by Program:</p>
                <input type="text" placeholder="" name="program">
                <input type="submit" class="submit">

            </form>
        </div>
    </body>
</html>


