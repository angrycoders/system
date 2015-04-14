#
# Runs tests
#


# we must stop on error
set -e


# we require some utilities
source script/utils.sh


# script variables
LOG_TITLE="ci-push"


log "logging and sending coverage reports" 0
php vendor/bin/coveralls -v

