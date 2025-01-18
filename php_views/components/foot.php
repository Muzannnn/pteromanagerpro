
<script src="/public/assets/js/core/popper.min.js"></script>
<script src="/public/assets/js/core/bootstrap.min.js"></script>
<script src="/public/assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="/public/assets/js/plugins/smooth-scrollbar.min.js"></script>
<script async defer src="https://buttons.github.io/buttons.js"></script>
<script src="/public/assets/js/argon-dashboard.js?v=2.2.0"></script>
<script src="/public/assets/js/plugins/quill.min.js"></script>

<script>
    const currentPath = window.location.pathname;
    const navLinks = document.querySelectorAll('.nav-link');

    navLinks.forEach(link => {
        if (link.getAttribute('href') === currentPath) {
            link.classList.add('active');

            const collapse = link.closest('.collapse');
            if (collapse) {
                collapse.classList.add('show');
            }
        }
    });
</script>