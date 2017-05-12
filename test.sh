#!/bin/bash

echo "Testing..."
ls -l src/xlxd
find . -name "*.html" -exec tidy -e -q {} \;
find . -name "*.php" -exec php -l {} \;

