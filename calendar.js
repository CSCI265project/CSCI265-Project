document.addEventListener("DOMContentLoaded", function () {
    const calendarGrid = document.getElementById("calendar-grid");
    const months = [
        "January", "February", "March", "April", "May", "June",
        "July", "August", "September", "October", "November", "December"
    ];
    const daysOfWeek = ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"];
    const currentYear = 2024;

    let highlightedDays = {}; 
    let cycleLength = 28;

    //grid
    function renderCalendar() {
        calendarGrid.innerHTML = "";
        months.forEach((month, index) => {
            const monthContainer = document.createElement("div");
            monthContainer.classList.add("month-container");

            const monthName = document.createElement("h2");
            monthName.textContent = month;
            monthContainer.appendChild(monthName);

            const calendarTable = document.createElement("table");
            calendarTable.classList.add("calendar-table");

            const headerRow = document.createElement("tr");
            daysOfWeek.forEach(day => {
                const th = document.createElement("th");
                th.textContent = day;
                headerRow.appendChild(th);
            });
            calendarTable.appendChild(headerRow);

            const firstDay = new Date(currentYear, index, 1).getDay();
            const daysInMonth = new Date(currentYear, index + 1, 0).getDate();

            let row = document.createElement("tr");
            for (let i = 0; i < firstDay; i++) {
                row.appendChild(document.createElement("td"));
            }

            for (let day = 1; day <= daysInMonth; day++) {
                const dayCell = document.createElement("td");
                dayCell.textContent = day;

                const dateKey = `${currentYear}-${String(index + 1).padStart(2, "0")}-${String(day).padStart(2, "0")}`;

                if (highlightedDays[dateKey]) {
                    dayCell.classList.add("event-day");
                }

                dayCell.addEventListener("click", () => handleDateSelection(dateKey));
                row.appendChild(dayCell);

                if ((day + firstDay) % 7 === 0) {
                    calendarTable.appendChild(row);
                    row = document.createElement("tr");
                }
            }

            if (row.children.length > 0) {
                calendarTable.appendChild(row);
            }

            monthContainer.appendChild(calendarTable);
            calendarGrid.appendChild(monthContainer);
        });
    }
    module.exports = renderCalendar
    //higlight first the period date from the registartion form
    highlightPeriodAndPredict(firstPeriodDay);
    //Add the date
    function handleDateSelection(dateKey) {
        const confirmAdd = confirm(`Do you want to add ${dateKey} as your period start date?`);
        
        if (confirmAdd) {
            firstPeriodDay = dateKey;

            const key = `calendarData_${userEmail}`;
            localStorage.setItem(key, JSON.stringify({
                firstPeriodDay: firstPeriodDay,
                daysSinceLastPeriod: 0 // Reset counter
            }));
            
            highlightedDays = {}; 
            highlightPeriodAndPredict(firstPeriodDay);
            //save data (shows changes after refreshing)
            saveData(); 
            renderCalendar();
        }
    }
    module.exports = handleDateSelection
    //highlight from the day added
    function highlightPeriodAndPredict(startDateKey) {
        const [year, month, day] = startDateKey.split('-').map(Number);
        let startDate = new Date(year, month - 1, day);
        // Highlight the period for the first selected day
        for (let i = 0; i < periodLength; i++) {
            const currentKey = formatDate(startDate);
            highlightedDays[currentKey] = true;
            startDate.setDate(startDate.getDate() + 1);  // Move to the next day
        }

        // Highlight future periods
        for (let month = 1; month <= 6; month++) {
            startDate = new Date(startDateKey);  // Reset to the first selected day
            startDate.setDate(startDate.getDate() + (cycleLength * month));  // Move forward by cycle length

            for (let i = 0; i < periodLength; i++) {
                const futureKey = formatDate(startDate);
                highlightedDays[futureKey] = true;
                startDate.setDate(startDate.getDate() + 1);  // Move to the next day in the cycle
            }
        }
    }
    module.exports = highlightPeriodAndPredict
    function formatDate(date) {
        return `${date.getFullYear()}-${String(date.getMonth() + 1).padStart(2, "0")}-${String(date.getDate()).padStart(2, "0")}`;
    }
    module.exports = formatDate
    //Load the saved data
    function loadSavedData() {
        const key = `calendarData_${userEmail}`;
        const savedData = localStorage.getItem(key);
        if (savedData) {
            const parsedData = JSON.parse(savedData);
            firstPeriodDay = parsedData.firstPeriodDay || firstPeriodDay;
            highlightedDays = parsedData.highlightedDays || {};
            cycleLength = parsedData.cycleLength || cycleLength;
            periodLength = parsedData.periodLength || periodLength;
        }
    }
    module.exports = loadSavedData
    //save the data
    function saveData() {
        const dataToSave = {
            firstPeriodDay,
            highlightedDays,
            cycleLength,
            periodLength
        };
        const key = `calendarData_${userEmail}`;
        localStorage.setItem(key, JSON.stringify(dataToSave));
    }
    module.exports = saveData

    loadSavedData();
    renderCalendar();
});