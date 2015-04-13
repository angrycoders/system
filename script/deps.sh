#
# Installs dependencies
#


# we must stop on error
set -e


# we require some utilities
source script/utils.sh


# script variables
LOG_TITLE="deps"


log "installing dependencies using composer" 0
composer install

