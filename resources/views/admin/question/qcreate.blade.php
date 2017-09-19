<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <form class="" action="/qoption" method="post">
    {{csrf_field()}}
    Pertanyaan :
    <select class="" name="question_id">
      @foreach($as as $id)
      <option value="">NONE</option>
      <option value="{{$id->id}}">{!! $id->question !!}</option>
      @endforeach
    </select><br>
    @for ($i = 0; $i < 4; $i++)
    <textarea name="option_text_{{$i}}" rows="8" cols="80"></textarea><br>
    <input type="checkbox" name="correct" value="{{$id->score}}">Correct<br>
    @endfor
    <input type="submit" name="" value="Submit">
  </form>
</body>
</html>
