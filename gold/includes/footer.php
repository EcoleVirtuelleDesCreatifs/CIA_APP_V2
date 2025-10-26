    </div> <!-- Fin dashboard-container -->
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Scripts communs -->
    <script>
        function toggleMobileMenu() {
            const sidebar = document.querySelector('.sidebar');
            sidebar.classList.toggle('active');
        }
        
        // Close sidebar when clicking outside on mobile
        document.addEventListener('click', function(event) {
            const sidebar = document.querySelector('.sidebar');
            const toggle = document.querySelector('.mobile-menu-toggle');
            
            if (window.innerWidth <= 992) {
                if (!sidebar.contains(event.target) && !toggle.contains(event.target)) {
                    sidebar.classList.remove('active');
                }
            }
        });
        
        // Close sidebar when clicking on a menu item on mobile
        document.querySelectorAll('.menu-item').forEach(item => {
            item.addEventListener('click', function() {
                if (window.innerWidth <= 992) {
                    document.querySelector('.sidebar').classList.remove('active');
                }
            });
        });
    </script>
    
    <?php 
    // Inclure des scripts personnalisés si définis
    if (isset($custom_scripts)) {
        echo $custom_scripts;
    }
    ?>
</body>
</html>
