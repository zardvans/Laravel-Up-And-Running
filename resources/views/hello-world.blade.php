<div>
    Hello World from Route Handling!
    <br/>
    Example link with url helper: <a href="{{ url('/') }}">Home</a>
    <form action='tasks/5' method='POST'>
        @csrf
        @method('DELETE')
        <button type='submit'>Delete Task 5</button>
</div>
