export default function formSubmissionAlert (selector, urlParam, message) {
    const alert = document.querySelector(selector);
    const urlParams = new URLSearchParams(window.location.search);
    
    const param = urlParams.get(urlParam);
    
    if (param == '0') {
      formAlert(alert, 'alert-success', message.error);
    } else if (param == 1) {
      formAlert(alert, 'alert-success', message.success);
    }
}

function formAlert (alert, status, message) {
  alert.className = 'alert';
  alert.classList.add(status);
  alert.innerHTML = message;

  alert.style.display = 'block';
}