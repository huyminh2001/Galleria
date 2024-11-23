# Galleria Website Revamp

Galleria is a globally recognized art gallery specializing in a diverse range of paintings. As part of its effort to enhance user experience and brand visibility, Galleria seeks a complete redesign of its website. This project will transform the website's look and feel to create a user-friendly and visually appealing platform, showcasing the gallery's paintings and categorizing them by painting style, surface, and color type.

## Note
This Project is build with Laravel framework, MySQL as database, and XAMPP as local server.

## Project Overview

This project involves redesigning the Galleria website to provide a cohesive, professional, and user-centric experience for visitors. The new website will:
- Feature an engaging and visually appealing home page.
- Include navigation links, organized gallery sections, and detailed painting information.
- Allow users to explore different types of paintings based on painting styles, surfaces, and colors.

## Requirement Specifications

The following specifications outline the required features and functionalities of the website:

1. **Home Page**  
   - Include a well-organized layout, intuitive navigation, high-quality graphics, and a suitable logo.
   - Provide links to essential sections: Home, About Us, Gallery, Contact Information, and Paintings.

2. **User-Friendly Interface**  
   - Ensure a visually consistent design and harmonious color scheme.
   - Create a user-centric design with accessible and smooth navigation.

3. **Painting Categories**  
   - Showcase various painting types, such as:
     - **Abstract Paintings**
     - **Landscape Paintings**
     - **Flower Paintings**
     - **Nature Paintings**
     - **Figurative Paintings**
     - **Religious Paintings**

4. **Surface-Based Categorization**  
   - Further categorize paintings based on their surface, such as:
     - Acrylic, Canvas, Paper, OHP Sheet, Fabric, and more.

5. **Color Type Categorization**  
   - Group paintings by color types, including:
     - Acrylic Color, Ballpoint Pen, Charcoal, Oil Color, Water Color, Poster Color, Enamel Color, Ink Color, and others.

6. **Painting Details & Document Export**  
   - Display detailed information about each selected painting.
   - Allow users to save painting details as a Word document for offline access.

7. **Additional Sections**  
   - **Gallery**: A visually appealing gallery displaying all paintings with filters and search options.
   - **FAQs**: Provide answers to commonly asked questions.
   - **Site Map**: Improve user navigation by providing a complete site layout.

## Technical Requirements

1. **Navigation & User Experience**  
   - Smooth navigation and consistent user interface across the site.
   - Enable effortless transitions between pages and sections.

2. **Backend & Database Structure**  
   - Implement robust backend support to handle various painting categories, surfaces, and color types.
   - Maintain detailed information for each painting in a structured database.

## Setup on local machine

1. Install Laravel Dependencies
Ensure you have Composer installed. If not, download it from Composer's official website.

Run the following command to install the required Laravel PHP dependencies:
composer install

2. Configure Database
Ensure XAMPP is running and MySQL is enabled. Open phpMyAdmin and create a new database for the project (e.g., galleria).
Download XAMPP from the official website: XAMPP Download
Follow the installation instructions for your operating system (Windows, macOS, or Linux).
Once installed, launch the XAMPP Control Panel and start Apache and MySQL to run the local server and database.
You can access phpMyAdmin (the web interface for MySQL) at: http://localhost/phpmyadmin.
Create a new database for the project (e.g., galleria) in phpMyAdmin.

4. Start the Local Server
Use Laravel's built-in development server to serve the application:

php artisan serve
The website will be accessible at http://localhost:8000.

## Libraries Setup Instructions
To set up the project locally, ensure you have the following components installed:

1. Install XAMPP (Local Server & MySQL Database)
XAMPP is required to run the local server and MySQL database. Follow these steps to install XAMPP:

Download XAMPP from the official website: XAMPP Download
Follow the installation instructions for your operating system (Windows, macOS, or Linux).
Once installed, launch the XAMPP Control Panel and start Apache and MySQL to run the local server and database.
You can access phpMyAdmin (the web interface for MySQL) at: http://localhost/phpmyadmin.
Create a new database for the project (e.g., galleria) in phpMyAdmin.
Make sure the XAMPP configuration is the same as XAMPP Configuration folder from this repository.

2. Install Composer (PHP Dependency Manager)
Composer is a dependency manager for PHP that helps to manage project libraries. Follow these steps to install Composer:

Download Composer from the official website: Composer Download

Verify the installation by running the following command in your terminal:

composer --version

3. Install Node.js & NPM (For Frontend Assets)

Download Node.js from the official website: Node.js Download
Follow the installation instructions for your operating system.
Verify the installation by running the following commands in your terminal:

node --version
npm --version

4. Install Laravel
If you haven't already installed Laravel globally, run the following command:

composer global require laravel/installer
Navigate to the project directory, then install the Laravel dependencies:

composer install

5. Start the Local Laravel Server
After setting everything up, you can start the Laravel development server:

php artisan serve
The website will be available at http://localhost:8000.


