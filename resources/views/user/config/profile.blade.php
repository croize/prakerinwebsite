@extends('user.layouts')
@section('css')
<link rel="stylesheet" href="{{url('/assets/select2/dist/css/select2.css')}}">
<link rel="stylesheet" href="{{url('/assets/iCheck/all.css')}}">
@endsection
@section('content')
<div class="box box-info">
  <div class="box-header with-border">
    <h3 class="box-title">Edit Profile</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form class="form-horizontal">
    <div class="box-body">
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 col-md-2 control-label">Name</label>

        <div class="col-sm-10 col-md-8">
          <input type="email" class="form-control" id="inputEmail3" placeholder="Name" value="{{Auth::user()->name}}">
        </div>
      </div>
      <div class="form-group">
        <label for="minat" class="col-sm-2 col-md-2 control-label">Jenis Kelamin</label>
        <div class="col-md-8 col-sm-10">
          <select class="form-control select2" id="minat" style="width: 100%;">
            <option value="">--None--</option>
            <option value="L">Laki-Laki</option>
            <option value="P">Perempuan</option>
          </select>
          <i>* Pilih salah satu.</i>
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 col-md-2 control-label">Email</label>

        <div class="col-sm-10 col-md-8">
          <input type="email" class="form-control" id="inputEmail3" placeholder="Email" value="{{Auth::user()->email}}" disabled>
        </div>
      </div>
      <div class="form-group">
        <label for="minat" class="col-sm-2 col-md-2 control-label">Minat</label>
        <div class="col-md-8 col-sm-10">
          <select class="form-control select2" id="minat" style="width: 100%;">
            <option value="">--None--</option>
            <option value="Website">Website</option>
            <option value="Android">Android</option>
            <option value="Desktop">Desktop</option>
            <option value="Games">Games</option>
            <option value="Multimedia">Multimedia</option>
            <option value="3D">3D</option>
          </select>
          <i>* Pilih salah satu.</i>
        </div>
      </div>
      <div class="form-group">
        <label for="flat-red" class="col-md-2 control-label">Avatar</label>
        <div class="col-md-10">
          <label>
            <img src="/user/image/avatar-1.png" width="100px" height="100px" alt=""><br>
            <input type="radio" name="r3" class="flat-red">Pingky
          </label>
          <label>
            <img src="/user/image/avatar-2.png" width="100px" height="100px" alt=""><br>
            <input type="radio" name="r3" class="flat-red">Alexa
          </label>
          <label>
            <img src="/user/image/avatar-3.png" width="100px" height="100px" alt=""><br>
            <input type="radio" name="r3" class="flat-red">Angel
          </label>
          <label>
            <img src="/user/image/avatar-4.png" width="100px" height="100px" alt=""><br>
            <input type="radio" name="r3" class="flat-red">Jeremya
          </label>
          <label>
            <img src="/user/image/avatar-5.png" width="100px" height="100px" alt=""><br>
            <input type="radio" name="r3" class="flat-red">Elvrod
          </label>
          <label>
            <img src="/user/image/avatar-6.png" width="100px" height="100px" alt=""><br>
            <input type="radio" name="r3" class="flat-red">James
          </label>
          <label>
            <img src="/user/image/avatar-7.png" width="100px" height="100px" alt=""><br>
            <input type="radio" name="r3" class="flat-red">Rery
          </label>
          <label>
            <img src="/user/image/avatar-8.png" width="100px" height="100px" alt=""><br>
            <input type="radio" name="r3" class="flat-red">Luca
          </label>
          <label>
            <img src="/user/image/avatar-9.png" width="100px" height="100px" alt=""><br>
            <input type="radio" name="r3" class="flat-red">Jania
          </label>
          <label>
            <img src="/user/image/avatar-10.png" width="100px" height="100px" alt=""><br>
            <input type="radio" name="r3" class="flat-red">Keana
          </label>
          <label>
            <img src="/user/image/avatar-11.png" width="100px" height="100px" alt=""><br>
            <input type="radio" name="r3" class="flat-red">Meida
          </label>
          <label>
            <img src="/user/image/avatar-12.png" width="100px" height="100px" alt=""><br>
            <input type="radio" name="r3" class="flat-red">Geofanus
          </label>
          <label>
            <img src="/user/image/avatar-13.png" width="100px" height="100px" alt=""><br>
            <input type="radio" name="r3" class="flat-red">Zimmy
          </label>
          <label>
            <img src="/user/image/avatar-14.png" width="100px" height="100px" alt=""><br>
            <input type="radio" name="r3" class="flat-red">Albertus
          </label>
          <label>
            <img src="/user/image/avatar-15.png" width="100px" height="100px" alt=""><br>
            <input type="radio" name="r3" class="flat-red">Denaya
          </label>
          <label>
            <img src="/user/image/avatar.png" width="100px" height="100px" alt=""><br>
            <input type="radio" name="r3" class="flat-red">Stevano
          </label>
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 col-md-2 control-label">Alamat</label>

        <div class="col-sm-10 col-md-8">
          <input type="email" class="form-control" id="inputEmail3" placeholder="Alamat">
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 col-md-2 control-label">Lembaga(Sekolah)</label>

        <div class="col-sm-10 col-md-8">
          <input type="email" class="form-control" id="inputEmail3" placeholder="Lembaga">
        </div>
      </div>

    </div>
    <!-- /.box-body -->
    <div class="box-footer">
      <button type="submit" class="btn btn-default">Cancel</button>
      <button type="submit" class="btn btn-info pull-right">Sign in</button>
    </div>
    <!-- /.box-footer -->
  </form>
</div>
@endsection
@section('js')
<script src="{{url('/assets/select2/dist/js/select2.full.min.js')}}"></script>
<script src="{{url('/assets/iCheck/icheck.min.js')}}"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
    //Flat red color scheme for iCheck
    $('input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })
  })
</script>
@endsection
