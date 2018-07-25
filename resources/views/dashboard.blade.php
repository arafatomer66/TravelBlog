@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                     <a href="/posts/create" class="btn btn-primary">Share Experiance</a><br><br>
                    <h3>Your Travel Experiance</h3>


                    @if(count($posts)>0)
                     <table class="table table-striped">                        
                         <tr>
                            <th>Tilte</th>
                            <th></th>
                            <th></th>
                         </tr>
                     
                      
                     @foreach($posts as $post)
                     <tr>
                     <td>{{ $post->title }}</td> 
                     <td><a href="/posts/{{ $post->id }}/edit" class="btn btn-primary">Edit</a></td>
                     <td>{{ Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','class'=>'pull-right']) }}
    {{ Form::hidden('_method','DELETE') }}
    {{ Form::submit('Delete',['class'=>'btn btn-danger']) }}
    {{ Form::close() }}</td>

                     </tr>
                     @endforeach
                     
              </table>

              @else
                   <p>You have no posts</p>
              @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
