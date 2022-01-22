<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
       
    <div class="container mt-3">   
        <div class="d-flex justify-content-between mb-3">         
            <a class="btn btn-warning" href="/quizzes"> Admin Panel</a>  
            <a class="btn btn-success" href="{{ route('login') }}"> Login/Register</a>
        </div>

    <h2 class="text-center">Home Page</h2>
    <br>
        @foreach($mainquizzes as $quiz)
        <div class="d-flex justify-content-center mb-3">
            <div class="card" style="width:400px">
                <h4 class="text-center card-title"> {{ $quiz->title }} </h4><br>
                <img class="card-img-top" src="https://canopylab.com/wp-content/uploads/2020/05/Working-with-adaptive-quizzes-A-beginners-guide.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                <p class="card-text">{{ $quiz->body }}</p>
                <small><p> Number of questions: {{ $quiz->question_id }}</p></small>
                <a href="/mainquizzes/{{$quiz->id}}" class="btn btn-primary">Continue</a>
                </div>
            </div>
            <br>
        </div><br>
        @endforeach
    </div>

</body>
</html>