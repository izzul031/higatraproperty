document.getElementById('year').textContent = new Date().getFullYear();

window.addEventListener('scroll', function () {
    var navbar = document.querySelector('.navbar');
    if (window.scrollY > 50) { // Ganti '50' dengan jarak scroll yang diinginkan
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});
function toggleDropdown(event) {
    event.preventDefault();
    var dropdownContent = event.target.nextElementSibling;
    var icon = event.target.querySelector('i');
    if (dropdownContent.style.display === "block") {
        dropdownContent.style.display = "none";
        icon.classList.remove('rotate');
    } else {
        dropdownContent.style.display = "block";
        icon.classList.add('rotate');
    }
}

function toggleDescription(id) {
    const wrapper = document.querySelector(`#description-${id}`).parentNode;
    const description = document.getElementById(`description-${id}`);
    const allWrappers = document.querySelectorAll('.service-description-wrapper');

    allWrappers.forEach(wrap => {
        if (wrap !== wrapper) {
            wrap.style.maxHeight = null;
            wrap.classList.remove('active');
            wrap.querySelector('.service-description').classList.remove('active');
        }
    });

    if (wrapper.style.maxHeight) {
        wrapper.style.maxHeight = null;
        wrapper.classList.remove('active');
        description.classList.remove('active');
    } else {
        description.classList.add('active');
        wrapper.classList.add('active');
        wrapper.style.maxHeight = description.scrollHeight + "px";
    }
}

$('#heroCarousel').carousel({
    interval: 3000,  // Interval slide otomatis (3 detik)
    ride: 'carousel'
});





