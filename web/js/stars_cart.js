document.addEventListener('click', function(event) {
    if (event.target.classList.contains('star')) {
        const stars = event.target.parentElement.querySelectorAll('.star');
        const ratingValue = event.target.getAttribute('data-value');

        stars.forEach((star, index) => {
            if (index < ratingValue) {
                star.classList.add('filled');
            } else {
                star.classList.remove('filled');
            }
        });
    }
});