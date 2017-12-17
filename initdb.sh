#!/bin/bash
docker exec -it mysql bash -c 'mysql -u $MYSQL_USER -p$MYSQL_PASSWORD $MYSQL_DATABASE < /initdb/init.sql'
