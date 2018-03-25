<!DOCTYPE html PUBLIC>
<html>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <title>Chat</title>
    
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="shortcut icon" type="image/x-icon" href="../img/logo.png" />

    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="chat.js"></script>
    <script type="text/javascript">
    
    	// kick off chat
        var chat =  new Chat();
    	$(function() {
    	
    		 chat.getState(); 
    		 
    		 // watch textarea for key presses
             $("#sendie").keydown(function(event) {  
             
                 var key = event.which;  
           
                 //all keys including return.  
                 if (key >= 33) {
                   
                     var maxLength = $(this).attr("maxlength");  
                     var length = this.value.length;  
                     
                     // don't allow new content if length is maxed out
                     if (length >= maxLength) {  
                         event.preventDefault();  
                     }  
                  }  
    		 																																																});
    		 // watch textarea for release of key press
    		 $('#sendie').keyup(function(e) {	
    		 					 
    			  if (e.keyCode == 13) { 
    			  
                    var text = $(this).val();
    				var maxLength = $(this).attr("maxlength");  
                    var length = text.length; 
                     
                    // send 
                    if (length <= maxLength + 1) { 
                     
    			        chat.send(text, name);	
    			        $(this).val("");
    			        
                    } else {
                    
    					$(this).val(text.substring(0, maxLength));
    					
    				}	
    				
    				
    			  }
             });
            
    	});
    </script>
    <div id="menu">
        <nav>
            <ul style = list-style-type: none; margin: 0; padding: 0; overflow: hidden; background-color: #720017;>
                <li><a href="../index.php">CSGO-Boonie</a></li>
                <li><a href="../earn/earn.php">Earn Coins</a></li>
                <li><a href="../cash-out/cashout.php">Cash Out</a></li>
                <li><a href="../flip.php">Flip</a></li>
                <li><a href="index.php">Chat</a><li>
                <li><a href="#mine">Mine</a></li>
                <li style="float:right"><a class="active" href="../Steam Login/login_steam.php">Login</a></li>
            </ul>
        </nav>
    </div>
</head>

<body onload="setInterval('chat.update()', 1000)">
    <div id="page-wrap">
    
        <h2>Chat</h2>
        
        <p id="name-area"></p>
        
        <div id="chat-wrap"><div id="chat-area"></div></div>
        
        <form id="send-message-area">
            <p>Your message: </p>
            <textarea id="sendie" maxlength = '100' ></textarea>
        </form>
    
    </div>

</body>

</html>