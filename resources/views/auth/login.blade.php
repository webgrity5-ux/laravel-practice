<form method="POST" action="/login">
    @csrf

    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" >

    <button type="submit">Login</button>

    @error('email')
        <p style="color:red">{{ $message }}</p>
    @enderror
</form>
<?php
    //echo bcrypt('@Developer1');
?>
