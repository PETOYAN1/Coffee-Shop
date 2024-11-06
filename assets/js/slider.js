const slider = document.querySelectorAll('.slider_img');
const controls = document.querySelectorAll('.controls');
let slideIndex = 0;

function show(index) {
    slider[slideIndex].classList.remove('active');
    slider[index].classList.add('active');
    slideIndex = index;
}
controls.forEach(item => {
    item.addEventListener('click', (event) => {
        if(event.target.classList.contains('prev')) {
            let index = slideIndex - 1;

            if(index < 0) {
                index = slider.length - 1;
            }
            show(index);
        } else if (event.target.classList.contains('next')) {
            let index = slideIndex + 1;

            if(index >= slider.length) {
                index = 0;
            }
            show(index);
        }
    });
});
show(slideIndex);
