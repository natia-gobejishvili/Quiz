@extends('quizzes.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Quiz</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-info" href="{{ route('quizzes.index') }}"> Back</a>
            </div>
        </div>
    </div><br>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('quizzes.update',$quiz->id) }}" method="POST">
        @csrf
        @method('PUT')
   
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Title:</strong>
                    <input type="text" name="title" value="{{ $quiz->title }}" class="form-control" placeholder="Correct the title of the quiz">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    <textarea class="form-control" style="height:150px" name="body" placeholder="Correct the quiz...">{{ $quiz->body }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Author:</strong>
                    <input type="text" name="author" value="{{ $quiz->author }}" class="form-control" placeholder="Correct the name...">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Question Num:</strong>
                    <input type="text" name="question_id" value="{{ $quiz->question_id }}" class="form-control" placeholder="Change the number of questions...">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Question:</strong>
                <input type="text" name="question" value="{{ $quiz->question }}" class="form-control" placeholder="Change the question...">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Answer:</strong>
                <input type="text" name="answer" value="{{ $quiz->answer }}" class="form-control" placeholder="Change the answer...">
                <input type="text" name="answer" value="{{ $quiz->answer }}" class="form-control" placeholder="Change the answer...">
                <input type="text" name="answer" value="{{ $quiz->answer }}" class="form-control" placeholder="Change the answer...">
                <input type="text" name="answer" value="{{ $quiz->answer }}" class="form-control" placeholder="Change the answer...">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <div class="mb-3">
                    <strong>Select Image:</strong>
                    <label for="formFile" class="form-label">Change the image...</label>
                    <input class="form-control" name="image" value="{{ $quiz->image }}" type="file" id="formFile">
                </div>
            </div>
        </div><br>
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection