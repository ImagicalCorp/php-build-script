if [ ! -d "releases" ]; then  
mkdir "releases"  
fi
if [ ! -e "jenkins-pm.php" ]; then
wget https://raw.githubusercontent.com/ImagicalCorp/php-build-scripts/master/jenkins-pm.php
fi
PHP_BINARY="./bin/php7/bin/php"
chmod +x jenkins-pm.php
./bin/php7/bin/php jenkins-pm.php
