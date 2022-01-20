@extends('quizzes.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="text-primary">Admin Panel</h2>
            </div><br>

            <div class="pull-right">
                <a class="btn btn-warning" href="{{ route('quizzes.index') }}"> Home</a>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('quizzes.create') }}"> Create New Quiz</a>
            </div><br>
        </div><br>
    </div><br>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Description</th>
            <th>Author</th>
            <th>Question Num</th>
            <th>Image</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($quizzes as $quiz)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $quiz->title }}</td>
            <td>{{ $quiz->body }}</td>
            <td>{{ $quiz->author }}</td>
            <td>{{ $quiz->question_id }}</td>
            <td>{{ $quiz->image }}</td>
            <td>
                <form action="{{ route('quizzes.destroy',$quiz->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('quizzes.show',$quiz->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('quizzes.edit',$quiz->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $quizzes->links() !!}
      
@endsection