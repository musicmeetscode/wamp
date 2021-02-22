# W.A.M.P
 Custom wamp PHP based server UI 
 ![Sample Image](https://github.com/musicmeetscode/wamp/blob/master/sample/sample.png?raw=true)

 **Warning!! Do not clone this repo into your localhost directly as it might affect your project level repositories**

## Description
This project is a custom wamp server UI created with [Tailwind CSS](https://www.google.com "Tailwind css website"), and [Avatar UI for project avatars](https://ui-avatars.com "")

## Features
1.Custom two column based UI for wampserver
2. Project Creation
Option to create new projects from create button. 
 When a new project is created, the file ```make.php`` is executed and does the following
* Creates folders ```css,js,img and vendor``` from the ```$dirs``` array
* Copies the ```template.php``` file into the project and renames it to ```index.php```
3. Search for project from your list
4. Random quotes from ```main.js``` on every reload
5. Varying colors for text and images

## Installation
1. At the root of your wampserver (typically ```C://wamp/www/```) or ```/var/www/html```, Delete all files **apart from your projects** 
2. Copy the file contents of this repo onto the root of your localhost.
3. Enjoy


