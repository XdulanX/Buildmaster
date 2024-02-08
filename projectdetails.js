function validateForm() {
    var projectID = document.getElementById ('id').value;
    var location = document.getElementById ('location').value;
    var startDate = document.getElementById ('startdate').value;
    var endDate = document.getElementById ('enddate').value;
    var leaderName = document.getElementById('leadername').value;

    
    if (projectID === '' || location === '' || startDate === '' || endDate === '' || leaderName === '') {
        alert('Please fill in all fields');
        return false; // Prevent form submission
    }
    return true; // Allow form submission
}

document.getElementById('project-form').addEventListener('submit', function (event) {
    if (!validateForm()) {
        event.preventDefault(); // Prevent form submission if validation fails
    }
});
