<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student_login_page</title>
    <link rel="stylesheet" type="text/css" href="/studentstyle.css">
</head>

<body id="body-bg">
    <img id="bgimg" src="/image/student.jpg"> 
    <header>
    <nav id="navigation">
        <ul>

            <h1 style="color: brown;">Wellcome_To_My(Bio)</h1>
            <li class="list"><a href="/index.html">Home</a></li>
            <li class="list"><a href="">Student</a></li>
            <li class="list"><a href="#">College</a></li>
            <li class="list"><a href="#">Course</a></li>
            <li class="list"><a href="#">Computer science notification</a></li>
            <li class="list"> <a href="#">Art update</a></li>

        </ul>

    </nav>

    </header>
    <form action="/phpforweb/formvalidation.php" method="POST">
        <div class="container">
            <h1>Wellcome to studentlogin</h1>
            <div class="textbox">
                <input type="text" placeholder="Adminname" name="adminname" value="">
            </div>

            <div class="textbox">
                <input type="password" placeholder="Password" name="password" value="">
            </div>

            <input id="button" type="submit" name="login" value="Sign In">
        </div>
    </form>

</body>

</html>