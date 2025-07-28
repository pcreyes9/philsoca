import qrcode 
import pyodbc
import os

# Connect to SQL Server
con = pyodbc.connect('DRIVER={SQL Server};Server=PSASERVER;Database=PSADBLIVE;UID=sa;PWD=p$a@dm1n')

# Directory to save QR codes
save_dir = "public\images\QR_CODES"
os.makedirs(save_dir, exist_ok=True)  # Create the folder if it doesn't exist

def generate_qr_code(data): 
    qr = qrcode.QRCode(version=1, box_size=10, border=1) 
    qr.add_data(data) 
    qr.make(fit=True) 
    img = qr.make_image(fill_color="black", back_color="white") 
    img_path = os.path.join(save_dir, f"{data}.png")
    img.save(img_path)  
    print(f"QR code generated for {data}")

def generate_all_qr_codes():
    sqlQuery = "SELECT member_id_no FROM member"
    cursor = con.cursor()
    cursor.execute(sqlQuery)
    
    rows = cursor.fetchall()
    
    for row in rows:
        member_id = str(row[0]).strip()
        if member_id:  # Make sure it's not empty or None
            generate_qr_code(member_id)

# Call the function to generate all QR codes
generate_all_qr_codes()
