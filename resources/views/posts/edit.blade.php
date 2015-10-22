@extends('partials.admin')
@section('content')

    <h4>Edit Post</h4>
    <hr />
    {!! Form::open(['url' => '/admin/posts/' . $post->id, 'class' => 'form-horizontal']) !!}
    <input type="hidden" name="_method" value="PUT">

    <div class="form-group">
        <div class="col-sm-3">Title</div>
        <div class="col-lg-7">
            <input type="text" name="title" class="form-control" value="{!! $post->title !!}" autocomplete="off">
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-3">Category</div>
        <div class="col-lg-7">
            <input type="text" name="category" class="form-control" value="{!! $post->category !!}" autocomplete="off">
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-3">Content</div>
        <div class="col-lg-7">
            <textarea name="content" class="form-control" rows="20" cols="20" style="min-height: 220px;">{!! $post->content !!}</textarea>
        </div>
    </div>

    <div class="form-group">
        <div class="col-lg-3">
            <button class="btn btn-success">Update</button>
        </div>
    </div>

    {!! Form::close() !!}

@endsection