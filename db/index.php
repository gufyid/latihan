<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hello, world!</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap.min.css">
</head>

<body>
    <div id="tampil"></div>
    <form method="post" name="myform" class="myform">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="user" class="form-label">User Name</label>
                        <input type="text" class="form-control" name="user" id="user">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>
                </div>

            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#tableku').DataTable();
            load();
            $('[name=myform]').on('submit', function(e) {
                e.preventDefault();
                // alert("joss")
                $.ajax({
                    url: 'simpan.php',
                    type: 'POST',
                    data: $('.myform').serialize(),
                    success: function(data) {
                        load();
                    }
                });
            });

        });

        function load() {
            $('#tampil').load('tampil.php');
        }
    </script>
</body>

</html>