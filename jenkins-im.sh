if [ ! -e "jenkins-im.php" ]; then
wget https://raw.githubusercontent.com/ImagicalCorp/php-build-scripts/master/jenkins-im.php
fi
PHP_BINARY="./bin/php7/bin/php"
chmod +x jenkins-im.php
./bin/php7/bin/php jenkins-im.php
