

@foreach ($todos as $todo)
    <p>{{ $todo->id. '.'. $todo->title }}
        <form action="{{ url("todo/$todo->id")}}" method="POST">
            @csrf
            
            @method('DELETE')
            <input type="submit" value="Delete">
        </form>
    </p>
@endforeach

<form action="{{ url('todo')}}" method="POST">
    @csrf
    <input type="text" placeholder="text" name="title">
    <input type="submit" >
</form>