<!DOCTYPE html>
<!--
Landing page based on Pratt: http://blacktie.co/demo/pratt/
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SGE&MAK HEALTHCARE, INC.">
    <meta name="author" content="SGE&MAK HEALTHCARE, INC.">

    <meta property="og:title" content="SGE&MAK HEALTHCARE, INC." />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="SGE&MAK HEALTHCARE, INC. - {{ trans('adminlte_lang::message.landingdescription') }}" />
    <meta property="og:sitename" content="sgehealthcare.com" />
    <meta property="og:url" content="http://www.sgehealthcare.com" />

    <title>SGE&MAK HEALTHCARE, INC.</title>

    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

</head>

<body data-spy="scroll" data-offset="0" data-target="#navigation">

<div id="app">
    <!-- Fixed navbar -->
    <div id="navigation" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><b>SGE&MAK HEALTHCARE, INC.</b></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#home" class="smoothScroll">{{ trans('adminlte_lang::message.home') }}</a></li>
                    <li><a href="#desc" class="smoothScroll">Services</a></li>
                    <li><a href="#showcase" class="smoothScroll">{{ trans('adminlte_lang::message.showcase') }}</a></li>
                    <li><a href="#contact" class="smoothScroll">{{ trans('adminlte_lang::message.contact') }}</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">{{ trans('adminlte_lang::message.login') }}</a></li>
                        <!-- <li><a href="{{ url('/register') }}">{{ trans('adminlte_lang::message.register') }}</a></li> -->
                    @else
                        <li><a href="{{ url('/home') }}">{{ Auth::user()->name }}</a></li>
                    @endif
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>


    <section id="home" name="home"></section>
    <div id="headerwrap">
        <div class="container">
            <div class="row centered">
                <div class="col-lg-12">
                    <h1 style="font-size: 60px !important;">Welcome to <b><a href="https://www.sgehealthcare.com"> SGE&MAK Healthcare, Inc.</a></b></h1>
                    <h4>&nbsp;</h4>
                    <h3><span>A <a href="#"><i>biomedical engineering</i></a> company and is solely dedicated</span></h3>
                    <h3><span>in integrated biomedical engineering <a href="#"><i>maintenance</i></a> and <a href="#"> <i>management </i></a>services.</span></h3>
                    <h4>&nbsp;</h4>
                </div>
            </div>
            <div class="row centered">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <img class="img-responsive" src="{{ asset('/img/app-bg.png') }}" alt="">
                </div>
                <div class="col-lg-2"></div>
            </div>
        </div> <!--/ .container -->
    </div><!--/ #headerwrap -->


    <section id="desc" name="desc"></section>
    <!-- INTRO WRAP -->
    <div id="intro">
        <div class="container">
            <div class="row centered">
                <h1>Our Core Services</h1>
                <br>
                <br>
                <div class="row">
                    <div class="col-lg-4">
                        <img src="{{ asset('/img/intro01.png') }}" alt="">
                        <h3>Fully Outsourced BioMedical Engineering Solutions</h3>
                    </div>
                    <div class="col-lg-4">
                        <img src="{{ asset('/img/intro02.png') }}" alt="">
                        <h3>Asset Management Programs and Condition Reporting</h3>
                    </div>
                    <div class="col-lg-4">
                        <img src="{{ asset('/img/intro03.png') }}" alt="">
                        <h3>Planned Preventive Maintenance & Calibration Programs</h3>
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-lg-4">
                        <img src="{{ asset('/img/intro03.png') }}" alt="">
                        <h3>Management of Hospital Biomedical Departments</h3>
                    </div>
                    <div class="col-lg-4">
                        <img src="{{ asset('/img/intro01.png') }}" alt="">
                        <h3>Breakdown/Corrective Maintenance Programs (Repairs)</h3>
                    </div>
                    <div class="col-lg-4">
                        <img src="{{ asset('/img/intro02.png') }}" alt="">
                        <h3>Asset Resource Management System (Software)</h3>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <hr>
            <div class="row centered">
                <h1>Other Value-Added Services</h1>
                <br>
                <br>
                <div class="row">
                    <div class="col-md-3">
                        <span><i class="fa fa-calendar-check-o fa-5x"></i></span>
                        <h3>Spare Part Planning and Procurement Supports</h3>
                    </div>
                    <div class="col-md-3">
                        <span><i class="fa fa-diamond fa-5x"></i></span>
                        <h3>Refurbish of Medical Equipment according to the original specification of the manufacturers</h3>
                    </div>
                    <div class="col-md-3">
                        <span><i class="fa fa-share-alt-square fa-5x"></i></span>
                        <h3>End-User Training Supports</h3>
                    </div>
                    <div class="col-md-3">
                        <span><i class="fa fa-puzzle-piece fa-5x"></i></span>
                        <h3>Advisory Services / Equipment Condition Appraisals</h3>
                    </div>
                </div>
                <br><br>
            </div>
            <br><br>
            <hr>
            <div class="row centered">
                <h1>Our Valued Customers</h1>
                <br>
                <br>
                <div class="row centered">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-4" style="text-align: left;">
                        <div class="row">
                            <h4> &#10004; &nbsp; University of Santo Tomas Hospital</h4>
                        </div>
                        <div class="row">
                            <h4> &#10004; &nbsp; Davao Doctors Hospital</h4>
                        </div>
                        <div class="row">
                            <h4> &#10004; &nbsp; Davao Medical School Foundation, Inc. </h4>
                        </div>
                        <div class="row">
                            <h4> &#10004; &nbsp; Brokenshire Memorial Hospital</h4>
                        </div>
                        <div class="row">
                            <h4> &#10004; &nbsp; Ma. Reyna Xavier University Hospital </h4>
                        </div>
                        <div class="row">
                            <h4> &#10004; &nbsp; St. Elizabeth Hospital</h4>
                        </div>
                        <div class="row">
                            <h4> &#10004; &nbsp; Western Visayas Sanitarium. </h4>
                        </div>
                        <div class="row">
                            <h4> &#10004; &nbsp; Aquinas University Hospital Foundation, Inc.</h4>
                        </div>
                    </div>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-4" style="text-align: left;">
                        <div class="row">
                            <h4> &#10004; &nbsp; MCU-FDT Medical Foundation </h4>
                        </div>
                        <div class="row">
                            <h4> &#10004; &nbsp; Gingoog Sanitarium & Hospital </h4>
                        </div>
                        <div class="row">
                            <h4> &#10004; &nbsp; United Doctors Medical Center, Inc. </h4>
                        </div>
                        <div class="row">
                            <h4> &#10004; &nbsp; Metro North Medical Center </h4>
                        </div>
                        <div class="row">
                            <h4> &#10004; &nbsp; Manila East Medical Center </h4>
                        </div>
                        <div class="row">
                            <h4> &#10004; &nbsp; Cardinal Santos Medical Center </h4>
                        </div>
                        <div class="row">
                            <h4> &#10004; &nbsp; Paranaque Doctors Hospital </h4>
                        </div>
                        
                    </div>
                    <div class="col-sm-1"></div>
                </div>
                <br><br>
            </div>
            <br>
            <hr>            
        </div> <!--/ .container -->
    </div><!--/ #introwrap -->

    <!-- FEATURES WRAP -->
    <div id="features">
        <div class="container">
            <div class="row">
                <h1 class="centered">{{ trans('adminlte_lang::message.whatnew') }}</h1>
                <br>
                <br>
                <div class="col-lg-6 centered">
                    <img class="centered" src="{{ asset('/img/mobile.png') }}" alt="">
                </div>

                <div class="col-lg-6">
                    <h3>{{ trans('adminlte_lang::message.features') }}</h3>
                    <br>
                    <!-- ACCORDION -->
                    <div class="accordion ac" id="accordion2">
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                                    {{ trans('adminlte_lang::message.design') }}
                                </a>
                            </div><!-- /accordion-heading -->
                            <div id="collapseOne" class="accordion-body collapse in">
                                <div class="accordion-inner">
                                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                </div><!-- /accordion-inner -->
                            </div><!-- /collapse -->
                        </div><!-- /accordion-group -->
                        <br>

                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                                    {{ trans('adminlte_lang::message.retina') }}
                                </a>
                            </div>
                            <div id="collapseTwo" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                </div><!-- /accordion-inner -->
                            </div><!-- /collapse -->
                        </div><!-- /accordion-group -->
                        <br>

                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                                    {{ trans('adminlte_lang::message.support') }}
                                </a>
                            </div>
                            <div id="collapseThree" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                </div><!-- /accordion-inner -->
                            </div><!-- /collapse -->
                        </div><!-- /accordion-group -->
                        <br>

                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
                                    {{ trans('adminlte_lang::message.responsive') }}
                                </a>
                            </div>
                            <div id="collapseFour" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                </div><!-- /accordion-inner -->
                            </div><!-- /collapse -->
                        </div><!-- /accordion-group -->
                        <br>
                    </div><!-- Accordion -->
                </div>
            </div>
        </div><!--/ .container -->
    </div><!--/ #features -->


    <section id="showcase" name="showcase"></section>
    <div id="showcase">
        <div class="container">
            <div class="row">
                <h1 class="centered">{{ trans('adminlte_lang::message.screenshots') }}</h1>
                <br>
                <div class="col-lg-8 col-lg-offset-2">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="{{ asset('/img/item-01.png') }}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{ asset('/img/item-02.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
        </div><!-- /container -->
    </div>


    <section id="contact" name="contact"></section>
    <div id="footerwrap">
        <div class="container">
            <div class="col-lg-5">
                <h3>{{ trans('adminlte_lang::message.address') }}</h3>
                <p>
                    Room 602-A, Culmat Bldg.,<br/>
                    #1270 E. Rodriguez Sr., <br/>
                    Avenue, Quezon City<br/>
                    1102 Philippines
                </p>
                <p>Tel      : (632) 616 9867 / 577 7391 <br>
                   Mobile      : 0998 561 5443 / 0917 568 0760 <br>
                   Email       : sgecustomerservice@yahoo.com.ph</p>
            </div>

            <div class="col-lg-7">
                <h3>Drop Us A Message For Inquiry</h3>
                <br>
                <form role="form" action="{{ url('inquiry') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="name" name="name" class="form-control" style="color: #000 !important;" id="name1" placeholder="{{ trans('adminlte_lang::message.yourname') }}" maxlength="100">
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" class="form-control" style="color: #000 !important;" id="email1" placeholder="{{ trans('adminlte_lang::message.enteremail') }}" maxlength="100">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" style="color: #000 !important;" name="message" rows="3" maxlength="200"></textarea>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-large btn-success">{{ trans('adminlte_lang::message.submit') }}</button>
                </form>
            </div>
        </div>
    </div>
    <div id="c">
        <div class="container">
            <p>
                <a href="https://github.com/acacha/adminlte-laravel"></a><b>SGE&MAK HEALTHCARE, INC.</b></a><br/>
                <a href="http://www.sgehealthcare.com">www.sgehealthcare.com</a> is powered by <a href="https://nelsonmelecio.com">nelsonmelecio.com</a>
                <br><strong>Copyright &copy; 2017</strong>
            </p>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('/js/app.js') }}"></script>
<script src="{{ asset('/js/smoothscroll.js') }}"></script>
<script>
    $('.carousel').carousel({
        interval: 3500
    })
</script>
</body>
</html>
