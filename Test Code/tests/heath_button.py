from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
import time


file_path = r"file:///C:/Users/nayan/OneDrive/Desktop/education%20page/health.html"  # this is the path to the health.html in local device 


driver = webdriver.Chrome()    # initializing the web driver 

try:
    
    driver.get(file_path)           #loading html files 
    print("Opened health.html successfully")

    # Test YouTube video links
    video_links = driver.find_elements(By.TAG_NAME, "iframe")
    
    for i, video in enumerate(video_links, 1):
        print(f"Testing video {i}")
        video_src = video.get_attribute("src")
        
        
        driver.execute_script(f"window.open('{video_src}', '_blank');")       # opening the you tube video in another tab 
        
        # Switch to the new tab
        driver.switch_to.window(driver.window_handles[-1])
        
        #WebDriverWait () used to make the condition to be true, here loading of the you tube link 
        WebDriverWait(driver, 10).until(EC.presence_of_element_located((By.ID, "movie_player")))
        print(f"Video {i} loaded successfully")
        
        
        driver.close()      #close() usedx to close the current site 
        driver.switch_to.window(driver.window_handles[0])

    print("All video links tested successfully")

    # Test FAQ section 
    faq_elements = driver.find_elements(By.CLASS_NAME, "faq-item")
    
    for i, item in enumerate(faq_elements, 1):
        question = item.find_element(By.CLASS_NAME, "faq-question")    #using By class of selenium to identify elements 
        answer = item.find_element(By.CLASS_NAME, "faq-answer")
        
        print(f"Testing FAQ item {i}")
        
        # Click the question
        question.click()
        time.sleep(10)  # Wait for animation
        
        # Check if the answer is visible
        if answer.is_displayed():
            print(f"FAQ {i} answer is visible after clicking")
        else:
            print(f"Error: FAQ {i} answer is not visible after clicking")
        
        # Click again to close
        question.click()
        time.sleep(10)  # Wait for animation
        
        # Check if the answer is hidden
        if not answer.is_displayed():
            print(f"FAQ {i} answer is not visible on the screen ")
        else:
            print(f"Error: FAQ {i} answer is still visible after clicking again")

    print("FAQ section  tested successfully")

except Exception as e:
    print(f"An error occurred: {str(e)}")

finally:
    # Close the browser
 driver.quit()


