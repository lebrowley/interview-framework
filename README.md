# Framtest Interview Test

This interview framework includes a Docker containerized PHP & MySQL application called
Example.  You may need to install Docker, WSL2 or git-bash (Windows) to run the example.

1. Clone/fork this repo and into  a new repo of your own with the contents.
2. Run the instructions in the Setup section to build the framework.
3. Complete the user stories below using PHP and MySQL in the development process.
4. Check your work into **YOUR** github repo area and email us a pointer to your project 
   repo with the subject **"Frametest Interview Repo"**.
   
   Note:  This is important, we lock down the interview test to be read-only so PRs
   don't get seen by other potential candidates.  


## Setup

	./haz setup
	./haz start

In your web browser, navigate to <http://localhost:8100> to start the example.

To execute the test suite: `./haz test`


## Homework Assignments

Your homework is to Refactor the Example table object creation from a functional
approach to an OOP approach.  You can choose however you want to do this, we will
evaluate your approach that you took.  There is no right or wrong answers, just
an example of what you did.  Choose any or all of the homework assignments 
in the list below.


### Refactor the ExampleModel class to be pure OOP

Your code should contain:
- A way to set table record data on the object
- A way to get table record data from the object
- A way to create a record using the data set on the object
- A way to test the changes



### Convert ExampleController::createExample()

Your code should:
- Set the post request data on the ExampleModel object
- Create the new Model record
- Pass only the ExampleModel object to the view
- Verify that it works with a test


### Convert ExampleView::get() 

Your code should:
- Take in the ExampleModel object as a parameter
- Verify the ExampleModel object is initialized with data
- Pass the ExampleModel object/data to the view
- Verify that it works with a test


### Optional Assignment

Convert the HTML form view (detail.twig) to display the ExampleModel object data


### Create an addition method

Using the Example framework, add two fields and a button called "Add" Enter a number 
in each field and by clicking the Add button the code executes a server-side method
that adds the two numbers and returns the sum on the screen.  Appropriate input field
checking and error checking is encouraged.

