@extends('admin.layouts')
@section('css')
<link rel="stylesheet" href="{{url('assets/bootstrap-select/css/bootstrap-select.css')}}">
@endsection
@section('content')
<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="header">
        <h2>Create Question</h2>
      </div>
      <div class="body">
        <form class="" action="/qoption" method="post">
          {{csrf_field()}}
          <div class="row">
            <div class="col-md-6">
              Pertanyaan: <br>
              <textarea name="question" rows="8" cols="80" class="form-control no-resize"></textarea><br>
              Jurusan : <br>
              <select class="form-control show-tick" name="minat">
                <option value="">-Pilih-</option>
                <option value="web">Website</option>
                <option value="games">Games</option>
                <option value="mm">Video Editing</option>
                <option value="android">Android</option>
              </select>
            </div>
            <div class="col-md-6">
              Jawaban : <br>
              @for ($i = 1; $i <= 4; $i++)
              <textarea name="option_text_{{$i}}" rows="3" cols="10" class="form-control no-resize"></textarea><br>
              <input type="hidden" name="correct_{{$i}}" value="0">
              <input type="checkbox" name="correct_{{$i}}" id="basic_checkbox_{{$i}}" class="filled-in" value="1" />
              <label for="basic_checkbox_{{$i}}">Correct</label><br>
              @endfor
            </div>
          </div>

          <input type="submit" name="" class="btn btn-primary waves-effect" value="Submit">
        </form>
      </div>

    </div>
  </div>
</div>

@endsection
@section('js')
<script type="text/javascript" src="{{url ('assets/bootstrap-select/js/bootstrap-select.js')}}">
</script>
@endsection
