<!DOCTYPE html>
<html lang = 'en-US'>
<head>
    <meta charset = 'UTF-8'>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.png" />
    <title>Flip</title>
    <div id="menu">
        <nav>
            <ul>
                <li><a href="index.php">CSGO-Boonie</a></li>
                <li><a href="earn/earn.php">Earn Coins</a></li>
                <li><a href="cash-out/cashout.php">Cash Out</a></li>
                <li><a href="flip.php">Flip</a></li>
                <li><a href="chat/index.php">Chat</a></li>
                <li><a href="#mine">Mine</a></li>
                <li style="float:right"><a class="active" href="Steam Login/login_steam.php">Login</a></li>
            </ul>
        </nav>
    </div>
    </head>
<body>
    <div id="flip">
        <img src="img/tct.png" id="flipImg" style="height: 160px; ">
        <button onclick="flipCoin()">Flip</button>
        <script>     
            function flipCoin(){
                var r = Math.floor((Math.random() * 10) + 1);
                var myImg = document.getElementById("flipImg");
                if(r%2==0){
                    myImg.src = "img/ct.png";
                }else{
                    myImg.src = "img/t.png";
                }
            }
        </script>
        <form>
            <label for="bsize">Bet Size</label>
            <input type="text" id="bsize" name="bsize">
            <a href="#ct">
                    <img src="img/ct.png" alt="Counter Terrorist" style="height: 50px; margin-top: 10px; margin-left: 5px;">
                  </a>
            <a href="#t">
                    <img src="img/t.png" alt="Terrorist" style="height: 50px; margin-top: 10px; margin-left: 5px;">
                  </a>
        </form>
    </div>
</body>
</html>
