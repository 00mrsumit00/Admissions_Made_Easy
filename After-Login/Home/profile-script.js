// Profile section navigation
document.addEventListener('DOMContentLoaded', function() {
    const profileNavLinks = document.querySelectorAll('.profile-nav-link');
    const profileSections = document.querySelectorAll('.profile-section');

    // Function to show selected profile section and hide others
    function showProfileSection(sectionId) {
        profileSections.forEach(section => {
            if (section.id === sectionId) {
                section.classList.add('active');
            } else {
                section.classList.remove('active');
            }
        });

        // Update active navigation link
        profileNavLinks.forEach(link => {
            if (link.getAttribute('data-section') === sectionId) {
                link.classList.add('active');
            } else {
                link.classList.remove('active');
            }
        });
    }

    // Event listener for profile navigation links
    profileNavLinks.forEach(link => {
        link.addEventListener('click', (event) => {
            event.preventDefault();
            const sectionId = link.getAttribute('data-section');
            showProfileSection(sectionId);
        });
    });

    // Show default section on page load (Personal Information)
    showProfileSection('personal-info');

    // Modal handling for personal information
    const personalInfoModal = document.getElementById('personal-info-modal');
    const openPersonalInfoBtn = document.getElementById('open-personal-info-modal');
    const closePersonalInfoBtn = document.getElementById('close-personal-info-modal');
    const cancelPersonalInfoBtn = document.getElementById('cancel-personal-info');

    // Open modal
    if (openPersonalInfoBtn) {
        openPersonalInfoBtn.addEventListener('click', () => {
            personalInfoModal.style.display = 'block';
        });
    }

    // Close modal with X button
    if (closePersonalInfoBtn) {
        closePersonalInfoBtn.addEventListener('click', () => {
            personalInfoModal.style.display = 'none';
        });
    }

    // Close modal with Cancel button
    if (cancelPersonalInfoBtn) {
        cancelPersonalInfoBtn.addEventListener('click', () => {
            personalInfoModal.style.display = 'none';
        });
    }

    // Close modal when clicking outside
    window.addEventListener('click', (event) => {
        if (event.target === personalInfoModal) {
            personalInfoModal.style.display = 'none';
        }
    });

    // Email verification handling
    const verifyEmailForm = document.getElementById('verify-email-form');
    const otpContainer = document.getElementById('otp-container');
    const emailTimer = document.getElementById('email-timer');

    if (verifyEmailForm) {
        verifyEmailForm.addEventListener('submit', function(event) {
            event.preventDefault();
            
            // Show OTP container
            if (otpContainer) otpContainer.style.display = 'block';
            
            // Display timer
            if (emailTimer) {
                emailTimer.style.display = 'block';
                startTimer(emailTimer, 300); // 5 minutes (300 seconds)
            }
            
            // You would actually send the form data to your backend here
            // This is just simulating the UI behavior
        });
    }

    // Avatar edit functionality
    const editAvatarBtn = document.getElementById('editAvatarBtn');
    if (editAvatarBtn) {
        editAvatarBtn.addEventListener('click', function() {
            // Implementation for avatar editing
            // This could open a file picker or a modal
            alert('Avatar editing functionality would go here');
        });
    }
});

// Timer function for OTP verification
function startTimer(timerElement, duration) {
    let timer = duration;
    const interval = setInterval(function() {
        const minutes = Math.floor(timer / 60);
        const seconds = timer % 60;
        
        timerElement.textContent = `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
        
        if (--timer < 0) {
            clearInterval(interval);
            timerElement.textContent = 'Time expired';
            timerElement.style.color = 'red';
        }
    }, 1000);
}

