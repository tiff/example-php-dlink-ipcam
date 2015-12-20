# PHP Webcam Example for Experimental Platform

The [index.php](https://github.com/experimental-platform/example-php-webcam/blob/master/web/index.php) contains all you need to know. A linux package called [fswebcam](http://manpages.ubuntu.com/manpages/lucid/man1/fswebcam.1.html) is used for capturing webcam images.
There's also a [Node.JS example](https://github.com/experimental-platform/example-webcam) if you don't want to use PHP.

## Usage

    git clone https://github.com/experimental-platform/example-php-webcam.git
    cd example-php-webcam
    git remote add platform ssh://dokku@your-box.local:8022/example-php-webcam
    git push platform master
