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
                    @foreach($book as $value)
                    <div class="wow fadeInUp my-cll" data-wow-delay="0.2s">
                        <div class="box">
                            <div class=""><img style="width: 100px; height: 100px" src="{{asset('img/'.$value->img)}}"></div><br>
                            <h4 class="title">{{$value->name}}</h4>
                            <p>{{$value->description}}</p>
            </div>
                    </div>
                        @endforeach
                </div>
        </section>
@endsection
