@extends('layouts.master')

@section('content')
    <div class="row mt-4" style="margin-left:20%"> 
        <h4>{{$post->title}}</h4>
    </div>
    <img src="{{asset('storage/coverImages/' . $post->image)}}" alt="" height="500px" width="60%" style="margin-left:20%">
    <div class="col-md-9 container" style="margin-left:16.8%">
        <div class="card-body">
            <div class="card-title">
                    </div>
                    <div class="card-text">
                        {{$post->body}}
                    </div>
                    <hr>
                <p>Crée par {{$post->user->name}}</p>
                <small class="text-muted"><p>{{$post->created_at}}</p></small>
                @auth 
                    @if(auth()->user()->id == $post->user_id)
                        <a href="{{'/posts/' .$post->id . '/edit'}} " class="btn btn-primary float-left mr-2">Modifier</a>
                        <!--on peut utiliser le lien 
                        <a href="" class="btn btn-danger">Supprimer</a>  -->
                            
                        <!--[if IE]><![endif]-->

                        <!--on peut aussi utiliser le FORMULAIRE pour supprimer-->
                        <form action="{{route('posts.destroy',['id' => $post->id])}}" method='POST'>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger float-left">Supprimer</button>
                        </form>
                    @endif
                @endauth
                </div>
            </div>
    </div>
</div>
@endsection