<a href="{{ route('students.create') }}">New One</a>
<ul>
    @foreach($students as $student)
    <li>
        <a href="{{ route('students.show', ['id' => $student->id ]) }}">
            {{ $student->name }}
        </a>
        <form action="{{ route('students.destroy', ['id' => $student->id]) }}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">

            <input type="submit" value="delete">
        </form>
    </li>
    @endforeach
</ul>
