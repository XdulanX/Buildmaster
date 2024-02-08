function submitForm() {
    // Get form input values
            const firstName = document.getElementById("first-name").value;
            const lastName = document.getElementById("last-name").value;
            const email = document.getElementById("email").value;
            const phoneNumber = document.getElementById("phone-number").value;
            const birthDate = document.getElementById("birth-date").value;
            const nic = document.getElementById("nic").value;
            const password = document.getElementById("password").value;
            const confirmPassword = document.getElementById("confirm-password").value;
            const employeeType = document.querySelector('input[name="employee"]:checked').value;
          
            //Validate First Name
            if(firstname ===""){
              alert("Please enter your First Name");
               return false;
            }

            // Validate Last Name
            if (lastName === "") {
             alert("Please enter your Last Name");
            return false;

             // Validate Mobile Number
            if (mobileNumber === "") {
            alert("Please enter your Phone Number");
            return false;
            } else if (isNaN(phoneNumber) || phonenumber.length !== 10) {
            alert("Please enter a valid 10-digit Phone Number");
            return false;
            }


              // Validate NIC
              if (nic === "") {
              alert("Please enter your NIC");
              return false;
            }

            // Validate Password
            if (password === "") {
            alert("Please enter a Password");
            return false;
            }
  
             // Validate Confirm Password
            if (confirmPassword === "") {
            alert("Please confirm your Password");
            return false;
            } else if (password !== confirmPassword) {
            alert("Passwords do not match");
            return false;
             }
  
            // Validate Date of Birth
            if (birthDate === "") {
            alert("Please enter your Date of Birth");
            return false;
             }

             // Validate Gender
            if (employeeType === null) {
            alert("Please select your Employee Type");
            return false;
             }

             // Email validation helper function
            function validateEmail(email) {
            var re = /\S+@\S+\.\S+/;
            return re.test(email);
            }
            // Display the form data (you can modify this part to suit your needs)
            console.log(formData);
          
            // Reset the form after submission (optional)
            document.getElementById("myForm").reset();
          }
        }