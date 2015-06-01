#
# Runs a Development Server
#


# we must stop on error
set -e


# we require some utilities
source script/utils.sh


# script variables
LOG_TITLE="run-server"


log "starting development server" 0
php -S localhost:8080 script/router.php

