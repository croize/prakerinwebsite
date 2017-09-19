<!DOCTYPE html>
<html>
<head></head>
<body>
  <form class="" action="/question" method="post">
    {{csrf_field()}}
    <input type="number" name="score" value="" placeholder="score"><br>
    <textarea name="question" rows="8" cols="80"></textarea>
    <input type="submit" name="" value="Submit">
  </form>
</body>
</html>
