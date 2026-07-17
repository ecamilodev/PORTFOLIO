/* ── Smooth scroll for nav links ── */
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
        // Update active nav
        document.querySelectorAll('.nav-link').forEach(l => l.classList.remove('active'));
        this.classList.add('active');
    });
});

/* ── Intersection Observer for scroll-based nav highlighting ── */
const sections = document.querySelectorAll('section[id]');
const navLinks = document.querySelectorAll('.nav-link');

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            navLinks.forEach(link => {
                link.classList.toggle('active',
                    link.getAttribute('href') === '#' + entry.target.id
                );
            });
        }
    });
}, { rootMargin: '-20% 0px -60% 0px' });

sections.forEach(section => observer.observe(section));

/* ── Fade-in on scroll ── */
const fadeElements = document.querySelectorAll('.fade-up');
const fadeObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('opacity-100', 'translate-y-0');
            entry.target.classList.remove('opacity-0', 'translate-y-4');
            fadeObserver.unobserve(entry.target);
        }
    });
}, { threshold: 0.1 });

fadeElements.forEach(el => fadeObserver.observe(el));

/* ── Mobile menu toggle ── */
const menuBtn = document.getElementById('menu-toggle');
const sidebar = document.getElementById('sidebar');
if (menuBtn && sidebar) {
    menuBtn.addEventListener('click', () => {
        sidebar.classList.toggle('-translate-x-full');
    });
    // Close on link click (mobile)
    sidebar.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', () => {
            if (window.innerWidth < 1024) {
                sidebar.classList.add('-translate-x-full');
            }
        });
    });
}

/* ── Typing effect for hero tagline ── */
const typingEl = document.getElementById('typing-text');
if (typingEl) {
    const text = typingEl.dataset.text;
    typingEl.textContent = '';
    let i = 0;
    function typeChar() {
        if (i < text.length) {
            typingEl.textContent += text.charAt(i);
            i++;
            setTimeout(typeChar, 40);
        }
    }
    setTimeout(typeChar, 600);
}
