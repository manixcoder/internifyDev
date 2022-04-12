@guest
@php $layout = 'layouts.frontapp' @endphp
@endguest

@auth
@php $layout = 'layouts.shopperLayout.shopperFrontApp' @endphp
@endauth

@extends($layout)

@section('pageCss')

@stop

@section('content')
<div class="banner_bgsec text-center fw" >
        <div class="empowering-sec">
          <div class="empotext-cont">
            <div class="lgcontainer">
              <h2>EMPOWERING THE <span class="fw">creators of tomorrow</span></h2>
              <div class="btm_arrow clicktobtm">
                <a href="#iam_text_btm"><img src="images/btm-arrow.png" alt="arrow" /></a>
              </div>
            </div>                    
          </div>
        </div>       
      </div>
      <div class="iam_text_sec text-center fw" id="iam_text_btm">
        <div class="empowering-sec">                                          
          <div class="empotext-cont">
            <div class="lgcontainer">   
              <ul class="iam_text_cont text-center fw">
                <li><a href="./recruiterLeanding.html"> I AM AN<span class="fw">employer</span></a></li>
                <li><a href="./leanding-pg.html"> I AM A<span class="fw">student</span></span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
@endsection

@section('pageJs')
@stop