root mysqldump -u root -pPASSWORD --all-databases | gzip > /mnt/disk2/database_`data '+%m-%d-%Y'`.sql.gz
