<!DOCTYPE html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=fire">
    <title>Send an Email</title>
</head>
<style>
body {
  font-family: "Sofia", sans-serif;
  font-size: 20px;
  background-image: linear-gradient(to bottom right, #DF362D, #B7AC44);
  width: 100vw;
  min-height: 100vh;
}
</style>
<body>

	<center>
        <div class="container">
            <h3 class="sent-notification"></h3>
            <div class="jumbotron" style="background-image:url('234.jpeg');background-size:cover;">
                <form id="myForm">
                    <h1 class="font-effect-fire">Contact Us</h1>
                    <div class="form-group">
                        
                        <input id="name" type="text" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        
                        <input id="email" type="email" placeholder="Enter Email">
                    </div>

                    <div class="form-group">
                        
                        <input id="subject" type="text" placeholder=" Enter Subject">
                    </div>

                    <div class="form-group">
                        <p><h3 class="font-effect-fire"><b>Message</b></h3></p>
                        <textarea id="body" rows="5" placeholder="Type Message"></textarea>
                    </div>

                    <button type="button" class="btn btn-info" onclick="sendEmail()" value="Send An Email">Submit</button>
                </form>
            </div>
        </div>
    </center>

	<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript">
        function sendEmail() {
            var name = $("#name");
            var email = $("#email");
            var subject = $("#subject");
            var body = $("#body");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
                $.ajax({
                   url: 'sendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
                       subject: subject.val(),
                       body: body.val()
                   }, success: function (response) {
                        $('#myForm')[0].reset();
                        $('.sent-notification').text("Thanks for contacting us");
                        header('location: index1.php');
                   }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>

</body>
</html>
      