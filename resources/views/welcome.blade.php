<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hi. I'm Bintang Tobing.</title>
    <meta name="title" content="Hi! I'm Bintang Tobing">
    <meta name="keywords"
        content="Bintang Tobing, Web Developer, Freelance, Jasa Bintang Tobing, Bintang, BintangTobing, designer, web Bintang, bintangtobing, resume bintang tobing, cv bintang tobing, curicullum vitae bintang tobing">
    <meta name="description"
        content="Hi I'm Bintang Tobing, you can call me Bin. As you can see, yes this is my personal page for my resume, curicullum vitae, also you can see my projects.">
    <meta name="author" content="Bintang Jeremia Tobing">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">
    <meta name="google-site-verification" content="MD23XAsqv9D3qtHbVHbHfHoGDO8gQzYLI1jBN6Fha8M">
    <meta name="msvalidate.01" content="85BB1F108E1BB71008A6260F2D262234">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin" />
    <link rel="preload" as="style"
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Roboto:wght@300;400;500;700&amp;display=swap" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Roboto:wght@300;400;500;700&amp;display=swap"
        media="print" onload="this.media='all'" />
    <noscript>
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Roboto:wght@300;400;500;700&amp;display=swap" />
    </noscript>
    <link rel="shortcut icon" href="https://res.cloudinary.com/bintangtobing-com/image/upload/v1660038124/icon.png"
        alt="icon Bintang Tobing">
    <link href="{{ asset('webpage/css/font-awesome/css/all.min.css??' . rand(10000, 99999)) }}" rel="stylesheet">
    <link href="{{ asset('webpage/css/mdb.min.css??' . rand(10000, 99999)) }}" rel="stylesheet">
    <link href="{{ asset('webpage/css/aos.css??' . rand(10000, 99999)) }}" rel="stylesheet">
    <link href="{{ asset('webpage/css/main.css??' . rand(10000, 99999)) }}" rel="stylesheet">
    <noscript>
        <style type="text/css">
            [data-aos] {
                opacity: 1 !important;
                transform: translate(0) scale(1) !important;
            }
        </style>
    </noscript>

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
</head>

<body class="bg-light" id="top" style="background-color: #222222 !important;" oncontextmenu="return false">
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
    <script src="https://kit.fontawesome.com/38be3cea51.js" crossorigin="anonymous"></script>
    <header class="d-print-none">
        <div class="container text-center text-lg-left">
            <div class="pt-4 clearfix" style="color: #fff !important;">
                <?php $name = 'Bintang Tobing';
                $desc = 'I am trusted to build the startup that can help SMEs business process through ERP distributed by SaaS easier!'; ?>
                <h1 class="site-title mb-0">{{ $name }}</h1>
                <div class="site-nav">
                    <nav role="navigation">
                        <ul class="nav justify-content-center">
                            <li class="nav-item"><a class="nav-link" href="#about" title="About"><span
                                        class="menu-title">About</span></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#experience" title="Experience"><span
                                        class="menu-title">Experience</span></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#education" title="Education"><span
                                        class="menu-title">Education</span></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#licenses" title="Licenses"><span
                                        class="menu-title">Licenses & Certifications</span></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#organizations"
                                    title="Organizations"><span class="menu-title">Organizations</span></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#skills" title="Skills"><span
                                        class="menu-title">Skills</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div class="page-content">
        <div class="container">
            <div class="resume-container">
                <div class="shadow-1-strong bg-white my-5" id="intro" style="border-radius: .35rem;">
                    <div class="bg-info text-white">
                        <div class="cover bg-image"><img
                                src="https://res.cloudinary.com/bintangtobing-com/image/upload/v1660037583/cover.jpg" />
                            <div class="mask"
                                style="background-color: rgba(0, 0, 0, 0.3);backdrop-filter: blur(5px);">
                                <div class="text-center p-5">
                                    <div class="avatar p-1"><img class="img-thumbnail shadow-2-strong"
                                            style="width:160px; height:160px; object-fit:cover; border-radius:50% !important;"
                                            src="https://res.cloudinary.com/bintangtobing-com/image/upload/c_fit,h_400,w_400/v1660037251/dp-gradient.jpg"
                                            width="160" height="160" />
                                    </div>
                                    <div class="header-bio mt-3">
                                        <div data-aos="zoom-in" data-aos-delay="0">
                                            <h2 class="h1">{{ $name }}</h2>
                                            <p>{{ $desc }} <a href="https://instagram.com/boxityid"
                                                    style="color: #fff !important;"><abbr
                                                        title="Boxity Central Indonesia">@boxityid</abbr></a>
                                            </p>
                                        </div>
                                        <div class="header-social mb-3 d-print-none" data-aos="zoom-in"
                                            data-aos-delay="200">
                                            <nav role="navigation">
                                                <ul class="nav justify-content-center">
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="https://www.facebook.com/bintangjtobing"
                                                            title="Facebook"><i
                                                                class="fa-brands fa-facebook-f"></i><span
                                                                class="menu-title sr-only">Facebook</span></a>
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="https://www.instagram.com/bcjlt"
                                                            title="Instagram"><i
                                                                class="fa-brands fa-instagram"></i><span
                                                                class="menu-title sr-only">Instagram</span></a>
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="https://www.linkedin.com/in/bintangtobing/"
                                                            title="Instagram"><i
                                                                class="fa-brands fa-linkedin-in"></i><span
                                                                class="menu-title sr-only">LinkedIn</span></a>
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="https://github.com/bintangjtobing" title="Github"><i
                                                                class="fa-brands fa-github"></i><span
                                                                class="menu-title sr-only">Github</span></a>
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="https://behance.net/bintangjtobing"
                                                            title="behance"><i class="fa-brands fa-behance"></i><span
                                                                class="menu-title sr-only">Behance</span></a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                        <?php
                                        $token = md5(rand(1, 10) . microtime());
                                        ?>
                                        <div class="d-print-none"><a
                                                class="btn btn-outline-light btn-lg shadow-sm mt-1 me-3"
                                                href="{!! asset('business/CV Bintang Tobing Latest Update.pdf?v=' . $token) !!}" data-aos="fade-right"
                                                data-aos-delay="700">See CV</a><a
                                                class="btn btn-outline-light btn-lg shadow-sm mt-1 me-3"
                                                href="{!! asset('business/portfolio-2023.pdf?v=' . $token) !!}" data-aos="fade-right"
                                                data-aos-delay="700">Portfolio</a><a
                                                class="btn btn-info btn-lg shadow-sm mt-1"
                                                href="mailto:hello@bintangtobing.com" data-aos="fade-left"
                                                data-aos-delay="700">Hire Me</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shadow-1-strong bg-white my-5 p-5" id="about" style="border-radius: .35rem;">
                    <div class="about-section">
                        <div class="row">
                            <div class="col-md-6">
                                <h2 class="h2 fw-bold mb-4"><i class="fa-regular fa-circle-user"></i> Summary</h2>
                                <p align="justify">
                                    Experienced development and start in management business experience in 2021 on
                                    Boxity startup. I started Boxity because many of my projects use similar programs
                                    and I thinking about effective ways, that will not make me develop the application
                                    from zero, and I started to design the app, design the flow, design the UI/UX and,
                                    the final idea is, I begin to focus develop in ERP section which distributes it with
                                    SaaS way to SME needs. Still have progress but it's slow because I do it by myself,
                                    I need a tech leader who can help me stay in control of the development process with
                                    the vendor, and indeed I need a salesman, who can help me to sell the product to
                                    make a GREAT REVENUE for we can fly higher!
                                </p>
                            </div>
                            <div class="col-md-5 offset-lg-1">
                                <div class="row mt-2">
                                    <h2 class="h2 fw-bold mb-4"><i class="fa-regular fa-file"></i> Bio</h2>
                                    <div class="col-sm-5">
                                        <div class="pb-2 fw-bolder"><i
                                                class="fa-regular fa-calendar-days pe-2 text-muted"
                                                style="width:24px;opacity:0.85;"></i> Date of Birth</div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="pb-2">Oct 21<sup>th</sup>, 1998</div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="pb-2 fw-bolder"><i
                                                class="fa-solid fa-map-location-dot pe-2 text-muted"
                                                style="width:24px;opacity:0.85;"></i> Place of Birth</div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="pb-2">Medan, Indonesia</div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="pb-2 fw-bolder"><i
                                                class="fa-solid fa-calendar-check pe-2 text-muted"
                                                style="width:24px;opacity:0.85;"></i> Age </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <?php $birthday = '21-10-1998';
                                        $age = Carbon::parse($birthday)
                                            ->diff(Carbon::now())
                                            ->format('%y Years, and %m Months'); ?>
                                        <div class="pb-2">{{ $age }}</div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="pb-2 fw-bolder"><i class="fa-regular fa-envelope pe-2 text-muted"
                                                style="width:24px;opacity:0.85;"></i> Email</div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="pb-2">hello@bintangtobing.com</div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="pb-2 fw-bolder"><i class="fa-brands fa-skype pe-2 text-muted"
                                                style="width:24px;opacity:0.85;"></i> Skype</div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="pb-2">hello@bintangtobing.com</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shadow-1-strong bg-white my-5 p-5" id="experience" style="border-radius: .35rem;">
                    <div class="work-experience-section">
                        <h2 class="h2 fw-bold mb-4"><i class="fa-solid fa-briefcase"></i> Work Experience</h2>
                        <div class="timeline">
                            <div class="timeline-card timeline-card-disabled" data-aos="fade-in" data-aos-delay="0">
                                <div class="timeline-head px-4 pt-3">
                                    <div class="h5">CEO-Founder<br><span class="text-muted h6">PT. Boxity Central
                                            Indonesia · Full-Time (Hybrid) · Self Employed</span><br><span
                                            class="text-muted h6">Jakarta, Indonesia</span></div>
                                </div>
                                <div class="timeline-body px-4 pb-4">
                                    <?php $bciStart = '15-05-2021';
                                    $bciAge = Carbon::parse($bciStart)
                                        ->diff(Carbon::now())
                                        ->format('%y yrs, %m mos'); ?>
                                    <div class="text-muted text-small mb-3">
                                        {{ Carbon::parse($bciStart)->isoFormat('MMM YYYY') }} - Present ·
                                        {{ $bciAge }}
                                    </div>
                                    <div>
                                        <p align="justify">
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
                                            <br><br>
                                            <b>Skills:</b> Team Management · Management · Systems Analysis · Risk
                                            Management ·
                                            Business Analysis · Business Strategy
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-card timeline-card-disabled" data-aos="fade-in" data-aos-delay="0">
                                <div class="timeline-head px-4 pt-3">
                                    <div class="h5">Frontend Developer<br><span class="text-muted h6">PT. Virtual
                                            Online
                                            Exchange · Full-Time (Full-Remote)</span><br><span
                                            class="text-muted h6">Jakarta, Indonesia</span></div>
                                </div>
                                <div class="timeline-body px-4 pb-4">
                                    <?php $bciStart = '01-04-2021';
                                    $bciAge = Carbon::parse($bciStart)
                                        ->diff(Carbon::now())
                                        ->format('%y yrs, %m mos'); ?>
                                    <div class="text-muted text-small mb-3">
                                        {{ Carbon::parse($bciStart)->isoFormat('MMM YYYY') }} -
                                        {{ Carbon::parse('25-10-2022')->isoFormat('MMM YYYY') }} · {{ $bciAge }}
                                    </div>
                                    <div>
                                        <p align="justify">
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
                                            work being carried out, <br><br>
                                            <b>Skills:</b> JavaScript · HTML5 · Docker · Cascading Style Sheets (CSS) ·
                                            Vue.js
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-card timeline-card-disabled" data-aos="fade-in" data-aos-delay="0">
                                <div class="timeline-head px-4 pt-3">
                                    <div class="h5">Full-stack Developer<br><span class="text-muted h6">PT. Benua
                                            Solusi
                                            Teknologi · Full-Time (On-Site)</span><br><span
                                            class="text-muted h6">Medan,
                                            Indonesia</span></div>
                                </div>
                                <div class="timeline-body px-4 pb-4">
                                    <?php $bciStart = '01-03-2019';
                                    $bciAge = Carbon::parse($bciStart)
                                        ->diff('01-03-2023')
                                        ->format('%y yrs, %m mos'); ?>
                                    <div class="text-muted text-small mb-3">
                                        {{ Carbon::parse($bciStart)->isoFormat('MMM YYYY') }} -
                                        {{ Carbon::parse('01-03-2023')->isoFormat('MMM YYYY') }} · {{ $bciAge }}
                                    </div>
                                    <div>
                                        <p align="justify">
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
                                            6. PT Panca Lestari Pestindo (pesthunter.co.id)<br><br>
                                            <b>Skills:</b> Database Administration · Bug Tracking · Project Management ·
                                            Project Planning · Laravel · Vue.js · SQL
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-card timeline-card-disabled" data-aos="fade-in" data-aos-delay="0">
                                <div class="timeline-head px-4 pt-3">
                                    <div class="h5">Web Developer<br><span class="text-muted h6">Digital Envision
                                            Pty
                                            Ltd · Full-Time (Hybrid)</span><br><span class="text-muted h6">Melbourne,
                                            Victoria, Australia</span></div>
                                </div>
                                <div class="timeline-body px-4 pb-4">
                                    <?php $bciStart = '01-12-2020';
                                    $bciAge = Carbon::parse($bciStart)
                                        ->diff('01-02-2021')
                                        ->format('%m mos'); ?>
                                    <div class="text-muted text-small mb-3">
                                        {{ Carbon::parse($bciStart)->isoFormat('MMM YYYY') }} -
                                        {{ Carbon::parse('01-02-2021')->isoFormat('MMM YYYY') }} · {{ $bciAge }}
                                    </div>
                                    <div>
                                        <p align="justify">
                                            <b>Skills:</b> UIX · Laravel · PHP · Vue.js · SQL
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-card timeline-card-disabled" data-aos="fade-in" data-aos-delay="0">
                                <div class="timeline-head px-4 pt-3">
                                    <div class="h5">Full-Stack Developer<br><span class="text-muted h6">PT.
                                            Berlian
                                            Transtar Abadi · Full-Time (On-Site)</span><br><span
                                            class="text-muted h6">Medan, Indonesia</span></div>
                                </div>
                                <div class="timeline-body px-4 pb-4">
                                    <?php $bciStart = '18-09-2018';
                                    $bciAge = Carbon::parse($bciStart)
                                        ->diff('01-05-2019')
                                        ->format('%y yrs, %m mos'); ?>
                                    <div class="text-muted text-small mb-3">
                                        {{ Carbon::parse($bciStart)->isoFormat('MMM YYYY') }} -
                                        {{ Carbon::parse('01-05-2019')->isoFormat('MMM YYYY') }} · {{ $bciAge }}
                                    </div>
                                    <div>
                                        <p align="justify">
                                            1. Ensure all hardware and software run smoothly from head office, branch
                                            offices, out of town offices.
                                            Complete the development of the ASCEND ERP application on the server that
                                            the developer continues to develop. <br>
                                            2. Ensuring all networks between port vendors, airlines, fleets, and between
                                            all related offices are always connected to the server.<br>
                                            3. Ensure a secure network at the internal office or external.
                                            Maintain, build, develop the system needed by the internal office on the
                                            official website system to date. (btsa.co.id)<br><br>
                                            <b>Skills:</b> Server Administration · Laravel · PHP · Vue.js · SQL
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-card timeline-card-disabled" data-aos="fade-in" data-aos-delay="0">
                                <div class="timeline-head px-4 pt-3">
                                    <div class="h5">Web Developer & IT Consultant<br><span
                                            class="text-muted h6">PT.
                                            Metro Interior Medan · Full-Time (On-Site)</span><br><span
                                            class="text-muted h6">Medan, Indonesia</span></div>
                                </div>
                                <div class="timeline-body px-4 pb-4">
                                    <?php $bciStart = '01-09-2017';
                                    $bciAge = Carbon::parse($bciStart)
                                        ->diff('01-08-2018')
                                        ->format('%m mos'); ?>
                                    <div class="text-muted text-small mb-3">
                                        {{ Carbon::parse($bciStart)->isoFormat('MMM YYYY') }} -
                                        {{ Carbon::parse('01-08-2018')->isoFormat('MMM YYYY') }} · {{ $bciAge }}
                                    </div>
                                    <div>
                                        <p align="justify">
                                            1. Oversee the management and ensure the operation of all hardware, software
                                            at the head office and branch offices. <br>
                                            2. Ensuring the smooth running of the automation system and server data for
                                            each office
                                            Ensure and provide unsupported networks in each branch shop. <br>
                                            3. Creating, developing, and maintaining a shop website from 0 to completion
                                            (interiorrumahku.id) <br>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-card timeline-card-disabled" data-aos="fade-in" data-aos-delay="0">
                                <div class="timeline-head px-4 pt-3">
                                    <div class="h5">Web Developer & IT<br><span class="text-muted h6">PT.
                                            BPR NBP 18 · Full-Time (On-Site)</span><br><span
                                            class="text-muted h6">Perbaungan, Indonesia</span>
                                    </div>
                                </div>
                                <div class="timeline-body px-4 pb-4">
                                    <?php $bciStart = '01-03-2017';
                                    $bciAge = Carbon::parse($bciStart)
                                        ->diff('01-09-2017')
                                        ->format('%m mos'); ?>
                                    <div class="text-muted text-small mb-3">
                                        {{ Carbon::parse($bciStart)->isoFormat('MMM YYYY') }} -
                                        {{ Carbon::parse('01-09-2017')->isoFormat('MMM YYYY') }} · {{ $bciAge }}
                                    </div>
                                    <div>
                                        <p align="justify">
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
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shadow-1-strong bg-white my-5 p-5" id="education" style="border-radius: .35rem;">
                    <div class="education-section">
                        <h2 class="h2 fw-bold mb-4"><i class="fa-solid fa-user-graduate"></i> Education</h2>
                        <div class="timeline">
                            {{-- <div class="timeline-card timeline-card-disabled" data-aos="fade-in" data-aos-delay="0">
                                <div class="timeline-head px-4 pt-3">
                                    <div class="h5">Universitas Prima Indonesia <br><span
                                            class="text-muted h6">Bachelor's degree, Information Systems</span> </div>
                                </div>
                                <div class="timeline-body px-4 pb-4">
                                    <?php $eduStart = '10-08-2019';
                                    $eduAge = Carbon::parse($eduStart)
                                        ->diff(Carbon::now())
                                        ->format('%y yrs, %m mos'); ?>
                                    <div class="text-muted text-small mb-3">
                                        {{Carbon::parse($eduStart)->isoFormat('MMM YYYY')}} - Present · {{$eduAge}}
                                    </div>
                                </div>
                            </div> --}}
                            <div class="timeline-card timeline-card-disabled" data-aos="fade-in" data-aos-delay="0">
                                <div class="timeline-head px-4 pt-3">
                                    <div class="h5">SMK Negeri 1 Percut Sei Tuan <br><span
                                            class="text-muted h6">High
                                            School Graduate, Software engineering</span>
                                    </div>
                                </div>
                                <div class="timeline-body px-4 pb-4">
                                    <?php $eduStart = '01-06-2013';
                                    $eduAge = Carbon::parse($eduStart)
                                        ->diff('01-06-2016')
                                        ->format('%y yrs'); ?>
                                    <div class="text-muted text-small mb-3">
                                        {{ Carbon::parse($eduStart)->isoFormat('MMM YYYY') }} -
                                        {{ Carbon::parse('01-06-2016')->isoFormat('MMM YYYY') }} · {{ $eduAge }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shadow-1-strong bg-white my-5 p-5" id="licenses" style="border-radius: .35rem;">
                    <div class="education-section">
                        <h2 class="h2 fw-bold mb-4"><i class="fa-solid fa-id-card"></i> License & Certifications</h2>
                        <div class="timeline">
                            <div class="timeline-card timeline-card-disabled" data-aos="fade-in" data-aos-delay="0">
                                <div class="timeline-head px-4 pt-3">
                                    <div class="h5">Cyber Security - Mini Bootcamp <br><span
                                            class="text-muted h6">Habiskerja.com</span>
                                    </div>
                                </div>
                                <div class="timeline-body px-4 pb-4">
                                    <div class="text-muted text-small mb-3">
                                        Issued Jul 2022 - Expires Jul 2026
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-card timeline-card-disabled" data-aos="fade-in" data-aos-delay="0">
                                <div class="timeline-head px-4 pt-3">
                                    <div class="h5">3D Design with Blender <br><span class="text-muted h6">Rubrik
                                            Grafis</span>
                                    </div>
                                </div>
                                <div class="timeline-body px-4 pb-4">
                                    <div class="text-muted text-small mb-3">
                                        Issued Aug 2021
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-card timeline-card-disabled" data-aos="fade-in" data-aos-delay="0">
                                <div class="timeline-head px-4 pt-3">
                                    <div class="h5">Front-End Web Development Quantum Degree <br><span
                                            class="text-muted h6">NEXT Academy | SEA's Best Coding/ Digital
                                            Marketing School</span><br><span class="text-muted h6">Credential
                                            ID:
                                            8-b607091d-72c1-4a40-ad96-74187180d53d</span>
                                    </div>
                                </div>
                                <div class="timeline-body px-4 pb-4">
                                    <div class="text-muted text-small mb-3">
                                        Issued Feb 2019
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-card timeline-card-disabled" data-aos="fade-in" data-aos-delay="0">
                                <div class="timeline-head px-4 pt-3">
                                    <div class="h5">Web Promotions & Optimize the SEO<br><span
                                            class="text-muted h6">Credential
                                            ID:
                                            13042017/24062/4/14920729344392702941/N-86/BM-2017</span>
                                    </div>
                                </div>
                                <div class="timeline-body px-4 pb-4">
                                    <div class="text-muted text-small mb-3">
                                        Issued Apr 2017
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shadow-1-strong bg-white my-5 p-5" id="organizations" style="border-radius: .35rem;">
                    <div class="work-experience-section">
                        <h2 class="h2 fw-bold mb-4"><i class="fa-solid fa-users-viewfinder"></i> Organizations</h2>
                        <div class="timeline">
                            <div class="timeline-card timeline-card-disabled" data-aos="fade-in" data-aos-delay="0">
                                <div class="timeline-head px-4 pt-3">
                                    <div class="h5">Chief Ressort Coordinator<br><span
                                            class="text-muted h6">Remaja
                                            Naposobulung HKBP Ressort Medan Utara</span><br><span
                                            class="text-muted h6">Medan, Indonesia</span></div>
                                </div>
                                <div class="timeline-body px-4 pb-4">
                                    <?php $orgStart = '10-07-2019';
                                    $orgEnd = Carbon::parse($orgStart)
                                        ->diff('10-07-2020')
                                        ->format('%y yrs, %m mos'); ?>
                                    <div class="text-muted text-small mb-3">
                                        {{ Carbon::parse($orgStart)->isoFormat('MMM YYYY') }} -
                                        {{ Carbon::parse('10-07-2020')->isoFormat('MMM YYYY') }} · {{ $orgEnd }}
                                    </div>
                                    <div>
                                        <p align="justify">
                                            What is meant by the northern field ressort is a combination of several HKBP
                                            churches in the area.
                                            <br><br>
                                            <b>Responsibilities:</b><br>
                                            My job as the coordinator of HKBP Glugur in the North Medan HKBP Ressort
                                            is<br>
                                            1. Ensure that every member who joins the organization 80% participates in
                                            the HKBP Ressort Medan Utara activities.<br>
                                            2. Ensuring membership administration reports are always completed on
                                            time.<br>
                                            3. Ensuring that activities related to the HKBP Glugur organization in the
                                            HKBP Ressort Medan Utara will run smoothly.<br>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-card timeline-card-disabled" data-aos="fade-in" data-aos-delay="0">
                                <div class="timeline-head px-4 pt-3">
                                    <div class="h5">Chairman<br><span class="text-muted h6">Remaja
                                            Naposobulung HKBP Glugur</span><br><span class="text-muted h6">Medan,
                                            Indonesia</span></div>
                                </div>
                                <div class="timeline-body px-4 pb-4">
                                    <?php $orgStart = '10-04-2017';
                                    $orgEnd = Carbon::parse($orgStart)
                                        ->diff('10-05-2020')
                                        ->format('%y yrs, %m mos'); ?>
                                    <div class="text-muted text-small mb-3">
                                        {{ Carbon::parse($orgStart)->isoFormat('MMM YYYY') }} -
                                        {{ Carbon::parse('10-05-2020')->isoFormat('MMM YYYY') }} · {{ $orgEnd }}
                                    </div>
                                    <div>
                                        <p align="justify">
                                            <b>Responsibilities:</b><br>
                                            1. Creating, designing, and managing each section so that all activities run
                                            according to the predetermined program. <br>
                                            2. Manage the membership administration of all members who are members of
                                            the organization.<br>
                                            3. Organize and manage the flow of financial expenses and income within the
                                            organization.<br>
                                            4. Plan, determine and organize social service activities, among church
                                            members, and annual activities of the organization.<br>
                                            5. Responsible for reporting every activity.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-card timeline-card-disabled" data-aos="fade-in" data-aos-delay="0">
                                <div class="timeline-head px-4 pt-3">
                                    <div class="h5">Vice Chairman<br><span class="text-muted h6">Remaja
                                            Naposobulung HKBP Glugur</span><br><span class="text-muted h6">Medan,
                                            Indonesia</span></div>
                                </div>
                                <div class="timeline-body px-4 pb-4">
                                    <?php $orgStart = '10-04-2015';
                                    $orgEnd = Carbon::parse($orgStart)
                                        ->diff('10-06-2017')
                                        ->format('%y yrs, %m mos'); ?>
                                    <div class="text-muted text-small mb-3">
                                        {{ Carbon::parse($orgStart)->isoFormat('MMM YYYY') }} -
                                        {{ Carbon::parse('10-06-2017')->isoFormat('MMM YYYY') }} · {{ $orgEnd }}
                                    </div>
                                    <div>
                                        <p align="justify">
                                            <b>Responsibilities:</b><br>
                                            1. Manage the membership administration of all members who are members of
                                            the organization. <br>
                                            2. Organize and manage the flow of financial expenses and income within the
                                            organization.<br>
                                            3. Plan, determine and organize social service activities, among church
                                            members, and annual activities of the organization.<br>
                                            4. Responsible for reporting every activity<br>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shadow-1-strong bg-white my-5 p-5" id="skills" style="border-radius: .35rem;">
                    <div class="skills-section">
                        <h2 class="h2 fw-bold mb-4"><i class="fa-solid fa-feather-pointed"></i> Skills</h2>
                        <div class="row">
                            <div class="col-md-6">
                                <p>
                                <ul>
                                    <li>Database Administration</li>
                                    <li>Bug Tracking</li>
                                    <li>Javascript</li>
                                    <li>HTML5</li>
                                    <li>Docker</li>
                                    <li>Team Management</li>
                                    <li>Risk Management</li>
                                    <li>Business Analyst</li>
                                </ul>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p>
                                <ul>
                                    <li>Business Strategy</li>
                                    <li>Server Administration</li>
                                    <li>UI/UX</li>
                                    <li>Project Management & Planning</li>
                                    <li>Front-End Web Development</li>
                                    <li>Laravel</li>
                                    <li>Full-Stack Development</li>
                                    <li>Adobe Photoshop, Illustrator, & Premiere</li>
                                    <li>PHP</li>
                                    <li>MYSQL</li>
                                    <li>CSS3</li>
                                    <li>Vue.js</li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="pt-4 pb-4 text-muted text-center d-print-none">
        <div class="container">
            <div class="my-3">
                <div class="h4">{{ $name }}</div>
                <div class="footer-nav">
                    <nav role="navigation">
                        <ul class="nav justify-content-center">
                            <li class="nav-item"><a class="nav-link" href="https://www.facebook.com/bintangjtobing"
                                    title="Facebook"><i class="fa-brands fa-facebook-f"></i><span
                                        class="menu-title sr-only">Facebook</span></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="https://www.instagram.com/bcjlt"
                                    title="Instagram"><i class="fa-brands fa-instagram"></i><span
                                        class="menu-title sr-only">Instagram</span></a>
                            </li>
                            <li class="nav-item"><a class="nav-link"
                                    href="https://www.linkedin.com/in/bintangtobing/" title="Instagram"><i
                                        class="fa-brands fa-linkedin-in"></i><span
                                        class="menu-title sr-only">LinkedIn</span></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="https://github.com/bintangjtobing"
                                    title="Github"><i class="fa-brands fa-github"></i><span
                                        class="menu-title sr-only">Github</span></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="https://behance.net/bintangjtobing"
                                    title="Behance"><i class="fa-brands fa-behance"></i><span
                                        class="menu-title sr-only">Behance</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="text-small">
                <?php $y = date('Y'); ?>
                <div class="mb-1">&copy;{{ $y }} Bintang Tobing. All rights reserved.</div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('webpage/scripts/mdb.min.js?' . rand(10000, 99999)) }}"></script>
    <script src="{{ asset('webpage/scripts/aos.js?' . rand(10000, 99999)) }}"></script>
    <script src="{{ asset('webpage/scripts/main.js?' . rand(10000, 99999)) }}"></script>
</body>

</html>
