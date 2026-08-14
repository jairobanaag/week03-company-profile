# Nexora — Company Profile Website

A multi-page company profile website built with Laravel's MVC architecture, developed as part of ITST 302 – Client-Server Technologies, Week 3 Mini Project (MP02).

---

## 1. Introduction

A **Company Profile Website** is a website that serves as a business's official online identity — it introduces who the company is, what it does, and how customers or partners can get in touch. It typically includes information such as the company's history, mission and vision, services offered, and contact details.

Businesses need a company profile website because it builds credibility, gives potential clients an easy way to learn about the company's offerings, and establishes an online presence that is available 24/7 — unlike a physical office.

The purpose of this project is to apply Laravel's MVC (Model-View-Controller) architecture to build a real-world, multi-page website. It demonstrates practical skills in routing, controller logic, and Blade templating, which are foundational to building larger Laravel applications.

---

## 2. Objectives

By completing this project, the following objectives were accomplished:

- Explained and applied the MVC architecture using Laravel.
- Created and managed multiple application routes (`/`, `/about`, `/services`, `/contact`).
- Developed a single controller (`CompanyController`) to handle all page requests.
- Built four dynamic pages using the Blade Templating Engine.
- Created reusable Blade layout and components (navbar, footer) to avoid code duplication.
- Applied a consistent visual identity (violet color theme) across all pages.
- Used Git version control with meaningful commit messages throughout development.
- Documented the project process, challenges, and reflections in this README.

---

## 3. MVC Architecture

**What is MVC?**

MVC (Model-View-Controller) is a software design pattern that separates an application into three interconnected components:

- **Model** — handles data and business logic (e.g., database interactions).
- **View** — handles what the user sees (the HTML/Blade templates).
- **Controller** — handles the logic that connects the two: it receives requests, processes them, and returns the appropriate view.

**Why does Laravel use MVC?**

Laravel uses MVC to keep code organized and maintainable. Instead of mixing HTML, PHP logic, and database queries in a single file, MVC separates each concern into its own layer. This makes the codebase easier to read, test, and scale as the application grows.

**Advantages of MVC in software development:**

- **Separation of concerns** — each layer has a single responsibility, making the code easier to debug.
- **Reusability** — views and components (like the navbar and footer) can be reused across multiple pages.
- **Easier collaboration** — developers can work on the Controller, View, or Model independently without conflicts.
- **Scalability** — as the application grows, new features can be added without disrupting existing code.

**Request Flow Diagram:**

```
Browser
   │
   ▼
Route (web.php)
   │
   ▼
Controller (CompanyController)
   │
   ▼
Blade View (resources/views/pages/*.blade.php)
   │
   ▼
Response to Browser
```

*(A visual version of this diagram is included in the `documentation/` folder.)*

---

## 4. Laravel Routing

**What is Routing?**

Routing is how Laravel maps a URL (e.g., `/about`) to the code that should run when that URL is visited — in this case, a specific method inside `CompanyController`.

**GET Requests**

All four routes in this project use `Route::get()`, since each simply displays a page to the user without submitting or modifying data.

**Route Definitions:**

```php
Route::get('/', [CompanyController::class, 'home']);
Route::get('/about', [CompanyController::class, 'about']);
Route::get('/services', [CompanyController::class, 'services']);
Route::get('/contact', [CompanyController::class, 'contact']);
```

**Named Routes**

Named routes allow referring to a route by a label instead of hardcoding the URL, which makes future changes easier. *(Optional enhancement — can be added using `->name('routename')` on each route.)*

*(Screenshot of `web.php` — see `screenshots/07-route-definitions.png`)*

---

## 5. Controllers

**Purpose of Controllers**

Controllers act as the middleman between routes and views. Instead of writing logic directly inside the routes file, controllers organize related actions into a single class, keeping the codebase clean.

**Benefits of Controllers**

- Keeps `web.php` short and readable.
- Groups related logic (all company pages) into one class.
- Makes it easy to add logic later (e.g., pulling services from a database) without changing the routes.

**Controller Methods**

`CompanyController` contains four methods, each returning its corresponding Blade view:

```php
class CompanyController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
```

*(Screenshot of `CompanyController.php` — see `screenshots/08-controller.png`)*

---

## 6. Blade Templating Engine

**Blade Layouts**

A layout (`layouts/app.blade.php`) defines the shared page structure — including the navbar and footer — so it doesn't need to be repeated on every page.

**Blade Components**

Reusable pieces of UI, such as `components/navbar.blade.php` and `components/footer.blade.php`, are included in the layout so all pages stay visually consistent.

**Key Blade Directives Used:**

| Directive | Purpose |
|---|---|
| `@extends` | Tells a view which layout it inherits from |
| `@section` | Defines a named block of content to inject into the layout |
| `@yield` | Placeholder in the layout where a section's content is rendered |
| `@include` | Inserts a reusable component (e.g., navbar, footer) into a view |

**Example — `pages/home.blade.php`:**

```blade
@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- page content here -->
@endsection
```

**Example — `layouts/app.blade.php`:**

```blade
<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title') - Nexora</title>
</head>
<body>
    @include('components.navbar')

    @yield('content')

    @include('components.footer')
</body>
</html>
```

*(Screenshot of Blade layout — see `screenshots/09-blade-layout.png`)*

---

## 7. Laravel Folder Structure

| Folder | Purpose |
|---|---|
| `app/` | Contains the application's core code, including Controllers and Models |
| `routes/` | Contains route definition files (`web.php`) that map URLs to controller methods |
| `resources/` | Contains Blade views, CSS, and JS — the front-end source files |
| `public/` | The web server's entry point; contains `index.php` and publicly accessible assets like images |
| `bootstrap/` | Contains files that bootstrap the framework and cache configuration for performance |
| `config/` | Contains all of the application's configuration files (database, mail, services, etc.) |

---

## 8. Screenshots

All screenshots are located in the `screenshots/` folder:

| File | Description |
|---|---|
| `01-homepage.png` | Home page |
| `02-about.png` | About page |
| `03-services.png` | Services page |
| `04-contact.png` | Contact page |
| `05-navbar.png` | Navigation bar |
| `06-footer.png` | Footer |
| `07-route-definitions.png` | `web.php` route definitions |
| `08-controller.png` | `CompanyController.php` |
| `09-blade-layout.png` | Blade layout structure |
| `10-vscode-project.png` | VS Code project/folder structure |
| `11-github-repo.png` | GitHub repository |

---

## 9. Problems Encountered

1. **View not found error** — Initially, `home.blade.php` was placed directly inside `resources/views/` instead of `resources/views/pages/`, causing a mismatch with the `return view('pages.home')` call in the controller.

2. **Duplicate file confusion** — Two versions of `home.blade.php` existed (one inside `pages/`, one outside), which caused edits to not reflect in the browser since the wrong file was being edited.

3. **Broken team member images** — After adding team photos to the About page, the images did not display because the files had not yet been placed inside the `public/images/team/` directory, which Laravel requires for the `asset()` helper to resolve the file path correctly.

---

## 10. Solutions

1. Moved `home.blade.php` into the correct `resources/views/pages/` directory to match the controller's `view()` reference, then verified using `php artisan serve`.

2. Identified the duplicate file by checking which file Laravel's `view()` call actually pointed to, edited the correct one, and removed the unused duplicate to prevent future confusion.

3. Created the `public/images/team/` folder, moved the image files into it, and referenced them using Laravel's `asset()` helper (e.g., `asset('images/team/profile1.avif')`) so the browser could correctly resolve the file paths.

---

## 11. Reflection

Working on this project gave me a much clearer, hands-on understanding of what MVC actually means in practice — not just as a term, but as a way of thinking about how an application should be organized. Before this project, I understood MVC only in theory: Model handles data, View handles display, Controller connects the two. Building this company profile website made that separation concrete. I could see exactly how a request travels from the browser, gets matched to a route, gets handled by a controller method, and finally renders as a Blade view sent back to the user.

Separation of concerns turned out to be more important than I initially expected. Early in the project, I ran into an issue where I had duplicate Blade files with the same name in different folders, and I didn't immediately realize which one the controller was actually rendering. That mistake taught me that keeping a consistent, predictable folder structure isn't just a "best practice" suggestion — it directly prevents bugs and wasted debugging time. Once I understood that views should live in one place, referenced by one consistent path, editing and troubleshooting became much faster.

I also came to appreciate how routes, controllers, and views work together as a pipeline rather than separate, disconnected pieces. The route file is essentially a map that says "when this URL is visited, run this specific controller method." The controller decides what data or logic is needed and picks which view to render. The view is purely responsible for presentation. This division meant I could redesign the entire visual theme of the website — colors, layout, components — without touching the routes or controller logic at all. That's a powerful realization: the front-end and back-end logic don't need to interfere with each other if they're properly separated.

Beyond the technical mechanics, I also learned the value of reusable components. Instead of copying the navbar and footer code into every single page, using Blade's `@include` directive meant I only had to update one file to change the navigation across the entire site. This is a small-scale example of a much bigger principle in enterprise systems: the more a system's shared elements are centralized, the easier it becomes to maintain consistency at scale.

This architecture scales naturally into larger enterprise systems. In real-world Laravel applications, the Model layer would connect to actual databases and handle complex business logic — for example, a services list pulled dynamically from a database instead of hardcoded into a Blade file. Controllers would handle authentication, validation, and more complex request handling. Views would likely be broken into even more granular reusable components. The core principle, however, stays the same regardless of scale: keep logic, data, and presentation separated so that each part of the system can change independently without breaking the others. This project, while simple, laid the foundation for understanding how much larger Laravel applications are structured and maintained.

---

## 12. References

Laravel. (2024). *Laravel 11.x documentation*. Laravel. https://laravel.com/docs

Mozilla Developer Network. (2024). *MDN Web Docs*. Mozilla. https://developer.mozilla.org

PHP Group. (2024). *PHP manual*. The PHP Group. https://www.php.net/manual/en/

Tailwind Labs. (2024). *Tailwind CSS documentation*. Tailwind Labs. https://tailwindcss.com/docs

---

## Author

**Jairo Banaag**
ITST 302 – Client-Server Technologies
Week 3 Mini Project (MP02)