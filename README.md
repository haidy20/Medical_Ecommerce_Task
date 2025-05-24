
# 📦 Medical Ecommerce Task

A Laravel-based ecommerce platform for medical products. This project allows users to browse, search, and order medical products, with an admin panel to manage products, categories, and view orders.

---

## 🚀 Installation Steps

1. **Clone the Repository**
   ```bash
   git clone https://github.com/haidy20/Medical_Ecommerce_Task.git
   cd Medical_Ecommerce_Task
   ```

2. **Install Dependencies**
   ```bash
   composer install
   npm install
   npm run dev
   ```

3. **Set Up Environment Variables**
   - Copy `.env.example` to `.env`
   ```bash
   cp .env.example .env
   ```
   - Update `.env` with your database credentials.

4. **Generate Application Key**
   ```bash
   php artisan key:generate
   ```

5. **Run Migrations and Seeders**
   ```bash
   php artisan migrate --seed
   ```
   This will set up the database schema and populate it with test data using seeders and factories.
 

6. **Serve the Application**
   ```bash
   php artisan serve
   ```
   Visit `http://localhost:8000`.

---

## 🗂️ Database Setup
- The `migrations` are located in `database/migrations`.
- The `seeders` are located in `database/seeders`.
- The `factories` are located in `database/factories` to generate test data.
- Run `php artisan migrate --seed` to set up tables and populate sample data.
  
   Alternatively, import `database/medical_ecommerce.sql` into your database.

---

## 🔐 Admin Test Credentials
| Role   | Email             | Password  |
|--------|-------------------|-----------|
| Admin  | admin@example.com | password  |

---

## 📚 Developer Documentation

### Project Structure
```
app/
 ├── Http/Controllers/      # Contains controllers for both admin and customer
 ├── Models/                # Contains Eloquent models (Product, Category, Order, etc.)

resources/views/
 ├── admin/                 # Admin panel blade templates
 ├── customer/              # Customer-facing templates
 └── layouts/               # Shared layouts
```

### Key Components
- **Products Management**: Admin can add/edit/delete products.
- **Orders**: Customers can place orders; admins can view them.
- **Authentication**: User and admin login via Laravel Breeze (for authentication only).
- **Logging**: Order actions are logged in `product_logs` (migration included).

### How to Extend
- To add more product attributes, modify the `products` migration and model.
- To enhance the admin panel, edit views in `resources/views/admin`.
- To add features like order status tracking, extend the `Order` model and related views.

---

## 🎁 Bonus Features
✅ **Image Upload for Products**  
✅ **Search/Filter Products in Admin View**  

---
