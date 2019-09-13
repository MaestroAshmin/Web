@extends('dashboard.layout.master')

@section('content')

<h1>About page</h1>
<div class="form-group">
        <form action="{{ route('about') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="comment">Update the content</label>
            <textarea class="form-control" rows="5" id="comment" name="AboutText" placeholder="here should be about text"></textarea>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                 </div>
    
            </form>
      </div>
@endsection