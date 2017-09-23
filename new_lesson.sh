#!/bin/bash

read -p "Give it a name: " input

if [[ "$input" -ne "" ]] ; then
    cp ./sample $input
fi
