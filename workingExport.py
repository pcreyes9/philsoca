import pyodbc
import pandas as pd
from datetime import datetime
from plyer import notification

try:
    # pag connect sa database
    con = pyodbc.connect('DRIVER={SQL Server};Server=PSASERVER;Database=PSADBLIVE;UID=sa;PWD=p$a@dm1n')

    # pag create ng sql query
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

    #pag submit ng query sa database
    query = pd.read_sql(sqlQuery, con)
    df = pd.DataFrame(query)

    # naming and pag convert ng result as csv file
    df.to_csv("EXPORTED_FILE " + datetime.now().strftime("%d-%b-%Y %H_%M_S") + ".csv", index = False)


    # mag send lang ng notification sa desktop na tapos na yung pag export ng database sa csv file
    notification.notify(title = "Export Status", message = f"Data has been successfully saved into Excel.\
        \nTotal Rows: {df.shape[0]}\nTotal Columns: {df.shape[1]}", timeout = 10)
except Exception as e:
    raise Exception (e)