# Anime Store

![Anime Store Banner](banner.png)

**Anime Store** is a web-based e-commerce platform for anime enthusiasts. Browse through a collection of anime-themed merchandise, manage your account, and enjoy seamless shopping—whether you're a casual fan or an ultimate otaku. Admins can manage the store through a dedicated dashboard for product, order, and user management.

---

## 📚 Table of Contents

- [Anime Store](#anime-store)
  - [📚 Table of Contents](#-table-of-contents)
  - [🧾 Introduction](#-introduction)
  - [✨ Features](#-features)
    - [👤 User Features](#-user-features)
    - [🛠️ Admin Features](#️-admin-features)
  - [💻 How to Install](#-how-to-install)
    - [⚙️ Prerequisites](#️-prerequisites)
    - [📥 Setup](#-setup)
  - [📁 Project Structure](#-project-structure)
  - [🤝 How to Contribute](#-how-to-contribute)
  - [📄 License](#-license)
    - [✅ Suggestions to Improve the README:](#-suggestions-to-improve-the-readme)
      - [1. **Add Screenshots or GIFs**](#1-add-screenshots-or-gifs)
      - [2. **Add a Demo Link (if deployed)**](#2-add-a-demo-link-if-deployed)
      - [3. **Improve SEO with Project Tags**](#3-improve-seo-with-project-tags)
      - [4. **Mention Security Considerations**](#4-mention-security-considerations)
      - [5. **Add Credits or Resources Section**](#5-add-credits-or-resources-section)
    - [🔧 Codebase/Project Suggestions:](#-codebaseproject-suggestions)
      - [1. **Use Environment Configuration File**](#1-use-environment-configuration-file)
      - [2. **Secure Passwords**](#2-secure-passwords)
      - [3. **Add .gitignore**](#3-add-gitignore)
      - [4. **Consider MVC Structure (Long-term Refactor)**](#4-consider-mvc-structure-long-term-refactor)

---

## 🧾 Introduction

Anime Store is a complete PHP-based e-commerce solution with essential features like product browsing, cart functionality, order history, and administrative control over the store. Whether you're looking for figures, posters, or manga, Anime Store brings you closer to your favorite worlds.

---

## ✨ Features

### 👤 User Features

* 🛍️ **Product Browsing**: Explore anime merchandise with categorized and brand-specific filtering.
* 🔐 **User Authentication**: Secure login/logout functionality.
* 🛒 **Cart System**: Add/remove items and view total costs before checking out.
* 📦 **Order Tracking**: View pending and completed orders.
* 🙋 **Account Control**: Edit your profile or delete your account permanently.

### 🛠️ Admin Features

* 📦 **Product Management**: Add, edit, and delete merchandise.
* 🗂️ **Category Control**: Organize items into categories for easier browsing.
* 📋 **Order Monitoring**: View and update customer orders.
* 👥 **User Overview**: See registered users and manage their status.

---

## 💻 How to Install

### ⚙️ Prerequisites

* PHP (v7.x or later)
* MySQL/MariaDB
* Local server environment (e.g., [XAMPP](https://www.apachefriends.org), [WAMP](https://www.wampserver.com))
* Web browser

### 📥 Setup

1. **Clone the repository**:

   ```bash
   git clone https://github.com/your-username/anime-store.git
   cd anime-store
   ```

2. **Move to your web server directory**, usually:

   ```
   C:\xampp\htdocs\anime-store
   ```

3. **Start Apache and MySQL**, then open `phpMyAdmin` and import the database dump (if provided).

4. **Configure the database connection** in:

   ```
   /includes/db.php
   ```

5. **Run the application** by visiting:

   ```
   http://localhost/anime-store/index.php
   ```

---

## 📁 Project Structure

```
anime-store/
├── admin_area/             # Admin panel for managing products, categories, and orders
├── functions/              # Utility functions used throughout the site
├── images/                 # Product images, logos, and banners
├── includes/               # Shared components like DB connection and page templates
├── users_area/             # User dashboard, login, orders, and profile management
├── cart.php                # Shopping cart logic
├── display_all.php         # Product listing page
├── index.php               # Homepage of the store
├── product_details.php     # Individual product view
├── search_product.php      # Search bar functionality
├── style.css               # Application styles
└── README.md               # You're here!
```

---

## 🤝 How to Contribute

We welcome contributions to improve **Anime Store**! Here's how to get started:

1. **Fork the repository**
2. **Create a new branch**:

   ```bash
   git checkout -b feature-name
   ```
3. **Commit your changes**:

   ```bash
   git commit -am "Add feature"
   ```
4. **Push your changes**:

   ```bash
   git push origin feature-name
   ```
5. **Open a pull request**

---

## 📄 License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more details.

---

Enjoy shopping in the **Anime Store**, and may your favorite characters be with you always!

### ✅ Suggestions to Improve the README:

#### 1. **Add Screenshots or GIFs**

* **Why**: Visuals make the project more engaging and immediately show functionality.
* **How**: Add a section like:

```md
## 📸 Screenshots

### 🏠 Homepage
![Homepage Screenshot](screenshots/homepage.png)

### 🛒 Cart Page
![Cart Screenshot](screenshots/cart.png)

### 🔐 Admin Dashboard
![Admin Screenshot](screenshots/admin.png)
```

#### 2. **Add a Demo Link (if deployed)**

If it's live, add:

```md
🔗 **Live Demo**: [Visit Anime Store](https://your-live-url.com)
```

---

#### 3. **Improve SEO with Project Tags**

At the top, consider adding:

```md
> E-commerce • PHP • MySQL • phpMyAdmin • Anime Store • Admin Dashboard • Cart System
```

---

#### 4. **Mention Security Considerations**

It’s good practice to briefly say:

```md
> Note: For production, make sure to validate inputs, hash passwords, and use prepared statements to prevent SQL injection.
```

---

#### 5. **Add Credits or Resources Section**

For open-source image credits, tutorials used, or libraries:

```md
## 🙏 Credits

- Product images sourced from [XYZ Anime API](#) or [public domain].
- Based on e-commerce tutorial by [SomeAuthor](#).
```

---

### 🔧 Codebase/Project Suggestions:

#### 1. **Use Environment Configuration File**

Instead of hardcoding DB credentials in `db.php`, use:

```php
$db_host = getenv('DB_HOST');
$db_user = getenv('DB_USER');
```

And load them using a `.env` file with something like [PHP dotenv](https://github.com/vlucas/phpdotenv).

---

#### 2. **Secure Passwords**

If not already done, replace plain-text password storage with:

```php
password_hash($password, PASSWORD_BCRYPT);
```

And verify with `password_verify()`.

---

#### 3. **Add .gitignore**

Ignore config and temp files:

```
.env
/vendor/
/node_modules/
*.log
```

---

#### 4. **Consider MVC Structure (Long-term Refactor)**

Over time, migrating to an MVC (Model-View-Controller) pattern will:

* Make your codebase cleaner
* Separate logic from UI
* Improve testability and scalability

---


