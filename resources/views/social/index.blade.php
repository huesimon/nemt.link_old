@extends('layouts.app')

@section('content')
    <div class="container-fluid ">
        <!-- Tab panes -->
        <div class="tab-content">
            <div id="home" class="container-fluid tab-pane active "><br>
                @foreach ($posts as $post)
                    <div class="row justify-content-center p-3">

                        <div class="card mx-auto custom-card" id="prova">
                            <div class="row post-header col-12 py-2 px-3">
                                <div class="col-6 float-left ">
                                    <h4>{{ $post->user->name }}</h4>
                                </div>
                                <div class="col-6 float-right text-right post-number">
                                    <h4></h4>
                                    {{-- Could be upload date
                                    --}}
                                </div>
                            </div>
                            <img class="card-img" src="https://i.stack.imgur.com/khjyI.jpg" alt="Card image cap">
                            <div class="card-body px-3">
                                <h5 class="card-title">{{ $post->likeCount() }}</h5>
                                <p class="card-text">{{ $post->caption }}</p>
                            </div>
                            <div class="row post-header px-3 pb-3">
                                <div class="col-1 float-left text-left">
                                    <i class="fi-xnluxl-heart"></i>
                                    {{--fi-xnsuxl-heart-solid --}}
                                </div>
                                <div class="col-10 float-left text-left">
                                    @foreach ($post->comments as $comment)
                                        <p> {{ $post->user->name }}: {{ $comment->text }}</p>
                                    @endforeach
                                </div>
                                <div class="col-1 float-right text-right">
                                    {{-- <i class="fi-hwsuxl-question-mark"></i>
                                    --}}
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </div>
@endsection
