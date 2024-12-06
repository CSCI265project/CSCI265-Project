let daysSinceLastPeriod = 0; // Counter for days passed

function loadSavedData() {
    const key = `calendarData_${userEmail}`;
    const savedData = localStorage.getItem(key);

    if (savedData) {
        const parsedData = JSON.parse(savedData);
        firstPeriodDay = parsedData.firstPeriodDay || firstPeriodDay; // Get firstPeriodDay from localStorage
        daysSinceLastPeriod = parsedData.daysSinceLastPeriod || 0;
    }

    updateCounter(); // Ensure the counter reflects the current date
    sendDataToServer();
}

// Update the counter based on date only
function updateCounter() {
    const today = new Date();
    today.setHours(0, 0, 0, 0); // Set time to midnight for accurate date-only comparison

    const [year, month, day] = firstPeriodDay.split('-').map(Number);
    const lastPeriodDate = new Date(year, month - 1, day);
    lastPeriodDate.setHours(0, 0, 0, 0); // Set time to midnight for accurate date-only comparison

    const timeDifference = today - lastPeriodDate; // Difference in milliseconds
    daysSinceLastPeriod = Math.floor((timeDifference / (1000 * 60 * 60 * 24)) + 1); // Convert to days

    displayCounter(); // Update the UI with the new counter value

    // Log the counter value to the console for debugging
}

// Display the counter in the appropriate HTML element
function displayCounter() {
    const counterDisplay = document.getElementById("counter-display");
    if (counterDisplay) {
        counterDisplay.textContent = daysSinceLastPeriod;
    }
}

// Function to update the start date (e.g., from an input field or other UI)
function setNewPeriodStartDate(dateKey) {
    firstPeriodDay = dateKey;
    const key = `calendarData_${userEmail}`;
    
    localStorage.setItem(key, JSON.stringify({
        firstPeriodDay: firstPeriodDay,
        daysSinceLastPeriod: 0 // Reset the counter
    }));
    daysSinceLastPeriod = 0; // Reset the counter

    updateCounter();
}
function sendDataToServer() {
    // Get the value of daysSinceLastPeriod
    let days = daysSinceLastPeriod;

    // Create an AJAX request
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "homePage.php", true); // Replace 'your_php_script.php' with your PHP file's path
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    // Prepare the data to send
    let data = "daysSinceLastPeriod=" + days;

    // Send the data
    xhr.send(data);

    // Handle the response
    xhr.onload = function() {
        if (xhr.status == 200) {
            console.log("Data sent successfully: " + xhr.responseText);
        } else {
            console.log("Error sending data.");
        }
    };
}
// Load data and initialize the counter on page load
document.addEventListener("DOMContentLoaded", () => {
    sendDataToServer();
    loadSavedData();
    updateCounter(); // Initial call to set the counter on page load
});


