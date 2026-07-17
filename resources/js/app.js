/* ── Respect prefers-reduced-motion for JS-driven animations ── */
const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

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
    if (prefersReducedMotion) {
        typingEl.textContent = text;
    } else {
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
}

/* ── Animated counters (Achievements section) ── */
function easeOutCubic(t) {
    return 1 - Math.pow(1 - t, 3);
}

function animateCounter(el) {
    const target = parseFloat(el.dataset.target);
    const prefix = el.dataset.prefix || '';
    const suffix = el.dataset.suffix || '';
    const duration = 1800; // ms, within the 1.5–2s range
    const start = performance.now();

    function tick(now) {
        const progress = Math.min((now - start) / duration, 1);
        const current = Math.round(target * easeOutCubic(progress));
        el.textContent = `${prefix}${current}${suffix}`;
        if (progress < 1) {
            requestAnimationFrame(tick);
        }
    }
    requestAnimationFrame(tick);
}

const counterEls = document.querySelectorAll('.achievement-value');
if (counterEls.length && !prefersReducedMotion) {
    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                const el = entry.target;
                el.textContent = `${el.dataset.prefix || ''}0${el.dataset.suffix || ''}`;
                animateCounter(el);
                counterObserver.unobserve(el);
            }
        });
    }, { threshold: 0.1 });
    counterEls.forEach((el) => counterObserver.observe(el));
}

/* ── Terminal: real line-by-line typing simulation ── */
const terminalBody = document.getElementById('terminal-body');
if (terminalBody && !prefersReducedMotion) {
    const prompt = terminalBody.dataset.prompt;
    const lines = JSON.parse(terminalBody.dataset.lines);

    const sleep = (ms) => new Promise((resolve) => setTimeout(resolve, ms));

    async function typeInto(parentEl, text, className, charDelay) {
        const span = document.createElement('span');
        span.className = className;
        parentEl.appendChild(span);
        for (let i = 0; i < text.length; i++) {
            span.textContent += text.charAt(i);
            await sleep(charDelay);
        }
        return span;
    }

    async function runTerminal() {
        for (const line of lines) {
            const cmdLine = document.createElement('p');
            terminalBody.appendChild(cmdLine);
            await typeInto(cmdLine, prompt, 'text-cyan', 45);
            await typeInto(cmdLine, line.cmd, 'text-neon-green', 45);

            await sleep(400);

            const responseLine = document.createElement('p');
            responseLine.className = 'text-text';
            responseLine.textContent = line.response;
            terminalBody.appendChild(responseLine);
        }

        const finalLine = document.createElement('p');
        terminalBody.appendChild(finalLine);
        await typeInto(finalLine, prompt.trim(), 'text-cyan', 45);
        const cursor = document.createElement('span');
        cursor.className = 'cursor-blink';
        finalLine.appendChild(cursor);
    }

    terminalBody.innerHTML = '';

    let terminalStarted = false;
    const terminalObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting && !terminalStarted) {
                terminalStarted = true;
                runTerminal();
                terminalObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });
    terminalObserver.observe(terminalBody);
}

/* ── Roadmap: line draws top-to-bottom, dots reveal as it "arrives" ── */
const roadmapContainer = document.getElementById('roadmap-container');
if (roadmapContainer) {
    const roadmapLine = roadmapContainer.querySelector('.roadmap-line');
    const roadmapDots = roadmapContainer.querySelectorAll('.roadmap-dot');

    const roadmapObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                if (roadmapLine) roadmapLine.classList.add('in-view');
                roadmapDots.forEach((dot) => dot.classList.add('in-view'));
                roadmapObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });
    roadmapObserver.observe(roadmapContainer);
}
