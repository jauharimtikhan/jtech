
# JTech Framework



<p align="center">
    A Lightweight, Robust, and Modern PHP Framework for Craftsmen.
    <br>
    Built with passion by <strong>Jauhar Imtikhan</strong>.
</p>

---

## 🚀 Introduction

**JTech Framework** adalah framework PHP modern yang dirancang untuk kecepatan dan kesederhanaan tanpa mengorbankan fitur powerfull. Dibangun di atas fondasi Service Container yang kuat, Routing yang ekspresif, dan ORM yang elegan, JTech memungkinkan Anda membangun aplikasi web yang skalabel dengan kode yang bersih.

### ✨ Key Features
* **Powerful Service Container**: Dependency Injection otomatis.
* **Expressive Routing**: Syntax routing yang mudah dibaca dengan support Middleware.
* **Eloquent ORM**: Interaksi database yang intuitif (Active Record implementation).
* **Blade-compatible View Engine**: Templating engine yang fleksibel.
* **Robust Security**: Proteksi CSRF, XSS, dan validasi input bawaan.

---

## 📋 System Requirements

Sebelum menginstal JTech, pastikan server Anda memenuhi spesifikasi berikut:

* **PHP**: >= 8.2
* **Composer**: Versi terbaru
* **PHP Extensions**:
    * BCMath
    * Ctype
    * JSON
    * Mbstring
    * OpenSSL
    * PDO
    * Tokenizer
    * XML

---

## 📦 Installation

Cara termudah untuk memulai project baru dengan JTech adalah menggunakan **Composer**.

1. **Create Project**
   Jalankan perintah berikut di terminal Anda:

   ```bash
   composer create-project jauhar/jtech nama-project-kamu
   ```

2. **Setup Environment**
Masuk ke direktori project. File `.env` seharusnya otomatis terbuat. Jika belum, copy dari example:

    ```bash
    cd nama-project-kamu
    cp .env.example .env

    ```


3. **Database Configuration**
Buka file `.env` dan sesuaikan koneksi database Anda:

    ```ini
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=jtech_db
    DB_USERNAME=root
    DB_PASSWORD=
    ```


4. **Run Server**
Jalankan development server bawaan PHP:
    ```bash
    php -S localhost:8000 -t public

    ```


Akses `http://localhost:8000` di browser Anda.

---

## 📖 Basic Documentation

### 1. Routing

Definisikan route aplikasi Anda di `routes/web.php`.

```php
use Jtech\Support\Facades\Route;
use App\Controllers\HomeController;

// Basic Closure Route
Route::get('/', function () {
    return view('welcome');
});

// Route with Controller
Route::get('/user/{id}', [HomeController::class, 'show']);

// Route Group with Middleware
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/dashboard', 'AdminController@index');
});

```

### 2. Controllers

Controller disimpan di folder `app/Controllers`. JTech mendukung **Dependency Injection** otomatis.

```php
namespace App\Controllers;

use Jtech\Http\Request;
use App\Models\User;

class UserController
{
    // Route Model Binding & Request Injection otomatis
    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email'
        ]);

        $user->update($data);

        return response()->json(['message' => 'User updated!', 'data' => $user]);
    }
}

```

### 3. Models (ORM)

Model disimpan di `app/Models`. JTech menggunakan implementasi mirip Eloquent.

```php
namespace App\Models;

use Jtech\Database\Model;

class Post extends Model
{
    protected $table = 'posts';
    
    protected $fillable = ['title', 'content', 'slug'];
}

// Penggunaan di kode lain:
$posts = Post::where('status', 'published')->get();

```

### 4. Views

Simpan file view Anda di `resources/views`. Gunakan ekstensi `.jtech.php`

```html
<h1>Hello, <?= $user->name ?></h1>

```

Return view dari controller:

```php
return view('profile', ['user' => $user]);

```

---

## 🤝 Contributing

Kontribusi sangat diterima! Silakan fork repository ini dan buat Pull Request untuk perbaikan bug atau fitur baru.

---

## 📄 License

JTech Framework adalah software open-sourced di bawah lisensi **MIT license**.

---

<p align="center">
&copy; 2026 <strong>Jauhar Imtikhan</strong>. All rights reserved.
</p>


