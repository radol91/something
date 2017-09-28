#!/usr/bin/env bash

declare -A paths

paths["composer"]="composer"
paths["symfony"]="bin/console"
paths["make"]="make"
paths["cs"]="php-cs-fixer"
paths["phpunit"]="vendor/bin/phpunit"

executable=$1

if [[ -z ${paths[$executable]} ]]; then
    echo "Executable does not exist.";

    exit 255;
fi

path="${paths[$executable]}"

command="${path} ${@:2}"

su -c "$command" -s /bin/bash www-data
