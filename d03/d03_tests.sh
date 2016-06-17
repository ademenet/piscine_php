#!/usr/bin/bash
set -o verbose
KNRM="\x1B[0m"
KRED="\x1B[31m"
KGRN="\x1B[32m"
KYEL="\x1B[33m"
KBLU="\x1B[34m"
KMAG="\x1B[35m"
KCYN="\x1B[36m"
KWHT="\x1B[37m"

printf "\n----------\n$KCYN%s\n$KNRM----------\n" "Ex01"
curl 'http://localhost:8080/ex01/phpinfo.php'

printf "\n----------\n$KCYN%s\n$KNRM----------\n" "Ex02"
curl 'http://localhost:8080/ex02/print_get.php?login=mmontinet'
curl 'http://localhost:8080/ex02/print_get.php?gdb=pied2biche&barry=barreamine'
curl 'http://localhost:8080/ex02/print_get.php?'
curl 'http://localhost:8080/ex02/print_get.php?gdb=pied2biche&barry=barreamine=coucou=cest=moi'
curl 'http://localhost:8080/ex02/print_get.php?gdb=pied2biche&&&&barry=barreamine'

printf "\n----------\n$KCYN%s\n$KNRM----------\n" "Ex03"
curl -c cook.txt 'http://localhost:8080/ex03/cookie_crisp.php?action=set&name=plat&value=choucroute'
curl -b cook.txt 'http://localhost:8080/ex03/cookie_crisp.php?action=get&name=plat'
curl -c cook.txt 'http://localhost:8080/ex03/cookie_crisp.php?action=del&name=plat'
curl -b cook.txt 'http://localhost:8080/ex03/cookie_crisp.php?action=get&name=plat'

printf "\n----------\n$KCYN%s\n$KNRM----------\n" "Ex04"
curl 'http://localhost:8080/ex04/raw_text.php'

open 'http://localhost:8080/ex04/raw_text.php'

printf "\n----------\n$KCYN%s\n$KNRM----------\n" "Ex05"
curl --head http://localhost:8080/ex05/read_img.php

printf "\n----------\n$KCYN%s\n$KNRM----------\n" "Ex06"
curl --user zaz:jaimelespetitsponeys http://localhost:8080/ex06/members_only.php

curl -v --user root:root http://localhost:8080/ex06/members_only.php
