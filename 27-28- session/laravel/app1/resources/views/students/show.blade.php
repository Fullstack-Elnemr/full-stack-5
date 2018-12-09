
<h2>{{ $student->name }}</h2>
<h5>@ {{ $student->email }}</h5>
<a href="{{ route('students.edit', ['id'=> $student->id]) }}">
    Edit
</a>
<form action="{{ route('students.destroy', ['id' => $student->id]) }}" method="post">
    @csrf
    <input name="_method" type="hidden" value="DELETE">

    <input type="submit" value="delete">
</form>