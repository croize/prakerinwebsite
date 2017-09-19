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

    <input type="hidden" name="_method" value="put">
    <input type="text" name="title" value="<?php echo e($up->title); ?>" placeholder="Title"><br>
    <input type="text" name="desc_pembuka" value="<?php echo e($up->desc_pembuka); ?>" placeholder="Desc Pembuka"><br>
    <input type="text" name="penyelenggara" value="<?php echo e($up->penyelenggara); ?>" placeholder="Penyelenggara"><br>
    <input type="date" name="date" value="<?php echo e($up->date); ?>" placeholder="Date"><br>
    <input type="text" name="time" value="<?php echo e($up->time); ?>" placeholder="Time"><br>
    <input type="text" name="point" value="<?php echo e($up->point); ?>" placeholder="Point"><br>
    <input type="text" name="peserta" value="<?php echo e($up->peserta); ?>" placeholder="Peserta"><br>
    <textarea name="desc" rows="8" cols="80"><?php echo $up->desc; ?></textarea>
    <input type="submit" name="" value="Submit">
  </form>
</body>
</html>
