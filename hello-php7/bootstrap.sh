#!/usr/bin/env bash
# nginx에 config 적용
sudo cp /vagrant/mynginx.conf /etc/nginx/conf.d
sudo service nginx reload

# 폴더 링크 생성
sudo rm -rf /var/www/myphp7
sudo ln -fs /vagrant /var/www/myphp7
