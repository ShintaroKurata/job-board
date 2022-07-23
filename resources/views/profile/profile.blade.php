@extends('layouts.lower')

@section('content')
        <!-- Breadcrumb Section Start -->
        <div class="breadcrumb-section section page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="page-breadcrumb-content color-white mb-40">
                            <ul class="page-breadcrumb color-white">
                                <li><a href="/">Home</a></li>
                                <li>Buyer</li>
                                <li>{{$user->name}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="candidate-head-info color-white">
                            <div class="candidate-logo">
                                <a href="#"><img src="assets/images/team/team2.jpg" alt=""></a>
                            </div>
                            <div class="candidate-content">
                                <h1 class="candidate-name">{{$user->name}} <i class="fas fa-check-circle"></i></h1>
                                <ul class="candidate-meta">
                                    <li class="candidate-headline">Unity Developer</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="sidebar-wrapper-three">
                            <div class="common-sidebar-widget sidebar-three mb-0 pb-0">
                                <div class="sidebar-job-share">
                                    <div class="job-share candidate-action color-white">
                                        <ul>
                                            <li><a href="#"><i class="lnr lnr-heart"></i> <span class="text">Save </span></a></li>
                                            <li><a href="#"><i class="lnr lnr-bubble"></i> <span class="text">Share </span></a>
                                                <ul class="social-share candidate-share">
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                    <li><a href="#"><i class="far fa-envelope"></i></a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#"><i class="lnr lnr-warning"></i> <span class="text">Report </span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Section Start -->
 <!-- Job Details Section Start -->
 <div class="job-details-section section pt-120 pt-lg-100 pt-md-80 pt-sm-50 pt-xs-40 pb-120 pb-lg-100 pb-md-80 pb-sm-60 pb-xs-50">
    <div class="container">
        <div class="row">

            <div class="col-lg-4 order-lg-2 order-2 mt-sm-60 mt-xs-50">
                <div class="sidebar-wrapper-three">
                    <div class="common-sidebar-widget sidebar-three">
                        <h2 class="sidebar-title">Contact Buyer</h2>
                        <div class="sidebar-contact">
                            <div class="candidate-widget-wrap">
                                <div class="candidate-info">
                                    <ul class="info-fields">
                                        <li class="field-email">
                                            <span class="field-title">Email: </span>
                                            <a href="#">beie2016@gmail.com</a>
                                        </li>
                                        <li class="field-website theme-color">
                                            <span class="field-title">Website: </span>
                                            <a href="#">{{$user->profile->home_page}}</a>
                                        </li>
                                        <li class="field-location"><span class="field-title">Location: </span>{{$user->profile->address}}</li>
                                        <li class="field-social">
                                            <span class="field-title">Social profiles: </span>
                                            <div class="social-all">
                                                <a class="facebook" href="#"><i class="fab fa-facebook"></i></a>
                                                <a class="twitter" href="#"><i class="fab fa-twitter"></i></a>
                                                <a class="linkedin" href="#"><i class="fab fa-linkedin"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 order-lg-1 order-1 pr-55 pr-md-15 pr-sm-15 pr-xs-15">

                <div class="candidate-main-content">
                    <div class="field-candidate-information">
                        <h3>Buyer Information</h3>
                        <ul class="meta-field">
                            <li>
                                <div class="meta-field-item">
                                    <div class="field-label"><i class="lnr lnr-tag"></i><span>Category</span></div>
                                    <div class="field-value"><a href="#">Web & Software Dev</a></div>
                                </div>
                            </li>
                            <li>
                                <div class="meta-field-item">
                                    <div class="field-label"><i class="lnr lnr-graduation-hat"></i><span>Experience</span></div>
                                    <div class="field-value"><a href="#">1-3 years</a></div>
                                </div>
                            </li>
                            <li>
                                <div class="meta-field-item">
                                    <div class="field-label"><i class="lnr lnr-briefcase"></i><span>Type</span></div>
                                    <div class="field-value"><a class="fw-600" href="#">Full Time</a></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="field-description">
                        <h3>Profile</h3>

                        <p>Maecenas a dui vulputate, facilisis odio ac, eleifend neque. Suspendisse at nibh ante. Donec laoreet cursus augue. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec id diam fringilla eros vulputate feugiat nec sed quam. Donec eleifend risus vel tempus sagittis. Donec aliquam iaculis tincidunt. Donec tristique, lacus et commodo scelerisque, urna elit cursus purus, sit amet ornare odio ex non sem. Duis aliquet nec velit vel posuere. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam pretium pellentesque nunc, ac interdum eros convallis eu. Quisque augue felis, gravida a odio quis, consectetur facilisis orci. Mauris eget ullamcorper eros, at feugiat elit. Curabitur in nunc eu justo tempus efficitur.</p>
                    </div>
                    <div class="field-experience">
                        <h3>Work Experience</h3>

                        <div class="experience-wrap">

                            <div class="experience-item">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4">
                                        <div class="content-left">
                                            <h5 class="company-name theme-color">Vsmarttech</h5>
                                            <span class="date">2010-2016</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8">
                                        <div class="content-right">
                                            <h5 class="position-company bottom">Php Developer</h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="experience-item">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4">
                                        <div class="content-left">
                                            <h5 class="company-name theme-color">Amanotes</h5>
                                            <span class="date">2016-present</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8">
                                        <div class="content-right">
                                            <h5 class="position-company bottom">Unity Developer</h5>
                                            <p>Maecenas a dui vulputate, facilisis odio ac, eleifend neque. Suspendisse at nibh ante.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="field-education">
                        <h3>Education</h3>
                        <div class="education-wrap">

                            <div class="education-item">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4">
                                        <div class="content-left">
                                            <h5 class="speciality-school theme-color">Highschool</h5>
                                            <span class="date">2011-2013</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8">
                                        <div class="content-right">
                                            <h5 class="school-name bottom">Lalmatia Boy's School</h5>
                                            <p>Maecenas a dui vulputate, facilisis odio ac, eleifend neque. Suspendisse at nibh ante.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="education-item">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4">
                                        <div class="content-left">
                                            <h5 class="speciality-school theme-color">University</h5>
                                            <span class="date">2013-2017</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8">
                                        <div class="content-right">
                                            <h5 class="school-name bottom">VNU University of Engineering and Technology</h5>
                                            <p>Maecenas a dui vulputate, facilisis odio ac, eleifend neque. Suspendisse at nibh ante.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="field-award">
                        <h3>Awards</h3>
                        <div class="award-wrap">
                            <div class="award-item">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4">
                                        <div class="content-left">
                                            <h5 class="speciality-school theme-color">Perfect Attendance Programs</h5>
                                            <span class="date">Dec 2016</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8">
                                        <div class="content-right">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="field-skills">
                        <h3>Skills</h3>
                        <ul class="skill-tag">
                            <li><a href="#">PHP</a></li>
                            <li><a href="#">Web Design</a></li>
                            <li><a href="#">Wordpress</a></li>
                        </ul>
                    </div>
                    <div class="field-portfolio">
                        <h3>Portfolio</h3>
                        <ul class="portfolio-list">
                            <li><a href="#"><img src="assets/images/portfolio/portfolio1.jpg" alt=""></a></li>
                            <li><a href="#"><img src="assets/images/portfolio/portfolio2.jpg" alt=""></a></li>
                            <li><a href="#"><img src="assets/images/portfolio/portfolio3.jpg" alt=""></a></li>
                        </ul>
                    </div>
                    <div class="review-area">
                        <div class="review-container">
                            <h3 class="title">1 Review</h3>
                            <div class="review-content">
                                <div class="review-avatar">
                                    <img src="assets/images/author/author2.jpg" alt="">
                                </div>
                                <div class="review-details">
                                    <div class="review-title">
                                        <h3 class="title">Suspendisse in tortor ex</h3>
                                        <div class="rate-content">
                                            <div class="star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <ul>
                                            <li>
                                                <span class="review-by">By: </span>
                                                <span class="review-name theme-color">Employer Emplyer </span>
                                            </li>
                                            <li>
                                                <i class="lnr lnr-clock"></i>
                                                <span>6 months ago</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="review-des">
                                        <p>Etiam ut ligula velit. Donec at blandit metus, sit amet elementum sapien. Nullam fermentum lorem quis mollis sodales. Nullam sodales volutpat tortor, vitae bibendum ex viverra faucibus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
<!-- Job Details Section End -->
@endsection
