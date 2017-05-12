#!/bin/bash

echo "Testing..."
ls -l src/xlxd
echo "tidy -e -q:"
find . -name "*.html" -exec tidy -e -q {} \;
echo "php -l:"
find . -name "*.php" -exec php -l {} \;

