#!/bin/bash
# Revert changes one step back
# @see http://propelorm.org/documentation/09-migrations.html

DEVPATH=`pwd`
cd dev/database
../../vendor/bin/propel migration:down
cd "$DEVPATH"