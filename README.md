
# 📆 Leave Management System

A dynamic and cross-platform **Leave Management System** with a mobile application for employees and a web-based admin dashboard. Built using **Flutter** and **Firebase** for the mobile side, and **PHP** for the admin interface.

---

## ✨ Key Highlights

- 🧑‍💼 Employees can submit leave requests via mobile
- 🧑‍💻 Admins can approve/reject requests via dashboard
- 🔐 Secure user authentication via Firebase
- 📜 Leave history tracking for both parties
- 📱 Cross-platform mobile interface using Flutter
- 🧾 Simple and responsive PHP dashboard

---

## 📦 Technologies Used

| Layer         | Technology               |
|---------------|---------------------------|
| Mobile App    | Flutter (Dart)            |
| Backend       | Firebase (Auth + Firestore) |
| Admin Panel   | PHP                       |
| Styling       | CSS                       |

---

## 📁 Repository Structure

```

LeaveManagement/
├── flutter\_app/                  # Flutter mobile application (not shown above, assumed)
│   └── lib/
│       └── firebase\_options.dart
├── admin/
│   ├── config.php                # Database configuration
│   ├── dashboard.php            # Admin dashboard page
│   ├── index.php                # Admin login redirect
│   ├── login.html               # Login page
│   ├── login.php                # Login logic
│   ├── logout.php               # Logout logic
│   └── styles.css               # Admin interface styling
└── README.md

````

## 🔧 Setup Instructions

### 📱 Mobile Application (Flutter)

1. Navigate to the Flutter app directory:
   ```bash
   cd flutter_app

2. Install dependencies:

   ```bash
   flutter pub get
   

3. Configure Firebase:

   * Add your `google-services.json` (Android) or `GoogleService-Info.plist` (iOS)
   * Update Firebase project settings in `lib/firebase_options.dart`

4. Run the app:

   ```bash
   flutter run

---

### 🖥️ Admin Dashboard (PHP)

1. Configure your Firebase SDK credentials or use Firestore API from PHP (or local DB if used).

2. Edit the `admin/config.php` to set database (if applicable).

3. Serve the admin folder using a local server like XAMPP, WAMP, or built-in PHP server:

   ```bash
   php -S localhost:8000 -t admin
   ```

4. Access the dashboard:

   * [http://localhost:8000](http://localhost:8000)
   * or via your configured web server URL

---

## ✅ Features Overview

| Feature                   | Employee App | Admin Dashboard |
| ------------------------- | ------------ | --------------- |
| Submit Leave Request      | ✅            | ❌               |
| View Leave History        | ✅            | ✅               |
| Login / Authentication    | ✅ (Firebase) | ✅ (PHP)         |
| Approve / Reject Requests | ❌            | ✅               |
| User Interface            | Flutter UI   | HTML/CSS        |

---

## 📄 License

This project is licensed under the **MIT License**. See [`LICENSE`](LICENSE) for more details.

---

## 👤 Author

**Aya Ben Mabrouk**
🔗 [GitHub](https://github.com/BenMabroukAya)
🔗 [LinkedIn](https://www.linkedin.com/in/aya-ben-mabrouk)

