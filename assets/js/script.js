const coffee = document.querySelectorAll('.coffee');
const testimonial = document.querySelectorAll('.testimonial div ol li');
coffee.forEach(item => {
    const itemLink = item.querySelector('a');
    item.addEventListener('mouseenter', () => {
        item.style.backgroundColor = 'white';
        item.style.color = 'black';
        item.style.height = '360px';
        itemLink.style.display = 'block';
        itemLink.style.visibility = 'visible';
        itemLink.style.opacity = 1;
    });
    item.addEventListener('mouseleave', () => {
        item.style.backgroundColor = '#f05428';
        item.style.color = 'white';
        item.style.height = '320px';
        itemLink.style.display = 'none';
        itemLink.style.visibility = 'hidden';
        itemLink.style.opacity = 0;
    });
});

testimonial.forEach(item => {
    item.addEventListener('mousemove', () => {
        item.style.backgroundColor = '#f05428';
    });
    item.addEventListener('mouseleave', () => {
        item.style.backgroundColor = '#252525';
    });
});