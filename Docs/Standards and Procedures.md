# CSCI 265 Team Standards and Processes (Phase 2\)

---

## Team Name: WeWantGOODMarks

---

## Project Name: C-Clo

---

## Key Contact:

---

- Daniela Malagon \- [danielitamalagon@gmail.com](mailto:danielitamalagon@gmail.com) 

## Document structure

---

In this Standards and Process document, we will be addressing 3 things:

* Documentation standards and processes   
* Coding standards and processes  
* Version control standards and processes 

Each part details the endorsement of the standards/processes and outlines the process for reviewing and updating them as necessary. 

## Documentation standards and processes

---

A Docs Directory will be maintained at the top level of the project repo. This Directory will contain all the files mentioned below(once completed, also be updated as the project goes on). For each md file, there is a designated maintainer who is responsible for updating and maintaining that specific file as time goes on. Most of these md docs are worked on by some team members but not all at their initial conception as time goes on they need to be updated by a team member just get the guidance of the original author listed below on that document. This Docs directory will be found in the 'main' branch along with images directory

proposal.md(Nayana)  
charter.md(Kazuki)  
requirements.md(Yasmine)  
standards.md(Nihal)  
logicaldesign.md(Xiaoya)  
userguide.md(Daniela)  
technicaldesign.md(Daniela)  
proofconcept.md(Yasmine)  
testplan.md(Xiaoya)  
closeout.md(Nayana)

along side the docs directory in main, there will be a ‘images’ sub-directory. Any images used in the various.md files will be located in that directory. The file name used So the images folder in git is divided in two one for the project sketches and other for the DFDs 
When you look at the DFDs each one has a special name (DFD0, DFDM, etc), when you refer to the DFD in the document please be sure to use those names.

To maintain an organized look and layout of the project repo over the semester, the team should try its best to make files use the same layout, fonts, and headers to maintain a consistent look.

Each team member when writing a document should thoroughly check their spelling as well as use a grammar checker when submitting/ writing any documents. The team member responsible for writing should check their work thoroughly, and when checked by a team member before final submission should have minimal grammar mistakes.

The conduct for submitting document content/updates is via ‘pull request’ on GitHub mentioned later on in this document under version control.

Phase 2 (requirements and standards/processes) will be the teams trial run for document standards and process.  Once phase 2 is submitted/completed a brief discussion on how we as the team will meet these standards will be held. Anytime this document needs to be amended a brief meeting should take place to go over the changes/updates.

## Coding standards and processes

---

As the semester and project go on, the contents of this section could be altered by choices that are made in developing C-Clo. The entailed standards and process are as follows:

* All code/revisions made by team members will be reviewed by either the testing Coding lead (Xiaoya) or the understudy (Daniela), Once a team member has thoroughly tested themselves and uploaded their code/revisions the lead or understudy has 48 hours to review it, so team member should upload code/revision at a minimum of 2 days before the submission deadline. Coding changes or revisions made by the lead will be reviewed by the understudy or vice versa for the understudy.  
* The standard for submitting code revision is via a ‘Pull request’, as mentioned in version control below in this document.  
* The Google Style Guides ([google.github.io/styleguide](http://google.github.io/styleguide)) will be used for our coding languages, such as HTML. All relevant team members and the Development lead must agree upon any expectations to this.

This section is to be updated and reviewed during phase 4, as the design and proof-of-concept stages, should make clear the specific tools, languages, and technical design, and should make any weaknesses or gaps in the current plan,

## Version control standards and processes

---

The team Github repo ([https://github.com/CSCI265project/CSCI265-Project](https://github.com/CSCI265project/CSCI265-Project)) will be set up and maintained by the version control lead (Nihal) and understudy(Kazuki). The Version lead will have admin and the understudy will have the role ‘maintain’ unless the version lead is sick or unable to work understudy will become admin and a chosen team member will become the new maintain.
The project will have 4 branchs total 3 core branchs for coding purposes and one branch for Docs directory, images directory, and othe misc documentations or files not needed in the core barnches.
 
 A branch called 'Main' will be used as our "docs and images" placeholder, aswell as any other misc items that are not suitable for the core barnches
 
 3 core branches: testing, production and development. The purpose and guidelines for the following branches are as follows:

* Testing: this branch will represent when the dev thinks the code is ready to be implemented, if the result is correct and error free it will become the new face of the product  
* Production:  This will be the branch where the most recently tested and error-free code, most likely be the branch for submission   
* Development: The branch where new code approved by the Repo lead and or understudy has been approved but has not been thoroughly tested yet in the testing branch.

Each team member is recommended to have an updated copy of the development repo, regardless of whether they have work to add or not. Each team member needs to pull regularly from the team dev repo to ensure that their local dev has incorporated any newly approved changes made by other team members.

When a team member's local work reaches a point where they believe it is ready for incorporation into the team dev repo they need to: 

- pull from the team dev repo  
- resolve any issues/conflicts  
- test their code to ensure it works correctly  
- double-check that their work follows the relevant standards At this point they can post in the Pull-Request channel of the team discord. The version control lead (or understudy) can then pull their work into the team dev repo. Should issues unexpectedly arise during this pull, it may be necessary to coordinate between the author of the pulled code, the development lead (or understudy) and the version control lead (or understudy)

**TEAM MEMBERS SHOULD NEVER DIRECTLY EDIT CONTENT IN THE TESTING OR PRODUCTION BRANCHES.**

For commits by team members:  
no single commit should ever alter more than 200 lines of code  
commit titles should clearly and specifically identify the nature of the change made  
separate commits should be used to resolve individual issues the commit body should clearly explain the impact of the change from a viewing/feeling aspect (how does the website look or what features are different as a result of this commit?)  
The processes outlined in this section are to be reviewed/refined following the completion of phase 2, as we will then have tested our processes on the production/revision of the requirements and standards .md files
