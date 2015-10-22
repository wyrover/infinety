@extends('partials.admin')
@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="pull-right"><a href="/admin/posts/create" class="btn btn-primary">Create</a></div>
            <h4>Posts</h4>

        </div>
        <hr />
        <div class="panel-body">
            @if (count($posts))
            <div class="table-responsive">
                <table class="table-striped">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Created</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td><a href="/admin/posts/{!! $post->id !!}/edit">{!! $post->title !!}</a></td>
                            <td>{!! $post->category !!}</td>
                            <td>{!! date('d/m/y', strtotime($post->created_at)) !!}</td>
                            <td>
                                {!! Form::open(['url' => 'admin/posts/' . $post->id]) !!}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="btn btn-danger" onclick="return confirm('Are you sure you want to remove this?')"><i class="fa fa-2x fa-times"></i></button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {!! $posts->render() !!}
            </div>
            @else
                <p>No posts</p>
            @endif

        </div>
    </div>

@endsection