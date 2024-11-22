**Testing report:**

| Name | Objective | Description | Status |
| :---- | :---- | :---- | :---- |
| testUserRegistration | Registration process success | Create a fake user and check if the array of errors is empty given that the fields are correctly filled. | PASSED |
|  |  | Using the select query, search the user and make sure it is in the database  | PASSED |
| testUserLogin | Login process success | Using a pre-created test account, call the login function and check if the login is successful. | PASSED |
| testUserLogout | Logout process success | Using a pre-created test account, call the logout function and check if it can be successfully logged out and if the session data is successfully cleared. | PASSED |
| testMenuLinks | Menu links success | Create a variable at the home page link and go to the other 5 menu links ensuring they can successfully open | PASSED |

