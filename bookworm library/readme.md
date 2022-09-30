# OOP Booking App w/ MySQL Database

Author: justin@codespace.co.za

# SESSION Legend:

loggedIn: 
    - holds value for type of user
    - determines whether user has logged in or not
    - is used on pages to conditionally render content on pages
    - value is set in router

activeUser: 
    - User is authenticated and logged in
    - Stores PHP object of logged in user
    - used in pages to get active user's data

customerDatastore:
    - Holds a list of all customers in system
    - data is retrieved from database

staffDatastore:
    - Holds a list of all staff in system
    - data is retrieved from database

bookingDatastore:
    - Holds a list of all bookings in system
    - data is retrieved from database

hotelDatastore:
    - Holds a list of hotels in the system
    - in this scenario we are going to use a file, but a database table should be used instead
    - data is retrieved from database