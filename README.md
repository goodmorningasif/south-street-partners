[![Stories in Ready](https://badge.waffle.io/sdco-partners/south-street-partners.png?label=ready&title=Ready)](https://waffle.io/sdco-partners/south-street-partners)
# South Street Partners
Last Updated: 04/12/17 | Copyright 2017 SDCO Partners
[http://southstreetpartners.com](http://southstreetpartners.com)

Last Update: April 12/2017 | Copyright 2017 SDCO Partners

1. Getting Started 
  * Folder Structure
  * Initializing New Project
  * Starting/Editing Current Project
  * Deployment
  * Updates
  * Feature Documentation
2. Dev Environment
  * Gulp config
  * SASS
  * Javascript 
  * Components & Subcomponents
  * Functions.PHP
3. Known Bugs 
4. Team

## Getting Started

### Folder Structer

```
|--/ssp/
|  |
|  |--/assets/
|  |
|  |--/components/
|  |  └-- about.php
|  |  └-- contact.php
|  |  └-- foot.php
|  |  └-- investmetns.php
|  |  └-- main.php
|  |  └-- nav.php
|  |  └-- press.php
|  |  └-- properties.php
|  |
|  |--/prod/
|  |  └-- modernizr.js
|  |  └-- scripts.js
|  |  └-- styles.css
|  |  └-- underscore.js
|  |
|  |--/src/
|  |  | 
|  |  |--/js/
|  |  |  └-- a.js
|  |  |  └-- fader.js
|  |  |  └-- faderAbout.js
|  |  |  └-- faderMain.js
|  |  |  └-- getUrlParams.js
|  |  |  └-- queryProp.js
|  |  |  └-- scroll.js
|  |  |
|  |  |--/sass/
|  |  |  └-- _about.sass
|  |  |  └-- _contact.sass
|  |  |  └-- _foot.sass
|  |  |  └-- _investments.sass
|  |  |  └-- _main.sass
|  |  |  └-- _mixins.sass
|  |  |  └-- _nav.sass
|  |  |  └-- _press.sass
|  |  |  └-- _preview.sass
|  |  |  └-- _property.sass
|  |  |  └-- _reset.sass
|  |  |  └-- _variables.sass
|  |  |  └-- styles.sass
|  |  
└-- 404.php
└-- config.php
└-- footer.php
└-- function.php
└-- header.php
└-- index.php
└-- investments.php
└-- investments_ajax.php
└-- README.txt
└-- sidebar.php
└-- style.css 
```


### Initializing New Project
Follow these steps to configure your install to your specific project.

1. WP-CONFIG.PHP
  * [x]  set var $local_path 
2. LOCAL-CONFIG-EXAMPLE.PHP
  * [x]  remove '-example' from end of filepath
  * [x]  set DB_NAME 
  * [x]  set DB_USER 
  * [x]  set DB_PASSWORD
3. PACKAGE.JSON
  * [x]  set 'name' 
  * [x]  set 'description' 
  * [x]  set 'url' for both 'repository' and 'bugs'
  * [x]  set 'homepage' 
4. GULPFILE.JS
  * [x]  set var uri in line 75
5. .GITIGNORE
  * [x]  set filepath to inner CONFIG.PHP on line 75
6. THEME FILES & FOLDERS
  * [x]  rename folder 'INIT' 
  * [x]  set 'Theme Name' and 'Theme URI' in STYLE.CSS
  * [x]  set var $GLOBALS['root'] and $GLOBALS['docpath'] in FUNCTIONS.PHP
  * [x]  set var $uri in _VARIABLES.SASS, 2 points
  * [x]  set @link and @package notes on all template files.
7. WORDPRESS SUBMODULE
  * [x]  Run `git submodule update --init`


### Editing Current Project
Follow these steps to edit a current project. This will set up the repository and compile your JS and Sass files for your.

1. In Terminal ...
  * [x]  Run `git clone` + your repo url
  * [x]  Run `git submodule update --init`
  * [x]  Run `npm install` 
  * [x]  Run `gulp`
2. Get config files/folders from server
  * [x]  Download `wp-config.php`
  * [x]  Download `local-config.php`
  * [x]  Download `config.php`
3. Setup Local Server DB 
  * [x]  create db and user
5. Install Wordpress
  * [x]  Follow prompts 
4. Use Migrate DB to fetch content from server
  * [x]  Follow prompts 

If you choose not to follow these steps, you will be unable to keep the repository up-to-date, and you will have to deal with minified and uglified JS and CSS files. See notes under DEV ENVIRONMENT for more info.
 

### First Deployment

1. Create new WHM Account
  * [x]  Click "Create A New Account" and follow prompts
  * [x]  Click "List Accounts" and locate the account you just created
2. Create new database and user on the server
  * [x]  Navigate to the account's CPanel
  * [x]  Click "MySQL Databases" and follow prompts to:
    * [x]  Create a new database  
    * [x]  Create a new user
    * [x]  Connect the new user to the new database 
3. Import local database to newly created server database 
  * [x]  Navigate to the account's CPanel
  * [x]  Click "phpMyAdmin"
  * [x]  Select the database you created
  * [x]  Click "Import" and follow prompts
4. Upload folders to server
  * [x]  content
  * [x]  wordpress
  * [x]  index.php
  * [x]  local-config.php
  * [x]  wp-config.php    
5. Update "local-config.php"
  * [x]  Set lines 4, 7, and 10 with your database info
6. Update "wp-config.php"
  * [x]  Set var $local_path on line 91 with your server url
7. Update "style.css" if necessary
  * [x]  Find all instances of previous url and replace
8. Update "functions.php"
  * [x]  Set var $GLOBALS['root']

### Updates
If updating SASS files ...
  * Compile files using GULP.
  * Replace the `styles.css` file on server with your compiled file.
If updating JS files ...
  * Compile files using GULP.
  * Replace the `scripts.js` file on server with your compiled file.
For All other files ...
  * Replace server file with your changed file.

### Feature Documentation

#### Image Fader
  The Image Fader extends the superclass Fader from `fader.js` into `faderMain.js`. Fader sets up some basic values and methods for animating the images. faderMain callibrates for the element and childen elements we'll want to animate.

#### Team Directory
  Due to some amount of laziness, we use the same engine to power the directory as we do the image slider in `faderAbout.js`. Fader sets up some basic values and methods for animating the images. faderAbout callibrates for the element and childen elements we'll want to animate. faderAbout also contains a function to handle highlighting the team member names when selected.

#### Form Submission
  The form signup uses Contact Form 7 to handle the form submission and initial email notification. As a good habit, we're also saving a back-up of all entries to the database using Flamingo.

  If the Flamingo connection breaks, make sure the flamingo integration code is utilized under `Newsletter Signup > Additional Settings`.

#### Investments Navigation
  We built the navigation for the divernt properties from scratch using custom wp queries and utilizing $_GET[] to keep track of which property we are currently at.

## Known Bugs

  * Team directory and investment navigation should be done dynamically. I started to build an ajax-based dynamic PHP scripting but needed to set up an initial load and a trigger to update once ajax returns the needed information. If we can accomplish this, then we can start moving to one data store from where we can request data through ajax scripting.

## Team 
  
  * PROJECT MANAGER   :   Paige Feighley
  * DESIGN LEAD       :   Amy Pastre
  * DEVELOPER         :   Asifuzzaman Ahmed
