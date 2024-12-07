# CSCI 265 \- Review (Phase 6\)

---

## **Team Name:** WeWantGOODMarks

---

## **Project:** C-Clo

---

## End State of the product:

Features and functionality that were successfully implemented

\-            **User Accounts and Personalization:**  

  Users can create their accounts in **C-Clo**, with their username and password.  C-Clo enables users to input their personal information, such as cycle length, period start date, period duration, and period flow.

\-            **Period Prediction**

C-Clo can predict your upcoming period dates for 6 months. Calendar prediction algorithms were implemented to get the predictions.

\-            **Notifications/Alerts**

  C-clo ensures users are reminded about their predicted periods with timely, personalized email notifications.

On the 26th day of the cycle, C-clo sends a notification to remind them of their upcoming period.

If a user forgets to update their next cycle date, a second email notification is sent on the 32nd day.

To maintain security, C-clo has a verification feature, a verification code is sent through email to verify the user account.

Implementation of Different pages(Educational resources/ FAQ and support)

The Moods, Symptoms, Health, and Education pages are implemented.  Health and Education web pages provide educational content about menstrual health, cycle management, and related topics. Moods and symptoms pages provide information and advice specific to each topic.

\-            **Privacy and security**

User passwords have been successfully encrypted and are securely stored.  

 

Due to the considerable time and effort required to develop the prediction calculations, design the calendar feature and implement the notification system, unfortunately, we were not able to complete the Health Insights and Analytics feature within the project timeline.

If given additional time to focus on implementation and development, our team would prioritize analyzing user cycle statistics. This would involve processing the user's cycle patterns and average cycle length and presenting them in tabular insights or pie charts for easier understanding. Once this is accomplished, our team would focus on providing users with access to their historical data, enabling them to compare their past cycles.

## Organizational aspects review:

In this section, we will review the team's organizational decisions. Our Charter, Standards and Procedures, and documents outline our overall choices over the term. If we had a do-over, we would also consider how we would approach the C-CLO again based on what we know now.

**Key Organizational Decisions:**

1. **Charter:**  
   1. Communication/Meeting standards:  
      Meetings were scheduled regularly on Tuesdays and Thursdays, with a general plan discussed on Monday beforehand so we could get as much done as possible at the meeting. Discord was our primary source of communication about anything project-related, and email was also used in addition to Discord.  
        
      Reflection: The scheduled meetings allowed all teammates to communicate in person at least twice a week, which allowed us to update each other often and make sure all teammates were on track to finish their specific tasks. Overall the 2 in-person meetings weekly plus discord communication made a very good communication standard throughout the group.  
        
   2. Roles and Responsibilities:  
      Main roles were clearly defined, with leads and understudies assigned to specific areas such as presentation, coding, and version control.  
        
      Reflection: The role-based approach, lets each team member know who to talk to about what issue with confidence, but our lack of experience in some areas like GitHub for example made their respective lead make many mistakes in submission and initial branch setup.  
        
   3. Conflict Resolution:	  
      Disagreements were talked out during in-person meetings or through discord calls, and when necessary team votes and any ties would be broken by the respective leads vote.  
        
      Reflection:  Our guidelines for conflict resolution worked well overall, but knowing what we know now could be more detailed for certain situations more specific to our project.  
        
   4. Deadlines and deliverables Process:    
      Deliverables were expected 24-48 hours before deadlines, allowing a team lead or member to review them before final submission.  
        
      Reflection: This worked well for the initial first phases when our general workload was lighter but as the semester went on and we got busier, reviews were rushed.  
2. **Standards and Procedures:**  
   1. Documentation:  
      A Docs directory was held in the main branch of our GitHub repo, with specific members responsible for updating documents. Spelling, grammar, and formatting made for a consistent style of documents.  
        
      Reflection: This allowed for quick and easy access to all documents related to the project, but when we got to phase3+ updating/uploading changes to documents required frequent reminders.   
   2. Coding:  
      The code was reviewed by leads, once approved by the lead put into the dev branch, and then into the testing branch to be tested thoroughly before it finally went into the production branch. Google-style Guides were followed for standardization.  
        
      Reflection: While the branch setup and processes were effective, earlier development of code and testing of said code would have let us implement some stretch goals and do even more in-depth testing.  
   3. GitHub(version control):   
      4 branches were designed in total 3 for development, testing, and production. 1 for a docs directory and other misc project items/files. We had clear upload and merging guidelines for the respective branches.  
        
      Reflection: This setup worked well for our project and allowed us to collaborate easily, but when large volumes of changes needed to be made to one file or many our process was inefficient.

Conclusion: We think overall we made solid organizational decisions that let us collaborate and communicate effectively. Some areas could have been more fine-tuned or adjusted, but the overall message made for good teamwork, clear communication, clear deadlines, and overall really good progress on the C-Clo project.   
If we were given a do-over, some adjustments we thought of were; 

1. Get  familiar with Github much earlier and more in-depth  
2. Adjusted the timeline of when we started coding and testing to earlier to give us more breathing room at the end of the term.  
3.  Get rid of Monday, still have meetings on Tuesday and Thursday, but meet after Friday lab/ presentation to briefly talk over next week's tasks.

## Technical aspects review:

Here we review some of the key design and implementation decisions made by the team, as well as what we would change given a do-over:

- **Overall Implementation:**  
  We had the choice of either implementing our project as an app or as a website. We decided to go with a website as many of us were already familiar with basic html and implementing basic web pages.  
  Reflection: I believe we made the right choice for the overall implementation. Using a nearly completely new method may have led to more complications and us being unable to finish the project by the end of the term.  
    
- **Page Choices:**  
  In our project, we decided to create six main pages: the home page, the calendar page, the symptoms page, the moods page, the health page and the education page.  
  Reflection: For the most part, we think that the number of pages was enough to make our project more than just the period tracker and was enough to complete with our group.

- **Calendar:**  
  This was the main focus of the project, a period prediction calendar.  
  Reflection: On a do-over, perhaps tackling the main focus of our project with the entire group towards the start of the term may have saved us some trouble down the line.  
    
- **Symptoms/Moods:**   
  The symptoms and moods page was our second interactable feature on our website. It involved producing some advice and recommendations based on what checkboxes the user had clicked.  
  Reflection: We believe that there was no issue with these pages and everything went well. They were implemented as they were designed.

- **Imagery Choices:**  
  The choices of images to be used for the project.  
  Reflection: We should have discussed on a standard of what types of images to use throughout the website. If we had used different types of images, it could have led to each page feeling different from each other or a page may have felt out of place.  
    
- **Account system:**  
  Our account system involved users registering and saving calendar data and preferences to a database.  
  Reflection: We liked the database connections we used, as the retrieval of data was easily done for us. We wouldn’t change anything about this on a do-over.

**Conclusion:**  
We believe we did a good job on the design and implementation of this project. Most of the implementation was successfully made to be nearly identical to its design and we were happy with all of the features we added. Any changes we’d make on a do-over mostly come down to better time management and work allocation while implementing the features.
