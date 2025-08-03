#!/bin/bash

jq -s '.[0] * .[1]' composer.json overrides/composer.plugins.json > composer.tmp.json && mv composer.tmp.json composer.json