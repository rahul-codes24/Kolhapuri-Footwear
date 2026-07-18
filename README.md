# Kolhapuri E-Commerce Store

A dynamic PHP and MySQL-based e-commerce platform specializing in traditional Kolhapuri chappals (footwear). This project features user authentication, a product catalog, shopping cart functionality, admin dashboards, and email/OTP verification via PHPMailer.

## 🚀 Features
* **User Authentication:** Registration, login, and secure email verification with OTP.
* **Shopping Cart:** Add, update, and remove products dynamically from the cart.
* **Product Catalog:** Separated categories for Male and Female footwear.
* **Admin Panel:** Admin tools to add/edit products, manage orders, and generate reports.
* **Email System:** Real-time email receipts and registration OTP notifications via SMTP.

---

## 🛠️ Installation & Setup

Follow these steps to run the project locally on your machine using **XAMPP**:

### 1. Place the Project Files in `htdocs`
1. Clone or download this repository.
2. Place the project folder inside your XAMPP document root, usually located at:
   `C:\xampp\htdocs\kolhapuri`

### 2. Configure the Database
1. Open the **XAMPP Control Panel** and start **Apache** and **MySQL**.
2. Open your browser and navigate to **[phpMyAdmin](http://localhost/phpmyadmin/)**.
3. Create a new database named **`kolhapuri`**.
4. Select the `kolhapuri` database, go to the **Import** tab, choose the **`database.sql`** file from this project root, and click **Import** (or **Go**).

### 3. Configure Email/SMTP Settings (Required for OTP)
For security reasons, private SMTP email credentials are not committed to this repository. You must configure them locally:
1. In the project root, copy the template file **`smtp_config.example.php`** and rename it to **`smtp_config.php`**.
2. Open **`smtp_config.php`** in your code editor.
3. Replace the placeholder values with your own Gmail address and a secure 16-character **Google App Password**:
   ```php
   $mail->Username = "your_email@gmail.com";
   $mail->Password = "your_16_char_app_password";
   $mail->SetFrom("your_email@gmail.com", "Kolhapuri E-com");
   ```
   *(Note: You can generate an App Password in your Google Account Security Settings under 2-Step Verification.)*

### 4. Run the Project
Open your web browser and navigate to:
👉 **[http://localhost/kolhapuri/index.html](http://localhost/kolhapuri/index.html)**

---

## 🔑 Default Credentials for Testing

* **Admin Login Details:**
  * **Email:** `Admin@123`
  * **Password:** `1234`
* **Test Customer Login Details:**
  * **Email:** `shubhampatil6502@gmail.com`
  * **Password:** `1234`

---

## 📂 Project Structure
* `database.sql` - Sanitized database schema backup.
* `smtp_config.example.php` - Template file for SMTP configuration.
* `index.html` - Guest homepage.
* `login.php` / `register.php` - Authentication pages.
* `userhome.php` - Logged-in user homepage.
* `admin_pro.php` / `admin_order.php` - Administrator management dashboards.
