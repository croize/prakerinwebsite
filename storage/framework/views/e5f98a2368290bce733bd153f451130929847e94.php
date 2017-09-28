<?php $__env->startSection('css'); ?>
<link href="<?php echo e(url('assets/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')); ?>" rel="stylesheet" >
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="header">
        <h2>Create Event</h2>
      </div>
      <div class="body">
        <form class="" action="/aevent" method="post">
          <?php echo e(csrf_field()); ?>

          <label for="title">Title</label>
          <div class="form-group">
            <div class="form-line">
              <input type="text" name="title" id="title" class="form-control" value="" placeholder="Title">
            </div>
          </div>
          <label for="jupem">Judul Pembuka</label>
          <div class="form-group">
            <div class="form-line">
              <input type="text" name="desc_pembuka" id="jupem" class="form-control" value="" placeholder="Desc Pembuka">
            </div>
          </div>
          <label for="penyelenggara">Penyelenggara</label>
          <div class="form-group">
            <div class="form-line">
              <input type="text" name="penyelenggara" id="penyelenggara" class="form-control" value="" placeholder="Penyelenggara">
            </div>
          </div>
          <div class="form-group">
              <div class="form-line">
                  <input type="text" class="datepicker form-control" name="date" placeholder="Please choose a date...">
              </div>
          </div>
          <input type="date" name="date" value="" placeholder="Date"><br>
          <input type="text" name="time" value="" placeholder="Time"><br>
          <input type="text" name="point" value="" placeholder="Point"><br>
          <input type="text" name="peserta" value="" placeholder="Peserta"><br>
          <textarea id="tinymce" name="desc"></textarea>
          <input type="submit" name="" value="Submit">
        </form>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<script src="<?php echo e(url('js/tinymce/tinymce.min.js')); ?>"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea#tinymce",
    theme: "modern",
    height: 300,
    plugins: [
        'advlist autolink lists link image charmap print preview hr anchor pagebreak',
        'searchreplace wordcount visualblocks visualchars code fullscreen',
        'insertdatetime media nonbreaking save table contextmenu directionality',
        'emoticons template paste textcolor colorpicker textpattern imagetools'
    ],
    toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
    toolbar2: 'print preview media | forecolor backcolor emoticons',
    image_advtab: true
});
</script>
<?php $__env->startSection('js'); ?>
<script src="<?php echo e(url('assets/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>