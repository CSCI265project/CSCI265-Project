from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
from selenium.common.exceptions import TimeoutException
import time 
# imported everything from selenium 
# To have the file education.html 
file_path = r"file:///C:/Users/nayan/OneDrive/Desktop/education%20page/education.html"  # file path for current directory 

                                          # Initializing the Chrome WebDriver
driver = webdriver.Chrome() 

# Set an implicit wait for finding elements
driver.implicitly_wait(10)


driver.get(file_path) #to load the html file 

try:
    # 1. Test if "Other Databases" button works
    print("Testing 'Other Databases' button...")

    # Wait until the button is visible and clickable
    database_button = WebDriverWait(driver, 60).until(
        EC.element_to_be_clickable((By.CLASS_NAME, "database-btn")) #EC.element_to_be_clickable checking if the database button functions  
    )
    print("Element is visible, attempting to click...")
    database_button.click()
    
    
    time.sleep(3)
    
    # Check if the new URL is correct after clicking the button
    expected_url = "https://www.womenshealth.gov/pregnancy/menstrual-cycle" # url must be  this 
    current_url = driver.current_url
    assert current_url == expected_url, f"Test Failed: URL did not change to {expected_url}, current URL is {current_url}"
    
    print("Test Passed: 'Other Databases' button functions!")

    
    driver.get(file_path)    # returning to our html page 
    
    
    time.sleep(5)     #waiting to check if the html page loads completely 

    # 2. Test if links in the resource list are accessible
    print("Testing resource links...")

    # Wait until the resource list is available
    resource_list = WebDriverWait(driver, 60).until(
        EC.presence_of_element_located((By.CSS_SELECTOR, "ul.resource-list"))
    )
    print("Resource list found.")


    resource_links = WebDriverWait(driver, 60).until(
        EC.presence_of_all_elements_located((By.CSS_SELECTOR, "ul.resource-list li a"))
    )
    

    print(f"Number of resource links found: {len(resource_links)}")  # just add while doing debbuing to check the no .of links 

    # Iterate over each link
    for index in range(len(resource_links)):
        try:
            # Refresh the list of links each time (since navigation can invalidate references)
            resource_links = WebDriverWait(driver, 60).until(
                EC.presence_of_all_elements_located((By.CSS_SELECTOR, "ul.resource-list li a"))
            )
            
            # Access the link at the current index
            link = resource_links[index]
            link_text = link.text
            href = link.get_attribute("href")
            print(f"Testing link: {link_text}")

            
            assert href is not None, f"Test Failed: Link '{link_text}' does not have a valid URL."

            print(f"Current URL before clicking '{link_text}': {driver.current_url}")

            
            driver.execute_script("window.open(arguments[0]);", href)  # opening the link 
            
            
            driver.switch_to.window(driver.window_handles[-1])
            
            time.sleep(3)  # Waiting to observe the web link 
            
            print(f"Current URL after clicking '{link_text}': {driver.current_url}")

            # Close the new tab and switch back to the original
            driver.close()
            driver.switch_to.window(driver.window_handles[0])
            
            time.sleep(3)

            print(f"Current URL after returning to original tab: {driver.current_url}")

            # Check if we're back on the correct page
            if file_path not in driver.current_url:
                print(f" Cannot return to original page '{link_text}'")
                driver.get(file_path)  # Force navigation back to the original page
                time.sleep(5)  # Wait for the page to load

            
            WebDriverWait(driver, 60).until(
                EC.element_to_be_clickable((By.CSS_SELECTOR, "ul.resource-list li a"))
            )
        
        except TimeoutException:
            print(f"Timeout occurred '{link_text}'")
            driver.save_screenshot(f'timeout_at_{link_text}.png')
            continue  # Skip 
        
        except Exception as e:
            print(f"An error occurred while processing link '{link_text}': {str(e)}")
            driver.save_screenshot(f'error_at_{link_text}.png')
            continue  # Skip 
    
    print("Test Passed: All resource links are valid and clickable")

except Exception as e:
    print(f"An unexpected error occurred: {str(e)}")
    driver.save_screenshot('unexpected_error.png')

finally:
    # Save a screenshot if there's an error
    driver.save_screenshot('final_screenshot.png')

    # Close the browser
    driver.quit()



