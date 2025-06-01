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
- [Anime Store - Project Structure](#anime-store---project-structure)
  - [🗂️ Directory Breakdown](#️-directory-breakdown)
    - [**Frontend Structure**](#frontend-structure)
    - [**Backend Structure**](#backend-structure)
    - [**Core Features by File**](#core-features-by-file)
    - [**Database Schema (Inferred)**](#database-schema-inferred)
  - [🔧 Technology Stack](#-technology-stack)
  - [🚀 Key Functionalities](#-key-functionalities)
    - [**User Features**](#user-features)
    - [**Admin Features**](#admin-features)
    - [**System Features**](#system-features)
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

# Anime Store - Project Structure

```
anime-store/
│
├── 📁 admin_area/                    # Admin panel for managing products, categories, and orders
│   ├── admin_login.php               # Admin authentication
│   ├── admin_dashboard.php           # Main admin control panel
│   ├── insert_product.php            # Add new products
│   ├── view_products.php             # Manage existing products
│   ├── insert_categories.php         # Add product categories
│   ├── view_categories.php           # Manage categories
│   ├── insert_brands.php             # Add product brands
│   ├── view_brands.php               # Manage brands
│   ├── list_orders.php               # View and manage customer orders
│   ├── list_users.php                # View and manage registered users
│   └── 📁 product_images/            # Storage for product images
│
├── 📁 functions/                     # Utility functions used throughout the site
│   ├── common_function.php           # Core e-commerce functions
│   │   ├── getproducts()            # Fetch and display products
│   │   ├── getcategories()          # Display categories sidebar
│   │   ├── getbrands()              # Display brands sidebar
│   │   ├── search_product()         # Product search functionality
│   │   ├── view_details()           # Product detail view
│   │   ├── cart()                   # Add to cart functionality
│   │   ├── cart_item()              # Count cart items
│   │   ├── total_cart_price()       # Calculate cart total
│   │   ├── get_unique_categories()  # Filter by category
│   │   ├── get_unique_brands()      # Filter by brand
│   │   └── getIPAddress()           # Get user IP for cart tracking
│   └── display_functions.php        # Additional display utilities
│
├── 📁 images/                        # Static assets and media files
│   ├── logo.png                     # Site logo
│   ├── banner.png                   # Homepage banner
│   ├── product_images/              # Product showcase images
│   └── icons/                       # UI icons and graphics
│
├── 📁 includes/                      # Shared components and configurations
│   ├── connect.php (db.php)         # Database connection configuration
│   ├── header.php                   # Common header template
│   ├── footer.php                   # Common footer template
│   └── navigation.php               # Navigation components
│
├── 📁 users_area/                    # User dashboard, authentication, and profile management
│   ├── user_registration.php        # New user signup
│   ├── user_login.php               # User authentication
│   ├── user_logout.php              # Session termination
│   ├── profile.php                  # User profile dashboard
│   ├── edit_account.php             # Update user information
│   ├── delete_account.php           # Account deletion
│   ├── my_orders.php                # Order history
│   ├── pending_orders.php           # Pending order status
│   ├── user_payments.php            # Payment processing
│   └── confirm_payment.php          # Payment confirmation
│
├── 📄 Core Application Files
├── index.php                        # Homepage - main store interface
├── display_all.php                  # Complete product catalog
├── product_details.php              # Individual product view with details
├── search_product.php               # Product search results
├── cart.php                         # Shopping cart management
├── checkout.php                     # Order processing and payment
│
├── 📄 Styling & Assets
├── style.css                        # Custom CSS styles and responsive design
│
├── 📄 Configuration & Documentation
├── .gitattributes                   # Git configuration for text files
├── LICENSE                          # MIT License
└── README.md                        # Project documentation and setup guide

```

## 🗂️ Directory Breakdown

### **Frontend Structure**
```
Public Pages:
├── 🏠 index.php              # Homepage with featured products
├── 📋 display_all.php        # All products with filtering
├── 🔍 search_product.php     # Search results
├── 📦 product_details.php    # Product detail page
└── 🛒 cart.php              # Shopping cart

User Authentication:
├── 🔐 user_registration.php  # Sign up
├── 🚪 user_login.php         # Sign in
└── 👤 profile.php            # User dashboard
```

### **Backend Structure**
```
Admin Panel:
├── 🔧 admin_dashboard.php    # Control center
├── ➕ insert_product.php     # Add products
├── 📝 view_products.php      # Manage products
├── 🏷️ insert_categories.php  # Add categories
├── 📊 list_orders.php        # Order management
└── 👥 list_users.php         # User management

Database Operations:
├── 🔗 connect.php            # MySQL connection
└── 🛠️ common_function.php    # CRUD operations
```

### **Core Features by File**

| File | Primary Function | Key Features |
|------|-----------------|--------------|
| `index.php` | Homepage | Product showcase, navigation, search |
| `cart.php` | Shopping Cart | Add/remove items, quantity update, checkout |
| `display_all.php` | Product Catalog | All products, category/brand filtering |
| `search_product.php` | Search Results | Product search with keywords |
| `product_details.php` | Product View | Detailed product information |
| `checkout.php` | Order Processing | Payment and order confirmation |

### **Database Schema (Inferred)**
```sql
Tables:
├── products              # Product catalog
│   ├── product_id (PK)
│   ├── product_title
│   ├── product_description
│   ├── product_price
│   ├── product_image1
│   ├── category_id (FK)
│   └── brand_id (FK)
│
├── categories            # Product categories
│   ├── category_id (PK)
│   └── category_title
│
├── brands               # Product brands
│   ├── brand_id (PK)
│   └── brand_title
│
├── users                # User accounts
│   ├── user_id (PK)
│   ├── username
│   ├── user_email
│   └── user_password
│
├── cart_details         # Shopping cart
│   ├── product_id (FK)
│   ├── ip_address
│   └── quantity
│
└── user_orders          # Order history
    ├── order_id (PK)
    ├── user_id (FK)
    ├── product_id (FK)
    └── order_status
```

## 🔧 Technology Stack

- **Backend**: PHP 7.x+
- **Database**: MySQL/MariaDB
- **Frontend**: HTML5, CSS3, Bootstrap 5.3.5
- **Icons**: Font Awesome 6.7.2
- **Server**: Apache (XAMPP/WAMP recommended)
- **Session Management**: PHP Sessions
- **Security**: IP-based cart tracking, user authentication

## 🚀 Key Functionalities

### **User Features**
- ✅ Product browsing with categories and brands
- ✅ Search functionality
- ✅ Shopping cart management
- ✅ User registration and authentication
- ✅ Profile management
- ✅ Order tracking

### **Admin Features**
- ✅ Product management (CRUD)
- ✅ Category and brand management
- ✅ Order processing and status updates
- ✅ User account oversight
- ✅ Inventory control

### **System Features**
- ✅ Responsive design (Bootstrap)
- ✅ Session-based authentication
- ✅ IP-based cart persistence
- ✅ Image upload and management
- ✅ SQL injection protection (prepared statements recommended)

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


