<html>
    <head>
<title>CSS</title>
<link rel="stylesheet" href="mystyle.css">
        <style>
            body{

                color: blueviolet;
            }
            p {
                text-align: center;
            }

            .salam{
                font-size: larger;
                text-align: right;
                font-weight: bold;
                text-transform: uppercase;
            }

            .garisbawah{
                text-decoration: underline;
                color: black;
            }

        </style>
    </head>

    <body>
        <!--InLine CSS, digunakan jika hanya 1 bagian di 1 halaman yang berbeda-->
        Hallo <b style="color: #ff0000; text-decoration: underline; text-shadow: 1px 1px 5px rgb(0, 0, 0);">Apa</b> Kabar??
        <!--Inpage CSS, digunakan jika yang berbeda hanya di 1 halaman-->
        <div class="garisbawah salam"> Hallo Apa Kabar??</div>
        <!--External File, digunakan untuk global 1 situs-->
        <span class="sembunyi">Hallo Apa Kabar??</span>
        <p>Hallo Apa Kabar??</p>
    </body>
</html>
