# HSL-Labs Daily Operations Dashboard

This repository contains a responsive dashboard prototype built with Tailwind CSS and Blade-compatible component structure for the HSL Labs Front-End Designer assignment.

##Repository link
https://github.com/Crickdev/hsl-labs.git

## Installation
"php": "^8.2",
"laravel/framework": "^12.0",
"laravel/tinker": "^2.10.1"
 

## Folder structure
- `/public/css/globale.css` (main css where google fonts added)
-  `/resources/views/layouts/app.blade.php` — main Blade layouts
- `/resources/views/dashboard.blade.php` — main Blade view
- `/resources/views/components/*` — Blade components (reusable)
-  `/resources/views/layout/header` &  `/resources/views/layout/sidebar` — Header,Sidebar Blade layouts
- `/design/wireframes/` — wireframe images (placeholders)
- `/design/hifi/` — hi-fi figma mockups 
- `README.md`, `RATIONALE.md`


## Figma hifi Design url

https://www.figma.com/design/CgL2fnZkT6dtPA21bnC4hd/HSL-LABS-Design-with-wireframe?node-id=0-1&t=rmrHXt3dCTt4XdyX-1

 

## Notes
- Accessibility: semantic HTML, ARIA labels for interactive elements, focus outlines preserved.
- Tailwind: utility-first structure with componentization in Blade.



2️⃣ Generate App Key
php artisan key:generate

3️⃣ Run Migrations
php artisan migrate

6️⃣ Clear & Cache Config (Recommended)
php artisan config:clear
php artisan cache:clear
php artisan config:cache
