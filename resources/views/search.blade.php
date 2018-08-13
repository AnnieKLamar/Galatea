@extends('head_foot')
@section('title')
Galatea
@stop
@section('content')
<body>


          <!-- slider content -->
          <div id="x-corp-carousel" class="carousel slide hero-slide" data-ride="carousel">
            <!-- Indicators -->
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="img/slider/slide-1-new.jpg" alt="Hero Slide">
                    <!--Slide Image-->

                    <div class="container" align="center">
                        <div class="carousel-caption">
                          <div class="row">
                            <h1 class="text-center">Advanced Search</h1>
                                {{ Form::open(['url' => 'advanced_search_results']) }}
                                  <div class="col-12 col-md-12 mb-12 mb-md-0">
                                    {{ Form::text('title', null,  ['placeholder' => 'Title', 'class' => 'form-control form control -lg', 'tabindex' => '1'])  }}
                                  </div>
                                  <div class = "col-6 col-md-6 mb-12 mb-md-0" style="margin-top: 10px">
                                    {{ Form::text('author_fname', null,  ['placeholder' => 'Author First Name', 'class' => 'form-control form control -lg', 'tabindex' => '4'])  }}
                                  </div>
                                  <div class = "col-6 col-md-6 mb-12 mb-md-0" style="margin-top: 10px">
                                    {{ Form::text('author_lname', null,  ['placeholder' => 'Author Last Name', 'class' => 'form-control form control -lg', 'tabindex' => '5'])  }}
                                  </div>
                                  <div class = "col-6 col-md-6 mb-12 mb-md-0" style="margin-top: 10px">
                                    {{ Form::text('editor_fname', null,  ['placeholder' => 'Editor First Name', 'class' => 'form-control form control -lg', 'tabindex' => '6'])  }}
                                  </div>
                                  <div class = "col-6 col-md-6 mb-12 mb-md-0" style="margin-top: 10px">
                                    {{ Form::text('editor_lname', null,  ['placeholder' => 'Editor Last Name', 'class' => 'form-control form control -lg', 'tabindex' => '7'])  }}
                                  </div>
                                  <div class="col-12 col-md-12 mb-12 mb-md-0" style="margin-top: 10px">
                                      {{ Form::text('keywords', null,  ['placeholder' => 'Keywords (Semicolon Separated)', 'class' => 'form-control form control -lg', 'tabindex' => '2'])  }}
                                  </div>

                                  <div class = "col-6 col-md-6 mb-12 mb-md-0" style="margin-top: 10px">
                                    {{ Form::select('language',  ['E' => 'English', 'F' => 'French', 'G' => 'German', 'I' => 'Italian'], 'E', ['class' => 'btn btn-primary btn-block btn-lg dropdown-toggle'])  }}
                                  </div>
                                  <div class = "col-6 col-md-6 mb-12 mb-md-0" style="margin-top: 10px">
                                    {{ Form::text('year_of_publication', null,  ['placeholder' => 'Year of Publication', 'class' => 'form-control form control -lg', 'tabindex' => '8'])  }}
                                  </div>
                                  <div class="col-12 col-md-12 mb-12 mb-md-0" style="margin-top: 10px">
                                    {{ Form::text('publisher', null,  ['placeholder' => 'Publisher', 'class' => 'form-control form control -lg', 'tabindex' => '9'])  }}
                                  </div>
                                  <div class="col-12 col-md-12" style="margin-top: 35px">
                                      {{ Form::submit('Search', ['class' => 'btn btn-block btn-lg btn-primary btn-dark text-dark bg-black'])}}
                                  </div>
                              {{ Form::close()}}


                          </div>
                        </div>
                    </div>
                </div>
                <!--.item-->


                <!--.item-->
            </div>

        </div>
                 <!-- /end slider section -->
               </body>
@stop
