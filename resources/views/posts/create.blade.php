@extends('partials.admin')
@section('content')

    <h4>Create Post</h4>
    <hr />
    {!! Form::open(['url' => '/admin/posts', 'class' => 'form-horizontal']) !!}
        
        <div class="form-group">
            <div class="col-sm-3">Title</div>
            <div class="col-lg-7">
                <input type="text" name="title" class="form-control" value="" autocomplete="off">
            </div>
        </div>
    
        <div class="form-group">
            <div class="col-sm-3">Category</div>
            <div class="col-lg-7">
                <input type="text" name="category" class="form-control" value="" autocomplete="off">
            </div>
        </div>
    
        <div class="form-group">
            <div class="col-sm-3">Content</div>
            <div class="col-lg-7">
                <textarea name="content" class="form-control" rows="20" cols="20" style="min-height: 220px;"></textarea>
            </div>
        </div>

        <div class="form-group">
            <p>
                <input type="checkbox" name="status" id="status" value="1" />
                <label for="status">Set status to Active?</label>
            </p>
        </div>
        <br />


        <div class="form-group">
          <div class="col-lg-3">
             <button class="btn btn-success">Create</button>
          </div>
        </div>
    
    {!! Form::close() !!}

@endsection