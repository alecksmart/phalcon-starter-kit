# phalcon-starter-kit
A custom starter boilerplate with php7, phalcon framework and live reload

# Pre-requisites

 * php7
 * phalcon extension installed
 * npm
 * composer

# Workflow

## Install

```bash
# preapre all
$ npm install
$ composer install
$ ln -s 'PATH/TO/vendor/bin/phalcon.php' 'bin/phalcon'
# check with:
$ bin/phalcon commands
# build application with devtools - skip this part
# $ cd dev
# $ ../bin/phalcon project main
# $ cd ..
# start environment
$ npm start
```

# Notes

To test live reload, edit, for instance, _dev/app/views/index/index.volt_ and save it. See the browser reloading.

Tested under Linux only. Seems to be well-compliant with xdebug. For custom configuration, check file _package.json_.

# ToDo

  * database
    * easy database setup with Propel ORM
    * declarative incremental develoment
    * incremental deployment to production
  * phalcon
    * modules and configuration
    * i18n with gettext
    * K.I.S.S.: user auth and user groups
    * K.I.S.S.: user CRUD
    * RESTful api
  * frontend
    * bower components for javascript
    * i18n with gettext
    * SemanticUI or Bootstrap
    * axios for XMLHttpRequests
    * CRUD commons
  * unit testing
    * phpUnit
    * karma + protractor


