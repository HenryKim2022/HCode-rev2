<script type="text/javascript">
    // Function to check the theme
    window.detectTheme = function() {
        const htmlElement = document.documentElement; // Get the <html> element
        const theme = htmlElement.getAttribute('data-bs-theme'); // Get the theme attribute

        // Check if theme is set
        if (!theme) {
            console.log('No theme detected');
            return;
        }

        // Get the logo elements by their IDs
        const brandLogoLg = document.getElementById("logo-lg");
        const brandLogoSm = document.getElementById("logo-sm");

        if (theme === 'dark') {
            // console.log('Dark theme is active');
            if (brandLogoLg && brandLogoSm) {
                brandLogoLg.src = "{{ appLogo('dark') }}"; // Update logo for dark theme
            }
            if (brandLogoSm) {
                brandLogoSm.src = "{{ appLogo('dark') }}"; // Update small logo for dark theme
            }

        } else if (theme === 'light') {
            // console.log('Light theme is active');
            if (brandLogoLg && brandLogoSm) {
                brandLogoLg.src = "{{ appLogo('light') }}"; // Update logo for light theme
            }
            if (brandLogoSm) {
                brandLogoSm.src = "{{ appLogo('light') }}"; // Update small logo for light theme
            }
        } else {
            console.log('No theme detected');
        }
    }
    detectTheme();
</script>
