// DOM Elements
const form = document.getElementById('registrationForm');
const formSteps = document.querySelectorAll('.form-step');
const stepIndicators = document.querySelectorAll('.step-indicator');
const progressFill = document.getElementById('progressFill');
const nextButtons = document.querySelectorAll('#nextBtn');
const prevButtons = document.querySelectorAll('#prevBtn');
const submitButton = document.getElementById('submitBtn');
const successMessage = document.getElementById('successMessage');
const downloadPDFButton = document.getElementById('downloadPDF');
const autosaveIndicator = document.getElementById('autosaveIndicator');
const themeToggle = document.getElementById('themeToggle');
const themeIcon = document.getElementById('themeIcon');
const profilePhotoInput = document.getElementById('profilePhoto');
const photoFileName = document.getElementById('photoFileName');
const certificateUpload = document.getElementById('certificateUpload');
const certificateFileName = document.getElementById('certificateFileName');
const reservationRadios = document.querySelectorAll('input[name="reservation"]');
const reservationDetails = document.querySelector('.reservation-details');
const yearOfCompletionSelect = document.getElementById('yearOfCompletion');
const reviewModal = document.getElementById('reviewModal');
const reviewContent = document.getElementById('reviewContent');
const closeReviewBtn = document.getElementById('closeReviewBtn');
const confirmSubmitBtn = document.getElementById('confirmSubmitBtn');

// Generate years for the year of completion dropdown (current year - 50 to current year + 5)
const currentYear = new Date().getFullYear();
for (let year = currentYear + 5; year >= currentYear - 50; year--) {
    const option = document.createElement('option');
    option.value = year;
    option.textContent = year;
    yearOfCompletionSelect.appendChild(option);
}

// Set current progress
let currentStep = 1;
const totalSteps = formSteps.length;

// Update progress bar
function updateProgress() {
    const progressPercentage = ((currentStep - 1) / (totalSteps - 1)) * 100;
    progressFill.style.width = `${progressPercentage}%`;
    
    // Update step indicators
    stepIndicators.forEach((indicator, index) => {
        const step = index + 1;
        
        indicator.classList.remove('active', 'completed');
        
        if (step < currentStep) {
            indicator.classList.add('completed');
        } else if (step === currentStep) {
            indicator.classList.add('active');
        }
    });
}

// Navigate to next step
function goToNextStep(step) {
    const currentFormStep = document.querySelector(`.form-step[data-step="${step}"]`);
    
    // Basic validation
    const inputs = currentFormStep.querySelectorAll('input[required], select[required], textarea[required]');
    let isValid = true;
    
    inputs.forEach(input => {
        if (input.type === 'checkbox' && input.required) {
            if (!input.checked) {
                input.classList.add('error');
                isValid = false;
            } else {
                input.classList.remove('error');
            }
        } else if (input.type !== 'radio') {
            if (!input.value) {
                input.classList.add('error');
                const errorMsg = input.nextElementSibling;
                if (errorMsg && errorMsg.classList.contains('error-message')) {
                    errorMsg.style.display = 'block';
                }
                isValid = false;
            } else {
                input.classList.remove('error');
                const errorMsg = input.nextElementSibling;
                if (errorMsg && errorMsg.classList.contains('error-message')) {
                    errorMsg.style.display = 'none';
                }
            }
        }
        
        // Special validation for email
        if (input.type === 'email' && input.value) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(input.value)) {
                input.classList.add('error');
                const errorMsg = input.nextElementSibling;
                if (errorMsg && errorMsg.classList.contains('error-message')) {
                    errorMsg.style.display = 'block';
                }
                isValid = false;
            }
        }
        
        // Special validation for radio buttons
        if (input.type === 'radio' && input.required) {
            const radioGroup = document.querySelectorAll(`input[name="${input.name}"]`);
            const isChecked = Array.from(radioGroup).some(radio => radio.checked);
            
            if (!isChecked) {
                radioGroup.forEach(radio => {
                    const radioGroupContainer = radio.closest('.radio-group');
                    if (radioGroupContainer) {
                        radioGroupContainer.classList.add('error');
                        const errorMsg = radioGroupContainer.nextElementSibling;
                        if (errorMsg && errorMsg.classList.contains('error-message')) {
                            errorMsg.style.display = 'block';
                        }
                    }
                });
                isValid = false;
            } else {
                radioGroup.forEach(radio => {
                    const radioGroupContainer = radio.closest('.radio-group');
                    if (radioGroupContainer) {
                        radioGroupContainer.classList.remove('error');
                        const errorMsg = radioGroupContainer.nextElementSibling;
                        if (errorMsg && errorMsg.classList.contains('error-message')) {
                            errorMsg.style.display = 'none';
                        }
                    }
                });
            }
        }
    });
    
    if (!isValid) {
        // Show validation message
        showNotification('Please fill all required fields correctly', 'error');
        return;
    }
    
    // Hide current step
    currentFormStep.classList.remove('active');
    
    // Show next step
    currentStep = parseInt(step) + 1;
    const nextFormStep = document.querySelector(`.form-step[data-step="${currentStep}"]`);
    nextFormStep.classList.add('active');
    
    // Update progress
    updateProgress();
    
    // Scroll to top of form
    form.scrollIntoView({ behavior: 'smooth' });
    
    // Save form data (simulate autosave)
    autosave();
}

// Navigate to previous step
function goToPrevStep(step) {
    // Hide current step
    const currentFormStep = document.querySelector(`.form-step[data-step="${step}"]`);
    currentFormStep.classList.remove('active');
    
    // Show previous step
    currentStep = parseInt(step) - 1;
    const prevFormStep = document.querySelector(`.form-step[data-step="${currentStep}"]`);
    prevFormStep.classList.add('active');
    
    // Update progress
    updateProgress();
    
    // Scroll to top of form
    form.scrollIntoView({ behavior: 'smooth' });
}


// Autosave functionality
function autosave() {
    // Show autosave indicator
    autosaveIndicator.style.display = 'flex';
    
    // Simulate saving to localStorage
    const formData = new FormData(form);
    const formDataObj = {};
    
    formData.forEach((value, key) => {
        formDataObj[key] = value;
    });
    
    localStorage.setItem('formData', JSON.stringify(formDataObj));
    
    // Hide autosave indicator after delay
    setTimeout(() => {
        autosaveIndicator.style.animationName = 'fadeOutDown';
        
        setTimeout(() => {
            autosaveIndicator.style.display = 'none';
            autosaveIndicator.style.animationName = 'fadeInUp';
        }, 300);
    }, 1500);
}

// Load saved form data
function loadSavedData() {
    const savedData = localStorage.getItem('formData');
    
    if (savedData) {
        const formDataObj = JSON.parse(savedData);
        
        // Fill form fields with saved data
        Object.keys(formDataObj).forEach(key => {
            const input = form.querySelector(`[name="${key}"]`);
            
            if (input) {
                if (input.type === 'checkbox' || input.type === 'radio') {
                    input.checked = true;
                } else {
                    input.value = formDataObj[key];
                }
            }
        });
    }
}



// Handle file input change - Certificates
certificateUpload.addEventListener('change', (e) => {
    if (e.target.files.length > 0) {
        if (e.target.files.length === 1) {
            certificateFileName.textContent = e.target.files[0].name;
        } else {
            certificateFileName.textContent = `${e.target.files.length} files selected`;
        }
    } else {
        certificateFileName.textContent = 'No files chosen';
    }
});

// Toggle reservation details visibility
reservationRadios.forEach(radio => {
    radio.addEventListener('change', () => {
        if (radio.value === 'yes') {
            reservationDetails.style.display = 'block';
        } else {
            reservationDetails.style.display = 'none';
        }
    });
});

// Download PDF functionality (simulated)
downloadPDFButton.addEventListener('click', () => {
    showNotification('Generating PDF... This would typically be implemented server-side.', 'info');
});

// Event Listeners
nextButtons.forEach(button => {
    button.addEventListener('click', () => {
        goToNextStep(button.dataset.step);
    });
});

prevButtons.forEach(button => {
    button.addEventListener('click', () => {
        goToPrevStep(button.dataset.step);
    });
});

// Add event listeners for form submission and review
form.addEventListener('submit', handleSubmit);
if (closeReviewBtn) {
    closeReviewBtn.addEventListener('click', () => {
        reviewModal.classList.remove('active');
    });
}

confirmSubmitBtn.addEventListener('click', () => {
    const previewBody = document.querySelector('.preview-body');

    // Generate the PDF from the preview modal content
    html2pdf()
        .set({
            margin: 10,
            filename: 'Application_Preview.pdf',
            html2canvas: { scale: 2 },
            jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' }
        })
        .from(previewBody)
        .save()
        .then(() => {
            // After PDF is downloaded, submit the form to save_data.php
            confirmSubmitBtn.addEventListener('click', submitFinalForm);
            // form.submit();  // This triggers your PHP Excel logic.
        })
        .catch(err => {
            console.error('PDF generation error:', err);
            form.submit(); // Even if PDF fails, still submit the form
        });
});


// if (confirmSubmitBtn) {
//     confirmSubmitBtn.addEventListener('click', submitFinalForm);
// }

themeToggle.addEventListener('click', toggleDarkMode);

// Close review modal when clicking outside
window.addEventListener('click', (e) => {
    if (e.target === reviewModal) {
        reviewModal.classList.remove('active');
    }
});

// Add event listener to all form fields for autosave
const formFields = form.querySelectorAll('input, select, textarea');
formFields.forEach(field => {
    field.addEventListener('change', autosave);
    field.addEventListener('input', autosave);
    field.addEventListener('focus', autosave);
    field.addEventListener('blur', autosave);
});

// Load saved data on page load
loadSavedData();

// Check for dark mode preference in localStorage  
const savedTheme = localStorage.getItem('theme');
if (savedTheme === 'dark') {
    document.body.classList.add('dark-mode');
    themeIcon.textContent = '☀️';
    themeToggle.querySelector('span:last-child').textContent = 'Light Mode';
}
// Check for dark mode preference in system settings
if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
    document.body.classList.add('dark-mode');
    themeIcon.textContent = '☀️';
    themeToggle.querySelector('span:last-child').textContent = 'Light Mode';
}
