# Secure Session Cookies Plugin

A WordPress plugin that ensures the `PHPSESSID` cookie has `Secure`, `HttpOnly`, and `SameSite` attributes to enhance security.

## Description

This plugin hooks into the WordPress `init` action to set secure session cookie parameters before starting a session. It ensures that the `PHPSESSID` cookie is only sent over HTTPS, cannot be accessed via JavaScript, and includes the `SameSite` attribute to mitigate CSRF attacks.

## Installation

1. **Download the Plugin**

   Download the `secure-session-cookies.php` file.

2. **Upload the Plugin to WordPress**

   Upload the `secure-session-cookies.php` file to the `/wp-content/plugins/secure-session-cookies` directory on your server.

3. **Activate the Plugin**

   - Go to the WordPress admin dashboard.
   - Navigate to `Plugins` > `Installed Plugins`.
   - Find the `Secure Session Cookies` plugin and activate it.

## Usage

Once activated, the plugin will automatically set the `PHPSESSID` cookie with the following attributes:
- `Secure`: Ensures the cookie is only sent over HTTPS connections.
- `HttpOnly`: Prevents JavaScript access to the cookie, mitigating XSS attacks.
- `SameSite`: Mitigates CSRF attacks by controlling how cookies are sent with cross-site requests.

## Author

Created by Kuldip Gajjar. 
