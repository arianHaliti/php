# php
Classes : 
DB.php
Hash.php
Session.php
User.php
Validation.php

Views
index.php
login.php
logout.php
register.php

Including :
header.php
validate.js

DB Class creates a connection has a query method that accepts 2 params
one of the params called $sql is the query and $params is the params that will be binded.

Hash Class has 2 functions make and salt
make : hashes the password using the salt
salt :creates a salt 

Session Class has 3 functions
set : starts the session and sets id and username of the loged in user
check : checks if the session is started.
unset : destorys session when loged out.

User Class creates a connection in constructor
has 3 functions
create: creates a user using DB class method 'query'
loginUser: uses 'query' function to check if username exist if it does
checks if the hashed password is same.
logoutUser: uses Session class to destroy the session.

Validation Class has a method called validateUser
validateUser(): accepts 2 args one is the  $_POST and second one is the rules
it iterates through the rules to check if it is either required, max length , min length etc.

VIEWS

Login view
rules for username field is to be required
rules for password field is to be required
Login view uses User class and Session class to create a new instance and uses the loginUser function
Login view has JS validation on 2 fiels(username,password)

Register view
rules for username field is to be required, max length = 30 ,min length = 2
rules for fullname field is to be required, max length = 128 ,min length = 2
rules for password field is to be required, max length = 64 ,min length = 6
rules for password_confrim field is to be required, match = password field
Register view uses Hash  class to create salt and hash the password
Register view has JS validation on 4 fiels(username,fullname,password,password_confrim)

Includes
Validate.js
Has a function called validation that accepts a set of rules for validating the data
it is used in both Login view and Register View to validate  the fields.
