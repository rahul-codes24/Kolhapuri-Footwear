# Kolhapuri Footwear Store

Welcome to the Kolhapuri E-Commerce Store, a dynamic web application built using PHP, MySQL, and HTML/CSS. This platform allows customers to browse traditional Kolhapuri footwear, add items to a shopping cart, register accounts with SMTP-based email verification, and place orders. It also features a complete Admin Dashboard for managing products, tracking sales, and generating business reports.

## Features
* **User Authentication:** Registration, login, and secure email verification with OTP.
* **Shopping Cart:** Add, update, and remove products dynamically from the cart.
* **Product Catalog:** Separated categories for Male and Female footwear.
* **Admin Panel:** Admin tools to add/edit products, manage orders, and generate reports.
* **Email System:** Real-time email receipts and registration OTP notifications via SMTP.

---

## 🛠️ Installation & Setup

Follow these steps to run the project locally on your machine using **XAMPP**:

### 1. Place the Project Files in XAMPP `htdocs`
1. Clone or download this repository.
2. Place the project folder inside your XAMPP document root, usually located at:
   `C:\xampp\htdocs\kolhapuri`

### 2. Set up the MySQL Database
1. Open the XAMPP Control Panel and click Start next to Apache and MySQL.
2. Open your browser and navigate to phpMyAdmin.
3. In the left sidebar, click New and create a database named kolhapuri.
4. Select the kolhapuri database, click the Import tab at the top.
5. Click Choose File and select the database.sql file in the root of your project directory.
6. Scroll down and click Import (or Go).

### 3. Configure Email/SMTP Settings (Required for OTP)

For security, private email credentials are not committed to Git. You must create your own configuration file:

1. Create your config file
Duplicate the file named smtp_config.example.php in the root folder, and rename the copy to smtp_config.php.

2. Get a Google App Password
Since Google blocks normal passwords on external apps, you must generate a secure App Password:

1. Go to your Google Account Security Settings.
2. Under "How you sign in to Google", ensure 2-Step Verification is turned ON.
3. Search for App Passwords in the top search bar.
4. Enter a name (e.g., Kolhapuri Store) and click Create.
5. Copy the 16-character password shown on the screen (e.g., abcd efgh ijkl mnop).
   
3. Update the credentials
Open your new smtp_config.php file in your code editor (like VS Code or Visual Studio) and replace the placeholders with your details:

php


// ==========================================
// ENTER YOUR CREDENTIALS HERE:
// ==========================================
$mail->Username = "YOUR_GMAIL_ADDRESS@gmail.com";    // Enter your Gmail address
$mail->Password = "YOUR_16_CHARACTER_PASSWORD";     // Enter your 16-character App Password (without spaces)
$mail->SetFrom("YOUR_GMAIL_ADDRESS@gmail.com", "Kolhapuri E-com");
// ==========================================

### 4. Run the Project
Open your web browser and navigate to: **[http://localhost/kolhapuri/index.html]**

---

##  Default Credentials for Testing

* **Admin Login Details:**
  * **Email:** `Admin@123`
  * **Password:** `1234`

---

##  Project Structure
* `database.sql` - Sanitized database schema backup.
* `smtp_config.example.php` - Template file for SMTP configuration.
* `index.html` - Guest homepage.
* `login.php` / `register.php` - Authentication pages.
* `userhome.php` - Logged-in user homepage.
* `admin_pro.php` / `admin_order.php` - Administrator management dashboards.
