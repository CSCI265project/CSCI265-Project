## **CSCI 265 Proof of Concept (Phase 4\)**

---

## **Team Name:** WeWantGOODMarks

---

## **Project:** C-Clo

---

Contact \- Daniela Malagon [danielitamalagon@gmail.com](mailto:danielitamalagon@gmail.com)   
---

**1\. Technical challenges.**  
The proof of concept document is designed to clearly outline the objectives, approach, and results for each technical aspect of the project without code, focusing on the problem-solving strategy and feasibility validation. Based on our team's structure and project, the website's core functionalities are the Registering process and the Home Page/Calendar process. The document will therefore be divided into two subsections at each subheading always starting by the Registration page and after the Home/ Calendar web pages

In this section, we outline the 3 key technical hurdles the team expects to encounter when trying to complete the project: 

• Creation and connection to the database (in PHP)  
• Password Hashing (in PHP)  
• Verification process (in PHP).

Each is listed as an issue because they are all areas in which the team has little or no prior applied programming experience. Each of the X is discussed individually below: 

• Creation and connection to the database involves creating a database, then creating functions to store registration information and allowing users to log in using that information. It also involves checking that the menu options are not available unless the user is logged in.   
• Password hashing involves finding a hashing method so the users have a secure password to rely on. It also involves being able to verify the password is correct during the login process   
• The verification process involves creating a secure 5-digit code, being able to send users the verification code through their mail and verifying if the code is correct.

Our proof-of-concept for this section is made of 4 mini-proofs, tackling each of the 4 problems above individually. Each of them are discussed (individually) in section 2 and links to the relevant code are provided in section 3\. The issue of combining them all is discussed in section 4\.

On the other hand, in the next section we aim to validate the technical feasibility of the web-based period tracker website.

This website requires addressing several key technical challenges to ensure a functional, responsive, and user-friendly experience for period tracking. Each challenge is tackled individually in this proof of concept to validate that it can be achieved effectively with the chosen technology stack (JavaScript, HTML, and CSS).

#### **1\. Current Cycle Day Calculation and Data Persistence**

* **Challenge:**  
  Accurately calculating the current cycle day based on the user’s last recorded period start date requires both date manipulation and persistent storage of the input date. The cycle day calculation depends on the difference between today’s date and the stored period start date, which should update dynamically as time progresses.  
* **Key Considerations:**  
  * **Data Storage:** Local data storage on the user's device is essential for keeping track of the period start date. Browser-based local storage is chosen for its simplicity and persistence, allowing data to remain available even when the browser is closed.  
  * **Date Calculation:** JavaScript’s Date object provides functionality for date manipulation, enabling calculation of the difference between two dates in terms of days. Accurate day counts and handling of edge cases (e.g., leap years if needed) are crucial for reliable tracking but unfortunately haven’t been fully implemented yet.  
* **Goal for Proof of Concept:**  
  To demonstrate that:  
  * The period start date can be stored and retrieved from localStorage.  
  * The current cycle day is dynamically calculated and displayed on the home page.  
  * Users can update their period start date as needed, and the cycle day will adjust accordingly.

#### **2\. Dynamic Calendar Display and Layout**

* **Challenge:**  
  Displaying a full 12-month calendar in a 4x3 grid layout, while ensuring each month is clearly visible and accessible. The layout must be responsive to fit different screen sizes and provide interactive capabilities, such as highlighting selected dates.  
* **Key Considerations:**  
  * **Grid Layout:** Using CSS Grid for a 4x3 grid layout allows for a neat, consistent arrangement of the 12 months. Each month’s calendar should be displayed in a compact format, showing the days of the week and date numbers within a table structure.  
  * **Date Interactivity:** Each date in the calendar should be clickable, allowing users to select or mark dates for tracking purposes. This functionality requires JavaScript to dynamically generate the calendar layout and add event listeners for user interactions.  
  * **Responsiveness:** The calendar layout should be adaptable to various screen sizes, ensuring a user-friendly experience on both desktop and mobile devices.  
* **Goal for Proof of Concept:**  
  Demonstrate that:  
  * A 6-month calendar can be dynamically generated in a 4x3 grid layout.  
  * The layout is responsive, with month tables adjusting as needed for screen sizes.  
  * Individual days within each month are clickable, confirming the feasibility of interactive date selection.

**2\. Approach to meet each challenge.**   
Here we discuss the individual approaches used to show a working approach to each of the four problems in isolation. The issue of combining them all is discussed in section 4\. 

**2.1 Creation and connection to database (in PHP)**  
The objective will be divided into two: creating a database that stores registration information and creating a PHP file with functions that retrieve information so it can be used in the login information. Additionally being able to log out of the user account. 

**2.2 Password Hashing (in PHP)**  
The objective is to find an encryption method that hashes the password and also being able to verify the hashed password

**2.3 Verification process (in PHP).**   
The objective is to create a verify button that triggers a function that sends an email to the user with a verification code.

### **2.4**  **Home Page (Current Cycle Day)** and **Calendar Page (Interactive Date Tracking)**. Each component was implemented separately to confirm feasibility before integration.

#### **2.4.1 Home Page Cycle Day Calculation**

**Objective:** To display the current cycle day based on the user’s last recorded period start date, allowing users to update the date as needed.

* **Implementation Details:**  
  * The application calculates the current cycle day by comparing today’s date with the last period start date, stored in the browser’s `localStorage`.  
  * Users can input or update their period start date, and the displayed cycle day updates dynamically based on this information.  
* **Results:**  
  * Successfully displays and updates the cycle day, proving that JavaScript and local storage can handle date-based cycle calculations reliably.  
  * This solution confirms that cycle-tracking information can be stored and retrieved effectively on the user’s local device.

#### **2.4.2. Calendar Page Display and Interaction**

**Objective:** To create a responsive, interactive calendar that displays each month in a 4x3 grid layout, where users can select and track specific dates.

* **Implementation Details:**  
  * A dynamic calendar is generated, displaying each month in a 4x3 grid layout. Each month’s days are organized in tables within the grid, creating a yearly view.  
  * Users can interact with each day on the calendar, allowing individual days to be selected or highlighted for tracking purposes.  
* **Results:**  
  * The calendar is displayed correctly in a responsive 4x3 grid, enabling easy access to each month and day.  
  * User interactions with the calendar are successfully captured, confirming that dates can be individually marked and tracked.  
  * It validates the feasibility of implementing an interactive calendar using JavaScript and CSS, confirming the suitability of this approach for the website

**3\. Assets produced.**   
A ProofConcept branch has been created for the project, and within that, a ProofConcept directory has been created at the top level of the repository. Within the ProofConcept directory, we have created four subdirectories, one for each of the proofs detailed below. Each of these changes has been documented in the standards.md file in our docs. 

It is also worth highlighting that the proof of concept for 3.1, 3.2 and 3.3 HTML mock pages have been created in order to test its functionality. This is due to efficiency (for testing) and to avoid damaging the actual HTML file registration and login created since the team members were just exploring these technologies. 

**3.1 Creation and connection to the database (in PHP)**  
The implementation for the proof of concept of this particular section can be found in the development branch under the directory phpFiles. Currently, the runtime behavior is as follows: 

Its implementation is divided into three files: login.php, signup.php, and functions.php

**3.1.2 Signup.php**  
• it imports functions.php  
• it creates an array with errors (currently empty)  
• if the user requests to sign up, the function “signup” in functions.php will be triggered  
• If there are no errors, the user will have access to the login page (login.php)

**3.1.2 Login.php**  
• it imports functions.php  
• it creates an array with errors (currently empty)  
• if the user requests to log in, the function “login” in functions.php will be triggered  
• If there are no errors, the user will have access to the profile page (profile.php)

**3.1.3 Functions.php**  
**3.1.3.1 Function signup**  
• it creates an error array to store errors that are triggered by the following conditions

* The username contains non-alphabetic characters   
* The email is not valid (it needs an @ to be valid)  
* The password should be at least 4 characters long  
* The email or username already exists

• if there are no errors assign each field filled by the user to its corresponding column in the database   
• return errors if any.

**3.1.3.1.1** **Function database\_run**  
This function is in charge of assigning each field to a column in the database

**3.1.3.2** **Function login**  
• it creates an error array to store errors that are triggered by the following conditions:

* The email is not valid (it needs an @ to be valid)  
* The password is invalid 

• if there are no errors fetch the mail and see if the password provided with the password that matches the user is the same, if they are, redirect to the profile.   
• return errors if any.

**3.1.3.2.1 Function check\_login**  
This function is in charge of the redirect to the profile if the user is logged in.

**3.1.4 Logout.php**  
This file closes the session and redirects to the login page.

**3.2 Password Hashing**  
The implementation for this proof of concept can be found in the development branch under the directory phpFiles. Currently, the runtime behaviour is as follows: 

• it uses a PHP incorporated function “password\_hash” during the sign-up process that hashes it using a encrypt algorithm (implemented in function signup in functions.php)  
• it uses PHP incorporated function “password\_verify” during the login process that compares the provided password with the user's actual password (implemented in function login in functions.php)

**3.3 Verification process (in PHP).**   
The implementation for this proof of concept can be found in the development branch under the directory phpFiles. Currently, the runtime behavior is as follows: 

• in the profile page a verify button will appear which triggers the web page to redirect to a verification page (verify.php).  
• it generates a random 5-digit code which expires every two minutes.  
• An  email is sent to the user with the verification code. This verification code is also stored under a database that matches the user's mail with the code.  
• It will check if the verification code provided is the same as the one sent and if it is the user will be verified, otherwise, some error checking is performed, that is:

* The code expired  
* The code is incorrect  
* The user has been already verified (the verification process is a one-time action)

**3.3.1 Function check\_verify**  
This function compares if the verification code provided is the same as the one sent.

For the next section, As part of this proof of concept, several assets were created and organized within the project’s repository to demonstrate the feasibility of key functionalities. These assets are grouped into individual directories to reflect each technical component.

**3.4 Project Structure**  
	The implementation for this proof of concept can be found in the development branch under the directory HTML pages, the calendar.js file is just a document by itself. Currently, the runtime behavior is as follows: \`

1. **Home Page (C-Clo Home)**  
   * **index.html**: HTML file for the home page, displaying the current cycle day and providing options to update the period start date and access tracking features.  
   * **c-clo-home.js**: JavaScript to calculate and display the current cycle day based on the user’s stored period start date with the option to update this date.  
   * **Functionality**: Confirms that the cycle day can be calculated accurately, stored locally, and updated based on user input.  
2. **Calendar Page**  
   * **calendar.html**: HTML file for the calendar page, displaying a full-year calendar in a 4x3 grid layout.  
   * **calendar.js**: JavaScript to dynamically generate each month’s calendar layout, making days clickable and interactive for tracking purposes.  
   * **Functionality**: Demonstrates that a complete calendar can be generated dynamically with each date accessible for user interaction.  
3. **Shared Styling**  
   * **styles.css**: A shared CSS file that provides styling across both pages, ensuring consistency in fonts, colors, and layout.  
   * **Functionality**: Confirms that the user interface is cohesive and visually aligned with the design specifications.  
4. **Documentation and Standards**  
   * **Proof of Concept Documentation**: This document outlines the approach to solving each technical challenge, the assets created, and the results achieved. It serves as a record of the completed PoC and its findings.  
   * **standards.md**: A file within the docs directory detailing code standards, directory structure, and documentation guidelines for maintaining consistency throughout development.

**4\. Results and implications.**   
The proof-of-concept above convinced the team that we can perform registering, logging in/logging out and that we can keep this information secure using hashing and verification processes. For the limitations of this process, refer to its upload to the cloud itself. For now, all of these files work together in a local host (one of the teammate's computers), which means no other device can run it. The databases used are only available to the local host. Currently, our main concern is how to make this transition from local to public, which will be our next goal for phase 5\. 

For the other section, the Next Steps goes as follows:  
	Following the successful Proof of concept for each functionality, the next phase will involve integrating the current cycle calculation from the home page with the calendar interaction to create a unified user experience. In addition, we will polish any implementation not completed at this level and allow room for modifications and improvement if need be. This integration will be followed by comprehensive testing to ensure that cycle tracking, calendar interactions and data persistence are accurate and user-friendly.

Potential Challenges:

* Data Consistency: Ensuring that updates to the period start date are accurately reflected across both the home page and the calendar.  
* User Experience: Testing for accessibility, intuitive interaction and seamless navigation between the home page and the calendar.