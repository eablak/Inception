FROM debian:10

RUN apt-get update
RUN apt-get -y install php7.3 php-mysqli php-fpm wget sendmail

EXPOSE 9000

COPY ./conf/www.conf /etc/php/7.3/fpm/pool.d
COPY ./tools /var/www/

RUN chmod +x /var/www/create_wordpress.sh

ENTRYPOINT [ "/var/www/create_wordpress.sh" ]

CMD ["/usr/sbin/php-fpm7.3", "--nodaemonize"]