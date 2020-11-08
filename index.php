<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHATBOT</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
</head>
<body>
    <div class="wrapper">
        <div class="title">Simple Chat bot</div>
        <div class="form">
            <div class="bot-inbox inbox">
                <div class="icons"><i class="fas fa-user"></i></div>
                <div class="message-header">
                    <p>Hello there, how can I be of assistance to you?</p>
                </div>
            </div>
            

            
        </div>
        <div class="type-field">
      
            <div class="input-data">
                <input id="msg" type="text" placeholder="Type something here" required> 
                <button id="send-btn">Send</button>
            </div>
        </div>
    </div>
 
  
  <script>
      $(document).ready(function(){
      $("#send-btn").on("click", function(){
        $value = $("#msg").val();
        $message = '<div class="user-inbox inbox"><div class="message-header"><p>' + $value + '</p></div></div>'
        $(".form").append($message);

        // ajax code
        $.ajax({
            url: "message.php",
            type: "POST",
            data: 'text=' +$value,
            success: function(result){
                $reply = '<div class="bot-inbox inbox"><div class="icons"><i class="fas fa-user"></i></div><div class="message-header"> <p>'+ result +'</p></div></div>';
                $(".form").append($reply);

            }

        });
    });

});
  </script>
</body>
</html>