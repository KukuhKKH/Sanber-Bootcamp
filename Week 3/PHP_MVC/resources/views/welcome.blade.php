<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Welcome</title>
</head>
<body>
   <h1><b>Selamat Datang {{ Session::get('namaDepan', '') }} {{ Session::get('namaBelakang', '') }}</b></h1>
   <h3><b>Terima kasih telah bergabung di SanberBook. Social Media kita bersama!</b></h3>
</body>
</html>