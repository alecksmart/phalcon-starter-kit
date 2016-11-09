#!/bin/bash
# Migrate changes in schema.xml to current database
# @see http://propelorm.org/documentation/09-migrations.html

DEVPATH=`pwd`
cd dev/database
../../vendor/bin/propel diff
../../vendor/bin/propel migrate
cd "$DEVPATH"