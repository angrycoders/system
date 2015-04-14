#
# Runs tests
#


# we must stop on error
set -e


# we require some utilities
source script/utils.sh


# script variables
LOG_TITLE="tests"


log "creating directory for logs" 0
mkdir -p build/logs


log "running tests with phpunit" 0
phpunit --bootstrap vendor/autoload.php --coverage-clover build/logs/clover.xml tests/


