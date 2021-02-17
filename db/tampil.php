<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hello, world!</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap.min.css">
    <style>
        .container {
            padding-top: 13px;
        }
    </style>
</head>

<body>
    <?php
    include "koneksi.php";
    $data = mysqli_query($conn, "select * from user");
    // var_dump($data);
    // die();
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <table class="table table-striped table-bordered" id="tableku">

                    <thead>
                        <tr>
                            <th>User Name</th>
                            <th>Password</th>
                            <th>Nama</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        while ($hasil = mysqli_fetch_array($data)) {
                            // $nama = $d['nama'];
                            // if($d['user']!=""){    
                            echo "<tr>";
                            echo "<td>" . $hasil['user'] . "</td>";
                            echo "<td>" . $hasil['password'] . "</td>";
                            echo "<td>" . $hasil['nama'] . "</td>";
                            echo "</tr>";
                        }

                        ?>
                        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
                        <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
                        <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap.min.js"></script>

                    </tbody>
                </table>
            </div>
            <div class="col-md-3">
                Column ke dua
            </div>
            <div class="col-md-3">
                column ke tiga
            </div>
        </div>
    </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#tableku').DataTable();
            // alert("test")
        });
    </script>
</body>

</html>