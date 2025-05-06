# WordPress Migration Implementation Plan: Elementor to Underscores + ACF + Bootstrap

This document outlines the technical implementation steps for migrating the existing WordPress website from Elementor to the current custom Underscores-based theme, utilizing Advanced Custom Fields (ACF) for content management and Bootstrap for styling and layout. The focus is on creating a robust, maintainable, and highly modular theme architecture.

### 1. Initial Setup & Configuration

*   **1.1. Integrate Bootstrap via CDN:**
    *   Enqueue Bootstrap CSS and JS files directly from a Content Delivery Network (CDN).
    *   Create a new file `./inc/enqueues/styles.php` and add the `wp_enqueue_style()` call for the Bootstrap CSS within a function hooked to `wp_enqueue_scripts`.
    *   Create a new file `./inc/enqueues/scripts.php` and add the `wp_enqueue_script()` calls for Bootstrap JS (including dependencies like Popper.js if required) within a function hooked to `wp_enqueue_scripts`.
    *   Include `./inc/enqueues/styles.php` and `./inc/enqueues/scripts.php` in `functions.php`.
*   **1.2. Install and Configure ACF Plugin:**
    *   Ensure the Advanced Custom Fields Pro plugin is installed and activated on the development environment.
    *   Configure ACF settings, particularly setting the JSON save path to `./inc/acf/fields/` in `functions.php` to enable local JSON synchronization for version control.
    *   Create a new file `./inc/enqueues/acf.php` for any ACF-specific enqueueing (if needed) and include it in `functions.php`.

### 2. ACF Architecture Implementation

*   **2.1. Implement Custom Post Types (CPTs):**
    *   Based on the content analysis (which will be done separately), register required Custom Post Types programmatically.
    *   Create new PHP files for each CPT registration within the `./inc/acf/post-types/` directory.
    *   Include these CPT registration files by adding `require_once` calls within `./inc/enqueues/acf.php`.
    *   Define CPT arguments (labels, supports, public, has_archive, rewrite, etc.) within the registration code.
*   **2.2. Implement ACF Field Groups:**
    *   Create ACF field groups either directly in the WordPress admin and export them as JSON to `./inc/acf/fields/`, or define them programmatically using PHP within `./inc/acf/fields/`.
    *   Define fields within each group, mapping them to the content requirements identified during the design phase.
    *   Configure field types, names, labels, instructions, validation, and conditional logic.
    *   Set assignment rules for each field group to appear on the correct post types, page templates, or CPTs.
*   **2.3. Manage ACF Configurations:**
    *   Utilize the ACF JSON sync feature by pulling changes from `./inc/acf/fields/` in the WordPress admin after code updates.
    *   If defining field groups programmatically using PHP files in `./inc/acf/fields/`, ensure these files are correctly included (e.g., via `require_once` in `./inc/enqueues/acf.php` or a file included by it).

### 3. Modular Theme Development Implementation

*   **3.1. Develop Reusable Content Sections (`./template-parts/sections/`):**
    *   Create individual PHP files in `./template-parts/sections/` for each distinct content section identified during ACF design. The naming scheme for these files will be `{page}-{section_name}.php` (e.g., `home-about_us.php` for the About Us section on the homepage).
    *   Within these files, write the HTML structure for the section, incorporating appropriate Bootstrap classes for layout and styling.
    *   Implement PHP logic to fetch and display data from the relevant ACF fields assigned to this section (e.g., using `get_field()`, `the_field()`, loops for Repeaters or Flexible Content).
    *   Ensure data is properly escaped and sanitized using WordPress escaping functions.
*   **3.2. Develop Global Layout Components (`./template-parts/layouts/`):**
    *   Create PHP files in `./template-parts/layouts/` for global structural elements like the header (`layout-header.php`), footer (`layout-footer.php`), and navigation (`layout-navigation.php`).
    *   Implement the HTML structure for these components, using Bootstrap navigation and layout classes.
    *   Include WordPress functions for dynamic elements like `wp_nav_menu()` for navigation and `the_custom_logo()` for the site logo.
*   **3.3. Implement PHP Logic for Fetching and Rendering ACF Data:**
    *   Within page templates and template parts, use ACF functions (`get_field()`, `the_field()`, `have_rows()`, `the_row()`, `get_sub_field()`, etc.) to retrieve data.
    *   Write conditional statements to check if fields have values before displaying content.
    *   Apply appropriate WordPress escaping functions (`esc_html()`, `esc_attr()`, `wp_kses_post()`, etc.) to all output to prevent security vulnerabilities.
*   **3.4. Integrate Template Parts into the WordPress Template Hierarchy:**
    *   Modify or create main theme files (e.g., `page.php`, `single.php`, `front-page.php`, `archive-{post_type}.php`) according to the WordPress template hierarchy.
    *   Within these main template files, use `get_template_part()` to include the relevant layout components from `./template-parts/layouts/` and content sections from `./template-parts/sections/`.
    *   For pages using Flexible Content fields, implement a loop in the page template to iterate through the Flexible Content layouts and dynamically include the corresponding section template part for each layout, using the specified naming convention to call the correct file.

### 4. Asset Management & Enqueueing Implementation

*   **4.1. Enqueue Bootstrap Assets via CDN:**
    *   Ensure the `wp_enqueue_style()` call for the Bootstrap CSS is correctly implemented within the function in `./inc/enqueues/styles.php`, using the appropriate CDN URL.
    *   Ensure the `wp_enqueue_script()` calls for Bootstrap JS (and its dependencies like Popper.js if required) are correctly implemented within the function in `./inc/enqueues/scripts.php`, using the appropriate CDN URLs and specifying dependencies.
*   **4.2. Organize and Enqueue Custom Theme Assets:**
    *   Structure custom CSS files within a `css/` directory (e.g., `css/custom-styles.css`, `css/components.css`). The existing `style.css` file will not be modified.
    *   Organize custom JavaScript files in a `js/` directory (e.g., `js/custom-scripts.js`).
    *   Add `wp_enqueue_style()` calls for custom stylesheets (e.g., `css/custom-styles.css`) within the function in `./inc/enqueues/styles.php`. Ensure correct file paths using `get_template_directory_uri()`, specify dependencies (e.g., custom styles depending on Bootstrap CSS), and use the theme version constant (`_S_VERSION`) for versioning.
    *   Add `wp_enqueue_script()` calls for custom JavaScript files (e.g., `js/custom-scripts.js`) within the function in `./inc/enqueues/scripts.php`. Ensure correct file paths, specify dependencies (e.g., custom scripts depending on jQuery or Bootstrap JS), use the theme version constant for versioning, and use the fifth parameter (`true`) to enqueue scripts in the footer.
*   **4.3. Refine `wp_enqueue_scripts` Hook Usage:**
    *   Confirm that the functions containing `wp_enqueue_style()` and `wp_enqueue_script()` calls in `./inc/enqueues/styles.php` and `./inc/enqueues/scripts.php` are correctly hooked to the `wp_enqueue_scripts` action in `functions.php`.
    *   Review and refine handle names for all enqueued assets to be unique and descriptive.
    *   Ensure dependencies are accurately defined to control the loading order of scripts and styles.
    *   Utilize the theme version constant (`_S_VERSION`) for the version parameter in enqueue functions to ensure cache busting on theme updates.

### 5. Handling Migrated Content within the Theme

*   **5.1. Retrieving and Displaying ACF Data:**
    *   Implement PHP logic in template parts (`./template-parts/sections/`, `./template-parts/layouts/`) and main page templates (e.g., `page.php`, `single-{post_type}.php`) to fetch data from ACF fields using functions like `get_field()`, `the_field()`, `get_sub_field()`, `the_sub_field()`, `have_rows()`, `the_row()`, etc.
    *   Ensure data retrieval is efficient, especially when dealing with complex fields like Repeaters and Flexible Content, by using appropriate loops and conditional checks.
*   **5.2. Implementing Logic for Different Content Types:**
    *   Write specific code blocks within template parts to correctly render various ACF field types. This includes using WordPress functions like `wp_get_attachment_image()` for Image fields, iterating through data for Gallery and Repeater fields, and using conditional logic (`if( get_row_layout() == 'layout_name' )`) within Flexible Content loops to include the correct section template part.
    *   Handle the display of content from Wysiwyg Editor fields, ensuring it is properly filtered and escaped for security.
*   **5.3. Creating Helper Functions for Content Display:**
    *   Develop custom helper functions in `functions.php` or a dedicated file (e.g., `./inc/content-helpers.php`, included in `functions.php`) for complex or repetitive content rendering logic.
    *   These functions can encapsulate the display logic for specific types of content sections or complex ACF field structures, promoting code reusability.
    *   Implement checks using `get_field()` or `have_rows()` to verify if ACF fields or rows contain data before attempting to display content.
    *   Include fallback logic or conditional rendering to gracefully handle cases where content might be missing after migration, preventing errors or empty sections.
    *   While the theme will primarily use ACF data, be mindful that Elementor stores its data in the `post_content` field. Ensure that theme templates rely on ACF and avoid rendering unwanted Elementor shortcodes or markup that might remain in `post_content`. If necessary, use the `the_content` filter to clean up output on relevant post types, although relying solely on ACF data is the preferred approach.

### 6. Optimization, Best Practices, & Testing

*   **6.1. Code Optimization:**
    *   **Optimize ACF Queries:** Implement efficient data retrieval from ACF. Use `get_field('my_specific_field')` when only a single field's value is needed, rather than fetching all fields with `get_fields()`. For complex scenarios or data manipulation before display, consider using the `acf_load_value` filter.
    *   **Efficient Asset Loading:** Ensure that Bootstrap and custom theme assets are enqueued with correct dependencies to optimize loading order. Consider strategies like loading non-critical JavaScript files asynchronously or deferred if performance analysis indicates a benefit.
    *   **PHP Performance:** Write clean and efficient PHP code within template parts and functions. Minimize redundant database queries and avoid complex calculations within loops where possible.
*   **6.2. Development Best Practices:**
    *   **Coding Standards:** Adhere strictly to the WordPress Coding Standards for PHP, CSS, and JavaScript to ensure consistency and maintainability across the codebase.
    *   **Naming Conventions:** Maintain clear, descriptive, and consistent naming conventions for all theme files, PHP functions, variables, CSS classes, and ACF field names.
    *   **Code Documentation:** Write meaningful comments for complex code blocks, functions, and template parts to explain their purpose and functionality.
    *   **Modularity and Reusability:** Design template parts and helper functions to be as modular and reusable as possible, reducing code duplication.
    *   **Security:** Always sanitize data before saving it to the database and escape data immediately before outputting it to the browser to prevent security vulnerabilities like XSS. Use appropriate WordPress escaping functions (`esc_html()`, `esc_attr()`, `wp_kses_post()`, etc.).
    *   **Functional Testing:** Developers are responsible for testing the functionality of the code they implement. This includes verifying that ACF fields are displayed correctly, template parts render as expected, CPT archives and single views work, and all interactive elements function.
    *   **Responsive Testing:** Test the theme's layout and components on various screen sizes and devices using browser developer tools' responsive mode or actual devices to ensure the Bootstrap grid and custom styles are applied correctly.
    *   **Cross-Browser Compatibility:** Perform testing on major web browsers (Chrome, Firefox, Safari, Edge) during development to identify and fix any browser-specific rendering or functionality issues.
    *   **Debugging:** Utilize WordPress debugging constants (`WP_DEBUG`, `WP_DEBUG_LOG`, `WP_DEBUG_DISPLAY`) and browser developer consoles to effectively diagnose and resolve issues during development.
    *   **Code Review:** Participate in and conduct code reviews to ensure code quality, adherence to standards, and to catch potential bugs early in the development cycle.

### Directory Structure Reference

*   `./inc/acf/post-types/`: Custom Post Type registrations (PHP).
*   `./inc/acf/fields/`: ACF field group definitions (PHP or JSON exports).
*   `./inc/enqueues/`: Files for managing asset and ACF enqueueing (styles.php, scripts.php, acf.php).
*   `./template-parts/sections/`: Modular, reusable content sections (using `{page}-{section_name}.php` naming).
*   `./template-parts/layouts/`: Global site elements (headers, footers, navigation).
*   `./css/`: Custom CSS files.
*   `./js/`: Custom JavaScript files.
