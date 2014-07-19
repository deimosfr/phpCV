phpCV - PHP Curriculum Vitae
============================

Creator : Pierre Mavro (pierre@mavro.fr)
License : This software is under GPL2 Licence

Description
-----------

phpCV is a tool developed in PHP to help you to create your Curriculum Vitae.

When I've searched for a web CV, I didn't find what I would like instead of
a specific project : Sample Resume Template (http://sampleresumetemplate.net/)

The problem is it's written in HTML and is not modular at all. Anyway, it's
kindly beautiful. I also would like a PDF version of my web CV and other cool
stuffs that I thought I could bring to it.

That's why, with phpCV you can :
* Choose any part of the CV you would like
* Construct it with a simple file
* Have a bi language CV
* Get your age automatically calculated from your birth informations
* Generate a PDF on the fly (using wkhtmltopdf project)
* Show some personal informations with a password in URL normally hidden
* Get a web CV conform to W3C

This is a good list of what you can do with it. If you have any other ideas, do
not hesitate to contact me :-).

Prerequisite
------------

Before starting, you need :
* A web server like Apache or Lighttpd
* PHP module installed and functional for your web server

In addition, if you want to generate PDF on the fly, you'll need to have :
* wkhtmltopdf installed (http://code.google.com/p/wkhtmltopdf)

Installation
------------

I won't describe the installation of a web server and PHP module as it could be
different between the OS and the web server you've chosen.

To install phpCV, it's very simple. After having downloaded the archive,
decompress it in your web server root (ex: /var/www/phpCV). That's all :-)

If you want to have to possibility to generate PDF, download the binary of
wkhtmltopdf from the website and put it in a path available from your web
server.
Note : If you have a chrooted server configuration, you need to link all the
required libraries in the chroot dir to make it work.

Configuration / Usage
---------------------

Any time you want to check what your CV looks like, you need to connect with
your favorite web browser on :
 http://your_web_server/phpCV

Now you should edit the config.php file in phpCV folder to create your own CV

Changing values
---------------

To change default values, simply replace what is in "". Example, by default, I
have :
- $my_name = "Prenom Nom";
If my name is Pierre Mavro, I just need to adapt is as :
- $my_name = "Pierre Mavro";

Now how to set multiples values ? In some case, you can set multiple values as
it is possible with knowledges. You can add as many lines as you want simply
by adding new lines written like the one before. You just need to warn with ","
(noun). Their place are very important, they are usually not used at the end of
array and must be used between different elements.

There are also arrays in arrays like for educations. You can add as many arrays
you wish in the main array. Warn again with nouns.

Languages
---------

Per default, there are 2 languages : French and English.

To access to the different versions, simply type in your browser :
* http://your_web_server/phpCV?en --> For the english version
* http://your_web_server/phpCV?fr --> For the french version

You can change this by modifying the 2 letters ('fr') on the line containing :
* "$lang == 'fr'"

Remove unwanted parts
---------------------

With all the availables part in the CV, you may not want to view some of them.
The question is how to simply remove them ?

Don't worry, it's easy. For example, you have this kind of parts used with a
title :
* Profile : $profile_title
* Aim : $aim_title
* Education : $education_title
* ...

So if I want to disable one part, you simple need to empty the value associated
with or remove the line containing the title. For example :
* $profile_title = "";

This will remove the profile part.

Personal hidden part
--------------------

This part is not in the config.php file but in the cv.php file. You can set a
password like to allow users to view filtered content of your CV. Generally it's
when you want to hide your personal phone number etc...

Simply change the line containing :
* $secret = 'mysecret';
By the secret password you would like (here mysecret).

To modify the hidden part, look at the config.php file and change the
$personnal_infos_full values.

Now you can see both version using this kind of url :
* http://your_web_server/phpCV?en_mysecret --> For the full version
* http://your_web_server/phpCV?en --> For the normal hidden version

Generate PDF
------------
As soon as you've correctly installed wkhtmltopdf, you need to configure it at
the end of the config.php file.

If you do not insert a name value in $pdf_filename, you'll the default generated
name will be :
* firstname_secondname-cv_language.pdf
For example, my name is Pierre Mavro and I want my CV in french, the generated
PDF file will be :
* pierre_mavro-cv_fr.pdf

To generate the PDF file, simply type this in your browser :
* http://your_web_server/phpCV?en_pdf

W3C logo exclusion
------------------
If you don't want the W3C logo, you can disable it by adding exclude in the
URL. I admit it's usually necessary when you want to generate a PDF. Simply
try this URL :
* http://your_web_server/phpCV?en_exclude

Combination
-----------

You can combines multiple options in your URL. For example, if I want a CV :
* With fr language
* With the personal hidden part
* In a PDF format
* Exclude W3C logo

I need to type as URL :
* http://your_web_server/phpCV?fr_mysecret_pdf_exclude

Isn't it easy ? :-)
