<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
<div class="container mt-3">   
        <div class="d-flex justify-content-between mb-3">         
            <a class="btn btn-warning" href="/quizzes"> Admin Panel</a>  
            <a class="btn btn-info" href="/mainquizzes"> Back</a>
        </div>

    <h1 class="text-center">Quiz Page</h1><br>

        <div class="d-flex justify-content-center mb-3">
            <div class="card" style="width:500px">
                <h4 class="text-center card-title"> {{ $quiz->title }} </h4><br>
                <img class="card-img-top" src="https://res.cloudinary.com/practicaldev/image/fetch/s--uh2TFqei--/c_imagga_scale,f_auto,fl_progressive,h_420,q_auto,w_1000/https://imgur.com/Mj3H69v.png" alt="Card image" style="width:100%">
                <div class="card-body">
                    <p class="card-text">{{ $quiz->body }}</p>
                    <small><p class="card-text"> {{ $quiz->author }}</p></small> <br>
                    <strong>Questions:</strong>
                    <p class="card-text">
                        <br> {{ $quiz->question }}<br>
                        <br> {{ $quiz->question }}<br>
                        <br> {{ $quiz->question }}<br>
                        <br> {{ $quiz->question }}<br>
                        <br> {{ $quiz->question }}<br>
                    </p><br>
                    <a href="/mainquizzes/{{$quiz->id}}/startquiz" class="btn btn-primary">Start</a>              
                </div>
            </div>
        </div>
    </div>
</body>
</html>