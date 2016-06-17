#!/usr/bin/bash
if [ "$1" = "00" ]
then
echo "----------\n\x1B[31mex00\n\x1B[0m----------\n"
curl -v -c cook.txt 'http://localhost:8080/ex00/index.php'

curl -v -b cook.txt 'http://localhost:8080/ex00/index.php?login=sb&passwd=beeone&submit=OK'

curl -v -b cook.txt 'http://localhost:8080/ex00/index.php'

curl -v 'http://localhost:8080/ex00/index.php'


elif [ "$1" = "01" ]
then
echo "----------\n\x1B[31mex01\n\x1B[0m----------\n"
rm -rf ./private/

curl -d login=toto1 -d passwd=titi1 -d submit=OK 'http://localhost:8080/ex01/create.php'

more ./private/passwd

curl -d login=toto1 -d passwd=titi1 -d submit=OK 'http://localhost:8080/ex01/create.php'

curl -d login=toto2 -d passwd= -d submit=OK 'http://localhost:8080/ex01/create.php'

curl -d login= -d passwd=titi1 -d submit=OK 'http://localhost:8080/ex01/create.php'

curl -d login=toto2 -d passwd=titi2 -d submit=OK 'http://localhost:8080/ex01/create.php'

curl -d login=toto2 -d passwd=titi2 -d submit=OK 'http://localhost:8080/ex01/create.php'

curl -d login=toto3 -d passwd=titi2 -d submit=OK 'http://localhost:8080/ex01/create.php'


elif [ "$1" = "02" ]
then
echo "----------\n\x1B[31mex02\n\x1B[0m----------\n"
rm -rf ./private/

curl -d login=x -d passwd=21 -d submit=OK 'http://localhost:8080/ex01/create.php'

more ./private/passwd

curl -d login=x -d oldpw=21 -d newpw=42 -d submit=OK 'http://localhost:8080/ex02/modif.php'

more ./private/passwd

curl -d login=x -d oldpw=21 -d newpw=42 -d submit=OK 'http://localhost:8080/ex02/modif.php'

curl -d login=x -d oldpw=42 -d newpw= -d submit=OK 'http://localhost:8080/ex02/modif.php'

elif [ "$1" = "03a" ]
then
echo "----------\n\x1B[31mex03a\n\x1B[0m----------\n"
rm -rf ./private/

curl -d login=toto -d passwd=titi -d submit=OK 'http://localhost:8080/ex01/create.php'

curl 'http://localhost:8080/ex03/login.php?login=toto&passwd=titi'

elif [ "$1" = "03b" ]
then
echo "----------\n\x1B[31mex03b\n\x1B[0m----------\n"
rm -rf ./private/

curl -d login=toto -d passwd=titi -d submit=OK 'http://localhost:8080/ex01/create.php'

curl -c cook.txt 'http://localhost:8080/ex03/login.php?login=toto&passwd=titi'

curl -b cook.txt 'http://localhost:8080/ex03/whoami.php'

curl -b cook.txt 'http://localhost:8080/ex03/logout.php'

curl -b cook.txt 'http://localhost:8080/ex03/whoami.php'

fi
