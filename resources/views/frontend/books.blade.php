@extends('frontend.layout.master')
@section('content')
    <section id="hero">
        <div class="hero-container">
            <h1>كل الكتب</h1>
        </div>
    </section><!-- #hero -->

    <main id="main">

        <!--==========================
          About Us Section
        ============================-->

        <section id="services">
            <div class="container wow fadeIn">
                <div class="section-header">
                    <h3 class="section-title">كل الكتب</h3><br>
                </div>
                <div class="">
                    @foreach($post as $value)
                    <div class="wow fadeInUp my-cll" data-wow-delay="0.2s">
                        <div class="box">
                            <div class=""><a style = "color:#2dc997;" href="{{route('book',['id' => $value->id])}}"><img style="width: 100px; height: 100px" src="{{asset('img/'.$value->img)}}"></a></div><br>
                            <h4 class="title"><a style = "color:#2dc997;" href="{{route('book',['id' => $value->id])}}"></a>{{$value->name}}</h4>

                        </div>
                    </div>
                    @endforeach
                </div>
        </section>
@endsection
