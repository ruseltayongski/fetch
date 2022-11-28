 

  <x-layout :user="$user">
   <!-- body -->
   <body class="main-layout">
      @include('sweetalert::alert')
   
      <!-- banner -->
     
      <!-- end banner -->
      <!-- team -->      

    {{--   <div class="team">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-5">
                  <div class="team_img">
                     <figure><img src="images/sco.png" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-6 offset-md-1">
                  <div class="titlepage">
                     <h2>We Are A Dynamic Team Of Seo Agency</h2>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod enim tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                     <h3>PROJECTS COMPLETED</h3>
                     <strong>1165 <span class="yellow">+</span></strong>
                     <a class="read_more" href="#"> Read More</a>
                  </div>   
               </div>
            </div>
         </div> --}}
         <!-- team -->
         <!-- services -->
         @auth
            
         <div class="services">
            <div class="container">
               <div class="row">
                  <div class="col-md-10 offset-md-1">
                     <div class="titlepage">
                        <h2>Information Management System</h2>
                       {{--  <p>dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p> --}}
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-4">
                     <div id="serv_hover"  class="services_box">
                        <i><img src="images/service1.png" alt="#"/></i>
                        <h3>Manage Profile</h3>
                        <a class="right_irro" href="{{ asset('users').'/'.$user->id.'/edit' }}"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div id="serv_hover" class="services_box">
                        <i><img src="images/service2.png" alt="#"/></i>
                        <h3>Request Document</h3>
                        <a class="right_irro" href="/documents"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div id="serv_hover" class="services_box">
                        <i><img src="images/service3.png" alt="#"/></i>
                        <h3>Set Appointment</h3>
                        <a class="right_irro" href="/full-calender"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                     </div>
                  </div>

                  
                     {{-- <div class="col-md-4">
                        <div id="serv_hover" class="services_box">
                           <i><img src="images/service3.png" alt="#"/></i>
                           <h3>Payment Service</h3>
                           <a class="right_irro" href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div id="serv_hover" class="services_box">
                           <i><img src="images/service3.png" alt="#"/></i>
                           <h3>Transactions</h3>
                           <a class="right_irro" href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                     </div> --}}
               </div>
            </div>
         </div>
         @else 
         <section class="banner_main">
            <div id="banner1" class="carousel slide" data-ride="carousel">
               <ol class="carousel-indicators">
                  <li data-target="#banner1" data-slide-to="0" class="active"></li>
                  <li data-target="#banner1" data-slide-to="1"></li>
                  <li data-target="#banner1" data-slide-to="2"></li>
                  <li data-target="#banner1" data-slide-to="3"></li>
                  <li data-target="#banner1" data-slide-to="4"></li>
               </ol>
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container">
                        <div class="carousel-caption">
                           <div class="">
                              <div class="col-md-6">
                                 <div class="text_img">
                                    <figure>
                                       <img src="images/pct.png" alt="#"/>
                                     {{--   <h3>01</h3> --}}
                                    </figure>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="carousel-caption">
                           <div class="row d_flex">
                              <div class="col-md-6">
                                 <div class="text_img">
                                    <figure>
                                       <img src="images/pct.png" alt="#"/>
                                    </figure>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="carousel-caption">
                           <div class="row d_flex">
                              <div class="col-md-6">
                                 <div class="text_img">
                                    <figure>
                                       <img src="images/pct.png" alt="#"/>
                                    </figure>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="carousel-caption">
                           <div class="row d_flex">
                              <div class="col-md-6">
                                 <div class="text_img">
                                    <figure>
                                       <img src="images/pct.png" alt="#"/>
                                    </figure>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  {{-- <div class="carousel-item">
                     <div class="container">
                        <div class="carousel-caption">
                           <div class="row d_flex">
                              <div class="col-md-6">
                              </div>
                              <div class="col-md-6">
                                 <div class="text_img">
                                    <figure>
                                       <img src="images/pct.png" alt="#"/>
                                    </figure>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div> --}}
               </div>
               <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
               <i class="fa fa-chevron-left" aria-hidden="true"></i>
               </a>
               <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
               <i class="fa fa-chevron-right" aria-hidden="true"></i>
               </a>
            </div>
         </section>
         @endauth
   </body>
</x-layout>

