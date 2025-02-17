@extends('layout.app')
@section('content')
    @include('components.MenuBar')

  <!-- STAT SECTION ABOUT --> 
<div class="section">
	<div class="container">
    	<div class="row align-items-center">
        	<div class="col-lg-6">
            	<div class="about_img scene mb-4 mb-lg-0">
                    <img src="assets/images/about_img.jpg" alt="about_img"/>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="heading_s1">
                    <h2>Who We are</h2>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. consequuntur quibusdam enim expedita sed nesciunt incidunt accusamus adipisci officia libero laboriosam!</p>
                <p>Proin gravida nibh vel velit auctor aliquet. nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vultate cursus a sit amet mauris. Duis sed odio sit amet nibh vultate cursus a sit amet mauris.</p>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION ABOUT --> 

<!-- START SECTION WHY CHOOSE --> 
<div class="section bg_light_blue2 pb_70">
	<div class="container">
    	<div class="row justify-content-center">
        	<div class="col-lg-6 col-md-8">
            	<div class="heading_s1 text-center">
                	<h2>Why Choose Us?</h2>
                </div>
                <p class="text-center leads">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
            </div>
        </div>
        <div class="row justify-content-center">
        	<div class="col-lg-4 col-sm-6">
            	<div class="icon_box icon_box_style4 box_shadow1">
                	<div class="icon">
                    	<i class="ti-pencil-alt"></i>
                    </div>
                    <div class="icon_box_content">
                    	<h5>Creative Design</h5>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
            	<div class="icon_box icon_box_style4 box_shadow1">
                	<div class="icon">
                    	<i class="ti-layers"></i>
                    </div>
                    <div class="icon_box_content">
                    	<h5>Flexible Layouts</h5>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
            	<div class="icon_box icon_box_style4 box_shadow1">
                	<div class="icon">
                    	<i class="ti-email"></i>
                    </div>
                    <div class="icon_box_content">
                    	<h5>Email Marketing</h5>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION WHY CHOOSE --> 

<!-- START SECTION SHOP INFO -->
<div class="section pb_70">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-4">	
                <div class="icon_box icon_box_style1">
                    <div class="icon">
                        <i class="flaticon-shipped"></i>
                    </div>
                    <div class="icon_box_content">
                        <h5>Free Delivery</h5>
                        <p>If you are going to use of Lorem, you need to be sure there anything</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">	
                <div class="icon_box icon_box_style1">
                    <div class="icon">
                        <i class="flaticon-money-back"></i>
                    </div>
                    <div class="icon_box_content">
                        <h5>30 Day Return</h5>
                        <p>If you are going to use of Lorem, you need to be sure there anything</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">	
                <div class="icon_box icon_box_style1">
                    <div class="icon">
                        <i class="flaticon-support"></i>
                    </div>
                    <div class="icon_box_content">
                        <h5>27/4 Support</h5>
                        <p>If you are going to use of Lorem, you need to be sure there anything</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION SHOP INFO -->


@include('components.Footer')