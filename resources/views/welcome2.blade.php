<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="author" content="Bintang Jeremia Tobing">
    <meta name="keywords"
        content="Bintang Tobing, Web Developer, Freelance, Jasa Bintang Tobing, Bintang, BintangTobing, designer, web Bintang, bintangtobing, resume bintang tobing, cv bintang tobing, curicullum vitae bintang tobing">
    <meta name="description"
        content="Hi I'm Bintang Tobing, you can call me Bin. As you can see, yes this is my personal page for my resume, curicullum vitae, also you can see my projects.">

    <!-- Font Imports -->
    <link rel="stylesheet" href="https://use.typekit.net/mym7qil.css">

    <!-- Core Style -->
    <link rel="stylesheet" href="{!! asset('webpage/resume/style.css??' . rand(10000, 99999)) !!}">

    <!-- Font Icons -->
    <link rel="stylesheet" href="{!! asset('webpage/resume/css/font-icons.css??' . rand(10000, 99999)) !!}">

    <!-- Niche Demos -->
    <link rel="stylesheet" href="{!! asset('webpage/resume/academic.css??' . rand(10000, 99999)) !!}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{!! asset('webpage/resume/css/custom.css??' . rand(10000, 99999)) !!}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Document Title
 ============================================= -->
    <title>Hi. I'm Bintang Tobing.</title>
    <meta name="title" content="Hi! I'm Bintang Tobing">


    <meta name="robots" content="index, follow">
    <meta name="language" content="English">
    <meta name="google-site-verification" content="MD23XAsqv9D3qtHbVHbHfHoGDO8gQzYLI1jBN6Fha8M">
    <meta name="msvalidate.01" content="85BB1F108E1BB71008A6260F2D262234">
    <link rel="shortcut icon" href="https://res.cloudinary.com/bintangtobing-com/image/upload/v1660038124/icon.png"
        alt="icon Bintang Tobing">
    {{-- meta --}}
    <meta name="og:title" property="og:title" content="Bintang Tobing | Story and Profiles" />
    <meta name="og:url" property="og:url" content="https://bintangtobing.com" />
    <meta name="og:type" property="og:type" content="website" />
    <meta name="og:image" property="og:image"
        content="https://res.cloudinary.com/bintangtobing-com/image/upload/v1660037583/cover.jpg" />
    <meta name="og:description" property="og:description"
        content="Hi I'm Bintang Tobing, you can call me Bin. As you can see, yes this is my personal page for my resume, curicullum vitae, also you can see my projects." />
    <meta name="twitter:card" content="Bintang Tobing | Story and Profiles" />
    <meta name="twitter:title" property="og:title" content="Bintang Tobing | Story and Profiles" />
    <meta name="twitter:url" property="og:url" content="https://bintangtobing.com" />
    <meta name="twitter:type" property="og:type" content="website" />
    <meta name="twitter:image" property="og:image"
        content="https://res.cloudinary.com/bintangtobing-com/image/upload/v1660037583/cover.jpg" />
    <meta name="twitter:description" property="og:description"
        content="Hi I'm Bintang Tobing, you can call me Bin. As you can see, yes this is my personal page for my resume, curicullum vitae, also you can see my projects." />
    <link rel="canonical" href="https://bintangtobing.com/" />
    <link rel="shortcut icon" href="https://res.cloudinary.com/bintangtobing-com/image/upload/v1660038124/icon.png"
        type="image/png" sizes="64x64" />
    <meta name="og:email" content="hello@bintangtobing.com" />
    <meta name="og:phone_number" content="081262845980" />
    <meta name="og:country-name" content="Indonesia" />
    <script src="https://kit.fontawesome.com/38be3cea51.js" crossorigin="anonymous"></script>

</head>

<body class="stretched side-header dark">
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "Bintang Tobing",
            "url": "https://bintangtobing.com",
            "address": "Jl Pelita IV Gang Aman No 7 Medan",
            "sameAs": [
                "https://facebook.com/bintangjtobing",
                "https://instagram.com/bintangjtobing",
                "https://twitter.com/bintangjtobing"
            ]
        }

    </script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-0FYGXHM9EK"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-0FYGXHM9EK');
    </script>
    <button type="button" class="btn btn-dark body-scheme-toggle" data-bodyclass-toggle="dark"
        data-add-class="btn-warning" data-remove-class="btn-dark"
        data-add-html="<i class='bi-brightness-high align-middle'></i><span class='visually-hidden'>Light Mode</span>"
        data-remove-html="<i class='bi-moon-stars align-middle'></i><span class='visually-hidden'>Dark Mode</span>"><span
            class="visually-hidden">Dark Toggle</span></button>

    <!-- Document Wrapper
 ============================================= -->
    <div id="wrapper">

        <header id="header">
            <div id="header-wrap" class="border-0">
                <div class="container">
                    <div class="header-row justify-content-lg-between px-4 px-xl-0">
                        <?php $name = 'Bintang Tobing';
                        $desc = 'I am trusted to build the startup that can help SMEs business process through ERP distributed by SaaS easier!';
                        $token = md5(rand(1, 10) . microtime());
                        ?>
                        <!-- Logo
      ============================================= -->
                        <div class="order-1 order-lg-1 text-lg-center p-lg-4 py-3 mt-lg-5">
                            <img src="{!! asset('webpage/resume/images/person-thumb.jpg??' . rand(10000, 99999)) !!}" alt="Bintang Tobing Logo"
                                class="rounded-circle square square-lg mb-lg-3 d-none d-lg-inline-block">
                            <div class="">
                                <h3 class="mb-0 fw-normal lh-1">Bintang T.</h3>
                                <p class="mb-0 op-06 fw-light">Entreprenuer, Founder of Boxity</p>
                            </div>
                        </div><!-- #logo end -->

                        <div class="primary-menu-trigger order-3 order-lg-2 ms-auto ms-sm-3">
                            <button class="cnvs-hamburger" type="button" title="Open Mobile Menu">
                                <span class="cnvs-hamburger-box"><span class="cnvs-hamburger-inner"></span></span>
                            </button>
                        </div>

                        <div class="header-misc order-2 order-lg-last ms-auto d-none d-sm-flex">
                            <div class="d-flex justify-content-center w-100 py-4">
                                <a href="https://www.facebook.com/bintangjtobing"
                                    class="social-icon si-small rounded-circle bg-contrast-200 mx-lg-1 h-bg-facebook"
                                    style="--cnvs-socialicon-border: 0; --cnvs-socialicon-lineheight: 2rem">
                                    <i class="fa-brands fa-facebook-f"></i>
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>

                                <a href="https://www.instagram.com/bcjlt"
                                    class="social-icon si-small rounded-circle bg-contrast-200 mx-lg-1 h-bg-instagram"
                                    style="--cnvs-socialicon-border: 0; --cnvs-socialicon-lineheight: 2rem">
                                    <i class="fa-brands fa-instagram"></i>
                                    <i class="fa-brands fa-instagram"></i>
                                </a>

                                <a href="https://www.linkedin.com/in/bintangtobing/"
                                    class="social-icon si-small rounded-circle bg-contrast-200 mx-lg-1 h-bg-linkedin"
                                    style="--cnvs-socialicon-border: 0; --cnvs-socialicon-lineheight: 2rem">
                                    <i class="fa-brands fa-linkedin"></i>
                                    <i class="fa-brands fa-linkedin"></i>
                                </a>
                                <a href="https://github.com/bintangjtobing"
                                    class="social-icon si-small rounded-circle bg-contrast-200 mx-lg-1 h-bg-github"
                                    style="--cnvs-socialicon-border: 0; --cnvs-socialicon-lineheight: 2rem">
                                    <i class="fa-brands fa-github"></i>
                                    <i class="fa-brands fa-github"></i>
                                </a>
                                <a href="https://g.dev/bintangtobing"
                                    class="social-icon si-small rounded-circle bg-contrast-200 mx-lg-1 h-bg-google"
                                    style="--cnvs-socialicon-border: 0; --cnvs-socialicon-lineheight: 2rem">
                                    <i class="fa-brands fa-google"></i>
                                    <i class="fa-brands fa-google"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Primary Navigation
      ============================================= -->
                        <nav class="primary-menu order-last order-lg-2">

                            <ul class="menu-container one-page-menu" data-easing="easeInOutExpo" data-speed="1250"
                                data-offset="0">
                                <li class="menu-item"><a class="menu-link" href="#"
                                        data-href="#section-about">
                                        <div><i class="bi-person-circle"></i> About</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="#"
                                        data-href="#section-experience">
                                        <div><i class="bi-person-gear"></i> Experience</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="#"
                                        data-href="#section-research">
                                        <div><i class="bi-binoculars"></i> Research</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="#"
                                        data-href="#section-contact">
                                        <div><i class="bi-envelope-open"></i> Contact</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="{!! asset('business/portfolio-2023.pdf?v=' . $token) !!}"
                                        target="_blank">
                                        <div><i class="bi-box-arrow-up-right"></i> Portfolio</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="{!! asset('business/CV Bintang Tobing Latest Update.pdf?v=' . $token) !!}"
                                        target="_blank">
                                        <div><i class="bi-box-arrow-up-right"></i> Curriculum Vitae</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="mailto:hello@bintangtobing.com"
                                        target="_blank">
                                        <div><i class="bi-box-arrow-up-right"></i> Hire me?</div>
                                    </a></li>
                            </ul>

                        </nav><!-- #primary-menu end -->

                    </div>
                </div>
            </div>
            <div class="header-wrap-clone"></div>
        </header><!-- #header end -->

        <!-- Content
  ============================================= -->
        <section id="content">
            <div class="content-wrap py-lg-0 pt-0 px-4">

                <!-- About
    ============================================= -->

                <div id="section-about" class="page-section py-5 py-lg-6">

                    <div class="container mw-md pt-lg-3">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-md-5">
                                <p class="text-uppercase ls-2 fw-bold color">- BIO</p>
                                <h2 class="display-2 fw-bolder text-uppercase ls-2">Bintang Tobing</h2>
                                <blockquote class="fs-6 border-color">
                                    <p>"Product owner, project manager, and full-stack web developer with 5+ years of
                                        experience in the IT industry, and I am currently building an ERP startup named
                                        <abbr title="PT. Boxity Central Indonesia">Boxity</abbr> for
                                        SMEs in Indonesia."
                                    </p>
                                    <footer class="blockquote-footer font-monospace mb-0">Bintang Tobing
                                    </footer>
                                </blockquote>
                            </div>

                            <div class="col-md-7">
                                <img src="{!! asset('webpage/resume/images/person-1.png??' . rand(10000, 99999)) !!}" alt="Bintang Tobing Logo">
                            </div>
                        </div>

                        <div class="clear my-5"></div>

                        <div class="row gx-5 justify-content-center">
                            <div class="col-md-10">
                                <div class="row gy-5 justify-content-between">
                                    <div class="col-md-5">
                                        <h3 class="border-bottom border-color border-width-3 d-inline-block">Academic
                                            Positions</h3>
                                        <div
                                            class="row feature-box-border-vertical col-mb-50 justify-content-center align-items-center">
                                            <div class="col-12 feature-box fbox-active fbox-dark fbox-sm">
                                                <div class="fbox-icon">
                                                    <i class="fa-solid fa-check"></i>
                                                </div>
                                                <div class="fbox-content">
                                                    <h3>Software Engineer</h3>
                                                    <p class="op-08 mt-0">SMK Negeri 1 Percut Sei Tuan, Medan - June
                                                        2013 — June 2016</p>
                                                </div>
                                            </div>

                                            <div class="clear"></div>

                                            <div class="col-12 feature-box fbox-active fbox-border fbox-light fbox-sm">
                                                <div class="fbox-icon">
                                                    <i class="fa-solid fa-check"></i>
                                                </div>
                                                <div class="fbox-content">
                                                    <h3>Information System</h3>
                                                    <p class="op-08 mt-0">Universitas Prima Indonesia, Medan -
                                                        September 2019 — Present</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-md-5">
                                        <h3 class="border-bottom border-color border-width-3 d-inline-block">Education
                                            & Training</h3>
                                        <div class="clear"></div>
                                        <div class="feature-box fbox-plain fbox-sm">
                                            <div class="fbox-icon">
                                                <i class="fa-solid fa-check"></i>
                                            </div>
                                            <div class="fbox-content">
                                                <h3>Front-End Web Development Quantum Degree</h3>
                                                <p class="mt-0">EXT ACADEMY | SEA's
                                                    Best Coding/Digital Marketing School - February 2019</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="line"></div>
                <!-- summary
    ============================================= -->
                <div id="section-summary" class="py-lg-5 page-section">

                    <div class="container mw-md">
                        <h2 class="text-center display-3 fw-semibold ls-2 mb-5">
                            Summary</h2>
                        <div class="row justify-content-center text-start">
                            <div class="col-12">
                                <p>Experienced development and start in management business experience in 2021 on Boxity
                                    startup. I started Boxity because many of my projects use similar programs and I
                                    thinking about effective ways, that will not make me develop the application from
                                    zero, and I started to design the app, design the flow, design the UI/UX and, the
                                    final idea is, I begin to focus develop in ERP section which distributes it with
                                    SaaS way to SME needs. Still have progress but it's slow because I do it by myself,
                                    I need a tech leader who can help me stay in control of the development process with
                                    the vendor, and indeed I need a salesman, who can help me to sell the product to
                                    make a GREAT REVENUE for we can fly higher! </p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="line"></div>

                <!-- Experience
    ============================================= -->
                <div id="section-experience" class="py-lg-5 page-section">

                    <div class="container mw-md">
                        <h2 class="text-center display-3 fw-semibold ls-2 mb-5"><i class="bi-person-gear color"></i>
                            Experience</h2>
                        <div class="row justify-content-center text-start">
                            <div class="col-3">
                                <p class="mb-2 small">Product Owner<br>May 2021 - Present</p>
                            </div>
                            <div class="col-9 mb-4">
                                <p class="mb-0">
                                    <b>PT. Boxity Central Indonesia · Full-Time</b><br>
                                    Boxity Central Indonesia is here to help and support companies in the 4.0
                                    business industrial revolution, by providing a cloud-based system with an
                                    ERP model for companies with large valuations, and the SAAS (Software as a
                                    Service) model for small to medium MSMEs.
                                    <br><br>
                                    <b>Responsibilities:</b><br>
                                    1. Develop high-quality business strategies and plans ensuring their
                                    alignment with short-term and long-term objectives<br>
                                    2. Lead and motivate subordinates to advance employee engagement and develop
                                    a high-performing managerial team<br>
                                    3. Oversee all operations and business activities to ensure they produce the
                                    desired results and are consistent with the overall strategy and mission<br>
                                    4. Make high-quality investing decisions to advance the business and
                                    increase profits<br>
                                    5. Enforce adherence to legal guidelines and in-house policies to maintain
                                    the company’s legality and business ethics<br>
                                    6. Review financial and non-financial reports to devise solutions or
                                    improvements<br>
                                    7. Build trust relations with key partners and stakeholders and act as a
                                    point of contact for important shareholders<br>
                                    8. Analyze problematic situations and occurrences and provide solutions to
                                    ensure company survival and growth<br>
                                    9. Maintain a deep knowledge of the markets and industry of the
                                    company
                                    <br>
                                </p>
                            </div>
                            <div class="clear"></div>
                            <div class="col-3">
                                <p class="mb-2 small">Frontend Developer<br>Apr 2021 - Oct 2022</p>
                            </div>
                            <div class="col-9 mb-4">
                                <p class="mb-0">
                                    <b>PT. Virtual Online Exchange · Full-Time</b><br>
                                    <b>Role:</b> <br>
                                    1. Implement user requirements in accordance with the agreed design in the
                                    form of modules/programs.<br>
                                    2. Perform automatic and manual testing to ensure the developed
                                    modules/programs function properly.<br>
                                    3. Discipline following the development and release procedures that have
                                    been agreed upon in the "Team Working Agreement" document.<br>
                                    4. Always maintain and improve code quality.<br>
                                    5. Write technical documentation.<br>
                                    <br><br>
                                    <b>Primary Responsibilities and Accountability</b><br>
                                    1. Development of software and web applications; modify and improve existing
                                    software and web applications according to the target time, quality, and
                                    completion metrics,<br>
                                    2. Active participation in scoping and estimating work as part of the
                                    Developer team,<br>
                                    3. Test the software and make sure that the work done is done properly
                                    meet the request, and according to the pre-agreed design,<br>
                                    4. Collaborate with other developers on development projects and ensure
                                    that the work produced is compatible and does not duplicate the work of
                                    others,<br>
                                    5. Diagnose and fix software problems or bugs, support/help
                                    find technical problems and help solve them,<br>
                                    6. Work with the IT Manager and/or the designated Managing Director to
                                    ensure utility targets are met,<br>
                                    7. Cooperate with the IT Manager to ensure that the code is managed and
                                    controlled in accordance with the company's source control strategy for the
                                    work being carried out, <br>
                                </p>
                            </div>
                            <div class="clear"></div>

                            <div class="col-3">
                                <p class="mb-2 small">Full-stack Developer & Project Manager<br>Mar 2019 - Mar 2023</p>
                            </div>
                            <div class="col-9 mb-4">
                                <p class="mb-0">
                                    <b>PT. Benua Solusi Teknologi · Full-Time</b><br>
                                    1. Design, implement, and develop a client project that already provides an
                                    initial description, a rough system,
                                    and an initial fee to be completed immediately. <br>
                                    2. Ensuring all web application systems from both the client project and the
                                    internal office run smoothly without any problems.<br>
                                    3. Ensure and maintain all mail servers from either the VPS or the server
                                    run smoothly without any
                                    obstacles and without any viruses or intruders.<br>
                                    4. Handling advanced security if there are hackers or suspicions on the
                                    system or server.
                                    Innovating, designing, and realizing possible ideas to help office systems
                                    and client systems
                                    make office operational performance easier.<br>
                                    5. Come and provide consultation to customers if anyone asks or makes an
                                    appointment about the development of a website or server.<br>
                                    <br>
                                    <b>Our client that I handled:</b><br>
                                    1. CV Euro UPVC (euroupvc.co.id)<br>
                                    2. PT Sumatera Bio Energi (sumaterabioenergi.com)<br>
                                    3. PT Yasa Ap<br>
                                    4. PT ORI ginal Bird Nest (originalnest.shop)<br>
                                    5. PT Berlian Tangguh Sejahtera (btsa.co.id)<br>
                                    6. PT Panca Lestari Pestindo (pesthunter.co.id)<br>
                                </p>
                            </div>

                            <div class="clear"></div>

                            <div class="col-3">
                                <p class="small">Full-Stack Developer<br>Sep 2018 - May 2019</p>
                            </div>
                            <div class="col-9 mb-4">
                                <p class="mb-0">
                                    <b>PT. Berlian Transtar Abadi · Full-Time</b><br>
                                    1. Ensure all hardware and software run smoothly from head office, branch
                                    offices, out of town offices.
                                    Complete the development of the ASCEND ERP application on the server that
                                    the developer continues to develop. <br>
                                    2. Ensuring all networks between port vendors, airlines, fleets, and between
                                    all related offices are always connected to the server.<br>
                                    3. Ensure a secure network at the internal office or external.
                                    Maintain, build, develop the system needed by the internal office on the
                                    official website system to date. (btsa.co.id)<br>
                                </p>
                            </div>
                            <div class="clear"></div>

                            <div class="col-3">
                                <p class="small">Web Developer & IT Consultant <br> Sep 2017 - Aug 2018
                                </p>
                            </div>
                            <div class="col-9 mb-4">
                                <p class="mb-0">
                                    <b>PT. Metro Interior Medan · Full-Time</b><br>
                                    1. Oversee the management and ensure the operation of all hardware, software
                                    at the head office and branch offices. <br>
                                    2. Ensuring the smooth running of the automation system and server data for
                                    each office
                                    Ensure and provide unsupported networks in each branch shop. <br>
                                    3. Creating, developing, and maintaining a shop website from 0 to completion
                                    (interiorrumahku.id) <br>
                                </p>
                            </div>
                            <div class="clear"></div>

                            <div class="col-3">
                                <p class="small">Web Developer & IT <br> Mar 2017 - Sep 2017</p>
                            </div>
                            <div class="col-9">
                                <p class="mb-0">
                                    <b>PT. BPR NBP 18 · Full-Time</b><br>
                                    1. Oversee the management and ensure the operation of all hardware, software
                                    at the head office, cash offices, and branch offices <br>
                                    2. Ensuring the smooth running of the automation system and server data for
                                    each office <br>
                                    3. Receive and follow up with users on disturbances in the system. <br>
                                    4. Perform routine system maintenance and inventory such as computers, CPUs,
                                    printers, and others <br>
                                    5. Ensure that the NBP Sys operational system runs smoothly according to the
                                    applicable system
                                    Create, manage and maintain the official website bprnbp 18, bprnbp18.co.id
                                    <br>
                                </p>
                            </div>
                        </div>

                        <div class="divider my-lg-6"></div>

                        <div class="row gx-4 gy-5 experience-features">
                            <div class="col-sm-6 col-lg-4">
                                <div class="feature-box fbox-plain">
                                    <div class="fbox-icon">
                                        <a href="#"><i class="bi-clock-history"></i></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3>Time Management</h3>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-4">
                                <div class="feature-box fbox-plain">
                                    <div class="fbox-icon">
                                        <a href="#"><i class="bi-clock-history"></i></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3>Longtime Experience</h3>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-4">
                                <div class="feature-box fbox-plain">
                                    <div class="fbox-icon">
                                        <a href="#"><i class="bi-balloon-heart"></i></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3>Loyalty</h3>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-4">
                                <div class="feature-box fbox-plain">
                                    <div class="fbox-icon">
                                        <a href="#"><i class="bi-person-workspace"></i></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3>Hard Worker</h3>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-4">
                                <div class="feature-box fbox-plain">
                                    <div class="fbox-icon">
                                        <a href="#"><i class="bi-person-up"></i></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3>Great Leadership</h3>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-4">
                                <div class="feature-box fbox-plain">
                                    <div class="fbox-icon">
                                        <a href="#"><i class="bi-headset"></i></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3>Good Speakers</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="line"></div>

                <!-- Research
    ============================================= -->
                <div id="section-research" class="py-lg-5 page-section">

                    <div class="container mw-md">

                        <h2 class="text-center display-3 fw-semibold ls-2 mb-5 mb-lg-6"><i
                                class="bi-binoculars color"></i> Research</h2>

                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="border-bottom border-color border-width-3 d-inline-block">Research Summary
                                </h3>
                                <p class="lead mb-2">Approximately 70% of Small and Medium Enterprises in Indonesia
                                    still do not consider the business assistance system to be too important.</p>
                                <p>The problem is, there are in HR related to system training which is difficult, and
                                    time-consuming in operation, and some news releases also say so, thus, I researched
                                    that there is a gap between businesses that help and small/medium businesses that,
                                    can be reached, for that I tried to make the application appear more friendly with
                                    them.</p>
                            </div>
                            <div class="col-md-6">
                                <h3 class="border-bottom border-color border-width-3 d-inline-block">Interests</h3>
                                <div class="row g-2">
                                    <div class="col-auto">
                                        <div class="small rounded-pill border px-4 py-2">Books</div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="small rounded-pill border px-4 py-2">Business and Management</div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="small rounded-pill border px-4 py-2">Technology</div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="small rounded-pill border px-4 py-2">Optimization</div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="small rounded-pill border px-4 py-2">Algorithms and complexity
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="line"></div>

                <!-- Contact
    ============================================= -->
                <div id="section-contact" class="py-lg-5 page-section">

                    <div class="container mw-md">

                        <h2 class="text-center display-3 fw-semibold ls-2 mb-5 mb-lg-6"><i
                                class="bi-envelope-open color"></i> Contact</h2>

                        <div class="row g-5">

                            <div class="col-md-12">
                                <div class="row gy-5">
                                    <div class="col-12">
                                        <h4 class="border-bottom border-color border-width-3 d-inline-block">My Office
                                        </h4>
                                        <address class="mb-4">
                                            Grand Silipi Tower, Lt 9 Unit O,<br>Jl. Jend. S. Parman Kav 22-24 Jakarta
                                            Barat, 11480 <br>
                                        </address>
                                        <div class="d-flex mb-1"><strong class="col-3">Email:</strong>
                                            hello@bintangtobing.com</div>
                                    </div>
                                    <div class="col-6">
                                        <h4 class="border-bottom border-color border-width-3 d-inline-block">Follow Us
                                        </h4>
                                        <ul class="list-group list-group-flush social-lists">
                                            <a href="https://www.facebook.com/bintangjtobing"
                                                class="list-group-item d-flex pt-0">Facebook <i
                                                    class="bi-arrow-up-right ms-auto"></i></a>
                                            <a href="https://www.linkedin.com/in/bintangtobing/"
                                                class="list-group-item d-flex">LinkedIn <i
                                                    class="bi-arrow-up-right ms-auto"></i></a>
                                            <a href="https://www.instagram.com/bcjlt"
                                                class="list-group-item d-flex">Instagram <i
                                                    class="bi-arrow-up-right ms-auto"></i></a>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </section><!-- #content end -->

        <!-- Footer
  ============================================= -->
        <footer id="footer" class="bg-contrast-0 border-width-1">

            <!-- Copyrights
   ============================================= -->
            <div id="copyrights" class="bg-color">
                <div class="container">
                    <?php $y = date('Y'); ?>
                    <p class="mb-0 text-center text-dark text-opacity-75">Copyrights &copy; {{ $y }} All
                        Rights Reserved by
                        {{ $name }}.</p>
                </div>
            </div><!-- #copyrights end -->
        </footer><!-- #footer end -->

    </div><!-- #wrapper end -->

    <!-- Go To Top
 ============================================= -->
    <div id="gotoTop" class="uil uil-angle-up"></div>

    <!-- JavaScripts
 ============================================= -->
    <script src="{!! asset('webpage/resume/js/functions.js??' . rand(10000, 99999)) !!}"></script>

</body>

</html>
