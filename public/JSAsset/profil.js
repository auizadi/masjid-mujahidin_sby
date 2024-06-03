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
document.addEventListener('DOMContentLoaded', function() {
    const faders = document.querySelectorAll('.fade-in');
  
    const appearOptions = {
      threshold: 0.5,
      rootMargin: "0px 0px -50px 0px"
    };
  
    const appearOnScroll = new IntersectionObserver(function(entries, appearOnScroll) {
      entries.forEach(entry => {
        if (!entry.isIntersecting) {
          return;
        } else {
          entry.target.classList.add('visible');
          appearOnScroll.unobserve(entry.target);
        }
      });
    }, appearOptions);
  
    faders.forEach(fader => {
      appearOnScroll.observe(fader);
    });
  });
  