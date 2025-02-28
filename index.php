<!-- index.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deni{Dev} Portfolio</title>
    <link rel="stylesheet" href="styles.css">
    <!-- Owl Carousel Dependencies -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
</head>
<body>
    <nav class="navbar">
        <div class="logo">Deni{<span class="dev">Dev</span>}</div>
        <ul class="nav-items">
            <li><a href="#home" class="nav-link">Home</a></li>
            <li><a href="#education" class="nav-link">Education</a></li>
            <li><a href="#certificates" class="nav-link">Certificates</a></li>
            <li><a href="#projects" class="nav-link">Projects</a></li>
            <li><a href="#contact" class="nav-link">Contact Me</a></li>
        </ul>
    </nav>

    <!-- Add this inside the <body> after the <nav> -->
    <section id="home" class="home-section">
        <div class="content-wrapper">
            <div class="text-container">
                <div class="name-title">
                    <h1 class="name">I'm DENIELLE S. TOLENTINO</h1>
                    <h2 class="title">An aspiring graphic designer</h2>
                </div>
                
                <div class="info-stack">
                    <div class="info-card">
                        <h3>ADDRESS</h3>
                        <p>Nampicuan, Nueva Ecija,<br>Philippines 3116</p>
                    </div>
                    <div class="info-card">
                        <h3>PHONE</h3>
                        <p>+63 966 335 9741</p>
                    </div>
                    <div class="info-card">
                        <h3>E-MAIL</h3>
                        <p>denielle.tolentino@panpacificu.edu.ph</p>
                    </div>
                </div>

                <button class="resume-btn">
                    <i class="fas fa-download"></i> Download Resume
                </button>
            </div>

            <div class="image-container">
                <img src="denielle-hd.jfif" alt="Denielle Tolentino" class="profile-img">
                <div class="circle-deco"></div>
            </div>
        </div>

        <div class="floating-shapes">
            <div class="shape circle pink"></div>
            <div class="shape triangle blue"></div>
            <div class="shape square purple"></div>
        </div>
    </section>

    <!-- Add after Home section -->
    <section id="education" class="education-section">
        <div class="education-container">
            <h2 class="section-title">Education Journey</h2>
            
            <div class="timeline">
                <!-- Timeline Line -->
                <div class="timeline-line"></div>

                <!-- Timeline Items -->
                <div class="timeline-item" data-year="2025 - Present">
                    <div class="timeline-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="timeline-content">
                        <h3>Bachelor of Science: Information Technology</h3>
                        <p class="institution">Panpacific University - Urdaneta City</p>
                        <p class="details">3rd Year Student</p>
                        <div class="achievement-badge">
                            <i class="fas fa-star"></i> Currently Pursuing
                        </div>
                    </div>
                </div>

                <div class="timeline-item" data-year="2020 - 2022">
                    <div class="timeline-icon">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="timeline-content">
                        <h3>Senior High School</h3>
                        <p class="institution">Anao Senior High School - San Francisco West, Anao Tarlac</p>
                        <div class="achievement-badge gold">
                            <i class="fas fa-award"></i> With Honors
                        </div>
                    </div>
                </div>

                <div class="timeline-item" data-year="2016 - 2020">
                    <div class="timeline-icon">
                        <i class="fas fa-pencil-alt"></i>
                    </div>
                    <div class="timeline-content">
                        <h3>Junior High School</h3>
                        <p class="institution">Anao High School - Poblacion, Anao Tarlac</p>
                        <div class="achievement-badge gold">
                            <i class="fas fa-award"></i> With Honors
                        </div>
                    </div>
                </div>

                <div class="timeline-item" data-year="2010 - 2016">
                    <div class="timeline-icon">
                        <i class="fas fa-school"></i>
                    </div>
                    <div class="timeline-content">
                        <h3>Elementary</h3>
                        <p class="institution">New Life Learning School - San Roque Anao Tarlac</p>
                        <div class="achievement-badge">
                            <i class="fas fa-medal"></i> Academic Awardee
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Floating Elements -->
        <div class="education-deco">
            <div class="deco-circle pink"></div>
            <div class="deco-square blue"></div>
            <div class="deco-triangle purple"></div>
        </div>
    </section>

    <section id="certificates" class="certificates-section">
        <div class="certificates-container">
            <h2 class="section-title">Professional Accreditations</h2>
            
            <div class="certificates-grid">
                <!-- Certificate 1: Intro to CSS -->
                <div class="certificate-card" data-category="development">
                    <div class="certificate-header">
                        <i class="fas fa-code icon css"></i>
                        <h3>Introduction to CSS</h3>
                    </div>
                    <div class="certificate-body">
                        <p class="issuer">TESDA</p>
                        <div class="badge">Frontend Development</div>
                    </div>
                    <a href="Certificates/COC INTRO TO CSS.pdf" class="download-btn">
                        <i class="fas fa-file-pdf"></i> View Certificate
                    </a>
                </div>
    
                <!-- Certificate 2: Cybersecurity -->
                <div class="certificate-card" data-category="cybersecurity">
                    <div class="certificate-header">
                        <i class="fas fa-shield-alt icon security"></i>
                        <h3>Cybersecurity Essentials</h3>
                    </div>
                    <div class="certificate-body">
                        <p class="issuer">Cisco Network Academy</p>
                        <div class="badge">Security</div>
                    </div>
                    <a href="Certificates/INTRODUCTION TO CYBERSECURITY.pdf" class="download-btn">
                        <i class="fas fa-file-pdf"></i> View Certificate
                    </a>
                </div>
    
                <!-- Certificate 3: Computer Systems -->
                <div class="certificate-card" data-category="systems">
                    <div class="certificate-header">
                        <i class="fas fa-desktop icon systems"></i>
                        <h3>Computer Systems Installation</h3>
                    </div>
                    <div class="certificate-body">
                        <p class="issuer">TESDA</p>
                        <div class="badge">Technical</div>
                    </div>
                    <a href="Certificates/Installing%20and%20Configuring%20Computer%20Systems.pdf" class="download-btn">
                        <i class="fas fa-file-pdf"></i> View Certificate
                    </a>
                </div>
    
                <!-- Certificate 4: System Maintenance -->
                <div class="certificate-card" data-category="systems">
                    <div class="certificate-header">
                        <i class="fas fa-tools icon maintenance"></i>
                        <h3>System Maintenance</h3>
                    </div>
                    <div class="certificate-body">
                        <p class="issuer">TESDA</p>
                        <div class="badge">Technical</div>
                    </div>
                    <a href="Certificates/Maintaining%20Computer%20Systems%20and%20Networks.pdf" class="download-btn">
                        <i class="fas fa-file-pdf"></i> View Certificate
                    </a>
                </div>
    
                <!-- Certificate 5: Network Setup -->
                <div class="certificate-card" data-category="networking">
                    <div class="certificate-header">
                        <i class="fas fa-network-wired icon network"></i>
                        <h3>Network Configuration</h3>
                    </div>
                    <div class="certificate-body">
                        <p class="issuer">TESDA</p>
                        <div class="badge">Networking</div>
                    </div>
                    <a href="Certificates/setting%20up%20computer%20network.pdf" class="download-btn">
                        <i class="fas fa-file-pdf"></i> View Certificate
                    </a>
                </div>
    
                <!-- Certificate 6: Server Setup -->
                <div class="certificate-card" data-category="networking">
                    <div class="certificate-header">
                        <i class="fas fa-server icon server"></i>
                        <h3>Server Configuration</h3>
                    </div>
                    <div class="certificate-body">
                        <p class="issuer">TESDA</p>
                        <div class="badge">Infrastructure</div>
                    </div>
                    <a href="Certificates/setting%20up%20computer%20servers.pdf" class="download-btn">
                        <i class="fas fa-file-pdf"></i> View Certificate
                    </a>
                </div>
    
                <!-- Certificate 7: Technopreneurship -->
                <div class="certificate-card" data-category="business">
                    <div class="certificate-header">
                        <i class="fas fa-lightbulb icon business"></i>
                        <h3>Technopreneurship 101</h3>
                    </div>
                    <div class="certificate-body">
                        <p class="issuer">TESDA</p>
                        <div class="badge">Entrepreneurship</div>
                    </div>
                    <a href="Certificates/SMART%20Technopreneurship%20101.pdf" class="download-btn">
                        <i class="fas fa-file-pdf"></i> View Certificate
                    </a>
                </div>
    
                <!-- Certificate 8: Academic Achievement -->
                <div class="certificate-card" data-category="academic">
                    <div class="certificate-header">
                        <i class="fas fa-award icon academic"></i>
                        <h3>Solid Waste Management</h3>
                    </div>
                    <div class="certificate-body">
                        <p class="issuer">TESDA</p>
                        <div class="badge">Business</div>
                    </div>
                    <a href="Certificates/COC Performing Solid Waste Management.pdf" class="download-btn">
                        <i class="fas fa-file-pdf"></i> View Certificate
                    </a>
                </div>
            </div>
    
            <div class="floating-deco">
                <div class="deco-circle gradient-1"></div>
                <div class="deco-blob gradient-2"></div>
            </div>
        </div>
    </section>

    <!-- Web Apps Section -->
    <section class="project-section" id="projects">
        <h2 class="project-title">Projects</h2>
        
        <!-- EYETECH Carousel -->
        <div class="container">
            <h3 class="project-subtitle">EYETECH</h3>
            <div class="owl-carousel owl-theme">
                <?php for($i=1; $i<=11; $i++): ?>
                <div class="item">
                    <img src="Developed web apps/EYETECH/<?= $i ?>.png" class="project-image" alt="EYETECH Project <?= $i ?>">
                </div>
                <?php endfor; ?>
            </div>
        </div>

        <!-- PCSTREE Carousel -->
        <div class="container mt-5">
            <h3 class="project-subtitle">PCSTREE</h3>
            <div class="owl-carousel owl-theme">
                <?php for($i=1; $i<=3; $i++): ?>
                <div class="item">
                    <img src="Developed web apps/PCSTREE/<?= $i ?>.jpg" class="project-image" alt="PCSTREE Project <?= $i ?>">
                </div>
                <?php endfor; ?>
            </div>
        </div>

        <!-- Student List App Carousel -->
        <div class="container mt-5">
            <h3 class="project-subtitle">Student List App</h3>
            <div class="owl-carousel owl-theme">
                <?php for($i=1; $i<=4; $i++): ?>
                <div class="item">
                    <img src="Developed web apps/Student List App/<?= $i ?>.JPG" class="project-image" alt="Student List Project <?= $i ?>">
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>

    <!-- Design Projects Section -->
    <section class="project-section" style="background: #fff;">
        <h2 class="project-title">Design Projects</h2>
        
        <!-- Flyers Carousel -->
        <div class="container">
            <h3 class="project-subtitle">Flyers</h3>
            <div class="owl-carousel owl-theme">
                <?php for($i=1; $i<=5; $i++): ?>
                <div class="item">
                    <img src="Flyers/<?= $i ?>.png" class="project-image" alt="Flyer Design <?= $i ?>">
                </div>
                <?php endfor; ?>
            </div>
        </div>

        <!-- Infographics Carousel -->
        <div class="container mt-5">
            <h3 class="project-subtitle">Infographics</h3>
            <div class="owl-carousel owl-theme">
                <?php for($i=1; $i<=2; $i++): ?>
                <div class="item">
                    <img src="Infographics/<?= $i ?>.jpg" class="project-image" alt="Infographic <?= $i ?>">
                </div>
                <?php endfor; ?>
            </div>
        </div>

        <!-- Invitations Carousel -->
        <div class="container mt-5">
            <h3 class="project-subtitle">Invitations</h3>
            <div class="owl-carousel owl-theme">
                <?php for($i=1; $i<=8; $i++): ?>
                <div class="item">
                    <img src="Invitations/<?= $i ?>.jpg" class="project-image" alt="Invitation Design <?= $i ?>">
                </div>
                <?php endfor; ?>
            </div>
        </div>

        <!-- Other Designs Carousel -->
        <div class="container mt-5">
            <h3 class="project-subtitle">Other Designs</h3>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <img src="other/1.jpg" class="project-image" alt="Other Design 1">
                </div>
                <div class="item">
                    <img src="other/2.png" class="project-image" alt="Other Design 2">
                </div>
            </div>
        </div>

        <!-- Tarpaulin Design -->
        <div class="container mt-5">
            <h3 class="project-subtitle">Tarpaulin Design</h3>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <img src="Tarpaulin/PISTA PATRON.png" class="project-image" alt="Pista Patron Tarpaulin">
                </div>
            </div>
        </div>
    </section>

    <!-- Required Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script>
        $(document).ready(function(){
        // Initialize each carousel individually
        $('.owl-carousel').each(function(){
            const $carousel = $(this);
            const itemCount = $carousel.find('.item').length;
            
            const baseConfig = {
                loop: itemCount > 1,
                margin: 20,
                nav: itemCount > 1,
                dots: itemCount > 1,
                autoplay: itemCount > 1,
                autoplayTimeout: 3000,
                responsive: {
                    0: { items: Math.min(1, itemCount) },
                    768: { items: Math.min(2, itemCount) },
                    992: { items: Math.min(3, itemCount) }
                }
            };

            // Special cases
            if(itemCount === 2) {
                baseConfig.responsive = {
                    0: { items: 1 },
                    576: { items: 2 }
                };
            }

            if(itemCount === 1) {
                baseConfig.loop = false;
                baseConfig.autoplay = false;
            }

            $carousel.owlCarousel(baseConfig);

            // Add hover pause functionality only for autoplaying carousels
            if(itemCount > 1) {
                $carousel.hover(
                    function() { $(this).trigger('stop.owl.autoplay'); },
                    function() { $(this).trigger('play.owl.autoplay'); }
                );
            }
        });
    });
    </script>

    <script src="script.js"></script>
</body>
</html>