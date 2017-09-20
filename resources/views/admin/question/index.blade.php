<form class="" action="/score" method="post">
{{csrf_field()}}
  @foreach($c as $q)
    <h2>{{$q->question}}</h2>
      @foreach($q->option as $ans)
      <input type="radio" name="answer_{{$ans->question_id}}" value="{{$ans->correct}}">{{$ans->option_text}}<br>
      @endforeach
  @endforeach
  <input type="submit" name="" value="Submit">
</form>
