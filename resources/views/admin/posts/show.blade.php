@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>{{$post['title']}}</h1>
                @if ($post['category'])
                    <span class="badge badge-primary">{{$post['category']['name']}}</span>
                @endif
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <a href="{{route('admin.posts.index')}}" class="btn btn-primary">Visualizza tutti i posts</a>
                </div>
                <div>
                    {{$post['content']}}
                </div>
                @if(count($post['tags']) > 0)
                    <div class="mt-3">
                        <h6>Tags</h6>
                        <ul>
                            @foreach ($post['tags'] as $tag)                    
                                <li>{{$tag['name']}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection