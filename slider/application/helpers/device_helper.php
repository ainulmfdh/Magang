<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('detect_device_and_redirect')) {
    function detect_device_and_redirect($mobile_url = 'index.php/Home_Mobile', $tablet_url = 'index.php/HomeDekstop', $desktop_url = 'index.php/HomeDekstop')
    {
        // Get CI instance
        $CI = &get_instance();
        
        // Make sure Composer autoloader is loaded
        require_once FCPATH . 'vendor/autoload.php';
        
        // Create Mobile_Detect instance - use the correct namespace
        $detect = new \Mobile_Detect();
        
        // Check device type
        if ($detect->isMobile() && !$detect->isTablet()) {
            $deviceType = 'Mobile';
        } elseif ($detect->isTablet()) {
            $deviceType = 'Tablet';
        } else {
            $deviceType = 'Desktop';
        }
        
        // Get user IP address
        $ip = $CI->input->ip_address();
        
        // Redirect based on device type
        if ($deviceType == 'Mobile') {
            return true;
        } elseif ($deviceType == 'Tablet') {
            return true;
        } else {
            // For desktop, use direct URL or site_url depending on configuration
            return false;
        }
    }
}