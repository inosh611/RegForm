<h1>User Registration</h1>

<form action="user" method="POST">
        @csrf
        <input type="text" name="username" placeholder="User Name" ><br>
        <span style="color:red">@error('username'){{$message}}@enderror</span><br><br>
        <input type="email" name="usermail" placeholder="Email" ><br>
        <span style="color:red">@error('usermail'){{$message}}@enderror</span><br><br>
        <input type="password" name="password" placeholder="Password"><br>
        <span style="color:red">@error('password'){{$message}}@enderror</span><br><br>
        <button type="submit">Registration</button>
</form>

