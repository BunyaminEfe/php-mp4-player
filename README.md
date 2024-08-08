# MP4 player - Music Television Web App

This code transforms your music directory into an autonomous music television station.  Simply yeet your videos into a folder called `videolar` and the app does the rest.

## Features
* Give users a single random video.
* Let users keep your music videos on in the background all day. 

## How it works
* *all.php* - Code will read all the MP4 files in your folder and yeet them into an array.  It will then
shuffle the array and play the files in that order.  The next video loads when the current one ends.

* *random.php* Code will pick a file at random from the folder and yeet it to the user.

Relies on code from bunyaminefe/php-mp4-player and no-carrier/lickshot and simplecss.


