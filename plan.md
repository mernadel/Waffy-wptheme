# WordPress Migration Implementation Plan: Elementor to Underscores + ACF + Vanilla CSS (BEM)

This document outlines the technical implementation steps for migrating the existing WordPress website from Elementor to the current custom Underscores-based theme, utilizing Advanced Custom Fields (ACF) for content management and **vanilla CSS with BEM methodology** for styling and layout. The focus is on creating a robust, maintainable, and highly modular theme architecture.


### Frontend Developer Workflow & Focus

The primary focus for frontend development will be on the following directories and tasks:

*   **`./template-parts/sections/`**: Develop the HTML structure for individual content sections here. Ensure all elements use BEM (Block Element Modifier) class names for styling consistency. Example: About us page in the homepage will be `home-about_us.php`.
*   **`./css/`**: Create and manage all CSS stylesheets in this directory. For each new section created in `template-parts/sections/` (e.g., `home-about_us.php`), a corresponding CSS file (e.g., `home-about_us.css`) should be created here. Adhere to BEM methodology for all styling. Example: The class of the image wrapper of the about us section will be `.home-about_us__image-wrapper`. The class of the title of the about us section will be `.home-about_us__title`. The class of the subtitle of the about us section will be `.home-about_us__subtitle`. The class of the description of the about us section will be `.home-about_us__description`. The class of the button of the about us section will be `.home-about_us__button`. The class of the icon of the about us section will be `.home-about_us__icon`.
*   **`./js/Animations/`**: Implement any JavaScript-based animations or interactive behaviors for the sections in this directory. Create a corresponding JS file for each section that requires scripting (e.g., `home-about_us.js`).

### Directory Structure Reference

*   `./inc/acf/post-types/`: Custom Post Type registrations (PHP).
*   `./inc/acf/fields/`: ACF field group definitions (PHP or JSON exports).
*   `./inc/enqueues/`: Files for managing asset and ACF enqueueing (styles.php, scripts.php, acf.php).
*   `./template-parts/sections/`: Modular, reusable content sections (using `{page}-{section_name}.php` naming).
*   `./template-parts/layouts/`: Global site elements (headers, footers, navigation).
*   `./css/`: Custom CSS files.
*   `./js/`: Custom JavaScript files.

