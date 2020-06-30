<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Form Sign Up</title>
</head>
<body>
   <h1><b>Buat Account baru!</b></h1>
   <h4><b>Sign Up Form</b></h4>
   <form action="{{ route('register.store') }}" method="POST">
      @csrf
      <p>First name :</p>
      <input type="text" name="firstname">
      <p>Last Name :</p>
      <input type="text" name="lastname">
      <p>Gender :</p>
      <input type="radio" name="gender"><label>Male</label><br>
      <input type="radio" name="gender"><label>Female</label><br>
      <input type="radio" name="gender"><label>Other</label><br>
      <p>Nationality :</p>
      <select name="nationality">
         <option value="indonesia">Indonesia</option>
         <option value="inggris">Inggris</option>
         <option value="other">Other</option>
      </select>
      <p>Language Spoken :</p>
      <input type="checkbox" name="language[]"><label>Bahasa Indonesia</label><br>
      <input type="checkbox" name="language[]"><label>English</label><br>
      <input type="checkbox" name="language[]"><label>Other</label><br>
      <p>Bio :</p>
      <textarea name="bio" cols="30" rows="10"></textarea>
      <br>
      <button type="submit">Sign Up</button>
   </form>
</body>
</html>