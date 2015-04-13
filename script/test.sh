#
# Runs tests
#


# we must stop on error
set -e


# we require some utilities
source script/utils.sh


# script variables
LOG_TITLE="tests"


log "running tests with phpunit" 0
phpunit tests/


