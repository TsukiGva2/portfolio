

document.addEventListener('DOMContentLoaded', function () {
    const toggleButton = document.querySelector('#theme-toggle-button');

    toggleButton.addEventListener('click', function () {
        document.body.classList.toggle('dark');
    });
});



