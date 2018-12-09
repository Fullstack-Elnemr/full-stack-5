
<h2>{{ $student->name }}</h2>

<form action="{{ route('students.update', ['id' => $student->id ]) }}" method="post">
    @csrf
    <input name="_method" type="hidden" value="PUT">
    name :
    <input type="text" name="name" value="{{ $student->name }}">
    <br>
    <br>
    Email:
    <input type="email" name="email" value="{{ $student->email }}">
    <br>
    <br>
    Phone:
    <input type="text" name="phone" value="{{ $student->phone }}">
    <br>
    <br>
    <input type="submit">
</form>