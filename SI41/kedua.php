<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="proses.php">
        Nilai pertama <input type="text" name="nilai1">
        Nilai Kedua <input type="text" name="nilai2">

        <select name="attributes[]" multiple>
            <option value="pil1">pilihan1</option>
            <option value="pil2">pilihan2</option>
            <option value="pil3">pilihan3</option>
            <option value="pil4">pilihan4</option>


        </select>

    
        <input type="submit" value="kirim">
        <input type="reset" value="kosongkan">
    </form>
</body>
</html>