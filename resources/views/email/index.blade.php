<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <title>Send Mail</title>
</head>
<body>
    <div class="container">
        <div class="row" style="margin-top:45px">
            <div class="col-md-4 offset-md-4">
            <h4>Send Mail via PhpMailer in Laravel 8</h4><hr>
            <form action="{{route('email.send')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Your Name">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Enter Your Mail">
                </div>
                <div class="form-group">
                    <label for="">Subject</label>
                    <input type="text" name="subject" class="form-control" placeholder="Enter Subject">
                </div>
                <div class="form-group">
                    <textarea name="message" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-block btn-success">Send Mail</button>
            </form>
        </div>
        </div>
    </div>
</body>
</html>