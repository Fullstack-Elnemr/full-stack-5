

<form action="{{ route('students.store') }}" method="post">
    @csrf

    name :
    <input type="text" name="name" >
    <br>
    <br>
    Email:
    <input type="email" name="email" >
    <br>
    <br>
    Phone:
    <input type="text" name="phone" >
    <br>
    <br>
    <input type="submit">
</form>