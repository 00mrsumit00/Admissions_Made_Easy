<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interactive Data Collection Form</title>
    <link rel="stylesheet" href="style.css"> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <div class="header">
                <h1>Student Registration Form</h1>
                <button class="theme-toggle" id="themeToggle">
                    <span id="themeIcon">☀️</span> Light Mode
                </button>
            </div>

            <div class="progress-container">
                <div class="progress-bar">
                    <div class="progress-fill" id="progressFill"></div>
                </div>
                <div class="progress-steps">
                    <div class="step-indicator active" data-step="1">
                        <div class="step-bubble">1</div>
                        <div class="step-label">Personal Details</div>
                    </div>
                    <div class="step-indicator" data-step="2">
                        <div class="step-bubble">2</div>
                        <div class="step-label">Contact Information</div>
                    </div>
                    <div class="step-indicator" data-step="3">
                        <div class="step-bubble">3</div>
                        <div class="step-label">Education</div>
                    </div>
                    <div class="step-indicator" data-step="4">
                        <div class="step-bubble">4</div>
                        <div class="step-label">Family Details</div>
                    </div>
                    <div class="step-indicator" data-step="5">
                        <div class="step-bubble">5</div>
                        <div class="step-label">Additional Info</div>
                    </div>
                </div>
            </div>

            <form id="registrationForm" action="save_data.php" method="POST">
                <!-- <input type="hidden" name="form_type" value="registrationForm"> -->
                <!-- Step 1: Personal Details -->
                <div class="form-step active" data-step="1">
                    <h2 class="section-title">Personal Details</h2>
                    
                    <div class="form-row">
                        <div class="form-col">
                            <div class="form-group">
                                <label class="form-label" for="firstName">First Name
                                    <span class="tooltip">ⓘ
                                        <span class="tooltip-text">Enter your name as per HSC/SSC marksheet</span>
                                    </span>
                                </label>
                                <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Enter your first name" style="text-transform: uppercase;" oninput="this.value = this.value.toUpperCase();" required>
                                <div class="error-message">First name is required</div>
                            </div>
                        </div>
                        <div class="form-col">
                            <div class="form-group">
                                <label class="form-label" for="lastName">Last Name
                                    <span class="tooltip">ⓘ
                                        <span class="tooltip-text">Enter your last name as per HSC/SSC marksheet</span>
                                    </span>
                                </label>
                                <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Enter your last name" style="text-transform: uppercase;" oninput="this.value = this.value.toUpperCase();" required>
                                <div class="error-message">Last name is required</div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="dob">Date of Birth
                            <span class="tooltip">ⓘ
                                <span class="tooltip-text">Please enter your date of birth in the format DD-MM-YYYY</span>
                            </span>
                        </label>
                        <input type="date" class="form-control" id="dob" name="dob" required>
                        <div class="error-message">Date of birth is required</div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Gender 
                            <span class="tooltip">ⓘ
                                <span class="tooltip-text">Gender selection is required</span>
                            </span>
                        </label>
                        <div class="radio-group">
                            <label class="radio-label">
                                <input type="radio" name="gender" value="male" required> Male
                            </label>
                            <label class="radio-label">
                                <input type="radio" name="gender" value="female"> Female
                            </label>
                            <label class="radio-label">
                                <input type="radio" name="gender" value="other"> Other
                            </label>
                        </div>
                        <div class="error-message">Please select your gender</div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="nationality">Nationality
                            <span class="tooltip">ⓘ
                                <span class="tooltip-text">Please select your nationality</span>
                            </span>
                        </label>
                        <select class="form-control" id="nationality" name="nationality" required>
                            <option value="">Select your nationality</option>
                            <option value="afghan">Afghan</option>
                            <option value="albanian">Albanian</option>
                            <option value="algerian">Algerian</option>
                            <option value="american">American</option>
                            <option value="andorran">Andorran</option>
                            <option value="angolan">Angolan</option>
                            <option value="indian">Indian</option>
                            <option value="indonesian">Indonesian</option>
                            <option value="iranian">Iranian</option>
                            <option value="iraqi">Iraqi</option>
                            <option value="irish">Irish</option>
                            <option value="israeli">Israeli</option>
                            <option value="italian">Italian</option>
                            <option value="japanese">Japanese</option>
                            <!-- More options would be added here -->
                        </select>
                        <div class="error-message">Please select your nationality</div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="profilePhoto">Profile Photo <span class="optional-field">(Optional)</span></label>
                        <div class="file-input-container">
                            <label class="file-input-label" for="profilePhoto">
                                📷 Upload Photo
                            </label>
                            <input type="file" class="file-input" id="profilePhoto" name="profilePhoto" accept="image/*">
                            <div class="file-name" id="photoFileName">No file chosen</div>
                        </div>
                    </div>

                    <div class="form-actions">
                        <div></div> <!-- Empty div for flex layout -->
                        <button type="button" class="btn btn-primary" id="nextBtn" data-step="1">
                            Next Step <span>→</span>
                        </button>
                    </div>
                </div>

                <!-- Step 2: Contact Information -->
                <div class="form-step" data-step="2">
                    <h2 class="section-title">Contact Information</h2>
                    
                    <div class="form-group">
                        <label class="form-label" for="email">Email Address
                            <span class="tooltip">ⓘ
                                <span class="tooltip-text">Please enter a valid email address</span>
                            </span>
                        </label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" oninput="this.value = this.value.toLowerCase()" required>
                        <div class="error-message">Please enter a valid email address</div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="phone">Phone Number
                            <span class="tooltip">ⓘ
                                <span class="tooltip-text">Enter a 10-digit phone number without spaces</span>
                            </span>
                        </label>
                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number" maxlength="10" pattern="\d{10}" oninput="this.value = this.value.replace(/[^0-9]/g, ''); validatePhone();" required>
                        <div class="error-message" id="phoneError" style="display: none;">Phone number must be exactly 10 digits</div>
                        <script>    
                            function validatePhone() {
                                const phoneInput = document.getElementById('phone');
                                const phoneError = document.getElementById('phoneError');
                                const isValid = /^\d{10}$/.test(phoneInput.value);
                                phoneError.style.display = isValid ? 'none' : 'block';
                            }
                        </script>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="addressLine1">Address Line 1 ⓘ</label>
                        <input type="text" class="form-control" id="addressLine1" name="addressLine1" placeholder="Street address" style="text-transform: uppercase;" oninput="this.value = this.value.toUpperCase();" required>
                        <div class="error-message">Address is required</div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="addressLine2">Address Line 2 <span class="optional-field">(Optional)</span></label>
                        <input type="text" class="form-control" id="addressLine2" name="addressLine2" placeholder="Apartment, suite, unit, etc." style="text-transform: uppercase;" oninput="this.value = this.value.toUpperCase();">
                    </div>

                    <div class="form-row">
                        <div class="form-col">
                            <div class="form-group">
                                <label class="form-label" for="country">Country 
                                    <span class="tooltip">ⓘ
                                        <span class="tooltip-text">Please select your Country</span>
                                    </span>
                                </label>
                                <select class="form-control" id="country" name="country" required>
                                    <option value="">Select your country</option>
                                    <option value="AFGHANISTAN">Afghanistan</option>
                                    <option value="ALBANIA">Albania</option>
                                    <option value="ALGERIA">Algeria</option>
                                    <option value="AMEROCAN SAMOA">American Samoa</option>
                                    <option value="ANDRORRA">Andorra</option>
                                    <option value="ANGOLA">Angola</option>
                                    <option value="INDIA">India</option>
                                    <option value="INDONESIA">Indonesia</option>
                                    <option value="IRAN">Iran</option>
                                    <option value="IRAQ">Iraq</option>
                                    <option value="IRELAND">Ireland</option>
                                    <option value="ISRAEL">Israel</option>
                                    <option value="ITALY">Italy</option>
                                    <option value="JAMAICA">Jamaica</option>
                                    <option value="JAPAN">Japan</option>
                                    <!-- More options would be added here -->
                                </select>
                                <div class="error-message">Please select your country</div>
                            </div>
                        </div>
                        <div class="form-col">
                            <div class="form-group">
                                <label class="form-label" for="state">State/Province 
                                    <span class="tooltip">ⓘ
                                        <span class="tooltip-text">Please select your state or province</span>
                                    </span>
                                </label>
                                <!-- <input type="text" class="form-control" id="state" name="state" placeholder="State/Province" required> -->
                                <select class="form-control" id="state" name="state" required>
                                    <option value="">Select your State</option>
                                    <option value="ANDHRA_PRADESH">Andhra Pradesh</option>
                                    <option value="DELHI">Delhi</option>
                                    <option value="GUJARAT">Gujarat</option>
                                    <option value="KARNATAKA">Karnataka</option>
                                    <option value="KERALA">Kerala</option>
                                    <option value="MAHARASHTRA">Maharashtra</option>
                                    <option value="PUNJAB">Punjab</option>
                                    <option value="RAJASTHAN">Rajasthan</option>
                                    <option value="TAMIL_NADU">Tamil Nadu</option>
                                    <option value="UTTAR_PRADESH">Uttar Pradesh</option>
                                    <option value="BIHAR">Bihar</option>
                                    <option value="CHHATTISGARH">Chhattisgarh</option>
                                    <option value="HARYANA">Haryana</option>
                                    <option value="JHARKHAND">Jharkhand</option>
                                    <option value="MADHYA_PRADESH">Madhya Pradesh</option>
                                    <!-- More options would be added here -->
                                </select>
                                <div class="error-message">State is required</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-col">
                            <div class="form-group">
                                <label class="form-label" for="city">City ⓘ</label>
                                <input type="text" class="form-control" id="city" name="city" placeholder="City" style="text-transform: uppercase;" oninput="this.value = this.value.toUpperCase();" required>
                                <div class="error-message">City is required</div>
                            </div>
                        </div>
                        <div class="form-col">
                            <div class="form-group">
                                <label class="form-label" for="zipCode">Postal/Zip Code
                                    <span class="tooltip">ⓘ
                                        <span class="tooltip-text">Enter your postal or zip code</span>
                                    </span>
                                </label>
                                <input type="text" class="form-control" id="zipCode" name="zipCode" placeholder="Postal/Zip Code" maxlength="6" minlength="6" pattern="\d{6}" oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 6);" required>
                                <div class="error-message">Postal code is required</div>
                            </div>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="button" class="btn btn-secondary" id="prevBtn" data-step="2">
                            <span>←</span> Previous
                        </button>
                        <button type="button" class="btn btn-primary" id="nextBtn" data-step="2">
                            Next Step <span>→</span>
                        </button>
                    </div>
                </div>

                <!-- Step 3: Educational Details -->
                <div class="form-step" data-step="3">
                    <h2 class="section-title">Educational Details</h2>
                    
                    <div class="form-group">
                        <label class="form-label" for="highestQualification">Highest Qualification
                            <span class="tooltip">ⓘ
                                <span class="tooltip-text">Select your highest qualification</span>
                            </span>
                        </label>
                        <select class="form-control" id="highestQualification" name="highestQualification" required>
                            <option value="">Select your highest qualification</option>
                            <option value="high_school">High School</option>
                            <option value="diploma">Diploma</option>
                            <option value="bachelors">Bachelor's Degree</option>
                            <option value="masters">Master's Degree</option>
                            <option value="phd">PhD or Doctorate</option>
                            <option value="other">Other</option>
                        </select>
                        <div class="error-message">Please select your highest qualification</div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="institutionName">School/College/University Name
                            <span class="tooltip">ⓘ
                                <span class="tooltip-text">Enter the name of your school, college, or university</span>
                            </span>
                        </label>
                        <input type="text" class="form-control" id="institutionName" name="institutionName" placeholder="Enter institution name" style="text-transform: uppercase;" oninput="this.value = this.value.toUpperCase();" required>
                        <div class="error-message">Institution name is required</div>
                    </div>

                    <div class="form-row">
                        <div class="form-col">
                            <div class="form-group">
                                <label class="form-label" for="fieldOfStudy">Field of Study
                                    <span class="tooltip">ⓘ
                                        <span class="tooltip-text">Enter your field of study</span>
                                    </span>
                                </label>
                                <input type="text" class="form-control" id="fieldOfStudy" name="fieldOfStudy" placeholder="e.g. Computer Science, Biology" style="text-transform: uppercase;" oninput="this.value = this.value.toUpperCase();" required>
                                <div class="error-message">Field of study is required</div>
                            </div>
                        </div>
                        <div class="form-col">
                            <div class="form-group">
                                <label class="form-label" for="yearOfCompletion">Year of Completion
                                    <span class="tooltip">ⓘ
                                        <span class="tooltip-text">Select the year you completed your qualification</span>
                                    </span>
                                </label>
                                <select class="form-control" id="yearOfCompletion" name="yearOfCompletion" required>
                                    <option value="">Select year</option>
                                    <!-- Generate years dynamically with JavaScript -->
                                </select>
                                <div class="error-message">Year of completion is required</div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="gpa">GPA/Percentage 
                            <span class="tooltip">ⓘ
                                <span class="tooltip-text">Enter your GPA on a scale of 4.0 or percentage as applicable</span>
                            </span>
                        </label>
                        <input type="text" class="form-control" id="gpa" name="cgpa" placeholder="e.g. 3.5 or 85%" required>
                        <div class="error-message">GPA/Percentage is required</div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Additional Qualifications <span class="optional-field">(Optional)</span></label>
                        <div class="checkbox-group">
                            <label class="checkbox-label">
                                <input type="checkbox" name="additionalQualifications" value="certification"> Professional Certification
                            </label>
                            <label class="checkbox-label">
                                <input type="checkbox" name="additionalQualifications" value="diploma"> Additional Diploma
                            </label>
                            <label class="checkbox-label">
                                <input type="checkbox" name="additionalQualifications" value="training"> Specialized Training
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="certificateUpload">Upload Certificates <span class="optional-field">(Optional)</span></label>
                        <div class="file-input-container">
                            <label class="file-input-label" for="certificateUpload">
                                📄 Upload Documents
                            </label>
                            <input type="file" class="file-input" id="certificateUpload" name="certificateUpload" accept=".pdf,.jpg,.jpeg,.png" multiple>
                            <div class="file-name" id="certificateFileName">No files chosen</div>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="button" class="btn btn-secondary" id="prevBtn" data-step="3">
                            <span>←</span> Previous
                        </button>
                        <button type="button" class="btn btn-primary" id="nextBtn" data-step="3">
                            Next Step <span>→</span>
                        </button>
                    </div>
                </div>

                <!-- Step 4: Family Details -->
                <div class="form-step" data-step="4">
                    <h2 class="section-title">Family Details</h2>
                    
                    <div class="form-section">
                        <h3 class="section-title">Father's Information</h3>
                        <div class="form-row">
                            <div class="form-col">
                                <div class="form-group">
                                    <label class="form-label" for="fatherName">Father's Name
                                        <span class="tooltip">ⓘ
                                            <span class="tooltip-text">Father's name required</span>
                                        </span>
                                    </label>
                                    <input type="text" class="form-control" id="fatherName" name="fatherName" placeholder="Enter father's name" required>
                                    <div class="error-message">Father's name is required</div>
                                </div>
                            </div>
                            <div class="form-col">
                                <div class="form-group">
                                    <label class="form-label" for="fatherOccupation">Occupation
                                        <span class="tooltip">ⓘ
                                            <span class="tooltip-text">Father's occupation required</span>
                                        </span>
                                    </label>
                                    <input type="text" class="form-control" id="fatherOccupation" name="fatherOccupation" placeholder="Enter occupation" style="text-transform: uppercase;" oninput="this.value = this.value.toUpperCase();" required>
                                    <div class="error-message">Occupation is required</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label" for="fatherContact">Contact Number 
                                <span class="tooltip">ⓘ
                                    <span class="tooltip-text">Enter a 10-digit contact number without spaces</span>
                                </span>
                            </label>
                            <input type="tel" class="form-control" id="fatherContact" name="fatherContact" placeholder="Enter contact number" maxlength="10" pattern="\d{10}" oninput="this.value = this.value.replace(/\s+/g, '')" required>
                        </div>
                    </div>

                    <div class="form-section">
                        <h3 class="section-title">Mother's Information</h3>
                        <div class="form-row">
                            <div class="form-col">
                                <div class="form-group">
                                    <label class="form-label" for="motherName">Mother's Name
                                        <span class="tooltip">ⓘ
                                            <span class="tooltip-text">Mother's name required</span>
                                        </span>
                                    </label>
                                    <input type="text" class="form-control" id="motherName" name="motherName" placeholder="Enter mother's name" style="text-transform: uppercase;" oninput="this.value = this.value.toUpperCase();" required>
                                    <div class="error-message">Mother's name is required</div>
                                </div>
                            </div>
                            <div class="form-col">
                                <div class="form-group">
                                    <label class="form-label" for="motherOccupation">Occupation
                                        <span class="tooltip">ⓘ
                                            <span class="tooltip-text">Mother's occupation required</span>
                                        </span>
                                    </label>
                                    <input type="text" class="form-control" id="motherOccupation" name="motherOccupation" placeholder="Enter occupation" style="text-transform: uppercase;" oninput="this.value = this.value.toUpperCase();" required>
                                    <div class="error-message">Occupation is required</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label" for="motherContact">Contact Number <span class="optional-field">(Optional)</span></label>
                            <input type="tel" class="form-control" id="motherContact" name="motherContact" placeholder="Enter contact number" maxlength="10" minlength="10" pattern="\d{10}" oninput="this.value = this.value.replace(/\s+/g, '')">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="siblings">Number of Siblings</label>
                        <select class="form-control" id="siblings" name="siblings" required>
                            <option value="">Select number</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5+">5 or more</option>
                        </select>
                        <div class="error-message">Please select number of siblings</div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="familyIncome">Annual Family Income 
                            <span class="tooltip">ⓘ
                                <span class="tooltip-text">This information is used for scholarship considerations only</span>
                            </span>
                        </label>
                        <select class="form-control" id="familyIncome" name="familyIncome" required>
                            <option value="">Select income range</option>
                            <option value="below_25k">Below $25,000</option>
                            <option value="25k_50k">$25,000 - $50,000</option>
                            <option value="50k_75k">$50,000 - $75,000</option>
                            <option value="75k_100k">$75,000 - $100,000</option>
                            <option value="above_100k">Above $100,000</option>
                        </select>
                        <div class="error-message">Please select income range</div>
                    </div>

                    <div class="form-actions">
                        <button type="button" class="btn btn-secondary" id="prevBtn" data-step="4">
                            <span>←</span> Previous
                        </button>
                        <button type="button" class="btn btn-primary" id="nextBtn" data-step="4">
                            Next Step <span>→</span>
                        </button>
                    </div>
                </div>

                <!-- Step 5: Additional Info -->
                <div class="form-step" data-step="5">
                    <h2 class="section-title">Additional Information</h2>
                    
                    <div class="form-group">
                        <label class="form-label" for="religion">Religion 
                            <span class="tooltip">ⓘ
                                <span class="tooltip-text">This information is required and used for demographic analysis</span>
                            </span>
                        </label>
                        <select class="form-control" id="religion" name="religion" required>
                            <option value="">Select religion</option>
                            <option value="buddhism">Buddhism</option>
                            <option value="christianity">Christianity</option>
                            <option value="hinduism">Hinduism</option>
                            <option value="islam">Islam</option>
                            <option value="jainism">Jainism</option>
                            <option value="judaism">Judaism</option>
                            <option value="sikhism">Sikhism</option>
                            <option value="other">Other</option>
                            <option value="prefer_not_to_say">Prefer not to say</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="casteCategory">Caste Category 
                            <span class="tooltip">ⓘ
                                <span class="tooltip-text">Required for reservation policies in certain jurisdictions</span>
                            </span>
                        </label>
                        <select class="form-control" id="casteCategory" name="casteCategory" required>
                            <option value="">Select category</option>
                            <option value="general">General</option>
                            <option value="sc">Scheduled Caste (SC)</option>
                            <option value="st">Scheduled Tribe (ST)</option>
                            <option value="obc">Other Backward Class (OBC)</option>
                            <option value="other">Other</option>
                        </select>
                        <div class="error-message">Please select caste category</div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Do you qualify for any reservation? 
                            <span class="tooltip">ⓘ
                                <span class="tooltip-text">Select if you qualify for any special reservation categories</span>
                            </span>
                        </label>
                        <div class="radio-group">
                            <label class="radio-label">
                                <input type="radio" name="reservation" value="yes" required> Yes
                            </label>
                            <label class="radio-label">
                                <input type="radio" name="reservation" value="no"> No
                            </label>
                        </div>
                        <div class="error-message">Please select an option</div>
                    </div>

                    <div class="form-group reservation-details" style="display: none;">
                        <label class="form-label">Reservation Category</label>
                        <div class="checkbox-group">
                            <label class="checkbox-label">
                                <input type="checkbox" name="reservationCategory" value="pwd"> Person with Disability (PwD)
                            </label>
                            <label class="checkbox-label">
                                <input type="checkbox" name="reservationCategory" value="ews"> Economically Weaker Section (EWS)
                            </label>
                            <label class="checkbox-label">
                                <input type="checkbox" name="reservationCategory" value="sports"> Sports Quota
                            </label>
                            <label class="checkbox-label">
                                <input type="checkbox" name="reservationCategory" value="defense"> Defense Personnel
                            </label>
                            <label class="checkbox-label">
                                <input type="checkbox" name="reservationCategory" value="other"> Other
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="extraCurricular">Extra-Curricular Activities <span class="optional-field">(Optional)</span></label>
                        <textarea class="form-control" id="extraCurricular" name="extraCurricular" rows="3" placeholder="List any sports, arts, volunteer work, or other activities you participate in"></textarea>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="additionalInfo">Additional Information <span class="optional-field">(Optional)</span></label>
                        <textarea class="form-control" id="additionalInfo" name="additionalInfo" rows="3" placeholder="Any other information you would like to share"></textarea>
                    </div>

                    <div class="form-group">
                        <div class="checkbox-group">
                            <label class="checkbox-label">
                                <input type="checkbox" id="termsAccept" name="termsAccept" required> I accept the terms and conditions
                            </label>
                        </div>
                        <div class="error-message">You must accept the terms and conditions</div>
                    </div>

                    <div class="form-actions">
                        <button type="button" class="btn btn-secondary" id="prevBtn" data-step="5">
                            <span>←</span> Previous
                        </button>
                        <button type="button" class="btn btn-primary" id="previewBtn" data-step="5">
                            Preview Application <span>👁️</span>
                        </button>
                        <button type="submit" class="btn btn-primary" name="submit" id="submitBtn">
                            Submit Application
                        </button>
                    </div>
                </div>
            </form>

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
        document.addEventListener('DOMContentLoaded', function() {
        // Get all elements
        const form = document.getElementById('registrationForm');
        const nextButtons = document.querySelectorAll('#nextBtn');
        const prevButtons = document.querySelectorAll('#prevBtn');
        const submitButton = document.getElementById('submitBtn');
        const formSteps = document.querySelectorAll('.form-step');
        const progressFill = document.getElementById('progressFill');
        const stepIndicators = document.querySelectorAll('.step-indicator');
        const autosaveIndicator = document.getElementById('autosaveIndicator');
        const successMessage = document.getElementById('successMessage');
        const themeToggle = document.getElementById('themeToggle');
        const themeIcon = document.getElementById('themeIcon');
        
        
        // Years dropdown population for education section
        const yearSelect = document.getElementById('yearOfCompletion');
        const currentYear = new Date().getFullYear();
        for (let year = currentYear; year >= currentYear - 50; year--) {
            const option = document.createElement('option');
            option.value = year;
            option.textContent = year;
            yearSelect.appendChild(option);
        }
        
        // File input handling
        document.getElementById('profilePhoto').addEventListener('change', function() {
            document.getElementById('photoFileName').textContent = this.files[0] ? this.files[0].name : 'No file chosen';
        });
        
        document.getElementById('certificateUpload').addEventListener('change', function() {
            const fileCount = this.files.length;
            document.getElementById('certificateFileName').textContent = fileCount > 0 ? `${fileCount} file(s) selected` : 'No files chosen';
        });
        
        // Conditional fields
        const reservationRadios = document.querySelectorAll('input[name="reservation"]');
        const reservationDetails = document.querySelector('.reservation-details');
        
        reservationRadios.forEach(radio => {
            radio.addEventListener('change', function() {
                reservationDetails.style.display = this.value === 'yes' ? 'block' : 'none';
            });
        });
        
        // Theme toggle
        themeToggle.addEventListener('click', function() {
            const isDarkMode = document.body.classList.toggle('dark-mode');
            if (isDarkMode) {
                themeIcon.textContent = '🌙';
                themeToggle.textContent = 'Dark Mode';
                themeToggle.prepend(themeIcon);
                document.body.style.backgroundColor = 'var(--background-dark)';
                document.body.style.color = '#f8f9fa';
                document.querySelectorAll('*').forEach(el => {
                    el.style.color = '#f8f9fa';
                });
            } else {
                themeIcon.textContent = '☀️';
                themeToggle.textContent = 'Light Mode';
                themeToggle.prepend(themeIcon);
                document.body.style.backgroundColor = 'var(--background)';
                document.body.style.color = 'var(--text)';
                document.querySelectorAll('*').forEach(el => {
                    el.style.color = 'var(--text)';
                });
            }
        });
        
        // Handle navigation between steps
        function goToStep(currentStep, targetStep) {
            // Validate current step before proceeding to next
            if (targetStep > currentStep && !validateStep(currentStep)) {
                return false;
            }
            
            formSteps.forEach(step => {
                step.classList.remove('active');
            });


            
            stepIndicators.forEach(indicator => {
                indicator.classList.remove('active');
                if (parseInt(indicator.dataset.step) <= targetStep) {
                    indicator.classList.add('completed');
                } else {
                    indicator.classList.remove('completed');
                }
            });
            
            document.querySelector(`.form-step[data-step="${targetStep}"]`).classList.add('active');
            document.querySelector(`.step-indicator[data-step="${targetStep}"]`).classList.add('active');
            
            // Update progress bar
            const progress = ((targetStep - 1) / (formSteps.length - 1)) * 100;
            progressFill.style.width = `${progress}%`;
            
            // Scroll to top of form
            form.scrollIntoView({ behavior: 'smooth' });

            // Auto-save form data
            autoSaveForm();
            
            return true;
        }
        
        // Validation for each step
        function validateStep(step) {
            const currentStep = document.querySelector(`.form-step[data-step="${step}"]`);
            const requiredFields = currentStep.querySelectorAll('[required]');
            let isValid = true;
            
            requiredFields.forEach(field => {
                if (!field.checkValidity()) {
                    isValid = false;
                    field.classList.add('invalid');
                    field.nextElementSibling?.classList.add('show');
                } else {
                    field.classList.remove('invalid');
                    field.nextElementSibling?.classList.remove('show');
                }
            });
            
            return isValid;
        }
        
        // Auto-save form data to localStorage
        function autoSaveForm() {
            const formData = new FormData(form);
            const formDataObj = {};
            
            formData.forEach((value, key) => {
                formDataObj[key] = value;
            });
            
            localStorage.setItem('registrationFormData', JSON.stringify(formDataObj));
            
            // Show autosave indicator
            autosaveIndicator.classList.add('show');
            setTimeout(() => {
                autosaveIndicator.classList.remove('show');
            }, 2000);
        }
        
        // Load saved form data if available
        function loadSavedFormData() {
            const savedData = localStorage.getItem('registrationFormData');
            if (savedData) {
                const formDataObj = JSON.parse(savedData);
                
                for (const key in formDataObj) {
                    const field = form.elements[key];
                    if (field) {
                        if (field.type === 'checkbox' || field.type === 'radio') {
                            field.checked = (field.value === formDataObj[key]);
                        } else {
                            field.value = formDataObj[key];
                        }
                    }
                }
            }
        }
        
        // Set up event listeners for navigation
        nextButtons.forEach(button => {
            button.addEventListener('click', function() {
                const currentStep = parseInt(this.dataset.step);
                const nextStep = currentStep + 1;
                goToStep(currentStep, nextStep);
            });
        });
        
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
        
        // Download PDF functionality (simulated)
        document.getElementById('downloadPDF').addEventListener('click', function() {
            alert('PDF generation functionality would be implemented here.');
            // In a real implementation, this would call a server endpoint to generate a PDF
        });
    });
    </script>
    <script src="form-script.js"></script>
    <!-- <script src="newScript.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>