@foreach($c as $yu)
{{$yu->title}}<br>
{{$yu->desc_pembuka}}<br>
{{$yu->peserta}}<br>
{{$yu->penyelenggara}}<br>
{{$yu->time}}<br>
{{$yu->date}}<br>
{{$yu->point}}<br>
{!! $yu->desc !!}<br>
<hr>
@endforeach
