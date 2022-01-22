@extends('quizzes.layout')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Quiz</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-info" href="{{ route('quizzes.index') }}"> Back</a>
            </div>
        </div>
    </div><br>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                {{ $quiz->title }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                {{ $quiz->body }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Author:</strong>
                {{ $quiz->author }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Question Num:</strong>
                {{ $quiz->question_id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Question:</strong><br>
                {{ $quiz->question }}<br>
                {{ $quiz->question }}<br>
                {{ $quiz->question }}<br>
                {{ $quiz->question }}<br>
                {{ $quiz->question }}<br>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>Answer:</strong><br>
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
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong><br>
                {{ $quiz->image }}
            </div>
        </div>
    </div>

@endsection