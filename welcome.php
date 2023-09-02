<html>
<head>
    
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />

    <title>MEaHacker welcome panel</title>
    <link rel="stylesheet" href="pains.css" type="text/css" />
    
</head>
<body>
<h1>MEaHacker <p style="color:red">1.0</p></h1>
<h2>MYSQL ADMIN Tools</h2>
<br>
<div class="divhacker">
    <br>
    <form method="post" action="dbconnect.php">
        <label for="dbhost">dbhost</label>: 
        <input type="text" name="dbhost" id="dbhost" value="" class="antihackerbutton"/>
        <label for="dbname">dbname</label>: 
        <input type="text" name="dbname" id="dbname" value="" class="antihackerbutton"/>
        <br>
        <label for="dbuser">dbuser</label>: 
        <input type="text" name="dbuser" id="dbuser" value="" class="antihackerbutton"/>
        <label for="dbpassword">dbpassword</label>: 
        <input type="text" name="dbpassword" id="dbpassword" value="" class="antihackerbutton"/>
        <br>
        <label for="port">port:</label>
        <input type="text" name="port" id="port" value="" class="antihackerbutton"/>
        <br>
        <br>
        <button type="submit" class="antihackerbutton">Login into DB</button>
    </form>
</div>

</body>
</html>
