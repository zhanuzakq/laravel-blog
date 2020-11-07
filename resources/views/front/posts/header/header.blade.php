<!-- Post Header -->
<header class="masthead" style="background-image: url({{asset('img/home-bg.jpg')}})">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h3>{{$post->title ?? ''}}</h3>
            <span class="subheading">{{$post->author->name ?? 'Админ'}} <small>Опублиовано: {{$post->created_at ?? ''}}</small></span>
          </div>
        </div>
      </div>
    </div>
</header>