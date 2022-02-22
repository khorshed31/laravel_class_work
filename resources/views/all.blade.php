<h1>Home....</h1>

@foreach($students as $student)
    {{ $student['name'] }}<br/>
    {{ $student['email'] }}<br/>
    {{ $student['mobile'] }}<br/>
    <hr/>
@endforeach

