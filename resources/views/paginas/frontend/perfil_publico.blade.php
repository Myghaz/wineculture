@extends("paginas.frontend.layout")

@section('title', 'Politica de Privacidade')

@section("links")
<link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/perfil_publico.css') }}">
@endsection

@section("content")


  <header class="header-left">
  </header>
  <main>
    <div class="row">
      <div class="left">
        <div class="photo-left">
          <img class="photo" src="https://images.pexels.com/photos/1804796/pexels-photo-1804796.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"/>
        </div>
        <h4 class="name">Jane Doe</h4>
        <p class="info">UI/UX Designer</p>
        <p class="info">jane.doe@gmail.com</p>
        <div class="stats row">
          <div class="stat col-xs-4" style="padding-right: 50px;">
            <p class="number-stat">3,619</p>
            <p class="desc-stat">Followers</p>
          </div>
          <div class="stat col-xs-4">
            <p class="number-stat">42</p>
            <p class="desc-stat">Following</p>
          </div>
          <div class="stat col-xs-4" style="padding-left: 50px;">
            <p class="number-stat">38</p>
            <p class="desc-stat">Uploads</p>
          </div>
        </div>
      </div>
      <div class="right" >
        <section class="timeline" >
          <div class="container">
              <div class="timeline-item">
                  <div class="timeline-img"></div>
      
                  <div class="timeline-content js--fadeInLeft">
                      <h2>Title</h2>
                      <div class="date">1 MAY 2016</div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa ratione omnis alias cupiditate saepe atque totam aperiam sed nulla voluptatem recusandae dolor, nostrum excepturi amet in dolores. Alias, ullam.</p>
                      <a class="bnt-more" href="javascript:void(0)">More</a>
                  </div>
              </div>
      
              <div class="timeline-item">
      
                  <div class="timeline-img"></div>
      
                  <div class="timeline-content timeline-card js--fadeInRight">
                      <div class="timeline-img-header">
                          <h2>Card Title</h2>
                      </div>
                      <div class="date">25 MAY 2016</div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa ratione omnis alias cupiditate saepe atque totam aperiam sed nulla voluptatem recusandae dolor, nostrum excepturi amet in dolores. Alias, ullam.</p>
                      <a class="bnt-more" href="javascript:void(0)">More</a>
                  </div>
      
              </div>
      
              <div class="timeline-item">
      
                  <div class="timeline-img"></div>
      
                  <div class="timeline-content js--fadeInLeft">
                      <div class="date">3 JUN 2016</div>
                      <h2>Quote</h2>
                      <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta explicabo debitis omnis dolor iste fugit totam quasi inventore!</blockquote>
                  </div>
              </div>
      
              <div class="timeline-item">
      
                  <div class="timeline-img"></div>
      
                  <div class="timeline-content js--fadeInRight">
                      <h2>Title</h2>
                      <div class="date">22 JUN 2016</div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa ratione omnis alias cupiditate saepe atque totam aperiam sed nulla voluptatem recusandae dolor, nostrum excepturi amet in dolores. Alias, ullam.</p>
                      <a class="bnt-more" href="javascript:void(0)">More</a>
                  </div>
              </div>
      
              <div class="timeline-item">
      
                  <div class="timeline-img"></div>
      
                  <div class="timeline-content timeline-card js--fadeInLeft">
                      <div class="timeline-img-header">
                          <h2>Card Title</h2>
                      </div>
                      <div class="date">10 JULY 2016</div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa ratione omnis alias cupiditate saepe atque totam aperiam sed nulla voluptatem recusandae dolor, nostrum excepturi amet in dolores. Alias, ullam.</p>
                      <a class="bnt-more" href="javascript:void(0)">More</a>
                  </div>
              </div>
      
              <div class="timeline-item">
      
                  <div class="timeline-img"></div>
      
                  <div class="timeline-content timeline-card js--fadeInRight">
                      <div class="timeline-img-header">
                          <h2>Card Title</h2>
                      </div>
                      <div class="date">30 JULY 2016</div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa ratione omnis alias cupiditate saepe atque totam aperiam sed nulla voluptatem recusandae dolor, nostrum excepturi amet in dolores. Alias, ullam.</p>
                      <a class="bnt-more" href="javascript:void(0)">More</a>
                  </div>
              </div>
      
              <div class="timeline-item">
      
                  <div class="timeline-img"></div>
      
                  <div class="timeline-content js--fadeInLeft">
                      <div class="date">5 AUG 2016</div>
                      <h2>Quote</h2>
                      <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta explicabo debitis omnis dolor iste fugit totam quasi inventore!</blockquote>
                  </div>
              </div>
      
              <div class="timeline-item">
      
                  <div class="timeline-img"></div>
      
                  <div class="timeline-content timeline-card js--fadeInRight">
                      <div class="timeline-img-header">
                          <h2>Card Title</h2>
                      </div>
                      <div class="date">19 AUG 2016</div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa ratione omnis alias cupiditate saepe atque totam aperiam sed nulla voluptatem recusandae dolor, nostrum excepturi amet in dolores. Alias, ullam.</p>
                      <a class="bnt-more" href="javascript:void(0)">More</a>
                  </div>
              </div>
      
              <div class="timeline-item">
      
                  <div class="timeline-img"></div>
      
                  <div class="timeline-content js--fadeInLeft">
                      <div class="date">1 SEP 2016</div>
                      <h2>Title</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa ratione omnis alias cupiditate saepe atque totam aperiam sed nulla voluptatem recusandae dolor, nostrum excepturi amet in dolores. Alias, ullam.</p>
                      <a class="bnt-more" href="javascript:void(0)">More</a>
                  </div>
              </div>
      
      
      
          </div>
      </section>
  
  </main>
</div>
@endsection
@section("javascript")
<script src="{{ URL::asset('assets/js/paginas/frontend/perfil_publico.js') }}"></script>
<script src='https://cdn.jsdelivr.net/scrollreveal.js/3.3.1/scrollreveal.min.js'></script>
<script src="./script.js"></script>
@endsection