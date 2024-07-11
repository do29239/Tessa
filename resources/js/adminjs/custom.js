document.addEventListener('DOMContentLoaded', function () {
    // Navbar toggle
    document.querySelectorAll('.navbar-toggler').forEach(function (toggler) {
        toggler.addEventListener('click', function () {
            document.getElementById('navigation').classList.toggle('show');
        });
    });

    // Modal toggle
    document.querySelectorAll('[data-toggle="modal"]').forEach(function (button) {
        button.addEventListener('click', function () {
            var target = document.querySelector(button.getAttribute('data-target'));
            target.classList.add('show');
        });
    });

    document.querySelectorAll('[data-dismiss="modal"]').forEach(function (button) {
        button.addEventListener('click', function () {
            var modal = button.closest('.modal');
            modal.classList.remove('show');
        });
    });

    // Dropdown toggle
    document.querySelectorAll('.dropdown-toggle').forEach(function (dropdown) {
        dropdown.addEventListener('click', function (event) {
            event.preventDefault();
            var menu = dropdown.nextElementSibling;
            menu.classList.toggle('show');
        });
    });

    // Close dropdown when clicking outside
    document.addEventListener('click', function (event) {
        if (!event.target.closest('.dropdown')) {
            document.querySelectorAll('.dropdown-menu').forEach(function (menu) {
                menu.classList.remove('show');
            });
        }
    });
});
