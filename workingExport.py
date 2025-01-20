import pyodbc
import pandas as pd
import os
from datetime import datetime
from plyer import notification
from sqlalchemy import create_engine


try:
    # con = pyodbc.connect(DRIVER="{SQL SERVER}", SERVER = "PSASERVER", DATABASE="PSADBLIVE", UID="sa", PWD="p$a@dm1n")
    # SERVER='PSASERVER'
    # DATABASE='PSADBLIVE'
    # DRIVER='SQL Server'
    # USERNAME='sa'
    # PASSWORD='p$a@dm1n'
    # conn = f'mssql+pyodbc://{USERNAME}:{PASSWORD}@{SERVER}/{DATABASE}?driver{DRIVER}'  
    # engine = create_engine(conn)
    # con = engine.connect()
    


    con = pyodbc.connect('DRIVER={SQL Server};Server=PSASERVER;Database=PSADBLIVE;UID=sa;PWD=p$a@dm1n')
    
    sqlQuery = """SELECT member_id_no
      ,psa_chapter_code
      ,psa_mem_type
      ,mem_last_name
      ,mem_first_name
      ,mem_middle_name
      ,mem_mobile_no1
      ,mem_mobile_no2
      ,mem_email_address
      ,mem_birth_date
      ,mem_gender
      ,mem_citizenship
      
      FROM member"""
    query = pd.read_sql(sqlQuery, con)
    df = pd.DataFrame(query)
    # print(df)
    
    df.to_csv("EXPORTED_FILE " + datetime.now().strftime("%d-%b-%Y %H_%M_S") + ".csv", index = False)

    notification.notify(title = "Export Status", message = f"Data has been successfully saved into Excel.\
        \nTotal Rows: {df.shape[0]}\nTotal Columns: {df.shape[1]}", timeout = 10)
except Exception as e:
    raise Exception (e)