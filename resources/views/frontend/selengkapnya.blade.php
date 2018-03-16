<!DOCTYPE html>
<html>
<head>
<title>Kabar Berita</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('assets/css/font-awesome.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('assets/css/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('assets/css/font.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('assets/css/li-scroller.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('assets/css/slick.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('assets/css/jquery.fancybox.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('assets/css/theme.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('assets/css/style.css')}}">
<!--[if lt IE 9]>
<script src="../assets/js/html5shiv.min.js"></script>
<script src="../assets/js/respond.min.js"></script>
<![endif]-->
</head>
<body>
  <style>
    body {
        background-image: url('{{asset('img/f.jpg')}}');
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
    }
</style>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
  <header id="header">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_top">
          <div class="header_top_left">
          </div>
          <div class="header_top_right">
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_bottom">
          <div class="logo_area"><a href="#" class="logo"><img src="{{url('img/logo.jpg')}}" width="100" height="100" alt=""></a></div>
          <div><h2>Kabar Berita</h2></div>
        </div>
      </div>
    </div>
  </header>
  <section id="navArea">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav main_nav">
          <li class="active"><a href="{{url('/')}}"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Home</span></a></li>
           @php
                                    $kategori = App\Kategori::all();
                                    @endphp
                                    @foreach($kategori as $data)
                                    <li><a href="{{url('/kategori',$data->id)}}">{{$data->name}}</a></li>
                                    @endforeach
        </ul>
      </div>
    </nav>
  </section>
  <section id="newsSection">
    <div class="row">
      <div class="col-lg-12 col-md-12">
      </div>
    </div>
  </section>
  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="single_page">
            <h1>{{$berita->judul}}</h1>
            <div class="single_page_content"> <img class="img-center" src="{{asset('img/'.$berita->cover)}}" width="200" height="150" alt="">
              <p>{!!$berita->isi_berita!!}</p>
            </div>
            <div id="disqus_thread"></div>
          </div>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-4 col-sm-4">
        <aside class="right_content">
          <div class="single_sidebar">
            <h2><span>Berita Terkait</span></h2>
            <ul class="spost_nav">
            @php
              $berita = App\Berita::where('kategori_id','=',$berita->kategori_id)->where('id','!=',$berita->id)->get();
             @endphp
              @foreach($berita as $data)
              <li>
                <div class="media wow fadeInDown"> <a href="single_page.html" class="media-left"> <img alt="" src="{{asset('img/'.$data->cover)}}"> </a>
                  <div class="media-body"> <a href="{{url('/selengkapnya',$data->slug_judul)}}" class="catg_title"> {{$data->judul}}</a> </div>
                </div>

                
                
              </li>
               @endforeach
            
            </ul>
          </div>
          <div class="single_sidebar">
            <div class="tab-content">
            
              <div role="tabpanel" class="tab-pane" id="video">
                <div class="vide_area">
                  <iframe width="100%" height="250" src="http://www.youtube.com/embed/h5QWbURNEpA?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="comments">
                <ul class="spost_nav">
                </ul>
              </div>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </section>

  <footer id="footer">
    <div class="footer_top">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInLeftBig">
            <h2>Flickr Images</h2>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInDown">
            <h2>Tag</h2>
             @php
                                    $kategori = App\Kategori::all();
                                    @endphp
                                   
            <ul class="tag_nav">
               @foreach($kategori as $data)
              <li><a href="{{url('/kategori',$data->id)}}">{{$data->name}}</a></li>
          @endforeach
      </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInRightBig">
            <h2>About</h2>
            <p>Berita merupakan bentuk laporan tentang suatu kejadian yang sedang terjadi baru baru ini atau keterangan terbaru dari suatu peristiwa. Dengan kata lain berita adalah fakta menarik atau sesuatu hal yang penting yang disampaikan pada masyarakat orang banyak melalui media. Tapi tidak semua fakta bisa diangkat menjadi suatu berita oleh media. Karena setiap fakta akan dipilih mana yang pantas untuk disampaikan pada masyarakat.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="footer_bottom">
      <p class="copyright">Copyright &copy; 2045 <a href="../index.html">NewsFeed</a></p>
      <p class="developer">Developed By Wpfreeware</p>
    </div>
  </footer>
</div>
<script src="{{url('assets/js/jquery.min.js')}}"></script> 
<script src="{{url('assets/js/wow.min.js')}}"></script> 
<script src="{{url('assets/js/bootstrap.min.js')}}"></script> 
<script src="{{url('assets/js/slick.min.js')}}"></script> 
<script src="{{url('assets/js/jquery.li-scroller.1.0.js')}}"></script> 
<script src="{{url('assets/js/jquery.newsTicker.min.js')}}"></script> 
<script src="{{url('assets/js/jquery.fancybox.pack.js')}}"></script> 
<script src="{{url('assets/js/custom.js')}}"></script>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://berita-1.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

</body>
</html>