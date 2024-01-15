#!/bin/bash

pwd

cd /var/www/hom-portfolio.iplanfor.fortaleza.ce.gov.br/portfolio-disin-laravel

pwd

git config --add safe.directory /var/www/hom-portfolio.iplanfor.fortaleza.ce.gov.br/portfolio-disin-laravel


git remote -v
git checkout develop
git stash
git pull origin develop
git status -uno
