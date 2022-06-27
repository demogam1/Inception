FROM debian:buster

RUN apt-get update && apt-get -y upgrade
RUN apt-get install -y mariadb-server


COPY ./exec.sh ./
COPY ./50-server.cnf /etc/mysql/mariadb.conf.d/
COPY ./wordpress.sql ./

EXPOSE 3306

CMD ["bash", "exec.sh"]
