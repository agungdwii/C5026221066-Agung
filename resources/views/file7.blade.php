<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function validateForm() {
            //let x = document.forms["myForm"]["fname"].value;
            var x = document.getElementById("fname");
            var nrp = document.getElementById("nrp");
            //BAhwa yang dicek cukup yang invalid
            if (x.value == "") { // isan kosong, berarti text box nya tidak diisi / kosong
                alert("Nama harus diisi...");
                x.focus();
                return false; //function ini ada return valuenya, bukan void
                //stop, gak dikirim ke server
            }
            if (nrp.value == "") {
                alert("NRP harus diisi...");
                nrp.focus();
                return false;
            }

            if (isNaN(nrp.value) == true){
                alert("NRP harus berupa angka...");
                nrp.focus();
                nrp.value = "";
                return false;
            }

            if (nrp.value.length != 10) {
                alert("Jumlah digit harus 10, anda memasukkan " + nrp.value.length + " digit!");
                nrp.focus();
                nrp.value = "";
                return false;
            }

            if (nrp.value.substring(0,4) != "5026") {
                alert("Pendaftar harus berasal dari departemen sistem informasi");
                nrp.focus();
                nrp.value = "";
                return false;
            }

            if (nrp.value.substring(4,6) != "22" && nrp.value.substring(4,6) != "21" ) {
                alert("Pendaftar harus berasal dari angkatan 2021 atau 2022");
                nrp.focus();
                nrp.value = "";
                return false;
            }


            return true ; //boleh dikasih boleh tidak, kerena default function adalah true.
            //Pencegahan nilai ke false berfungsi supaya tidak jadi dikirimkan
        }
    </script>
</head>

<body>

    <h2>Pendaftaran Asisten Pribadi Agung Dwi</h2>

    <form name="myForm" action="https://www.google.com/" onsubmit="return validateForm()" method="post">
        <label for="fname">Name:</label>
        <input type="text" id="fname" name="fname" class="form-control">
        <br>
        <label for="nrp">NRP:</label>
        <input type="text" id="nrp" name="nrp" class="form-control">
        <br>
        <input type="submit" value="Submit" class="btn btn-primary">
        <input type="reset" value="Kosongi" class="btn btn-warning">
    </form>

</body>

</html>
