<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        *{
            padding:0;
            margin:0;
        }


        .form-error{
            background-image: url('./img/bg10.jpeg');
            width:40%;
        }
        .form-error h1{
            color:#fff;
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center pt-5">
        <div class="form-error d-flex justify-content-center flex-column align-items-center py-5 rounded">
            <h1>ERROR</h1>
            <p>Bạn phải đăng nhập với vai trò là admin</p>
            <a class="btn btn-danger" href="quanly.php?page_layout=index">quay lai trang chu</a>
        </div>
    </div>
</body>
</html>