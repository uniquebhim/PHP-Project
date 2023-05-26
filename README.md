# **Jaipur Trip Form**

This is a simple web form for submitting details to confirm participation in a Jaipur trip. The form collects basic information such as name, age, gender, email, phone number, and additional comments. Upon submission, the form data is stored in a MySQL database.

## **Technologies Used**

- HTML
- CSS
- PHP
- MySQL

## **Features**

- User-friendly web form for collecting participant details.
- Server-side validation and data insertion into a MySQL database.
- Confirmation message displayed upon successful form submission.
- Responsive design for compatibility with different devices.

## **Installation**

1. Clone the repository or download the source code.
    
    ```
    git clone <https://github.com/your-username/jaipur-trip-form.git>
    
    ```
    
2. Set up a web server with PHP support (e.g., Apache or Nginx) and a MySQL database.
3. Import the provided database structure.
    - Use a database management tool like phpMyAdmin or the MySQL command-line interface to import the **`jaipur_trip.sql`** file. This file contains the necessary database structure for storing the form data.
4. Configure the database connection.
    - Open the **`index.php`** file and update the database credentials in the following lines:
        
        ```
        $server_name = "your_server_name";
        $username = "your_username";
        $password = "your_password";
        $database_name = "your_database_name";
        
        ```
        
        Replace the placeholders with your actual database credentials.
        
5. Start the web server.
    - Make sure your web server is running and configured correctly to serve PHP files.
6. Access the form.
    - Open a web browser and navigate to the URL where the project is hosted.

## **Usage**

1. Fill out the form fields with the required details.
2. Click the "Submit" button to submit the form.
3. If the form is submitted successfully, a confirmation message will be displayed.
4. The submitted data will be stored in the MySQL database for future reference.

## **Acknowledgments**

- This project was created as a learning exercise and can serve as a basic template for building similar web applications.
