#!/bin/sh

backupdb="./database/insert.db"
sqlite="/usr/bin/sqlite"

insert(){

    cat database/insert_key | tr "\n" " " | sed 's/.$//' | sed 's/.$//' > database/insert_key_output
    INSERT_KEY=`cat database/insert_key_output`

    cat database/insert_value | tr "\n" " " | sed 's/.$//' | sed 's/.$//' > database/insert_value_output
    INSERT_VALUE=`cat database/insert_value_output`

mysql --user=louis --password=louis0626  --database=Subaru_DB << EOF
SET NAMES 'utf8';
INSERT INTO customer_info (${INSERT_KEY}) VALUES (${INSERT_VALUE});
EOF

rm -rf database/insert_key_output
rm -rf database/insert_value_output

#sqlite database/insert.db "INSERT INTO insert_Config (${INSERT_KEY}) VALUES (${INSERT_VALUE})"

#sqlite database/insert.db "INSERT INTO insert_Config (name,cellphone,age,search_month,comm_adress,live_adress,society_number,company_name,company_phone,company_title,company_number,old_car,new_car,orders_number,engine_number,pose_car_date,license_number,force_safe_number,safe_company_name,safe_list_number,credit_bank_name,credit_money,remarks) VALUES ('${NAME}','${CELLPHONE}','${AGE}','${SEARCH_MONTH}','${COMM_ADRESS}','${LIVE_ADRESS}','${SOCIETY_NUMBER}','${COMPANY_NAME}','${COMPANY_PHONE}','${COMPANY_TITLE}','${COMPANY_NUMBER}','${OLD_CAR}','${NEW_CAR}','${ORDERS_NUMBER}','${ENGINE_NUMBER}','${POSE_CAR_DATE}','${LICENSE_NUMBER}','${FORCE_SAFE_NUMBER}','${SAFE_COMPANY_NAME}','${SAFE_LIST_NUMBER}','${CREDIT_BANK_NAME}','${CREDIT_MONEY}','${REMARKS}')"


}
################
#    Main code
################
case "$1" in
        insert)
                insert
        ;;
        *)
esac
