#!/bin/bash

cp *.{php,html,css,jpg,png} /home/nginx/domains/zurg.hauptj.com/public/

cp *.{php,html,css,jpg,png} /home/slyver/dev/CS321/www/

cd /home/slyver/dev/CS321/

git add *

git commit -m "joshcopy.sh auto commit"

git push origin master

cd /home/nginx/domains/zurg.hauptj.com/public/CS321/WWW/