document.getElementById('registerPassword').addEventListener('input', function () {
    if (this.value.length > 0) {
        document.getElementById('registerRepeatPassword').required = true;
    } else {
        document.getElementById('registerRepeatPassword').required = false;
    }
});