#!/bin/bash

echo "Testing..."
ls -l src/xlxd
echo "tidy -e -q:"
find . -name "*.html" -print -exec tidy -e -q {} \;
echo "php -l:"
find . -name "*.php" -print -exec php -l {} \;

