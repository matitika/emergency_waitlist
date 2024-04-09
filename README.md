# Hospital Triage Application

The Hospital Triage Application is a web-based tool designed to assist hospital administrators and patients in managing and understanding emergency room waiting times. It provides real-time updates on patient queues, allowing administrators to prioritize patient care based on severity of injuries and queue duration. Patients can log in to view their approximate waiting time and receive updates as they progress through the queue.

## Installation

To run the Hospital Triage Application locally, you will need to install WAMP (Windows, Apache, MySQL, PHP) on your computer. Follow the steps below to install WAMP:

1. **Download WAMP**: 
   Download the WAMP installer from the [WAMP website](https://www.wampserver.com/en/). Choose the appropriate version for your operating system (32-bit or 64-bit).

2. **Run the Installer**: 
   Run the downloaded WAMP installer executable (.exe) file. Follow the on-screen instructions to complete the installation process.

3. **Configure WAMP**:
   During the installation process, you may be prompted to choose default settings for Apache, MySQL, and PHP. Accept the default settings or customize them according to your preferences.

4. **Start WAMP Server**:
   Once the installation is complete, launch the WAMP server application. The WAMP icon should appear in your system tray.

5. **Verify Installation**:
   Open a web browser and navigate to `http://localhost/`. You should see the WAMP Server homepage, indicating that WAMP is installed and running correctly.

6. **Database Setup**:
   Navigate to `http://localhost/phpmyadmin/` and login using `root` as the username and everything else blank. Click on `Databases` and create a new one called `hotel_triage`. Next, click on
   Import on the top menu and browse use the `hotel_triage.sql` file in the root of this repo.

7. **Run the Application**:
   Copy the files of the Hospital Triage Application into the `www` directory located in the WAMP installation directory (typically `C:\wamp64\www\`). Access the application by navigating to `http://localhost/your-application-directory/` in your web browser.

## Usage

- Admins: Log in using `admin` as the username and `admin` as the password.
- Patients: not implemented yet.

## Support

For assistance or inquiries regarding the Hospital Triage Application, please contact me at mrama100@uottawa.ca

