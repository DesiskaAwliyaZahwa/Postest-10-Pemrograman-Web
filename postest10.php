<!DOCTYPE html>
<html>
<head>

    <title>POSTEST 10</title>
    <style type="text/css">
        body{
            background:url(bunga.jpg);
           
        }

        *{
            margin:0px; 
            padding-top:20px;
        }

        .container {
            margin:auto; 
            width: 550px;
        }

        header {
            background-color: #e5989b; 
            text-align: center
        }

        h1 {
            font-family: arial;
        }

        article {
            background-color: #b5838d; 
            text-align: center; 
            padding: 50px;
            font-family:arial;
            font-size:25px;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Selamat Datang</h1>
        </header>
        <article>
            Anda Pengunjung ke :
            <?php 
            include ("counter.php");
            echo "<p style='color:#6a040f; 
            font-weight:enchant_broker_list_dicts(broker)'> $kunjungan[0] </p>";
            ?>
            <h6>Praktikum Pemrograman Web 10</h6>
        </article>
    </div>
</body>
</html>
