@extends('layouts.app')


@section('content')
    <div class="hero">
        <div class="hero-inner" style="background: url('https://wordpress-docker.test/wp-content/uploads/2022/02/video-content-marketing.webp'); background-size: cover; background-position:
         center right">
            <div class="row">
                <div class="hero-container">
                    <div class="hero-body">
                        <div class="hero-text">
                            <h1 class="home-lead">Turn-Key Video Strategy, Production, and Marketing Services​</h1>
                            <p class="home-explainer">We help our clients with strategic guidance, cost-effective video
                                production & video marketing services to reach their lead & sales goals.</p>
                            <div class="hero-cta">
                                <div class="cta-inner">
                                    <div class="cta-button-wrapper js-watch">
                                        <a class="call-to-action" href="">Contact Us</a>
                                    </div>
                                    <div class="cta-button-wrapper js-watch">
                                        <a class="call-to-action btn-alt" href="">View Portfolio</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="hero-link"><p><a href="">Click here to see our 10 year anniversay
                                highlight reel!</a></p></div>
                </div>
            </div>
        </div>

        <section class="stats">
            <div class="copy-inner">
                <div class="container">
                    <div class="row center">
                        <div class="lead-in">
                            <h3>Reach Your Goals Faster With Professional Marketing Videos</h3>
                            <h4 class="header-alt">Don't miss out on the customer engagement and conversions.</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="four-col">
                            <div class="short-copy">
                                <div class="stat">
                                    <span>88%</span>
                                </div>
                                <h4>Increased Chances</h4>
                                <p>88% of video marketers reported that video gives them a positive ROI</p>
                                <div class="learn-more">
                                    <span>– Wyzowl</span>
                                </div>
                            </div>
                        </div>
                        <div class="four-col">
                            <div class="short-copy">
                                <div class="stat">
                                    <span>88%</span>
                                </div>
                                <h4>Increased Chances</h4>
                                <p>88% of video marketers reported that video gives them a positive ROI</p>
                                <div class="learn-more">
                                    <span>– Wyzowl</span>
                                </div>
                            </div>
                        </div>
                        <div class="four-col">
                            <div class="short-copy">
                                <div class="stat">
                                    <span>88%</span>
                                </div>
                                <h4>Increased Chances</h4>
                                <p>88% of video marketers reported that video gives them a positive ROI</p>
                                <div class="learn-more">
                                    <span>– Wyzowl</span>
                                </div>
                            </div>
                        </div>
                        <div class="four-col">
                            <div class="short-copy">
                                <div class="stat">
                                    <span>88%</span>
                                </div>
                                <h4>Increased Chances</h4>
                                <p>88% of video marketers reported that video gives them a positive ROI</p>
                                <div class="learn-more">
                                    <span>– Wyzowl</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row center">
                        <div class="lead-out">
                            <div class="call-to-actions-group">
                                <div class="cta-button-wrapper js-watch">
                                    <a class="call-to-action" href="">Contact Us</a>
                                </div>
                                <div class="cta-button-wrapper js-watch">
                                    <a class="call-to-action btn-alt-2" href="">View Customer Case Studies</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="callout callout-center section-alt">
            <div class="callout-inner">
                <div class="container">
                    <div class="row center">
                        <div class="lead-in">
                            <h3>Remote Video Production Services</h3>
                            <h4 class="header-alt">Contact us today to learn about the most cost effective remote video
                                production solution for all your content marketing objectives like:</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="callout-body remote-video">
                            <div class="callout-text remote-video-left">
                                <ul class="checkmark ul-col-2">
                                    <li>
                                        Thought leadership
                                    </li>
                                    <li>
                                        Blog / content marketing
                                    </li>
                                    <li>
                                        eMail marketing
                                    </li>
                                    <li>Social media
                                    </li>
                                    <li>
                                        Client Testimonials
                                    </li>
                                    <li>
                                        Executive bios
                                    </li>
                                    <li>
                                        Product launch videos
                                    </li>
                                    <li>
                                        Internal communications
                                    </li>
                                </ul>
                            </div>
                            <div class="callout-video remote-video-right">

								<?php
								$video = get_field( 'video' );

								echo $video;
								?>

                                <iframe width="560" height="315" src="https://www.youtube.com/embed/9GJrrM_JH9k"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="row center">
                        <div class="lead-out">
                            <div class="call-to-actions-group">
                                <div class="cta-button-wrapper js-watch">
                                    <a class="call-to-action" href="">Learn More About Remore Video Capture</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-alt-2">
            <div class="copy-inner">
                <div class="container">
                    <div class="row center">
                        <div class="lead-in">
                            <h3>A Solution for Every Stage of Video Adoption</h3>
                            <h4 class="header-alt">Perfectly made to every company size, industry, status, and
                                professional role</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="four-col">
                            <div class="short-copy">
                                <img src="@asset('images/getting-started.jpg')" alt="Getting Started"/>
                                <p>You're just getting started with video marketing; in any size of company or
                                    industry.</p>
                                <div class="call-to-action-group">
                                    <a href="">LEARN MORE</a>
                                </div>
                            </div>
                        </div>
                        <div class="four-col">
                            <div class="short-copy">
                                <img src="@asset('images/doubling-down.jpg')" alt="Doubling Down"/>
                                <p>You've done some video before, but now you need to focus more on it with an eye
                                    towards ROI.</p>
                                <div class="call-to-action-group">
                                    <a href="">LEARN MORE</a>
                                </div>
                            </div>
                        </div>
                        <div class="four-col">
                            <div class="short-copy">
                                <img src="@asset('images/need-strategy.jpg')" alt="Need a Strategy"/>
                                <p>You have many videos, but no strategy. You need a planned, thoughtful, and integrated
                                    approach.</p>
                                <div class="call-to-action-group">
                                    <a href="">LEARN MORE</a>
                                </div>
                            </div>
                        </div>
                        <div class="four-col">
                            <div class="short-copy">
                                <img src="@asset('images/for-agencies.jpg')" alt="For Agencies"/>
                                <p>For agencies, PR firms, SEO and web developers looking for a trusted, value based
                                    company to rely on.</p>
                                <div class="call-to-action-group">
                                    <a href="">LEARN MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="steps">
            <div class="row center">
                <div class="lead-in">
                    <h3>4 Steps Process</h3>
                    <h4 class="header-alt">Help Turn Your Visitors into Customers in 4 Easy Steps</h4>
                </div>
            </div>
            <div class="row steps-line">
                <div class="four-col">
                    <div class="step">
                        <img src="@asset('images/step-one.png')" alt="Step One"/>
                    </div>
                    <div class="short-copy">
                        <h4>Aligning To Your Business Objectives
                        </h4>
                        <p>Video should work cohesively with your business goals so that your investment directly
                            supports those objectives. One video is not a video marketing strategy and most businesses
                            will create a wide array of video content.</p>
                    </div>
                </div>
                <div class="four-col">
                    <div class="step">
                        <img src="@asset('images/step-two.png')" alt="Step Two"/>
                    </div>
                    <div class="short-copy">
                        <h4>Evaluating the ROI
                        </h4>
                        <p>Look at creative concepts, budget and distribution channels to evaluate the project that has
                            the highest ROI and business impact.</p>
                    </div>
                </div>
                <div class="four-col">
                    <div class="step">
                        <img src="@asset('images/step-three.png')" alt="Step Three"/>
                    </div>
                    <div class="short-copy">
                        <h4>Professional Video Production Services
                        </h4>
                        <p>Everything you need to produce quality professional video. From pre-production, logistics
                            planning, personnel prep, and all the equipment and professional editing.</p>
                    </div>
                </div>
                <div class="four-col">
                    <div class="step">
                        <img src="@asset('images/step-four.png')" alt="Step Four"/>
                    </div>
                    <div class="short-copy">
                        <h4>Maximum Distribution
                        </h4>
                        <p>Our Video 1st Strategy™ gets the most out of your video marketing content. We align with web
                            teams, social media, email marketing, and SEO teams to make sure that your video content
                            gets to the right channels of distribution and into the eyes of the people that need to see
                            it for you to get a return on investment.</p>
                    </div>
                </div>
            </div>
            <div class="row center">
                <div class="lead-out">
                    <div class="call-to-actions-group">
                        <div class="cta-button-wrapper js-watch">
                            <a class="call-to-action" href="">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="block-services">
            <div class="block-services-inner">

                <div class="row">
                    <div class="col-four services-block">
                        <div class="services-block-inner">
                            <div class="block-flip">
                                <a href="" class="block-link" style="background: url(@asset('images/video-strategy.jpg')
                                );">
                                    <div class="block-flip-inner">
                                        <div class="block-content">
                                            <div class="block-header">
                                                <h4 class="initial">Video Strategy</h4>
                                            </div>
                                            <div class="block-text">
                                                <div class="block-text-inner">
                                                    <h4>Video Strategy</h4>

                                                    <p>Our holistic video marketing strategy lets you plan, budget and
                                                        integrate all the
                                                        different types video you need.</p>
                                                    <p><span class="learn-more">Learn More</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-four services-block">
                        <div class="services-block-inner">
                            <div class="block-flip">
                                <a href="" class="block-link"
                                   style="background: url(@asset('images/video-production.jpg'));">
                                    <div class="block-flip-inner">
                                        <div class="block-content">
                                            <div class="block-header">
                                                <h4 class="initial">Video Production</h4>
                                            </div>
                                            <div class="block-text">
                                                <div class="block-text-inner">
                                                    <h4>Video Production</h4>

                                                    <p>Everything you need from the production skills to the
                                                        marketing skills to the technical skill sets to deliver the
                                                        final video product. </p>
                                                    <p><span class="learn-more">Learn More</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-four services-block">
                        <div class="services-block-inner">
                            <div class="block-flip">
                                <a href="" class="block-link"
                                   style="background: url(@asset('images/video-marketing.jpg'));">
                                    <div class="block-flip-inner">
                                        <div class="block-content">
                                            <div class="block-header">
                                                <h4 class="initial">Animation</h4>
                                            </div>
                                            <div class="block-text">
                                                <div class="block-text-inner">
                                                    <h4>Animation</h4>

                                                    <p>Animated marketing videos are a very effective tool for lead
                                                        generation and conversion. </p>
                                                    <p><span class="learn-more">Learn More</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-four services-block">
                        <div class="services-block-inner">
                            <div class="block-flip">
                                <a href="" class="block-link"
                                   style="background: url(@asset('images/animation-studio.jpg'));">
                                    <div class="block-flip-inner">
                                        <div class="block-content">
                                            <div class="block-header">
                                                <h4 class="initial">Video Production</h4>
                                            </div>
                                            <div class="block-text">
                                                <div class="block-text-inner">
                                                    <h4>Video Production</h4>

                                                    <p>Our holistic video marketing strategy lets you plan, budget and
                                                        integrate all the
                                                        different types video you need.</p>
                                                    <p><span class="learn-more">Learn More</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row center">
                    <div class="lead-out">
                        <div class="call-to-actions-group">
                            <div class="cta-button-wrapper js-watch">
                                <a class="call-to-action" href="">Contact Us</a>
                            </div>
                            <div class="cta-button-wrapper js-watch">
                                <a class="call-to-action btn-alt-2" href="">View Customer Case Studies</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="different" style="background: url(@asset('images/bg-image.jpg')); background-size: cover;">
            <div class="different-bg"></div>
            <div class="row center">
                <div class="different-content">
                    <div class="lead-in">
                        <h3>How are we different from the rest?</h3>
                        <h4 class="header-alt">Professional Video Production & Strategy</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="different-content">
                    <div class="different-text">
                        <p>Having produced over 900 business videos since our inception, our clients have come to rely
                            on
                            us to give them everything they need to get the most ROI from their investment in video
                            content
                            marketing services. From strategic guidance, cost-effective video production thru to
                            thoughtful
                            video marketing services to reach their lead & sales objectives. As a NYC Video Production
                            company we understand that your business needs high quality video production services to
                            help
                            stand out among the competition.

                        <p>MultiVision Digital's talented team of interactive marketing professionals, producers,
                            editors
                            and animators leverage deep expertise in interactive marketing and video production with a
                            real
                            world understanding to drive quantifiable results. We've worked with solo entrepreneurs to
                            global Fortune 500 companies across almost every industry and have created video marketing
                            communications for every business objective.

                        <p>Regardless of the size or industry, these companies needed a trusted resource to ensure their
                            business video production was on time, on budget and achieved the business objectives they
                            were
                            after.</div>
                </div>
            </div>
            <div class="row center">
                <div class="different-content lead-out">
                    <div class="call-to-actions-group">
                        <div class="cta-button-wrapper js-watch">
                            <a class="call-to-action" href="">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>

        </section>


        <section class="accolades">
            <div class="row center">
                <div class="different-content">
                    <div class="lead-in">
                        <h3>Video Production Awards based upon client reviews:</h3>
                    </div>
                </div>
            </div>
            <div class="row center">
                <div class="accolades-img">
                    <img width="800" src="@asset('images/video-production-awards.png')" alt="Top Video Production
                    Awards"/>
                    <img width="800" src="@asset('images/video-production-awards-2.png')" alt="Best Video Production
                    Awards"/>
                </div>
            </div>

        </section>

        <section class="shout section-alt">
            <div class="row">
                <div class="lead-in left">
                    <h3>Hear from our satisfied clients who achieve greater success with their businesses</h3>
                    <h4 class="header-alt">Testimonials from our Clients</h4>
                </div>
                <div class="shout-out lead-in-right">
                    <div class="shout-out-inner">
                        <div class="shout-out-single">
                            <div class="shout-out-body">
                                <div class="shout-out-quote">
                                    <p>"I've worked with the pros at MultiVision several times and continue to be
                                        impressed
                                        by their technical expertise and creative eye for getting the right shot. They
                                        come
                                        prepared, work efficiently, and get the job done. Robert is a perpetual source
                                        of
                                        ideas and is able to work well with very different personalities to get the best
                                        from them — a rare skill honed by experience and insight. They deliver for
                                        us!"</p>

                                <div class="shout-out-logo">
                                </div>
                                <div class="shout-out-sig">
                                    <span class="shout-out-name">- Name</span>
                                    <span class="shout-out-co">- Name</span>
                                </div>
                                </div>
                            </div>
                            <div class="slider-button">
                                <div class="slider-button-inner">
                                    <span class="swiper-pagination-bullet" tabindex="0" role="button"
                                          aria-label="Go to slide 1"></span>
                                    <span class="swiper-pagination-bullet" tabindex="0" role="button"
                                          aria-label="Go to slide 2"></span>
                                    <span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0"
                                          role="button" aria-label="Go to slide 3"></span>
                                    <span class="swiper-pagination-bullet" tabindex="0" role="button"
                                          aria-label="Go to slide 4"></span>
                                    <span class="swiper-pagination-bullet" tabindex="0" role="button"
                                          aria-label="Go to slide 5"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    <section class="wide-form-section section-alt-2">
        <div class="row wide-form-wrapper">
           <div class="lead-in left alt">
               <div class="orange-bg-cover" style="background:url(@asset('images/orange-bg-cover.jpg'));">
                   <div class="wide-form-banner">
                       <h3>Nothing comes close to the effectiveness of a well designed video communications project.</h3>
                       <p>Improve your search engine rankings by driving and keeping traffic on your site and generate quality leads with professional video.</p>
                   </div>
               </div>
           </div>
            <div class="lead-in-right">
                <div class="wide-form">
                    <h4>Contact Us</h4>
                    <form>
                        <div class="form-row">
                            <label class="two-col even-space" id="wide-form-first-name-label"
                                   for="wide-form-first-name"><p>First
                                    Name<span class="required">*</span></p>
                                <input id="wide-form-first-name" type="text" value="" required />
                            </label>
                            <label class="two-col even-space" id="wide-form-first-name-label"><p>Last Name<span class="required">*</span></p>
                                <input id="wide-form-last-name" type="text" value="" required />
                            </label>
                        </div>
                        <div class="form-row">
                            <label class="two-col even-space" id="wide-form-first-name-label"><p>Phone<span class="required">*</span></p>
                                <input id="wide-form-first-name" type="phone" value="" required />
                            </label>
                            <label class="two-col even-space" id="wide-form-first-name-label"><p>Email<span
                                            class="required">*</span></p>
                                <input id="wide-form-last-name" type="email" value="" required />
                            </label>
                        </div>
                        <div class="form-row">
                            <label class="two-col even-space only" id="wide-form-first-name-label"><p>Company<span
                                            class="required">*</span></p>
                                <input id="wide-form-first-name" type="phone" value="" required />
                            </label>
                        </div>
                        <div class="row center">
                            <button class="call-to-action" id="wide-form-submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

