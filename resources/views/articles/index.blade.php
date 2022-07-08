@extends("layouts.app")
    @section("content")
        <div class="container">
        {{ $article->links() }}

            @if(session('info'))
            <div class="alert alert-info">
            {{ session('info') }}
            </div>
            @endif

            @if(session('create'))
            <div class="alert alert-info">
            {{ session('create') }}
            </div>
            @endif

            @foreach($article as $articles)
                <div class="card mb-2">
                    <div class="card-body">
                        <h5 class="card-title">{{ $articles->title }}</h5>
                        <div class="card-subtitle mb-2 text-muted small">
                            {{ $articles->created_at->diffForHumans() }}
                        </div>
                        <p class="card-text">{{ $articles->body }}</p>
                        <a class="card-link"
                        href="/articles/detail/{{$articles->id}}">
                        View Detail &raquo;
                        </a>

                        <a class="card-link"
                        href="/articles/edit/{{$articles->id}}">
                        Edit &raquo;
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    @endsection