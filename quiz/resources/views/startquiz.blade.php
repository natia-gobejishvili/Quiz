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
    @foreach($startquiz as $quiz)
    @endforeach
        <div class="d-flex justify-content-center mb-3">
            <div class="card" style="width:400px">
                <h4 class="text-center card-title">{{ $quiz->title }}  </h4><br>
                <img class="card-img-top" src="https://edsurge.imgix.net/uploads/post/image/14021/math_feedback_tool-1613759841.jpg?auto=compress%2Cformat&w=1080&h=437&fit=crop" alt="Card image" style="width:100%">{{ $quiz->image }}
                <div class="card-body">
                    <p class="card-text">{{ $quiz->body }}</p>
                    <small><p class="card-text"> </p></small> <br>
                    <p class="card-text"> Questions: <br> </p>
                    <a href="/mainquizzes/{{$quiz->id}}/startquiz/result" class="btn btn-primary">Submit</a>
                    
                </div>
            </div>
            <br>
        </div><br>
        
    </div>

</body>
</html>