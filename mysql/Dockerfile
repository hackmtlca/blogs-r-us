FROM mysql

COPY ./db.sql /docker-entrypoint-initdb.d/init.sql 

RUN chmod -R 775 /docker-entrypoint-initdb.d

EXPOSE 3306