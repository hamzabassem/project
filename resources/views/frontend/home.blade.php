@extends('frontend.layout.master')
@section('content')
    <section id="hero">
        <div class="hero-container">
            <h1>مكتبة ارجوان الالكترونية</h1>
            <h2>كل ما تحتاجة</h2>
            <a href="#about" class="btn-get-started">ابداء الان</a>
        </div>
    </section><!-- #hero -->

    <main id="main">
    <section id="about">
        <div class="container">
            <div class="row about-container">

                <div class="col-lg-6 content order-lg-1 order-2">
                    <h2 class="title">بعض الكلمات عن الموقع</h2>
                    <p>    تم عمل هذا الموقع من أجل الطلبة والقارئين
                        ليستطيعوا الوصول الي أهدافهم في وضعنا الحالي
                        ولطالما لا تحقق أهداف الطلبة والقارئين بدون الكتب
                        لذلك عملنا على هذا الموقع
                        من أجل تحقيق أهدافنا وأهداف جميع طلابنا وقارئينا الأعزاء
                        لتسهيل الوصول للكتب
                        ولتوصيل رغبتهم في المعرفة
                    </p>



                </div>



            </div>
        </div>
    </section><!-- #about -->

    <!--==========================
      Facts Section
    ============================-->


    <!--==========================
      Services Section
    ============================-->
    <section id="services">
        <div class="container wow fadeIn">
            <div class="section-header">
                <h3 class="section-title">خدماتنا</h3>
                <p class="section-description"></p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="box">
                        <div class="icon"><a href=""><i class="fa fa-desktop"></i></a></div>
                        <h4 class="title"><a href="">بيع كتب</a></h4>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="box">
                        <div class="icon"><a href=""><i class="fa fa-bar-chart"></i></a></div>
                        <h4 class="title"><a href="">اعلانات عن كتب جديده</a></h4>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="box">
                        <div class="icon"><a href=""><i class="fa fa-paper-plane"></i></a></div>
                        <h4 class="title"><a href="">استعارة الكتب</a></h4>

                    </div>
                </div>

            </div>
        </div></section><!-- #services -->

    <!--==========================
    Call To Action Section
    ============================-->

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio">
        <div class="container wow fadeInUp">
            <div class="section-header">
                <h3 class="section-title">اخر الكتب</h3>
                <p class="section-description"></p>
            </div> <div class="row">
                @foreach($post as $value)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="box">
                        <div class="box"><center>
                                <div class="icon"><a style = "color:#2dc997;" href="{{route('book',['id' => $value->id])}}"><i ><img style="width: 100px; height: 100px" src="{{asset('img/'.$value->img)}}"></i></a></div><br>
                                <h4 class="title"><a style = "color:#2dc997;" href="{{route('book',['id' => $value->id])}}"></a>{{$value->name}}</h4>
                            </center>
                        </div>
                    </div>
                </div>
                @endforeach
            </div><center><a href="{{route('books')}}" class="btn-show-more">اظهر المزيد</a></center></div>
    </section><!-- #portfolio -->


    </main>
    <section id="services">
        <div class="container wow fadeIn">
            <div class="section-header">
                <h3 class="section-title" id="contact" style="background-color: white">تواصل معنا</h3><br>
                <center><div class="row" >
                        <div class="container">
                            <form class="my" method="post" action="{{route('messages')}}" >
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control" id="usr" placeholder="الاسم" name="name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="pwd" placeholder="العائله" name="lastname">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="pwd" placeholder="رقم الهاتف" name="email">
                                </div>
                                <div class="form-group">

                                    <textarea class="form-control" rows="5" id="comment" placeholder="الموضوع" name="message"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="submit" class="submit-btn" value="ارسل">

                                </div>
                                <script>
                                    if ( window.history.replaceState ) {
                                        window.history.replaceState( null, null, window.location.href );
                                    }
                                </script>
                            </form>
                        </div>
                    </div></center>
            </div> </div>
    </section>
@endsection
