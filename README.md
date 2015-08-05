Packt Publishing: Learning Yii 2 Code Samples
--------------------------------
This repository contains code samples meant to compliment the *Learning Yii 2* video course by [Packt Publishing.](https://www.packtpub.com)

**Contents**

 1. /Boxes/monsterslair - PuPHPet configuration files used to generate the CentOS 6 virtual server used through this course.
 2. /Code/monstermash - Yii-based application

**Installation**

To install the development server, follow instructions in Video 1.2 to install VirtualBox and Vagrant, and then generate PuPHPet configuration files, or use those provided in the /Boxes/monsterslair directory of this repository. Switch to that directory and type:

    vagrant up

Once your box has been created, connect to it by typing:

    vagrant ssh

Then you can install the Yii 2 framework files using Composer with the following commands:

    cd /var/www/monstermash
    composer install

** Usage **

Check out the commit that corresponds to the video you are about to watch. The commits represent the state of the code samples at the beginning of each video. Changes made during the course of a video are not added until the following commit. For instance, the changes made to /views/site/about.php in Video 1.5 are not visible until you check out Video 2.1.
