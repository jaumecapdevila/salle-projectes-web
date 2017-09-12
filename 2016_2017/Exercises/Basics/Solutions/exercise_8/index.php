<!DOCTYPE html>
<html>
<head>
  <title>Exercise 8</title>
</head>
<body>
<form id="register" action="validate.php" method="POST" accept-charset="utf-8">
  <input type="text" name="name" value="" placeholder="Enter your name">
  <input type="email" name="email" value="" placeholder="Enter your email">
  <input type="number" name="age" value="" placeholder="Enter your age">
  <button type="submit">Send</button>
</form>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
$(document).ready(function() {
  $('#register').submit(function(event) {
    var data = $(this).serialize();
    $.ajax({
      type: 'POST',
      url: 'validate.php',
      data: data,
      dataType: 'json',
      encode: true
    })
    .done(function(response) {
      console.log(response);
    })
    event.preventDefault();
  });
});
</script>
</body>
</html>