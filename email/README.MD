# PHP Mail Configuration & Usage Guide (XAMPP)

This repository contains `mail.php` to send emails using PHP's native `mail()` function via XAMPP and Gmail SMTP[cite: 1, 2]. Follow the setup instructions below to configure XAMPP before executing the script[cite: 2].

---

## Step 1: Configure `php.ini`

1. Open `C:\xampp\php\php.ini` in a text editor[cite: 2].
2. Locate the `[mail function]` section and update the configuration as follows[cite: 2]:
   * Set SMTP server: `SMTP=smtp.gmail.com` (remove starting semicolon `;` if present)[cite: 2]
   * Set SMTP port: `smtp_port=587` (remove starting semicolon `;` if present)[cite: 2]
   * Set sender email: `sendmail_from = yashmahajan99@gmail.com` (remove starting semicolon `;`)[cite: 2]
   * Set sendmail path: `sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\" -t"` (remove starting semicolon `;`)[cite: 2]

---

## Step 2: Configure `sendmail.ini`

1. Open `C:\xampp\sendmail\sendmail.ini` in a text editor[cite: 2].
2. Modify the following parameters[cite: 2]:
   * `smtp_server=smtp.gmail.com`[cite: 2]
   * `smtp_port=587`[cite: 2]
   * `debug_logfile=debug.log` (remove starting semicolon `;`)[cite: 2]
   * `auth_username=yashmahajan99@gmail.com`[cite: 2]
   * `auth_password=your_app_password_here`[cite: 2]

---

## Step 3: Google Account Security Configuration

1. Log in to your Gmail account (`yashmahajan99@gmail.com`)[cite: 2].
2. Navigate to **Google Account Settings** -> **Security**[cite: 2].
3. Enable **Less Secure App Access** (or generate an **App Password** if 2-Step Verification is enabled)[cite: 2].
4. Paste the generated App Password into the `auth_password` field in `sendmail.ini`[cite: 2].

---

## Step 4: Running the Script

1. Restart the Apache server from the XAMPP Control Panel[cite: 2].
2. Ensure `mail.php` is placed inside `C:\xampp\htdocs\wfs-practical\email\`[cite: 1].
3. Open your browser and access:
   `http://localhost/wfs-practical/email/mail.php`[cite: 1]