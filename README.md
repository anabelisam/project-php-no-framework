# About this template

## PHP Project File Structure without framework

To better understand WHY I share this file structure, I encourage you to read:

- [PHP Project File Structure without framework](https://anabelisa.co/estructura-proyecto-php-sin-framework/)

This project is a form that inserts users into a PostgreSQL database. The focus of the project isn't on design, nor on views; the aim is to understand the file structure and the workflow between files.

### From HTML view to JS control

The `views` directory only contains views templates for the application, these files only have the import of the JS file (besides CSS files) in charge of interacting with the following part of the application: data, events, etc.
The JS file, in fact jQuery, makes requests to the server (in this case using AJAX) and receives the responses (data from the server) to use them in the view templates.

This request only sends parameters and a keyword that indicates what is requested to the back end and is referred to as the "action".

### A bridge between JS and PHP

This action is received by a script named bridge_something.php inside the `bridges` directory, this script receives those parameters, the action requested and pass them to a controller where the business logic is contained, where the data will be organized according to what you want it to do.

### Business logic is separate

Within this controller, when the data is already formatted as desired, it is passed to the file named `trans_something.php` who is really the one that do the insert, the update or the delete of what is sent.

The result of the final transaction is returned, then processed in the controller, finally returned to the bridge who passes it to the front end ready to be displayed.

### Avoiding unnecessary repetitions

The `transactions` directory contains the directories named `generic` and `connection`

*Generic:* Holds a file that makes the queries to the database and returns the results in a generic way, to lately process them in a specific way.

*Connection:* Here is where is stored the connection that read the parameters from .xml file saved in config.

### Everything else is also separate

The other directories contain external packages used as utilities or extensions of our application, as PDF to generate PDF files or XMLTools to read the .xml with a PHP script.

Likewise inside `webroot` are the other plugins for bootstrap, jQuery, Fonts and CSS used in the front end.

### Improvements you can do

- [ ] Translate: EVERYTHING should be in English.

- [ ] Use of camelCase for function names and variables names.

- [ ] Use of PascalCase for classes names

- [ ] It is crucial to have indentation under control.

Send me a PR with your suggested changes, I'd love making you part of this 💜
