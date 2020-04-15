CONTENTS OF THIS FILE
---------------------

 🚀 Installation
 🚀 Starting the Application
 🚀 Using the Application
 🚀 Files Used in Framework


INSTALLATION
------------

Unzip and copy the folder into your server folder - either Apache or Nginx.
You can also use XAMPP, WAMP or Homestead on a local local machine to run the application.
If you aren't using Homestead, you will need to ensure that your server meets the following requirements to run
this application with the following requirements below: -

🚀 PHP >= 7.2.5
🚀 BCMath PHP Extension
🚀 Ctype PHP Extension
🚀 Fileinfo PHP extension
🚀 JSON PHP Extension
🚀 Mbstring PHP Extension
🚀 OpenSSL PHP Extension
🚀 PDO PHP Extension
🚀 Tokenizer PHP Extension
🚀 XML PHP Extension


STARTING THE APPLICATION
------------------------

If you are running the application from a your local machine: -
---------------------------------------------------------------
Open up a terminal. Move into the main directory of the application (phonebook) eg. cd phonebook
Run the command php artisan serve
Open a browser and open the following URL: http://127.0.0.1:8000 or http://localhost:8000

If you are running the application from a web server: -
-------------------------------------------------------
I would suggest setting up a vhost and have it point to: phonebook/public
You will be able to view the application from the domain that points to the vhost location


USING THE APPLICATION
---------------------

The phone book list is viewed on the main page.
If you want to sort the listings, click on either of the headlines on top of the list to arrange them accordingly.
To make a search on a term, word or part of a word, type in the "Search List" text box, select the header
attribute you want to search from the select drop down, and click the "Search" button. To rest the list to it's
original form, click the "Reset" button.

FILES uSED IN FRAMEWORK
-----------------------

🚀 phonebook/routes/web.php
🚀 phonebook/app/controllers/PhoneBookController.php
🚀 phonebook/resources/views/master.blade.php
🚀 phonebook/resources/views/list.blade.php
