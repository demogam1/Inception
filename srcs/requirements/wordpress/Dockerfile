FROM debian:buster

RUN apt-get update && apt-get -y upgrade
RUN apt-get install -y wget
RUN apt-get install -y php7.3
RUN apt-get install -y php-fpm
RUN apt-get install -y php-mysqli php-xml php-mbstring
RUN apt-get install -y sysvinit-utils
RUN wget https://wordpress.org/wordpress-5.9.tar.gz
RUN tar -xzvf wordpress-5.9.tar.gz --directory /var/www/html/
RUN rm -rf wordpress-5.9.tar.gz

EXPOSE 9000

COPY ./wp-config.php ./
COPY ./exec.sh ./


ENTRYPOINT ["bash", "exec.sh"]
