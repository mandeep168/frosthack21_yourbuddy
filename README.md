
# To run this file, 

Add log file in htdocs (in xampp)
Import the sql file in phpmyadmin and all username, password will be stored there. 

And then run the file locally on 
"http://localhost/log/index.html"

And Sign up 
After that you can enter name, password, age and everything will be stored in phpmyadmin database. 

and after successfully registering, go back and go to login page. 

//Enter username and password 

And after that you can see the given courses and also a small chatbot on the right corner. 

And for the chatbot to work, do the following: 

In this we used react-chatbot-kit 

# Initial setup
// Run these commands from your command line
npx create-react-app chatbot
cd chatbot
yarn add react-chatbot-kit

and now open the zip file src and replace it with the src in the file above. 
And also file public with our public zip folder 

//now run this command on terminal 
yarn start

 
Runs the app in the development mode.
Open http://localhost:3000 to view it in the browser.


So, in the home page, when you will click the chatbot, it will redirect to localhost:3000


