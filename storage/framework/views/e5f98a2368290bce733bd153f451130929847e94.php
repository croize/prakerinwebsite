<!DOCTYPE html>
<html>
<head>
  <script src="<?php echo e(url('js/tinymce/tinymce.min.js')); ?>"></script>
  <script>
  tinymce.init({ selector:'textarea',
  plugins: "wordcount image imagetools link code textcolor colorpicker advlist lists media",
  menubar : false,
  toolbar : 'forecolor backcolor,bold, italic, underline, strikethrough, alignleft, aligncenter, alignright, alignjustify, styleselect, fontselect, fontsizeselect, cut, copy, paste, outdent, indent,numlist bullist, blockquote, undo, redo,image,link,media',
  media_live_embeds: true,
  media_alt_source: true,
  imagetools_toolbar: "rotateleft rotateright | flipv fliph | editimage imageoptions"});</script>
</head>
<body>
  <form class="" action="/aevent" method="post">
    <?php echo e(csrf_field()); ?>

    <input type="text" name="title" value="" placeholder="Title"><br>
    <input type="text" name="desc_pembuka" value="" placeholder="Desc Pembuka"><br>
    <input type="text" name="penyelenggara" value="" placeholder="Penyelenggara"><br>
    <input type="date" name="date" value="" placeholder="Date"><br>
    <input type="text" name="time" value="" placeholder="Time"><br>
    <input type="text" name="point" value="" placeholder="Point"><br>
    <input type="text" name="peserta" value="" placeholder="Peserta"><br>
    <textarea name="desc" rows="8" cols="80"></textarea>
    <input type="submit" name="" value="Submit">
  </form>
</body>
</html>
