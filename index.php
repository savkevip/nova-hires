<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="initial-scale=1.0 , minimum-scale=1.0 , maximum-scale=1.0" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700&family=Lexend:wght@700&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    </head>
    <body>
        <div class="loading-screen">
            <div class="spinner">
                <img src="assets/logo.svg">
            </div>
        </div>

        <div class="form-modal-container">
            <div class="background-overlay">
            </div>
            <div class="form-modal container">
                <div class="close-button"></div>
                <!-- <form id="main-contact-form" action="https://formsubmit.co/stefanterzic94@gmail.com" method="POST" class="row"> -->
                    <form id="main-contact-form" name="contactform" class="row">
                    
                    <div class="form-modal-inner col-12">
                        <div class="row">
                            <div class="col col-12">
                                <input type="text" name="firstName" placeholder="First Name" value="St">
                            </div>
                            <div class="col col-12">
                                <input type="text" name="lastName" placeholder="Last Name" value="St">
                            </div>
                            <div class="col col-12">
                                <input type="text" name="companyName" placeholder="Company Name" value="St">
                            </div>
                            <div class="col col-12">
                                <input type="email" name="email" placeholder="Email Address" value="stefanterzic94@gmail.com">
                            </div>
                            <div class="col col-12">
                                <input type="tel" name="phone" placeholder="Phone Number" value="12322242241">
                            </div>
                            <div class="col col-12">
                                <p>
                                    One of our specialists will contact you as soon as possible.
                                </p>
                            </div>
                            <div class="col col-12 d-flex justify-content-center">
                                <input type="submit" class="button w-100" value="Submit">
                            </div>
                        </div>
                    </div>
               </form>
            </div>
        </div>

        <header>
            <div class="container">
                <div class="row">
                    <div class="col col-12">
                        <div class="logo">
                            <img src="assets/logotype.png">

                            <div class="logo-mobile">
                                <img src="assets/logo.svg">
                            </div>
                        </div>
        
                        <div class="scroll-progress-bar-outer">
                            <div class="scroll-progress-bar">
                                <div class="scroll-progress-bar-fill"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="hero-section d-flex align-items-end segment-start">
            <div class="spinner">
                <div class="parallax-item" 
                    data-parallax-multiplier="60">
                    <img src="assets/logo.svg">
                </div>
            </div>

            <div class="hero-image">
                <div class="parallax-item" 
                    data-parallax-multiplier="30">
                    <img src="assets/hero-transparent.webp">
                </div>
            </div>

            <div class="gradient-overlay"></div>

            <div class="container">
                <section>
                    <div class="row align-items-start">
                        <div class="col col-12 col-md-7 col-lg-8 fadein-item d-flex" 
                            data-animation-delay="1">
                            <h1 class="light">
                                Welcome to Nova Hires
                                <br>
                                We build better futures
                                <br>
                                One Driver at a time
                            </h1>
                        </div>
    
                        <div class="col col-12 col-md-5 col-lg-4 fadein-item">
                            <div class="fadein-item"
                                data-animation-delay="2">
                                <h5 class="light">
                                    Full cycle recruiting agency
                                    <br>
                                    For all US locations
                                </h5>
                                <h4 class="light">
                                    Looking to hire?
                                </h4>
                            </div>

                            <div class="button-wrapper fadein-item" 
                                data-animation-delay="3">
                                <button class="button open-form-modal">Click Here</button>
                            </div>
                        </div>
                    </div>

                </section>
            </div>
        </div>

        <main class="content-section">
            <div class="container">
                <section>
                    <div class="row segment-start">
                        <div class="col col-10 col-md-8 col-lg-6">     
                            <h1 class="fadein-item">
                                About Us
                            </h1>
                        </div>
                    </div>

                    <div class="row block-text-image">
                        <div class="col col-12 col-md-6 col-lg-5 col-text fadein-item" 
                            data-animation-delay="1">
                            <p class="large">
                                Nova Hires is a national full cycle recruiting agency. We connect industry-leading corporations and innovative startups with the best applicants nationwide.
                            </p>
                        </div>
                        <div class="col col-12 col-md-6  col-lg-7 col-image">
                            <div class="fadein-item" 
                                style="background-image: url(./assets/illustration-1.svg);" 
                                data-animation-delay="2"></div>
                        </div>
                    </div>

                    <div class="row block-text-image reverse">
                        <div class="col col-12 col-md-6 col-lg-5 col-text fadein-item" 
                            data-animation-delay="2">
                            <p class="large">
                                With a comprehensive approach to staffing solutions, Nova Hires is your provider of continuous sustainable growth. We support our devoted clients and top-tier candidates to find the perfect mutual employment match.
                            </p>
                        </div>
                        <div class="col col-12 col-md-6 col-lg-7 col-image fadein-item"> 
                            <div class="fadein-item"
                                style="background-image: url(./assets/illustration-2.svg);"
                                data-animation-delay="1"></div>
                        </div>
                    </div>

                    <div class="row block-text-image">
                        <div class="col col-12 col-md-6 col-lg-5 col-text fadein-item" 
                            data-animation-delay="1">
                            <p class="large">
                                Whether you are seeking the best talent in your industry or are pursuing your next amazing career opportunity, we can help. Our regional agency offices are prepared to serve you nationwide; our recruiters are deeply connected within local employment communities and networks.
                            </p>
                        </div>
                        <div class="col col-12 col-md-6  col-lg-7 col-image">
                            <div class="fadein-item" 
                                style="background-image: url(./assets/illustration-3.svg);" 
                                data-animation-delay="2"></div>
                        </div>
                    </div>
                </section>

                <section>
                    <div class="row">
                        <h5 class="large col col-12 fadein-item text-center mb-3 mblg-5" 
                            data-animation-delay="1">
                            We provide complete full cycle recruitment services across the US including:
                        </h5>
    
                        <div class="col col-12">
                            <ul class="row block-cards">
                                <li class="col col-6 col-md-4 col-lg-2 card">
                                    <div class="card-image fadein-item" 
                                        data-animation-delay="2" 
                                        style="background-image: url(./assets/icon-1.svg);"></div>
                                    <p class="fadein-item" 
                                        data-animation-delay="3">
                                        Advertisement Strategy Creation
                                    </p>
                                </li>
                                <li class="col col-6 col-md-4 col-lg-2 card">
                                    <div class="card-image fadein-item" 
                                        data-animation-delay="4" 
                                        style="background-image: url(./assets/icon-2.svg);"></div>
                                    <p class="fadein-item" 
                                        data-animation-delay="5">
                                        Marketing Budget Negotiations
                                    </p>
                                </li>
                                <li class="col col-6 col-md-4 col-lg-2 card">
                                    <div class="card-image fadein-item" 
                                        data-animation-delay="6" 
                                        style="background-image: url(./assets/icon-3.svg);"></div>
                                    <p class="fadein-item" 
                                        data-animation-delay="7">
                                        Implementing Hiring Procedures
                                    </p>
                                </li>
                                <li class="col col-6 col-md-4 col-lg-2 card">
                                    <div class="card-image fadein-item" 
                                        data-animation-delay="8" 
                                        style="background-image: url(./assets/icon-4.svg);"></div>
                                    <p class="fadein-item" 
                                        data-animation-delay="9">
                                        Optimizing Operation
                                    </p>
                                </li>
                                <li class="col col-6 col-md-4 col-lg-2 card">
                                    <div class="card-image fadein-item" 
                                        data-animation-delay="10" 
                                        style="background-image: url(./assets/icon-5.svg);"></div>
                                    <p class="fadein-item" 
                                        data-animation-delay="11">
                                        Lowering Cost-Per-Hire
                                    </p>
                                </li>
                                <li class="col col-6 col-md-4 col-lg-2 card">
                                    <div class="card-image fadein-item" 
                                        data-animation-delay="12" 
                                        style="background-image: url(./assets/icon-6.svg);"></div>
                                    <p class="fadein-item" 
                                        data-animation-delay="13">
                                        Managing And Lowering Turnover Rates
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>

                <section>
                    <div class="row block-fullwidth-bg">
                        <div class="bg-element">
                            <div style="background-image: url(./images/image1-min.webp);"></div>
                            <div class="overlay"></div>
                        </div>
                        <div class="col col-12">
                            <ul class="bullet-list columns fadein-item mb-3 mb-md-4 mb-lg-5 row" 
                                data-animation-delay="1">
                                <li class="col-12 col-lg-6">
                                    Whether you need to hire a number of company drivers or to double up your company hiring owner-operators we can help immediately!
                                </li>
                                <li class="col-12 col-lg-6">
                                    We stand ready to provide the specialized staff you need to keep your business operating smoothly at max capacity. 
                                </li>
                                <li class="col-12 col-lg-6">
                                    Our knowledgeable and practiced recruiters are here to support you in all employment types! 
                                </li>
                                <li class="col-12 col-lg-6">
                                    Nova Hires is committed to first-rate quality and service as demonstrated at every level of our agency.
                                </li>
                            </ul>
                            <h5 class="fadein-item text-center" 
                                data-animation-delay="2">
                                Thank you for considering Nova Hires as your recruiting partner!
                            </h5>
                            <h5 class="fadein-item text-center"
                                data-animation-delay="2">
                                Contact a proven staffing professional today!
                            </h5>
                            <div class="fadein-item text-center" 
                                data-animation-delay="3">
                                <button class="button open-form-modal">Get started</button>
                            </div>
                        </div>
                    </div>
                </section>

                <section>
                    <div class="row segment-start">
                        <div class="col col-10 col-md-8 col-lg-6">
                            <h1 class="fadein-item">
                                National Full Cycle Recruiting Services
                            </h1>
                        </div>
                    </div>

                    <div class="row fadein-item" 
                        data-animation-delay="1">
                        <div class="col col-12">
                            <p class="large">
                                Need to hire experienced drivers? We can help. For many employers it can be a prolonged, time intensive, and demanding process to recruit the best talent on the market. That is why Nova Hires interviews, networks with, and recruits elite talent at the local, statewide, and national level. We stand ready to connect you to the talent you need!
                            </p>
                        </div>
                    </div>
                </section>

                <section>
                    <div class="row">
                        <div class="col col-12">
                            <h5 class="col col-12 fadein-item text-center mb-3 mb-md-4 mb-lg-5" 
                                data-animation-delay="1">
                                Our Full Cycle Recruitment Services include:
                            </h5>
                        </div>
                    </div>

                    <div class="row block-text-image image-cover">
                        <div class="col col-12 col-md-6 col-lg-5 col-text">
                            <h3 class="fadein-item" 
                                data-animation-delay="1">
                                Talent Recruitment
                            </h3>
                            <p class="large fadein-item" 
                                data-animation-delay="2">
                                Immediate access to our vast network of experienced candidates ready for direct placement. Our
recruiters deliver personally vetted, pre-screened, and ready-to-hire drivers. We utilize a variety of
methods to attract a diverse pool of qualified applicants matching your specific needs.
                            </p>
                        </div>
                        <div class="col col-12 col-md-6 col-lg-7 col-image">
                            <div class="fadein-item" 
                                style="background-image: url(./images/image2-min.webp);" 
                                data-animation-delay="3"></div>
                        </div>
                    </div>

                    <div class="row block-text-image reverse image-cover">
                        <div class="col col-12 col-md-6 col-lg-5 col-text fadein-item">
                            <h3 class="fadein-item" 
                                data-animation-delay="1">
                                Pipeline Creation
                            </h3>
                            <p class="large fadein-item" 
                                data-animation-delay="2">
                                Our pipeline is a proven pathway to get the word out properly about your opportunity. We will refine your position description, establish a successful and clear salary range goal, and expediently recruit from our vast candidate pool, launch online postings and engage within our established social media network. From speaking at universities, to attending local and national talent and human resources conferences, meet-up groups, and LinkedIn events, our recruiters work the room so you don&#39;t have to.
                            </p>
                        </div>
                        <div class="col col-12 col-md-6 col-lg-7 col-image">
                            <div class="fadein-item" 
                                style="background-image: url(./images/image3-min.webp);" 
                                data-animation-delay="3"></div>
                        </div>
                    </div>

                    <div class="row block-text-image image-cover">
                        <div class="col col-12 col-md-6 col-lg-5 col-text fadein-item">
                            <h3 class="fadein-item" 
                                data-animation-delay="1">
                                Skill Evaluations
                            </h3>
                            <p class="large fadein-item" 
                                data-animation-delay="2">
                                We conduct skill assessments based on the job requirements and your requests, such as skills
testing, behavioral questioning, and situational interviews.
                            </p>
                        </div>
                        <div class="col col-12 col-md-6 col-lg-7 col-image">
                            <div class="fadein-item" 
                                style="background-image: url(./images/image5-min.webp);" 
                                data-animation-delay="3"></div>
                        </div>
                    </div>

                    <div class="row block-text-image reverse image-cover">
                        <div class="col col-12 col-md-6 col-lg-5 col-text">
                            <h3 class="fadein-item" 
                                data-animation-delay="1">
                                Reference Checks
                            </h3>
                            <p class="large fadein-item" 
                                data-animation-delay="2">
                                All candidate scheduling and final reference checks are conducted in detail on your behalf. This includes contacting former employers, validating driver records and inspection sheets as needed to fully establish candidate credibility.
                            </p>
                        </div>
                        <div class="col col-12 col-md-6 col-lg-7 col-image">
                            <div class="placeholder-image fadein-item" 
                                style="background-image: url(./images/image4-min.webp);" 
                                data-animation-delay="3"></div>
                        </div>
                    </div>

                    <div class="row block-text-image image-cover">
                        <div class="col col-12 col-md-6 col-lg-5 col-text">
                            <h3 class="fadein-item" 
                                data-animation-delay="1">
                                Work Eligibility and Background Checking
                            </h3>
                            <p class="large fadein-item" 
                                data-animation-delay="2">
                                We ensure each applicant is eligible to work and are ready to conduct background checks that are tailored to the needs of your particular job.
                            </p>
                        </div>
                        <div class="col col-12 col-md-6  col-lg-7 col-image">
                            <div class="placeholder-image fadein-item" 
                                style="background-image: url(./images/image6-min.webp);" 
                                data-animation-delay="3"></div>
                        </div>
                    </div>

                    <div class="row block-text-image reverse image-cover">
                        <div class="col col-12 col-md-6 col-lg-5 col-text">
                            <h3 class="fadein-item" 
                                data-animation-delay="1">
                                Human Resources and Recruitment Process
                            </h3>
                            <p class="large fadein-item" 
                                data-animation-delay="2">
                                If needed, we help present job offers, mediate offer negotiations, and counsel our clients and candidates to ensure the best chance for  a successful hire. Though we cannot give legal advice, our recruiters stay up to date on employment law and current hiring trends and can  suggest additional resources.
                            </p>
                        </div>
                        <div class="col col-12 col-md-6  col-lg-7 col-image">
                            <div class="placeholder-image fadein-item" 
                                style="background-image: url(./images/image7-min.webp);" 
                                data-animation-delay="3"></div>
                        </div>
                    </div>

                    <div class="row block-text-image image-cover">
                        <div class="col col-12 col-md-6 col-lg-5 col-text fadein-item" 
                            data-animation-delay="1">
                            <h3 class="fadein-item" 
                                data-animation-delay="1">
                                A Guaranteed Hire
                            </h3>
                            <p  class="large fadein-item" 
                                data-animation-delay="2">
                                We offer a concrete service guarantee and a complete commitment to excellence and search confidentiality. Our valued clients are serviced and represented in a highly personal, ethical, professional, and effective manner. We back all of our services with a cash back policy. We do this because we are confident in the extraordinary quality of the talented candidates that we select to represent.
                            </p>
                        </div>
                        <div class="col col-12 col-md-6 col-lg-7 col-image">
                            <div class="placeholder-image fadein-item" 
                                style="background-image: url(./images/image8-min.webp);" 
                                data-animation-delay="3"></div>
                        </div>
                    </div>
                </section>

                <section>
                    <div class="row block-bordered">
                        <div class="col col-12">
                            <h5 class="col col-12 fadein-item mb-3" 
                                data-animation-delay="1">
                                We'll Find the Best Person For the Job
                            </h5>
                            <p class="large fadein-item" 
                                data-animation-delay="2">
                                Our established professional relationships and networks are expansive and include experienced professionals fresh on the market, passive job seekers considering new opportunities, as well as networking groups and industry experts.
                            </p>
                            <div class="fadein-item" 
                                data-animation-delay="3">
                                <button class="button open-form-modal">Request quote</button>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>

        <footer class="segment-start">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col col-12 col-md-6 col-lg-4">
                        <h6>
                            Contact us
                        </h6>
                        <ul>
                            <li class="socials">
                                <p>
                                    Follow us on 
                                    <a href="#">
                                        <i class="fa-brands fa-linkedin"></i>
                                    </a>
                                </p>
                            </li>
                            <li>
                                <p>
                                    user@email.com
                                </p>
                            </li>
                            <li>
                                <p>
                                    +38160123456789
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="col col-12 col-md-6 col-lg-4">
                        <p class="pale rights">
                            NOVA Hires Co. All rights reserved 2023
                        </p>
                    </div>
                </div>
            </div>

            <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
            <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
            <script src="./main.js"></script>
        </footer>
    </body>
</html>