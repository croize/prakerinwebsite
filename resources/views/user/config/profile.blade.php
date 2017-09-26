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
  <form class="form-horizontal" action="/user/profile/{{Auth::user()->id}}" method="post">
    {{csrf_field()}}
    <div class="box-body">
      <div class="form-group">
        <label for="name" class="col-sm-2 col-md-2 control-label">Name</label>

        <div class="col-sm-10 col-md-8">
          <input type="text" name="name" class="form-control" id="name" placeholder="Name" value="{{Auth::user()->name}}">
        </div>
      </div>
      <div class="form-group">
        <label for="kelamin" class="col-sm-2 col-md-2 control-label">Jenis Kelamin</label>
        <div class="col-md-8 col-sm-10">
          <select class="form-control select2" id="kelamin" name="kelamin" style="width: 100%;">
            <option value="">--None--</option>
            <option value="L" @if(Auth::user()->kelamin == 'L') selected @else  @endif>Laki-Laki</option>
            <option value="P" @if(Auth::user()->kelamin == 'P') selected @else  @endif>Perempuan</option>
          </select>
          <i>* Pilih salah satu.</i>
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 col-md-2 control-label">Email</label>

        <div class="col-sm-10 col-md-8">
          <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email" value="{{Auth::user()->email}}" disabled>
        </div>
      </div>
      <div class="form-group">
        <label for="minat" class="col-sm-2 col-md-2 control-label">Minat</label>
        <div class="col-md-8 col-sm-10">
          <select class="form-control select2" name="minat" id="minat" style="width: 100%;">
            <option value="">--None--</option>
            <option value="Website" @if(Auth::user()->minat == 'Website') selected @else  @endif>Website</option>
            <option value="Android" @if(Auth::user()->minat == 'Android') selected @else  @endif>Android</option>
            <option value="Desktop" @if(Auth::user()->minat == 'Desktop') selected @else  @endif>Desktop</option>
            <option value="Games" @if(Auth::user()->minat == 'Games') selected @else  @endif>Games</option>
            <option value="Multimedia" @if(Auth::user()->minat == 'Multimedia') selected @else  @endif>Multimedia</option>
            <option value="3D" @if(Auth::user()->minat == '3D') selected @else  @endif>3D</option>
          </select>
          <i>* Pilih salah satu.</i>
        </div>
      </div>
      <div class="form-group">
        <label for="flat-red" class="col-md-2 control-label">Avatar</label>
        <div class="col-md-10">
          <label>
            <img src="/user/image/avatar-1.png" width="100px" height="100px" alt=""><br>
            <input type="radio" name="image" class="flat-red" value="avatar-1.png" @if(Auth::user()->image == 'avatar-1.png') checked @else  @endif>Pingky
          </label>
          <label>
            <img src="/user/image/avatar-2.png" width="100px" height="100px" alt=""><br>
            <input type="radio" name="image" class="flat-red" value="avatar-2.png" @if(Auth::user()->image == 'avatar-2.png') checked @else  @endif>Alexa
          </label>
          <label>
            <img src="/user/image/avatar-3.png" width="100px" height="100px" alt=""><br>
            <input type="radio" name="image" class="flat-red" value="avatar-3.png" @if(Auth::user()->image == 'avatar-3.png') checked @else  @endif>Angel
          </label>
          <label>
            <img src="/user/image/avatar-4.png" width="100px" height="100px" alt=""><br>
            <input type="radio" name="image" class="flat-red" value="avatar-4.png" @if(Auth::user()->image == 'avatar-4.png') checked @else  @endif>Jeremya
          </label>
          <label>
            <img src="/user/image/avatar-5.png" width="100px" height="100px" alt=""><br>
            <input type="radio" name="image" class="flat-red" value="avatar-5.png" @if(Auth::user()->image == 'avatar-5.png') checked @else  @endif>Elvrod
          </label>
          <label>
            <img src="/user/image/avatar-6.png" width="100px" height="100px" alt=""><br>
            <input type="radio" name="image" class="flat-red" value="avatar-6.png" @if(Auth::user()->image == 'avatar-6.png') checked @else  @endif>James
          </label>
          <label>
            <img src="/user/image/avatar-7.png" width="100px" height="100px" alt=""><br>
            <input type="radio" name="image" class="flat-red" value="avatar-7.png" @if(Auth::user()->image == 'avatar-7.png') checked @else  @endif>Rery
          </label>
          <label>
            <img src="/user/image/avatar-8.png" width="100px" height="100px" alt=""><br>
            <input type="radio" name="image" class="flat-red" value="avatar-8.png" @if(Auth::user()->image == 'avatar-8.png') checked @else  @endif>Luca
          </label>
          <label>
            <img src="/user/image/avatar-9.png" width="100px" height="100px" alt=""><br>
            <input type="radio" name="image" class="flat-red" value="avatar-9.png" @if(Auth::user()->image == 'avatar-9.png') checked @else  @endif>Jania
          </label>
          <label>
            <img src="/user/image/avatar-10.png" width="100px" height="100px" alt=""><br>
            <input type="radio" name="image" class="flat-red" value="avatar-10.png" @if(Auth::user()->image == 'avatar-10.png') checked @else  @endif>Keana
          </label>
          <label>
            <img src="/user/image/avatar-11.png" width="100px" height="100px" alt=""><br>
            <input type="radio" name="image" class="flat-red" value="avatar-11.png" @if(Auth::user()->image == 'avatar-11.png') checked @else  @endif>Meida
          </label>
          <label>
            <img src="/user/image/avatar-12.png" width="100px" height="100px" alt=""><br>
            <input type="radio" name="image" class="flat-red" value="avatar-12.png" @if(Auth::user()->image == 'avatar-12.png') checked @else  @endif>Geofanus
          </label>
          <label>
            <img src="/user/image/avatar-13.png" width="100px" height="100px" alt=""><br>
            <input type="radio" name="image" class="flat-red" value="avatar-13.png" @if(Auth::user()->image == 'avatar-13.png') checked @else  @endif>Zimmy
          </label>
          <label>
            <img src="/user/image/avatar-14.png" width="100px" height="100px" alt=""><br>
            <input type="radio" name="image" class="flat-red" value="avatar-14.png" @if(Auth::user()->image == 'avatar-14.png') checked @else  @endif>Albertus
          </label>
          <label>
            <img src="/user/image/avatar-15.png" width="100px" height="100px" alt=""><br>
            <input type="radio" name="image" class="flat-red" value="avatar-15.png" @if(Auth::user()->image == 'avatar-15.png') checked @else  @endif>Denaya
          </label>
          <label>
            <img src="/user/image/avatar.png" width="100px" height="100px" alt=""><br>
            <input type="radio" name="image" class="flat-red" value="avatar.png" @if(Auth::user()->image == 'avatar.png') checked @else  @endif>Stevano
          </label>
        </div>
      </div>
      <div class="form-group">
        <label for="alamat" class="col-sm-2 col-md-2 control-label">Alamat</label>

        <div class="col-sm-10 col-md-8">
          <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat" value="{{Auth::user()->alamat}}">
        </div>
      </div>
      <div class="form-group">
        <label for="inputnohp" class="col-sm-2 col-md-2 control-label">No Handphone</label>

        <div class="col-sm-10 col-md-8">
          <input type="text" name="nomor_hp" class="form-control" id="inputnohp" placeholder="+62" @if(Auth::user()->nomor_hp == NULL)  @else value="{{Auth::user()->nomor_hp}}" @endif>
          <i>*Nomor telpon yang valid dimulai dengan 62 dan diikuti oleh nomor telpon Anda.</i>
        </div>
      </div>
      <div class="form-group">
        <label for="lembaga" class="col-sm-2 col-md-2 control-label">Lembaga(Sekolah)</label>

        <div class="col-sm-10 col-md-8">
          <input type="text" name="lembaga" class="form-control" id="lembaga" placeholder="Lembaga" value="{{Auth::user()->lembaga}}">
        </div>
      </div>

    </div>
    <input type="hidden" name="_method" value="put">
    <!-- /.box-body -->
    <div class="box-footer">
      <a href="/home" class="btn btn-default">Cancel</a>
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
