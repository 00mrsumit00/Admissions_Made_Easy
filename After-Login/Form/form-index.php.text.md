<!-- Preview Popup (hidden by default) -->
            <div class="preview-popup" id="previewPopup">
                <div class="preview-content">
                    <div class="preview-header">
                        <h2>Application Preview</h2>
                        <button class="close-btn" id="closePreview" aria-label="Close preview">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                    </div>
                    <div class="preview-body" id="previewBody">
                        <div class="preview-tabs">
                            <button class="tab-btn active" data-tab="all">All Details</button>
                            <button class="tab-btn" data-tab="personal">Personal</button>
                            <button class="tab-btn" data-tab="contact">Contact</button>
                            <button class="tab-btn" data-tab="education">Education</button>
                            <button class="tab-btn" data-tab="family">Family</button>
                            <button class="tab-btn" data-tab="additional">Additional</button>
                        </div>
                        <div class="preview-serial">
                            <span class="serial-label">Application ID:</span>
                            <span id="serialNumber" class="serial-number"></span>
                        </div>
                        <div class="preview-content-scroll">
                            <div id="previewData"></div>
                        </div>
                    </div>
                    <div class="preview-footer">
                        <button class="btn btn-secondary" id="editPreview">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                            </svg>
                            Edit Application
                        </button>
                        <button class="btn btn-primary" id="confirmSubmit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                            Confirm & Submit
                        </button>
                    </div>
                </div>
            </div>

            <!-- Success Message (hidden by default) -->
            <div class="success-message" id="successMessage">
                <div class="success-icon">✓</div>
                <h2 class="success-title">Registration Successful!</h2>
                <p class="success-text">Your application has been submitted successfully. We will contact you shortly with further instructions.</p>
                <button class="btn btn-primary" id="downloadPDF">
                    Download PDF Summary
                </button>
            </div>
            
        </div>
    </div>

    <div class="autosave-indicator" id="autosaveIndicator">
        <span>✓</span> Autosaving...
    </div>

    <script>
        prevButtons.forEach(button => {
            button.addEventListener('click', function() {
                const currentStep = parseInt(this.dataset.step);
                const prevStep = currentStep - 1;
                goToStep(currentStep, prevStep);
            });
        });

        // Preview-related elements
        const previewBtn = document.getElementById('previewBtn');
        const popupElement = document.getElementById('previewPopup');
        const closePreview = document.getElementById('closePreview');
        const editPreview = document.getElementById('editPreview');
        const confirmSubmit = document.getElementById('confirmSubmit');
        const previewData = document.getElementById('previewData');
        const serialNumberElement = document.getElementById('serialNumber');

        function loadSerialNumber() {
            return fetch('fetch-serials.php')
                .then(response => response.text())
                .then(serial => {
                    const serialNumberElement = document.getElementById('serialNumber');
                    const serialValue = serial.trim();
                    if (serialNumberElement) {
                        serialNumberElement.textContent = serialValue;
                    }
                    // Store the serial in a hidden input for form submission
                    const serialInput = document.createElement('input');
                    serialInput.type = 'hidden';
                    serialInput.name = 'serial_number';
                    serialInput.id = 'serial_number';
                    serialInput.value = serialValue;
                    document.getElementById('registrationForm').appendChild(serialInput);
                    
                    // Store in localStorage as backup
                    localStorage.setItem('registrationFormSerialNumber', serialValue);
                    return serialValue;
                })
                .catch(error => {
                    console.error('Error fetching serial number:', error);
                    return null;
                });
        }


        // Validate that we have a serial number before submission
        function validateSerialNumber() {
            const serialInput = document.getElementById('serial_number');
            if (!serialInput || !serialInput.value) {
                const currentSerial = localStorage.getItem('registrationFormSerialNumber');
                if (currentSerial) {
                    const newSerialInput = document.createElement('input');
                    newSerialInput.type = 'hidden';
                    newSerialInput.name = 'serial_number';
                    newSerialInput.id = 'serial_number';
                    newSerialInput.value = currentSerial;
                    document.getElementById('registrationForm').appendChild(newSerialInput);
                    return true;
                }
                return false;
            }
            return true;
        }

        // Get all form field values as an object
        function getFormData() {
            const formData = {};
            const formElements = document.getElementById('registrationForm').elements;
            
            for (let i = 0; i < formElements.length; i++) {
                const field = formElements[i];
                const name = field.name;
                
                if (!name) continue;
                
                if (field.type === 'checkbox') {
                    if (field.checked) {
                        if (formData[name]) {
                            if (Array.isArray(formData[name])) {
                                formData[name].push(field.value);
                            } else {
                                formData[name] = [formData[name], field.value];
                            }
                        } else {
                            formData[name] = field.value;
                        }
                    }
                } else if (field.type === 'radio') {
                    if (field.checked) {
                        formData[name] = field.value;
                    }
                } else if (field.type !== 'file' && field.type !== 'submit' && field.type !== 'button') {
                    formData[name] = field.value;
                }
            }
            
            return formData;
        }
        
        // Create preview HTML from form data with sections
        function createPreviewHTML(formData) {
            const sections = [
                { title: "Personal Details", fields: ["firstName", "lastName", "dob", "gender", "nationality"], category: "personal" },
                { title: "Contact Information", fields: ["email", "phone", "addressLine1", "addressLine2", "city", "state", "zipCode", "country"], category: "contact" },
                { title: "Educational Details", fields: ["highestQualification", "institutionName", "fieldOfStudy", "yearOfCompletion", "cgpa", "additionalQualifications"], category: "education" },
                { title: "Family Details", fields: ["fatherName", "fatherOccupation", "fatherContact", "motherName", "motherOccupation", "motherContact", "siblings", "familyIncome"], category: "family" },
                { title: "Additional Information", fields: ["religion", "casteCategory", "reservation", "reservationCategory", "extraCurricular", "additionalInfo", "termsAccept"], category: "additional" }
            ];
            
            const fieldLabels = {
                serial_number: "Serial Number",
                firstName: "First Name",
                lastName: "Last Name",
                dob: "Date of Birth",
                gender: "Gender",
                nationality: "Nationality",
                email: "Email Address",
                phone: "Phone Number",
                addressLine1: "Address Line 1",
                addressLine2: "Address Line 2",
                city: "City",
                state: "State/Province",
                zipCode: "Postal/Zip Code",
                country: "Country",
                highestQualification: "Highest Qualification",
                institutionName: "Institution Name",
                fieldOfStudy: "Field of Study",
                yearOfCompletion: "Year of Completion",
                cgpa: "GPA/Percentage",
                additionalQualifications: "Additional Qualifications",
                fatherName: "Father's Name",
                fatherOccupation: "Father's Occupation",
                fatherContact: "Father's Contact",
                motherName: "Mother's Name",
                motherOccupation: "Mother's Occupation",
                motherContact: "Mother's Contact",
                siblings: "Number of Siblings",
                familyIncome: "Annual Family Income",
                religion: "Religion",
                casteCategory: "Caste Category",
                reservation: "Qualification for Reservation",
                reservationCategory: "Reservation Category",
                extraCurricular: "Extra-Curricular Activities",
                additionalInfo: "Additional Information",
                termsAccept: "Terms Accepted"
            };
            
            let html = '';
            
            sections.forEach((section, index) => {
                html += `<div class="preview-section" data-category="${section.category}"><h3>${section.title}</h3>`;
                
                section.fields.forEach(field => {
                    if (formData[field] !== undefined) {
                        let value = formData[field];
                        
                        // Format specific fields
                        if (field === 'termsAccept') {
                            value = value === 'on' ? 'Yes' : 'No';
                        } else if (field === 'dob') {
                            const date = new Date(value);
                            if (!isNaN(date)) {
                                value = date.toLocaleDateString();
                            }
                        } else if (Array.isArray(value)) {
                            value = value.join(', ');
                        } else if (field === 'highestQualification') {
                            const qualificationMap = {
                                high_school: 'High School',
                                diploma: 'Diploma',
                                bachelors: 'Bachelor\'s Degree',
                                masters: 'Master\'s Degree',
                                phd: 'PhD or Doctorate',
                                other: 'Other'
                            };
                            value = qualificationMap[value] || value;
                        } else if (field === 'gender') {
                            value = value.charAt(0).toUpperCase() + value.slice(1);
                        }
                        
                        html += `
                        <div class="preview-row">
                            <div class="preview-label">${fieldLabels[field] || field}</div>
                            <div class="preview-value">
                                <div class="preview-editable" data-field="${field}">${value || 'Not provided'}</div>
                            </div>
                        </div>`;
                    }
                });
                
                html += '</div>';
            });
            
            return html;
        }
        
        // Load serial number on page load and ensure it's available for the form
        let serialNumberPromise = loadSerialNumber();
        
        // Function to animate elements sequentially
        function animateSections() {
            const sections = document.querySelectorAll('.preview-section');
            sections.forEach((section, index) => {
                setTimeout(() => {
                    section.classList.add('animated');
                }, 100 * index);
            });
        }
        
        // Tab functionality for preview
        function setupTabs() {
            const tabBtns = document.querySelectorAll('.tab-btn');
            const sections = document.querySelectorAll('.preview-section');
            
            tabBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    // Update active tab
                    tabBtns.forEach(b => b.classList.remove('active'));
                    btn.classList.add('active');
                    
                    const category = btn.dataset.tab;
                    
                    // Show/hide sections based on category
                    if (category === 'all') {
                        sections.forEach(section => {
                            section.style.display = 'block';
                        });
                    } else {
                        sections.forEach(section => {
                            if (section.dataset.category === category) {
                                section.style.display = 'block';
                            } else {
                                section.style.display = 'none';
                            }
                        });
                    }
                    
                    // Re-animate visible sections
                    setTimeout(animateSections, 50);
                });
            });
        }
        
        // Add event listener for preview button
        previewBtn.addEventListener('click', function() {
            // First auto-save the data
            if (typeof autoSaveForm === 'function') {
                autoSaveForm();
            }
            
            // Get the form data
            const formData = getFormData();
            
            // Get the serial number from hidden input or localStorage
            const serialInput = document.getElementById('serial_number');
            const currentSerial = serialInput ? serialInput.value : localStorage.getItem('registrationFormSerialNumber');
            serialNumberElement.textContent = currentSerial || 'Loading...';
            
            // Create and display preview
            previewData.innerHTML = createPreviewHTML(formData);
            
            // Setup tabs
            setupTabs();
            
            // Make preview fields editable
            setupEditableFields();
            
            // Show the popup with animation
            popupElement.style.display = 'flex';
            setTimeout(() => {
                popupElement.classList.add('show');
                animateSections();
            }, 10);
        });
        
        // Make fields editable in preview
        function setupEditableFields() {
            const editableFields = document.querySelectorAll('.preview-editable');
            editableFields.forEach(field => {
                field.addEventListener('click', function() {
                    const currentValue = this.textContent;
                    const fieldName = this.dataset.field;
                    
                    // For simple text fields, make them editable inline
                    if (fieldName !== 'gender' && fieldName !== 'reservation' && !fieldName.includes('Category')) {
                        this.contentEditable = true;
                        this.focus();
                        
                        // Select all text
                        const range = document.createRange();
                        range.selectNodeContents(this);
                        const selection = window.getSelection();
                        selection.removeAllRanges();
                        selection.addRange(range);
                        
                        // Save changes when focus is lost
                        this.addEventListener('blur', function() {
                            this.contentEditable = false;
                            
                            // Update form field value
                            const formField = document.getElementById(fieldName) || document.getElementsByName(fieldName)[0];
                            if (formField) {
                                formField.value = this.textContent;
                            }
                            
                            // Auto-save updated form data
                            if (typeof autoSaveForm === 'function') {
                                autoSaveForm();
                            }
                        });
                        
                        // Handle Enter key
                        this.addEventListener('keydown', function(e) {
                            if (e.key === 'Enter') {
                                e.preventDefault();
                                this.blur();
                            }
                        });
                    }
                });
            });
        }
        
        // Close preview button
        closePreview.addEventListener('click', function() {
            popupElement.classList.remove('show');
            setTimeout(() => {
                popupElement.style.display = 'none';
            }, 300);
        });
        
        // Close on clicking outside the content
        popupElement.addEventListener('click', function(e) {
            if (e.target === popupElement) {
                closePreview.click();
            }
        });
        
        // Edit button returns to the form
        editPreview.addEventListener('click', function() {
            popupElement.classList.remove('show');
            setTimeout(() => {
                popupElement.style.display = 'none';
            }, 300);
        });
        
        // Confirm and submit
        confirmSubmit.addEventListener('click', function() {
            // Add loading animation to button
            this.disabled = true;
            this.innerHTML = `
                <svg class="spinner" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10"></circle>
                    <path d="M12 6v6l4 2"></path>
                </svg>
                Processing...
            `;

            // Get the current serial number
            const serialInput = document.getElementById('serial_number');
            const currentSerial = serialInput ? serialInput.value : localStorage.getItem('registrationFormSerialNumber');
                    
            // Close with delay to show loading
            setTimeout(() => {
                popupElement.classList.remove('show');
                setTimeout(() => {
                    popupElement.style.display = 'none';

                    // Make sure the serial number is set in the form
                    if (!serialInput && currentSerial) {
                        const newSerialInput = document.createElement('input');
                        newSerialInput.type = 'hidden';
                        newSerialInput.name = 'serial_number';
                        newSerialInput.id = 'serial_number';
                        newSerialInput.value = currentSerial;
                        document.getElementById('registrationForm').appendChild(newSerialInput);
                    }
                    
                    // Trigger form submission
                    const submitButton = document.getElementById('submitBtn');
                    if (submitButton) {
                        submitButton.click();
                    }
                }, 300);
            }, 800);
        });
        
        // Add spinner style
        const style = document.createElement('style');
        style.textContent = `
            @keyframes spin {
                to { transform: rotate(360deg); }
            }
            .spinner {
                animation: spin 1s linear infinite;
            }
        `;
        document.head.appendChild(style);


        // Handle form submission
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Validate the final step
            if (!validateStep(5)) {
                return false;
            }

             // Validate serial number
            if (!validateSerialNumber()) {
                alert('Error: Could not get a valid serial number. Please refresh the page and try again.');
                return false;
            }
            
            // Add loader and change button text
            submitButton.disabled = true;
            submitButton.innerHTML = '<span class="loader"></span> Submitting... ⏳';

            // Add CSS for rotating loader animation
            const loaderStyle = document.createElement('style');
            loaderStyle.textContent = `
                .loader {
                    display: inline-block;
                    width: 16px;
                    height: 16px;
                    border: 2px solid #f3f3f3;
                    border-top: 2px solid #3498db;
                    border-radius: 50%;
                    animation: spin 1s linear infinite;
                    margin-right: 8px;
                }
                @keyframes spin {
                    0% { transform: rotate(0deg); }
                    100% { transform: rotate(360deg); }
                }
                .rotating-icon {
                    display: inline-block;
                    animation: rotateIcon 1s linear infinite;
                }
                @keyframes rotateIcon {
                    0% { transform: rotate(0deg); }
                    100% { transform: rotate(360deg); }
                }
            `;
            document.head.appendChild(loaderStyle);

            // Add rotating animation to the ⏳ icon
            const clockIcon = submitButton.querySelector('span:last-child');
            if (clockIcon) {
                clockIcon.classList.add('rotating-icon');
            }

            // Add a delay of 1 minute before submitting
            setTimeout(() => {
            // Get form data
            const formData = new FormData(form);

            // send serial_number to form
            formData.append('serial_number', serialNumber);
            
            // Send form data using fetch API
            fetch('save_data.php', {
                method: 'POST',
                body: formData
            })
            .then(response => {
                if (!response.ok) {
                throw new Error('Network response was not ok');
                }
                return response.text();
            })
            .then(data => {
                console.log('Success:', data);
                // Show success message
                form.style.display = 'none';
                successMessage.style.display = 'block';
                // Clear localStorage
                localStorage.removeItem('registrationFormData');
            })
            .catch(error => {
                console.error('Error:', error);
                alert('There was a problem submitting your form. Please try again.');
            })
            .finally(() => {
                // Reset button state
                submitButton.disabled = false;
                submitButton.innerHTML = 'Submit Application';
            });
            }, 8000); // 1 minute delay (60000 milliseconds)
        });
        
        // Load saved form data on page load
        loadSavedFormData();
        
    </script>
