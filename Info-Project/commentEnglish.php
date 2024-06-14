<!--
General Theme IRE APP TRAIN PROJECT

// FrontEnd:
0 HEADER + BURGER
1 Personal Logo, Personal Design
2 Use CANVA, PHOTOSHOP,
3 Slider, SWIPER JS FRAMEWORK
4 Dropdown,
5 Map/Leaflet, OpenRailway/OpenStreetMap
6 WOW JS ANIMATION FRAMEWORK
7 Custom Styling
// JAVA SCRIPT
8 POPUPS => JS
9 DROPDOWN -> JS
10 SUGGESTION -> JS
11 PAGE TIMER [loading.js] -> JS
12 VISIBLE PASSWORD AND HIDDEN BTN => JS
13 Increasing and decreasing seats in wagon/after price
14 Displaying seats by for
15 Displaying seats + dates + totalPrice/seat on form page through replace
16 Creating verifications through if for seats

// Backend
1 Search [Backend]
2 CRUD TICKETS/ROUTES/CANCELLED TRAINS
3 FORM [] KEY METHOD
4 Ticket/Route Verifications
5 Custom Request/Validations, Displaying validation errors
6 MAILER/Config/Mail/view/StyleMailer
7 AUTHENTICATION [GUARD + SESSION + REMEMBER TOKEN + MODIFY ACCOUNT + DELETE ACCOUNT]
7A AUTHENTICATION ADMIN CHECK MAX 3 -> NAVIGATE TO CRUD = ADMIN, + config auth.php
8 ROUTE PREFIX GROUP + PARAMETERS
9 Migration/Models => Connection Tables => BelongsTo, HasMany






SearchController = Searching based on input 1 and input 2, Search logic:
Show method responsible for displaying on screen + showing search result in search route

Search method responsible for:
1 Checking Request inputs for search.
2 Perform search from value search or search 2 [search(value) + search 2(value) = result || [search 2 (value) + search(value) = result]]

3 Create a queryBuilder that allows us to query the SQL model of routes to receive model values that will be sent to search,

4 Create an if statement where we check if the value from station_start in the Routes Model = search["input 1"] and destination value = search2["input 2"]
Otherwise, if values are not correct, redirect the user to the home page.
5 Perform the search

6 Displaying the search on screen:
We display the search in a separate page pages.searchResult where all search results will be displayed, where we check in blade if there are no search results we will receive an error message, or if we access the search page without accessing the search we will still receive an error message + the search will be displayed not only on the screen but also in the route

Initialization: Create a new queryBuilder for the Routes model.
Adding conditions: Check if both search criteria are present and add corresponding conditions to the query.
Execute query: Execute the query and get the results.
Return results: Pass the results to the pages.searchResult page.

-->

<!--
App Controller:
App controller will handle the logic of the Online Ticket application
This controller is divided into 2 parts:

[ Part 1/Step 1  -> Responsible for creating the values based on which the search will be performed = Routes => These are train routes, which will connect with tickets, where through a CRUD we will create both routes and tickets for these routes, where CRUD will have all the necessary functions Create, Read, Update, Delete
Step 2 => Displaying the search value on screen, where in the passenger ticket form, the passenger will be able to see the train route where they can buy a ticket
// Tickets view and index function

In the index function, we will verify and display the search results of routes associated with the ticket, we will use the like parameter for partial searches, + we will declare values like selectedSeats 1,2,3,4 these values will handle selected seats and their value in the 4 available wagons where tickets can be purchased
Displaying ticket_id where we will display in the form the ticket id value associated with the train route

biletes.blade, date_index VIEW

We have biletes.blade where we will display the search values => train route,
Displaying multiple days where SEAT CAPACITY WILL BE DIFFERENT FROM EACH OTHER,

Displaying wagons where we will have price + service class + total number of available and unavailable seats, where price will be = service class

Seat capacity will be according to "the size of the Automotor type wagon",

"Displaying seats will be done through a for loop where we will select for example seats from 1 to up to 30, in ascending order where we will check for example 14 seats are available and we will display these seats as selectable, otherwise through a disabled button class and appropriate styling we will display the remaining seats from 15 -> to 30 as unavailable"

Increasing Price and selecting seats in 'wagon',
"We will create a function where we can select available seats in the wagon MAX 4, where we can increase the price depending on the selected seat/seats: ex [130*1,2,3,4] "

// JS verifications for seats:
    1 We cannot access the passenger form page without selecting at least one seat
    2 We cannot select more than 4 seats
    3 We cannot select seats in wagon 2,3,4 if we have at least one seat selected in wagon 1
]

Additional functions,-
Pop Up at wagon and conditions according to 1C and 2C class presentation of services and service conditions,
2 Dropdown display in wagon with appropriate styling,
3 Slider display where wagon photos will be

Displaying values from tickets in passenger completion form
Continue booking function will allow displaying on the form page the values from the ticket page + ticket_id. where we will use replace to send parameters of the selected seat data, total price according to selected seat + ticket_id which is = to the train route value, we use replace to convert from these parameters, real values from js to screen

Part 2 APP CONTROLLER

Completion form
The completion form will receive values from tickets according to the selected seat [1 seat = 1 form, 2 seats 2 forms,..]
The form will be submitted by key method without creating conflicts between values where fields for multiple persons will be sent under the name value but under different index, where the passenger will be registered in the database in one of the 4 tables passagers_wagon 1/4 depending on the selected wagon + WILL RECEIVE EMAIL CONFIRMATION WITH TICKET DATA


  -->

  <!-- AuthControllers
AdminController and UserController, to work with 2 authentications we have defined both user and admin models with different controllers we used 'guard' where separate guards allow work with multiple authentications the guard has provider, session etc, rememberToken

We used simple authentication in AdminController where there are checks like name, surname, email is unique, + ONLY 3 ADMINS CAN REGISTER IN THE SYSTEM where we created checks that you can access CRUD pages only if you are an ADMIN + Dashboard page where you can log out

UserAuth => User Authentication Differs from admin, as the user has the possibility to change their password + login, + to save in the system through rememberToken + to keep the login value saved in the login part when the user leaves the account [Using session + rememberToken] + possibility to delete the account

-->
