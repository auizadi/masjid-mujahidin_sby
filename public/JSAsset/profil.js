document.addEventListener('DOMContentLoaded', () => {
    const counters = document.querySelectorAll('.counter span');
    const speed = 300; // duration in ms

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const target = entry.target;
                const updateCount = () => {
                    const targetCount = +target.getAttribute('data-count');
                    const currentCount = +target.innerText;

                    const increment = targetCount / speed;

                    if (currentCount < targetCount) {
                        target.innerText = Math.ceil(currentCount + increment);
                        setTimeout(updateCount, 1);
                    } else {
                        target.innerText = targetCount;
                    }
                };
                updateCount();
                observer.unobserve(target); // Stop observing after counting
            }
        });
    }, { threshold: 0.6 });

    counters.forEach(counter => {
        observer.observe(counter);
    });
});