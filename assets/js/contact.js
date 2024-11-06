const form = document.querySelector('.mail_section');
const spanText = document.querySelector('.message');
form.onsubmit = (e) => {
    e.preventDefault();
    spanText.style.display = 'block';

    let xhr = new XMLHttpRequest();
    xhr.open('POST', 'message.php', true);

    xhr.onload = () => {
        if(xhr.readyState == 4 && xhr.status == 200) {
            let response = xhr.response;
            spanText.innerText = response;
            if(response === 'Message is Successfully send.') {
                spanText.style.color = '#00f735';
            } else {
                spanText.style.color = 'red';
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}