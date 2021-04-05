 # Weather Forecast Dashboard

**Project Topic :** Weather Forecast Dashboard using REST API

**Abstract :** The Dashboard created using REST API's gives the user to access the dashboard for fetching the weather details giving the city name and the pollution details for a current latitude and longitude

**Features :**
1. The dashboard makes use of REST-based service interface for CRUD operations.
2. Shows the weather forecast for the specified city entered.
3. Shows the polution details for Latitude and Longitude.
4. There are 3 roles in the dashboard :
    Normal User : Who gets accessed only for the city weather details
    Pro/Subscribed User : Who get accessed for polution and city weather
    Admin : Who is responsible to delete and update the user details if required (user accounts and access management) 
5. It is mobile friendly dashboard.
6. The GET and POST API's are used to fetch and display the weather and polution details to the user.
7. The PUT and DELETE API's are used by admin to update and delete the records in the registration table.

**Dependencies :**
1. EC2 AWS instance to develop and deloy the application faster. No need to invest in hardware.
2. Amazon RDS (Relational database service) for creation of database.
3. S3 bucket to host the website in EC2 instance.
4. HTML and PHP for frontend
5. Python for backend

**Installations :**
1. Apache install to host the website
    sudo apt update
    sudo apt install apache2
    
**Setup :**
1. With an Openweathermap account
    You can create an account and get a free API key by signing up
    Update the following details in .config.ini : [openweathermap]
    api=YOUR_OPENWEATHERMAP_API_KEY_HERE
2. Setting S3 to host the website in the EC2 instance giving it the public access
3. Setting RDS in EC2 for creation of database. (Use MySQL database)

**Project Members :**
*Cyril D'cruz
Nirbhay Worlikar
Pratibha Prabhakaran
Preethi Ravichandran
Sayma Akter
Snehal Ghadage* 


