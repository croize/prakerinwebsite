<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <form class="" action="/qoption" method="post">
    <?php echo e(csrf_field()); ?>

    Pertanyaan: <br>
    <textarea name="question" rows="8" cols="80"></textarea><br>
    <select class="" name="minat">
      <option value="">-Pilih-</option>
      <option value="web">Website</option>
      <option value="games">Games</option>
      <option value="mm">Video Editing</option>
      <option value="android">Android</option>
    </select><br>
    <?php for($i = 1; $i <= 4; $i++): ?>
    <textarea name="option_text_<?php echo e($i); ?>" rows="8" cols="80"></textarea><br>
    <input type="hidden" name="correct_<?php echo e($i); ?>" value="0">
    <input type="checkbox" name="correct_<?php echo e($i); ?>" value="1">Correct<br>
    <?php endfor; ?>
    <input type="submit" name="" value="Submit">
  </form>
</body>
</html>
