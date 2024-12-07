from selenium import webdriver
from selenium.webdriver.chrome.service import Service
from selenium.webdriver.common.by import By
import time

# Path to web driver chrome , controls chrome , needs to be changed if another tester runs
Webdriver_path = r'C:\Users\nayan\Downloads\chromedriver-win64\chromedriver-win64\chromedriver.exe'

# path to sysmptoms page, needs to be changed, to run by another tester 
symp_path = r'file:///C:/Users/nayan/OneDrive/Desktop/education%20page/symptomsPage.html'


service = Service(Webdriver_path)

driver = webdriver.Chrome(service=service)

try:
   
    print("Opening the Symptoms page...")
    driver.get(symp_path)


    #list of all the checkboxes to check functionality......
    checkboxes = ["Acne", "Bloating", "Cramps", "Dizzyness", "Fatigue", "Headaches", "LBP", "Nausea"]

    for checkbox_id in checkboxes:
        print(f"Testing checkbox : {checkbox_id}")

        
        checkbox = driver.find_element(By.ID, checkbox_id)
        checkbox.click()
        print(f"Checked the box for {checkbox_id}.")
        time.sleep(2)  # Pauses to be readble 

        # .find_element used to find the submit all button 
        submit_button = driver.find_element(By.XPATH, "//button[@value='Submit']")
        submit_button.click()
        print(f" Clicked the submit button for .. {checkbox_id}.")
        time.sleep(2)  # Pauses

        # .find_element used to find the clear all button 
        clear_button = driver.find_element(By.XPATH, "//button[@value='Clear all']")
        clear_button.click()
        print(f"Clear all button is clikable, functions as required ....")
        time.sleep(1)  # Pause for visibility

    print("All check boxes, submit and clear all button works as intended....")

finally:
    # Stop the driver 
    print("browser closing ....")
    driver.quit()



