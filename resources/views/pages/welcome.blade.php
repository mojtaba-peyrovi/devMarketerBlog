@extends('main')

@section('title','| Homepage')



@section('stylesheets')
    <link rel="stylesheet" href="/css/master.css">
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
          <div class="jumbotron">
            <h1>Welcome to my Blog</h1>
            <p class="lead">Thank you for visiting my Laravel blog experience! I'm gonna improve and elevate my skills on a daily basis!</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Posts</a></p>
          </div>
        </div><!--end of col-md-12-->
      </div><!--end of row-->

      <div class="row">
            <div class="col-md-8">
                @foreach ($posts as $post)
                    <div class="post">
                      <h3>{{ $post->title }}</h3>
                        <p>{{ substr($post->body,0,300) }}{{ strlen($post->body) > 300 ? "..." : ""}}</p>
                        <a href="{{ url('blog' .'/'. $post->slug) }}" class="btn btn-warning">Read more</a><hr>
                    </div>
                @endforeach

            </div><!--end of col-md-8-->

            <div class="col-md-3 col-md-offset-1">
              <h2>Sidebar</h2>
            </div>
      </div>

@endsection
@section('scripts')
    <script src="js/main.js" charset="utf-8"></script>
@endsection
