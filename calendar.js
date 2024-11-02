document.addEventListener("DOMContentLoaded", function () {
    const calendarGrid = document.getElementById("calendar-grid");
    const months = [
        "January", "February", "March", "April", "May", "June",
        "July", "August", "September", "October", "November", "December"
    ];

    const daysOfWeek = ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"];

    const currentYear = 2024;

    months.forEach((month, index) => {
        // Create a container for each month
        const monthContainer = document.createElement("div");
        monthContainer.classList.add("month-container");

        // Month name
        const monthName = document.createElement("h2");
        monthName.textContent = month;
        monthContainer.appendChild(monthName);

        // Create table element for the calendar
        const calendarTable = document.createElement("table");
        calendarTable.classList.add("calendar-table");

        // Create header row with days of the week
        const headerRow = document.createElement("tr");
        daysOfWeek.forEach(day => {
            const th = document.createElement("th");
            th.textContent = day;
            headerRow.appendChild(th);
        });
        calendarTable.appendChild(headerRow);

        // Get first day of the month and number of days in the month
        const firstDay = new Date(currentYear, index, 1).getDay();
        const daysInMonth = new Date(currentYear, index + 1, 0).getDate();

        // Create rows for each week
        let row = document.createElement("tr");
        // Fill in the empty cells before the first day of the month
        for (let i = 0; i < firstDay; i++) {
            const emptyCell = document.createElement("td");
            row.appendChild(emptyCell);
        }

        // Fill in the days of the month
        for (let day = 1; day <= daysInMonth; day++) {
            const dayCell = document.createElement("td");
            dayCell.textContent = day;

            // Add a click event for interactivity (e.g., select the day)
            dayCell.addEventListener("click", function () {
                // Highlight the selected day
                document.querySelectorAll(".selected").forEach(cell => cell.classList.remove("selected"));
                dayCell.classList.add("selected");
            });

            row.appendChild(dayCell);

            // If the row is complete (i.e., Saturday), append it and create a new row
            if ((day + firstDay) % 7 === 0) {
                calendarTable.appendChild(row);
                row = document.createElement("tr");
            }
        }

        // Append the last row if it contains any days
        if (row.children.length > 0) {
            calendarTable.appendChild(row);
        }

        // Append the table to the month container
        monthContainer.appendChild(calendarTable);

        // Append the month container to the grid
        calendarGrid.appendChild(monthContainer);
    });
});
