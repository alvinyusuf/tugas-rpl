<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/874a9d1fa5.js" crossorigin="anonymous"></script>
    <title>Halaman Home</title>
</head>
<body>
    <div class="container mt-3">
        @yield('container')    
    </div>
</body>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
    $('#fakultas').change(function() { 
        var fakultas = $(this).val(); 
        $.ajax({
            type: 'POST', 
            url: 'ajax_jurusan.php', 
            data: 'fakultas_id=' + fakultas, 
            success: function(response) { 
                $('#jurusan').html(response); 
            }
        });
    });
 
</script>
</html>