<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form>
        <p>
            Masukkan Angka<br>
            <input type="number" name="angka" id="angka" class="form-control" placeholder="Masukkan Angka" required>
        </p>
        <p>
            <button type="button" class="btn btn-info" id="btntampil">
                OK
            </button> 
        </p>
    </form>
    <script>
        document.getElementById("btntampil").onclick = function () { tampilkan() };

        function tampilkan(){
            var angka = document.getElementById('angka').value;
            if(angka == 0){
                alert("0 Angka Netral")

            }else if((angka % 2) == 0){
                alert(angka + " Angka Genap")

            }else{
                alert(angka + " Angka Ganjil")
            }
        }
    </script>
</body>
</html>