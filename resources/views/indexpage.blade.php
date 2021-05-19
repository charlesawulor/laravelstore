
<!-- left sticky stuffs end -->
@extends('layouts.app1')

@section('content')
<main>
<div class="container">
	

@if(count($applications) > 0)	
	@foreach($applications as $application)

    <div class="heading">
		<div class="head_slider">
		    {{$application->content}}
			<span>Inviting Applications in</span>
		</div>
	</div>
	
	<div class="clin_rea"> {{$application->course}}</div>
	@endforeach
	@endif	




	<div class="clin_re_form">
		<form method="" action="">
			<div class="form_set_select">
				<select>
					<option value="" disabled selected>Select City</option>
					<option>demo</option>
					<option>test</option>
					<option>drop</option>
				</select>
				<i class="fa fa-sort-down"></i>
			</div>

			<div class="form_set_select">
				<select>
					<option value="" disabled selected>Select Course</option>
					<option>demo</option>
					<option>test</option>
					<option>drop</option>
				</select>
				<i class="fa fa-sort-down"></i>
			</div>

			<div class="search_btn"><img src="Images/search_icon.png"><input type="submit" name="submit" value="Search"></div>
		</form>
	</div>

	<div class="d-flex addmisson_whole_cont">

	@if(count($admissions) > 0)

		<div class="admis_opn_text">
		@foreach($admissions as $admission)
			<div class="admis_opn_cont">
				<div class="admis_opn_con_text">{{$admission->status}}</div>
				<div class="admis_opn_year">{{$admission->session}}</div>
			</div>
			@endforeach
		</div>


		@endif
		<div class="clinic_re_pages_cont">
			<ul>

			@if(count($admissioncourses) > 0 )
	         @foreach($admissioncourses as $admissioncourse)	
				<a href="clinical-research.html"><i class="fa fa-caret-right"></i><li>{{$admissioncourse->course}}</li></a>
				
				@endforeach
		      @endif


			</ul>
		</div>
	</div>

	<div class="id_call_scroller">
		<div class="scrooller_icon">.</a>
	</div>

</div>

<!-- popup form -->
<div class="fixed_btn_quick_inquery">
	<div type="button" class="btn btn-primary popup_form" data-toggle="modal" data-target="#myModal">Quick Query</div>
</div>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Modal body..
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<!-- popup form end -->

</main>


<section id="first">
	<div class="container">
		<div class="d-flex">
			<div class="why_left_cont">
				<div class="why_icri_title">
					Why <span>icri</span>
				</div>

				@if(count($whyicricontents) > 0)	
					@foreach($whyicricontents as $whyicricontent)
				<div class="why_icri_dis">
				              {{$whyicricontent->content}}
				</div>
				@endforeach
			@endif	

				<a href=""><button class="read_more">read<span> more</span></button></a>
			</div>
			<div class="why_right_cont row">
			@if(count($whyicris) > 0)	
					@foreach($whyicris as $whyicri)
				<div class="col-lg-6"><span>{{$whyicri->value}}</span><p>{{$whyicri->title}}</p></div>
			@endforeach
			@endif		

			</div>
		</div>
	</div>
</section>

<section class="second">
	<div class="container">
		<div class="row">
			<ul class="nav nav-tabs d-block col-lg-3" role="tablist">
			  <li class="nav-item">
			    <a class="nav-link active" href="#content_one" role="tab" data-toggle="tab" id="tab" data-modal="tab" aria-selected="true">Anantapur Campus<i class="fa fa-caret-right"></i></a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="#content_two" role="tab" data-toggle="tab" aria-selected="false">Bhopal Campus<i class="fa fa-caret-right"></i></a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="#content_three" role="tab" data-toggle="tab" aria-selected="false">Bangalore Campus(content not availabe)<i class="fa fa-caret-right"></i></a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="#content_four" id="tab" role="tab" data-toggle="tab" aria-selected="false">Delhi Campus<i class="fa fa-caret-right"></i></a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="#content_five" role="tab" id="tab" data-toggle="tab" aria-selected="false">Dehradun Campus<i class="fa fa-caret-right"></i></a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="#content_six" role="tab" id="tab" data-toggle="tab" aria-selected="false">Jaipur Campus<i class="fa fa-caret-right"></i></a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="#content_seven" id="tab" role="tab" data-toggle="tab" aria-selected="false">Mumbai Campus<i class="fa fa-caret-right"></i></a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="#content_eight" id="tab" role="tab" data-toggle="tab" aria-selected="false">Mangaluru Campus<i class="fa fa-caret-right"></i></a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="#content_nine" id="tab" role="tab" data-toggle="tab" aria-selected="false">Pune Campus<i class="fa fa-caret-right"></i></a>
			  </li>
			</ul>

			<!-- Tab panes -->
			<div class="tab-content tab_cont_data">
		    <div role="tabpanel" class="tab-pane in active" id="content_one">
			    <div class="campus">
			  		<div class="camp_title">
			  			<p>Visit</p> <span>Campus</span>
			  		</div>


				@if(count($anantapurcampuses) > 0)	
					@foreach($anantapurcampuses as $anantapurcampus)    
			  		<div class="camp_cont d-flex">
			  			<img src="/icriindia/storage/app/public/{{$anantapurcampus->image}}" class="img-fluid">
			  			<div class="camp_cont_disc">
			  				<div class="camp_cont_disc_title">
							  {{$anantapurcampus->title}}
			  				</div>
			  				<div class="camp_cont_disc_sub_title">
			  					
			  				</div>
			  				<div class="camp_cont_disc_disc">
			  				{{$anantapurcampus->about}}
			  				</div>
			  				<a href=""><button class="read_more">read<span> more</span></button></a>
			  			</div>
			  		</div>
					  @endforeach
			@endif


			  	</div>
		 </div>


			  <div role="tabpanel" class="tab-pane fade" id="content_two">
			        
			  <div class="campus">
			  		<div class="camp_title">
			  			<p>Visit</p> <span>Campus</span>
			  		</div>


		@if(count($bhopalcampuses) > 0)	
					@foreach($bhopalcampuses as $bhopalcampus)    
			  		<div class="camp_cont d-flex">
			  			<img src="/icriindia/storage/app/public/{{$bhopalcampus->image}}" class="img-fluid">
			  			<div class="camp_cont_disc">
			  				<div class="camp_cont_disc_title">
							  {{$bhopalcampus->title}}
			  				</div>
			  				<div class="camp_cont_disc_sub_title">
			  					
			  				</div>
			  				<div class="camp_cont_disc_disc">
			  				{{$bhopalcampus->about}}
			  				</div>
			  				<a href=""><button class="read_more">read<span> more</span></button></a>
			  			</div>
			  		</div>
					  @endforeach
			@endif



			  	</div>
			  
			  
			  
			  
			  </div>





			    <div role="tabpanel" class="tab-pane fade" id="content_three">
			  
			      <div class="campus">
			  		<div class="camp_title">
			  			<p>Visit</p> <span>Campus</span>
			  		</div>

			  		<div class="camp_cont d-flex">
			  			<img src="Images/campus.jpg" class="img-fluid">
			  			<div class="camp_cont_disc">
			  				<div class="camp_cont_disc_title">
			  					Anantapur Campus
			  				</div>
			  				<div class="camp_cont_disc_sub_title">
			  					ICRI-Best Innovation University
			  				</div>
			  				<div class="camp_cont_disc_disc">
			  					B.E.S.T Innovation University, or by its full name Bharatiya Engineering Science and Technology Innovation University, is a private university situated in Anantapur, Andhra Pradesh, India. ICRI has joined hands with the university with an aim to expand learning horizon for the students. Students can build their careers with specialized BBA, MBA, BSc, MSc programmes in the new-age industries of this decade ie Clinical Research, Healthcare, Logistics, Aviation, AI, Psychology & Nutrition.s
			  				</div>
			  				<a href=""><button class="read_more">read<span> more</span></button></a>
			  			</div>
			  		</div>

			  	</div>
			  
			  
			  </div>

			  <div role="tabpanel" class="tab-pane fade" id="content_four">
			  
			  <div class="campus">
			  		<div class="camp_title">
			  			<p>Visit</p> <span>Campus</span>
			  		</div>

			  	  
					  @if(count($delhicampuses) > 0)	
					@foreach($delhicampuses as $delhicampus)    
			  		<div class="camp_cont d-flex">
			  			<img src="/icriindia/storage/app/public/{{$delhicampus->image}}" class="img-fluid">
			  			<div class="camp_cont_disc">
			  				<div class="camp_cont_disc_title">
							  {{$delhicampus->title}}
			  				</div>
			  				<div class="camp_cont_disc_sub_title">
			  					
			  				</div>
			  				<div class="camp_cont_disc_disc">
			  				{{$delhicampus->about}}
			  				</div>
			  				<a href=""><button class="read_more">read<span> more</span></button></a>
			  			</div>
			  		</div>
					  @endforeach
			     @endif

			  	</div>
			  
			  
			  
			  </div>


		    <div role="tabpanel" class="tab-pane fade" id="content_five">
			  
			  <div class="campus">
			  		<div class="camp_title">
			  			<p>Visit</p> <span>Campus</span>
			  		</div>

			  		
					  
			   @if(count($dehraduncampuses) > 0)	
					@foreach($dehraduncampuses as $dehraduncampus)    
			  		<div class="camp_cont d-flex">
			  			<img src="/icriindia/storage/app/public/{{$dehraduncampus->image}}" class="img-fluid">
			  			<div class="camp_cont_disc">
			  				<div class="camp_cont_disc_title">
							  {{$dehraduncampus->title}}
			  				</div>
			  				<div class="camp_cont_disc_sub_title">
			  					
			  				</div>
			  				<div class="camp_cont_disc_disc">
			  				{{$dehraduncampus->about}}
			  				</div>
			  				<a href=""><button class="read_more">read<span> more</span></button></a>
			  			</div>
			  		</div>
					  @endforeach
			     @endif



			  	</div>
			  
			  
			  </div>


			  <div role="tabpanel" class="tab-pane fade" id="content_six">
			       

			  <div class="campus">
			  		<div class="camp_title">
			  			<p>Visit</p> <span>Campus</span>
			  		</div>

				 @if(count($jaipurcampuses) > 0)	
					@foreach($jaipurcampuses as $jaipurcampus)    
			  		<div class="camp_cont d-flex">
			  			<img src="/icriindia/storage/app/public/{{$jaipurcampus->image}}" class="img-fluid">
			  			<div class="camp_cont_disc">
			  				<div class="camp_cont_disc_title">
							  {{$jaipurcampus->title}}
			  				</div>
			  				<div class="camp_cont_disc_sub_title">
			  					
			  				</div>
			  				<div class="camp_cont_disc_disc">
			  				{{$jaipurcampus->about}}
			  				</div>
			  				<a href=""><button class="read_more">read<span> more</span></button></a>
			  			</div>
			  		</div>
					  @endforeach
			     @endif




			  	</div>
			  
			  </div>


			  <div role="tabpanel" class="tab-pane fade" id="content_seven">
			  
			  <div class="campus">
			  		<div class="camp_title">
			  			<p>Visit</p> <span>Campus</span>
			  		</div>


			  		 @if(count($mumbaicampuses) > 0)	
					@foreach($mumbaicampuses as $mumbaicampus)    
			  		<div class="camp_cont d-flex">
			  			<img src="/icriindia/storage/app/public/{{$mumbaicampus->image}}" class="img-fluid">
			  			<div class="camp_cont_disc">
			  				<div class="camp_cont_disc_title">
							  {{$mumbaicampus->title}}
			  				</div>
			  				<div class="camp_cont_disc_sub_title">
			  					
			  				</div>
			  				<div class="camp_cont_disc_disc">
			  				{{$mumbaicampus->about}}
			  				</div>
			  				<a href=""><button class="read_more">read<span> more</span></button></a>
			  			</div>
			  		</div>
					  @endforeach
			     @endif

			  	</div>

                </div>


				  <div role="tabpanel" class="tab-pane fade" id="content_eight">
			  
			        <div class="campus">
			  		<div class="camp_title">
			  			<p>Visit</p> <span>Campus</span>
			  		</div>


			  		 @if(count($mangalurucampuses) > 0)	
					@foreach($mangalurucampuses as $mangalurucampus)    
			  		<div class="camp_cont d-flex">
			  			<img src="/icriindia/storage/app/public/{{$mangalurucampus->image}}" class="img-fluid">
			  			<div class="camp_cont_disc">
			  				<div class="camp_cont_disc_title">
							  {{$mangalurucampus->title}}
			  				</div>
			  				<div class="camp_cont_disc_sub_title">
			  					
			  				</div>
			  				<div class="camp_cont_disc_disc">
			  				{{$mangalurucampus->about}}
			  				</div>
			  				<a href=""><button class="read_more">read<span> more</span></button></a>
			  			</div>
			  		</div>
					  @endforeach
			     @endif

			  	</div>

               </div>

				  <div role="tabpanel" class="tab-pane fade" id="content_nine">
			  
			  <div class="campus">
			  		<div class="camp_title">
			  			<p>Visit</p> <span>Campus</span>
			  		</div>


			  		 @if(count($punecampuses) > 0)	
					@foreach($punecampuses as $punecampus)    
			  		<div class="camp_cont d-flex">
			  			<img src="/icriindia/storage/app/public/{{$punecampus->image}}" class="img-fluid">
			  			<div class="camp_cont_disc">
			  				<div class="camp_cont_disc_title">
							  {{$punecampus->title}}
			  				</div>
			  				<div class="camp_cont_disc_sub_title">
			  					
			  				</div>
			  				<div class="camp_cont_disc_disc">
			  				{{$punecampus->about}}
			  				</div>
			  				<a href=""><button class="read_more">read<span> more</span></button></a>
			  			</div>
			  		</div>
					  @endforeach
			     @endif

			  	</div>





			  
			  </div>
			</div>
		</div>
	</div>
</section>


<section class="third">
	<div class="container d-flex">
		<div class="legacy_title">The<span> Legacy</span></div>
		<div class="legacy_content row">

		@if(count($legacies) > 0)	
					@foreach($legacies as $legacy)
			<div class="col-lg-4">
				<div class="legacy_content_digit">{{$legacy->volume}}</div>
				<div class="legacy_content_digit_disc">{{$legacy->topic}}</div>
			</div>
			@endforeach
				@endif	
		</div>
	</div>
</section>

<section class="reseach_spot_light">
	<div class="container">
		<div class="d-flex justify-content-between row">

			<div class="res_spot col-lg-4">
				<div class="rea_txt"><b>Research</b> spotlight</div>
				<div class="rea_disc">1260 management case-studies covering domains like Strategy, Marketing, Economics & Finance and others, bought across 99 countries.</div>
				<div class="resea_pages">


				@if(count($researches) > 0)	
					@foreach($researches as $research)
					<div class="res_pg_ele d-flex show">
						<i class="fa fa-caret-right" aria-hidden="true"></i><a class="rese_inner_page active">{{$research->type}}</a>
					</div>
					@endforeach
					@endif

				</div>
			</div>

			
			<div class="res_cont col-lg-4">

			@if(count($publications) > 0)	
					@foreach($publications as $publication)
				<div class="res_cont_wrap">
					<span>{{$publication->quantity}}</span>{{$publication->title}}
				</div>
				@endforeach
				@endif
				
			</div>
			

			<div class="resea_slider col-lg-4">

				<div class="owl-slider">
					<div id="carousels" class="owl-carousel">

					@if(count($researchpics) > 0)	
					@foreach($researchpics as $researchpic)
						<div class="item">
							<img style="width:100%;height:300px" src="/icriindia/storage/app/public/{{$researchpic->image}}">
							
						</div>
						@endforeach
				@endif

					
					</div>
				<a class="view_all_re">view all research</a>
			</div>

		</div>
	</div>
</section>

<section class="recruters">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="legacy_title">Associated<span> Recruiters</span></div>
				<div class="slider_elements">
					<a class="view_element_txt">View All Recruiters</a>
					<div class="view_element_elemt">
					  <i class="fa fa-long-arrow-alt-left"></i>
					  <i class="fa fa-long-arrow-alt-right"></i>
					</div>
				</div>
			</div>
			<div class="col-lg-6 recruters_slider_images">
				<div class="row">
					<div class="owl-slider">
					<div id="carousel" class="owl-carousel">

					@if(count($recruiters) > 0)	
					@foreach($recruiters as $recruiter)
						<div class="item">
							<img src="/icriindia/storage/app/public/{{$recruiter->image}}">
							<img src="/icriindia/storage/app/public/{{$recruiter->image1}}">
							<img src="/icriindia/storage/app/public/{{$recruiter->image2}}">
						</div>
						@endforeach
				@endif
					
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="event_and_news">
	<div class="container">
		<ul class="nav nav-tabs d-flex justify-content-between">
    		<li class="active"><a  class="active" id="news_tab" data-toggle="tab" href="#home">News & Media</a></li>
	    	<li><a data-toggle="tab" href="#menu1">Life @ ICRI</a></li>
	    	<li><a data-toggle="tab" href="#menu2">ICRI Network</a></li>
	    	<li><a data-toggle="tab" href="#menu3">Awards & Accolades</a></li>
	  	</ul>
	  	<div class="tab-content new_and_events_tab">
		  <div id="home" class="tab-pane fade in active show">

		    	<div class="row">
				@if(count($events) > 0)	
					@foreach($events as $event)
				     <div class="col-lg-4">
				      <div class="position-relative">
					      <img src="/icriindia/storage/app/public/{{$event->image}}" class="img-fluid">
					      <a class="image_content" href="{{$event->link}}">
					      	<div class="image_top_cont d-flex justify-content-between">
					      		<div class="events_link" href="#">Event</div>
					      		<i class="fa fa-long-arrow-alt-right" aria-hidden="true"></i>
					      	</div>
					      	<div class="image_bottom_cont">
					      		<strong>{{$event->title}}</strong>
					      	</div>
					      </a>
				      </div>
				  	</div>
					  @endforeach
				@endif
					
			    </div>

		    </div>

		    <div id="menu1" class="tab-pane fade row">
			   
			@if(count($lifeaticris) > 0)	
					@foreach($lifeaticris as $lifeaticri)
				     <div class="col-lg-4">
				      <div class="position-relative">
					      <img style="height:270px;width:100%" src="/icriindia/storage/app/public/{{$lifeaticri->image}}" class="img-fluid">
					      <a class="image_content" href="#">
					      	<div class="image_top_cont d-flex justify-content-between">
					      		<div class="events_link" href="#">Life @ ICRI</div>
					      		<i class="fa fa-long-arrow-alt-right" aria-hidden="true"></i>
					      	</div>
					      	<div class="image_bottom_cont">
					      		<strong>{{$lifeaticri->title}}</strong>
					      	</div>
					      </a>
				      </div>
				  	</div>
					  @endforeach
				@endif
					
		    </div>
		    
		    <div id="menu2" class="tab-pane fade row">
		    
			@if(count($icrinetworks) > 0)	
					@foreach($icrinetworks as $icrinetwork)
				     <div class="col-lg-4">
				      <div class="position-relative">
					      <img style="height:270px;width:100%" src="/icriindia/storage/app/public/{{$icrinetwork->image}}" class="img-fluid">
					      <a class="image_content" href="#">
					      	<div class="image_top_cont d-flex justify-content-between">
					      		<div class="events_link" href="#">ICRI Network</div>
					      		<i class="fa fa-long-arrow-alt-right" aria-hidden="true"></i>
					      	</div>
					      	<div class="image_bottom_cont">
					      		<strong>{{$icrinetwork->title}}</strong>
								  
					      	</div>
					      </a>
				      </div>
				  	</div>
					  @endforeach
				@endif



		    </div>

		    <div id="menu3" class="tab-pane fade row">
		    	
			@if(count($awards) > 0)	
					@foreach($awards as $award)
				     <div class="col-lg-4">
				      <div class="position-relative">
					      <img style="height:270px;width:100%" src="/icriindia/storage/app/public/{{$award->image}}" class="img-fluid">
					      <a class="image_content" href="#">
					      	<div class="image_top_cont d-flex justify-content-between">
					      		<div class="events_link" href="#">ICRI Network</div>
					      		<i class="fa fa-long-arrow-alt-right" aria-hidden="true"></i>
					      	</div>
					      	<div class="image_bottom_cont">
					      		
								  <strong>{{$award->title}}</strong><span>{{$award->content}}</span>
					      	</div>
					      </a>
				      </div>
				  	</div>
					  @endforeach
				@endif


		    </div>

		</div>
	</div>
</section>
<section class="hostel_facilities">
	<div class="container d-flex">
		<div class="right_hostel_content col-lg-6">
			Hostel<br>Facility
		</div>
		<div class="left_hostel_content col-lg-6">
			<div class="ebks_txt">
				<div class="books_front_text">E - Books</div>
				<div class="books_bg_text">E - Books</div>
			</div>
			<a class="know more">
				<div class="know_more_wrap">know more</div>
				<img src="Images/arrow.png" class="arrow">
			</a>
		</div>
	</div>
</section>

<section class="testimonials">
	<div class="container">
		<div class="d-flex test_and_tabs">
			<div class="test_txt">Testimonial</div>
			<!-- tab system here -->
				<ul class="nav nav-tabs">
				  <li class="active"><a data-toggle="tab" id="test_tab" href="#testi_stdnts" class="active">Students</a><i class="fa fa-sort-down" aria-hidden="true"></i></li>
				  <li><a data-toggle="tab" href="#testi_prnts">Parents</a><i class="fa fa-sort-down" aria-hidden="true"></i></li>
				  <li><a data-toggle="tab" href="#testi_spkrs">Industry <strong>Speaks</strong></a><i class="fa fa-sort-down" aria-hidden="true"></i></li>
				</ul>
			<!-- tab system end -->
		</div>

		<div class="testimo_cont d-flex">
			<div class="tab-content test_cont_text">
			@if(count($studenttestimonials) > 0)	
					@foreach($studenttestimonials as $studenttestimonial)
			   <div id="testi_stdnts" class="tab-pane fade in active show">
			        <div class="row mt-5">
			            <div class="col-md-3">
			                <img  src="/icriindia/storage/app/public/{{$studenttestimonial->image}}">
			            </div>
			            <div class="col-md-9">
			                <div class="reviewer_wrap">
            				    <div class="review">{{$studenttestimonial->message}}
            					</div>
            					<div class="reviewer">{{$studenttestimonial->name}}</div>
            					<div class="reviewers_designation_view d-flex justify-content-between">
            						<div class="reviewers_designation">{{$studenttestimonial->course}}</div>
            						<a class="view_all">View all<i class="fa fa-long-arrow-alt-right" aria-hidden="true"></i></a>
            					</div>
            				</div>
			            </div>
			        </div>
			  </div>
			  @endforeach
			@endif

			 
			    <!-- Parents Start -->
				@if(count($parenttestimonials) > 0)	
					@foreach($parenttestimonials as $parenttestimonial)
    			<div id="testi_prnts" class="tab-pane fade"> 
    			    <div class="row mt-5">
			            <div class="col-md-3">
			                <img  src="/icriindia/storage/app/public/{{$parenttestimonial->image}}">
			            </div>
			            <div class="col-md-9">
			                <div class="reviewer_wrap">
            				    <div class="review">{{$parenttestimonial->message}}
            					</div>
            					<div class="reviewer">{{$parenttestimonial->name}}</div>
            					<div class="reviewers_designation_view d-flex justify-content-between">
            						<div class="reviewers_designation">{{$parenttestimonial->course}}</div>
            						<a class="view_all">View all<i class="fa fa-long-arrow-alt-right" aria-hidden="true"></i></a>
            					</div>
            				</div>
			            </div>
			        </div>
    			</div>
				@endforeach
			@endif
    			<!-- Parents End -->
    			
    			<!-- Industry Speaks Start -->
				@if(count($industryspeaktestimonials) > 0)	
					@foreach($industryspeaktestimonials as $industryspeaktestimonial)
    			<div id="testi_spkrs" class="tab-pane fade">
    			    <div class="row mt-5">
			            <div class="col-md-3">
			                <img  src="/icriindia/storage/app/public/{{$industryspeaktestimonial->image}}">
			            </div>
			            <div class="col-md-9">
			                <div class="reviewer_wrap">
            				    <div class="review">{{$industryspeaktestimonial->message}}
            					</div>
            					<div class="reviewer">{{$industryspeaktestimonial->name}}</div>
            					<div class="reviewers_designation_view d-flex justify-content-between">
            						<div class="reviewers_designation">{{$industryspeaktestimonial->course}}</div>
            						<a class="view_all">View all<i class="fa fa-long-arrow-alt-right" aria-hidden="true"></i></a>
            					</div>
            				</div>
			            </div>
			        </div>
    			</div>

				@endforeach
			@endif

    			<!-- Industry Speaks End -->
			</div>
		</div>

	</div>
</section>


@endsection