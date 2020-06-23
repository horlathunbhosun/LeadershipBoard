
{{-- {{$search->score}} --}}

@foreach ($search as $hey )
<li>{{ $hey->username}}</li>
<li>{{$hey->score}}</li>
@endforeach