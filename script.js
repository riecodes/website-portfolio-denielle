// script.js
document.addEventListener('DOMContentLoaded', () => {
    const navbar = document.querySelector('.navbar');
    
    // Scroll effect
    window.addEventListener('scroll', () => {
        if (window.scrollY > 0) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    // Hover effect reinforcement
    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('mouseenter', () => {
            link.style.transform = 'translateY(-2px)';
        });
        
        link.addEventListener('mouseleave', () => {
            link.style.transform = 'translateY(0)';
        });
    });

    // Initial animation trigger
    setTimeout(() => {
        document.querySelectorAll('.nav-items li').forEach((item, index) => {
            item.style.opacity = '1';
        });
    }, 500);

    // Add to script.js
    // Add Font Awesome
    const faScript = document.createElement('script');
    faScript.src = 'https://kit.fontawesome.com/your-kit-code.js';
    document.head.appendChild(faScript);

    // Add smooth scroll for nav links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    // Add to script.js
    // Intersection Observer for scroll animations
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = 1;
                entry.target.style.transform = 'translateY(0)';
            }
        });
    });

    document.querySelectorAll('.timeline-item').forEach((el) => {
        observer.observe(el);
    });


    // Initialize all carousels
    document.querySelectorAll('.carousel').forEach(carousel => {
        new bootstrap.Carousel(carousel, {
            interval: false,
            wrap: true
        })
    })

    // Handle tab changes
    document.getElementById('pills-tab').addEventListener('shown.bs.tab', event => {
        const activePane = document.querySelector(event.target.getAttribute('data-bs-target'));
        activePane.querySelector('.carousel').carousel('cycle');
    })
    
});

