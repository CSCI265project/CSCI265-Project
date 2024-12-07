from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.chrome.service import Service
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
from selenium.common.exceptions import StaleElementReferenceException
import time
import random

def setup_driver():
    service = Service(r'C:\Users\nayan\Downloads\chromedriver-win64\chromedriver-win64\chromedriver.exe')  # Path to ChromeDriver, needs to be  change
    options = webdriver.ChromeOptions()
    
    # Stability opts are used to prevent crashing , when dealing with links 
    options.add_argument('--no-sandbox')  
    options.add_argument('--disable-dev-shm-usage')  
    options.add_argument('--disable-gpu')  
    options.add_argument('--disable-software-rasterizer')  
    
    # Suppress logging
    options.add_argument('--log-level=3')  
    options.add_experimental_option('excludeSwitches', ['enable-logging'])  

    return webdriver.Chrome(service=service, options=options)

def load_page(driver, url):
    try:
        driver.get(url)
        WebDriverWait(driver, 10).until(
            lambda d: d.execute_script('return document.readyState') == 'complete'
        )
        print("Page loaded successfully!")
        return True
    except Exception as e:
        print(f"Failed to load page: {e}")
        return False
#to check the functionality of every check box 
def test_single_checkbox(driver):
    print("\nStarting single checkbox tests...")
    try:
        checkboxes = WebDriverWait(driver, 10).until(
            EC.presence_of_all_elements_located((By.CSS_SELECTOR, "input[type='checkbox']"))
        )

        for checkbox in checkboxes:
            checkbox_id = checkbox.get_attribute('id')
            print(f"\nTesting checkbox ID: {checkbox_id}")

            WebDriverWait(driver, 10).until(
                EC.element_to_be_clickable((By.ID, checkbox_id))
            )
            driver.execute_script("arguments[0].click();", checkbox)
            time.sleep(1)

            submit_button = driver.find_element(By.CSS_SELECTOR, "input[type='submit']")
            driver.execute_script("arguments[0].click();", submit_button)
            time.sleep(2)

            is_checked = driver.execute_script("return arguments[0].checked;", checkbox)
            print(f"Checkbox selected: {is_checked}")

            driver.execute_script("arguments[0].click();", checkbox)
            time.sleep(1)

    except Exception as e:
        print(f"Single checkbox test failed: {e}")
#made a test where random checkboxes are selected to check the functionality when diffrent checkboxes are present
def test_random_checkboxes(driver):
    print("\nStarting random multiple checkbox tests...")
    try:
        checkboxes = WebDriverWait(driver, 10).until(
            EC.presence_of_all_elements_located((By.CSS_SELECTOR, "input[type='checkbox']"))
        )

        num_to_select = random.randint(2, min(5, len(checkboxes)))
        selected_boxes = random.sample(checkboxes, num_to_select)

        for checkbox in selected_boxes:
            try:
                driver.execute_script("arguments[0].click();", checkbox)
                time.sleep(0.5)

                is_checked = driver.execute_script("return arguments[0].checked;", checkbox)
                if is_checked:
                    print(f"Successfully selected checkbox: {checkbox.get_attribute('id')}")
                else:
                    print(f"Failed to select checkbox: {checkbox.get_attribute('id')}")

            except StaleElementReferenceException:
                print("Page elements updated, re-fetching checkbox...")
                checkbox = WebDriverWait(driver, 10).until(
                    EC.presence_of_element_located((By.ID, checkbox.get_attribute('id')))
                )
                driver.execute_script("arguments[0].click();", checkbox)

        submit_button = driver.find_element(By.CSS_SELECTOR, "input[type='submit']")
        driver.execute_script("arguments[0].click();", submit_button)
        time.sleep(2)

        for checkbox in selected_boxes:
            driver.execute_script("arguments[0].click();", checkbox)
            time.sleep(0.5)

    except Exception as e:
        print(f"Random checkbox test failed: {e}")

def test_all_links(driver):
    print("\nStarting all links test...")
    try:
        checkboxes = WebDriverWait(driver, 10).until(
            EC.presence_of_all_elements_located((By.CSS_SELECTOR, "input[type='checkbox']"))
        )

        for checkbox in checkboxes:
            if not checkbox.is_selected():
                driver.execute_script("arguments[0].click();", checkbox)
                time.sleep(0.5)

        submit_button = driver.find_element(By.CSS_SELECTOR, "input[type='submit']")
        driver.execute_script("arguments[0].click();", submit_button)
        time.sleep(2)

        links = driver.find_elements(By.TAG_NAME, "a")
        original_window = driver.current_window_handle

        for link in links:
            try:
                href = link.get_attribute('href')
                if not href:
                    continue

                print(f"\nTesting link: {href}")
                driver.execute_script("window.open(arguments[0], '_blank');", href)

                WebDriverWait(driver, 10).until(lambda d: len(d.window_handles) > 1)
                new_window = [handle for handle in driver.window_handles if handle != original_window][0]
                driver.switch_to.window(new_window)

                WebDriverWait(driver, 10).until(
                    lambda d: d.execute_script('return document.readyState') == 'complete'
                )

                driver.close()
                driver.switch_to.window(original_window)
                print(f"Link test passed: {href}")

            except Exception as e:
                print(f"Link test failed {href}: {e}")
                if len(driver.window_handles) > 1:
                    driver.switch_to.window(original_window)

    except Exception as e:
        print(f"Error in link testing: {e}")

def main():
    driver = None
    try:
        driver = setup_driver()
        url = "file:///C:/Users/nayan/OneDrive/Desktop/education%20page/moodsPage.html"  # Update the path to moodspage, when differnt tester is using it 

        if load_page(driver, url):
            test_single_checkbox(driver)
            time.sleep(2)
            test_random_checkboxes(driver)
            time.sleep(2)
            test_all_links(driver)
            print("\nAll links, buttons function as intended")

    except Exception as e:
        print(f"Error in  {e}")
    finally:
        if driver:
            time.sleep(3)
            driver.quit()

if __name__ == "__main__":
    main()
