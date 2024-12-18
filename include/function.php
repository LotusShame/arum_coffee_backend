<?php
    function strip_zeros_from_date($marked_string = "") {
        // Remove marked zeros
        $no_zeros = str_replace('*0', '', $marked_string);
        $cleaned_string = str_replace('*0', '', $no_zeros);
        return $cleaned_string;
    }

    function redirect_to($location = NULL) {
        if ($location != NULL) {
            header("Location: {$location}");
            exit;
        }
    }

    function redirect($location = NULL) {
        if ($location != NULL) {
            echo "<script>
                    window.location='{$location}';
                  </script>";
        } else {
            echo 'Error: No location specified.';
        }
    }

    function output_message($message = "") {
        if (!empty($message)) {
            return "<p class=\"message\">{$message}</p>";
        } else {
            return "";
        }
    }

    function date_toText($datetime = "") {
        $nicetime = strtotime($datetime);
        return strftime("%B %d, %Y at %I:%M %p", $nicetime);
    }

    // Autoload classes
    spl_autoload_register(function ($class_name) {
        $class_name = strtolower($class_name);
        $path = LIB_PATH . DS . "{$class_name}.php";
        if (file_exists($path)) {
            require_once($path);
        } else {
            die("The file {$class_name}.php could not be found.");
        }
    });

    function currentpage_public() {
        $this_page = $_SERVER['SCRIPT_NAME'];
        $bits = explode('/', $this_page);
        return $bits[2]; // Adjust index based on your folder structure
    }

    function currentpage_admin() {
        $this_page = $_SERVER['SCRIPT_NAME'];
        $bits = explode('/', $this_page);
        return $bits[4]; // Adjust index based on your folder structure
    }

    function curPageName() {
        return substr($_SERVER['REQUEST_URI'], 21, strrpos($_SERVER['REQUEST_URI'], '/') - 24);
    }

    function currentpage() {
        $this_page = $_SERVER['SCRIPT_NAME'];
        $bits = explode('/', $this_page);
        return $bits[3]; // Adjust index based on your folder structure
    }

    function publiccurrentpage() {
        $this_page = $_SERVER['SCRIPT_NAME'];
        $bits = explode('/', $this_page);
        return $bits[2]; // Adjust index based on your folder structure
    }

    function msgBox($msg = "") {
        echo "<script>alert('" . $msg . "');</script>";
    }
?>
