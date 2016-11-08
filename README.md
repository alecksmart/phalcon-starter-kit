# phalcon-starter-kit
A custom starter boilerplate with php7, phalcon framework and live reload

# Pre-requisites

 * phalcon extension running under php7
 * npm
 * composer

# Install

```bash
# preapre all
$ npm install
$ composer install
$ ln -s 'PATH/TO/vendor/bin/phalcon.php' 'bin/phalcon'
# check with:
$ bin/phalcon commands
# build application with devtools
$ cd dev
$ ../bin/phalcon project main
# start environment
$ npm start
```

# Notes

To test live reload, edit, for instance, _dev/app/views/index/index.volt_ and save it. See the browser reloading.

Tested under Linux only. Seems to be well-compliant with xdebug. For custom configuration, check file _package.json_.