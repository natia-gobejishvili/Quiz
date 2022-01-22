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
            <div class="card" style="width:500px">
               <!-- <h4 class="text-center card-title">{{ $quiz->title }}  </h4><br>-->
                <img class="card-img-top" src="https://datacrayon.com/images/html-css-javascript/bootstrap5.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                <nav aria-label="...">
                    <ul class="pagination">
                        <li class="page-item disabled">
                        <a class="page-link">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active" aria-current="page">
                        <a class="page-link" href="#">2 <span class="visually-hidden">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
                    <p class="card-text">
                        <br> {{ $quiz->question }}<br>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>  {{ $quiz->answer }}
                            <label class="form-check-label" for="radio1" ></label>
                        </div>
                        <div class="form-check"> 
                            <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2" checked>  {{ $quiz->answer }}
                            <label class="form-check-label" for="radio2"></label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2" checked>  {{ $quiz->answer }}
                            <label class="form-check-label" for="radio2"></label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2" checked>  {{ $quiz->answer }}
                            <label class="form-check-label" for="radio2"></label>
                        </div> 

                        <br> {{ $quiz->question }}<br>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>  {{ $quiz->answer }}
                            <label class="form-check-label" for="radio1" ></label>
                        </div>
                        <div class="form-check"> 
                            <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2" checked>  {{ $quiz->answer }}
                            <label class="form-check-label" for="radio2"></label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2" checked>  {{ $quiz->answer }}
                            <label class="form-check-label" for="radio2"></label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2" checked>  {{ $quiz->answer }}
                            <label class="form-check-label" for="radio2"></label>
                        </div>

                        <br> {{ $quiz->question }}<br>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>  {{ $quiz->answer }}
                            <label class="form-check-label" for="radio1" ></label>
                        </div>
                        <div class="form-check"> 
                            <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2" checked>  {{ $quiz->answer }}
                            <label class="form-check-label" for="radio2"></label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2" checked>  {{ $quiz->answer }}
                            <label class="form-check-label" for="radio2"></label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2" checked>  {{ $quiz->answer }}
                            <label class="form-check-label" for="radio2"></label>
                        </div>

                        <br> {{ $quiz->question }}<br>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>  {{ $quiz->answer }}
                            <label class="form-check-label" for="radio1" ></label>
                        </div>
                        <div class="form-check"> 
                            <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2" checked>  {{ $quiz->answer }}
                            <label class="form-check-label" for="radio2"></label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2" checked>  {{ $quiz->answer }}
                            <label class="form-check-label" for="radio2"></label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2" checked>  {{ $quiz->answer }}
                            <label class="form-check-label" for="radio2"></label>
                        </div>

                        <br> {{ $quiz->question }}<br>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>  {{ $quiz->answer }}
                            <label class="form-check-label" for="radio1" ></label>
                        </div>
                        <div class="form-check"> 
                            <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2" checked>  {{ $quiz->answer }}
                            <label class="form-check-label" for="radio2"></label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2" checked>  {{ $quiz->answer }}
                            <label class="form-check-label" for="radio2"></label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2" checked>  {{ $quiz->answer }}
                            <label class="form-check-label" for="radio2"></label>
                        </div>
                    </p>

                    <br>
                    <a href="/mainquizzes/{{$quiz->id}}/startquiz/result" class="btn btn-primary">Submit</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>