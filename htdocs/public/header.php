<?php
include 'db_connection.php';
?>

<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
    <!-- <base href="/" /> -->
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Crazywolf - Restaurant</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <!-- Reponsive -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="assets/images/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="assets/images/favicon.png">

    <!-- CSRF Token for AJAX requests -->
    <meta name="csrf-token" content="<?php echo isset($_SESSION['csrf_token']) ? $_SESSION['csrf_token'] : ''; ?>">

    <style>
        /* Simple, Fullscreen Bootstrap Modal */
        #menuModal.modal {
            padding: 0 !important;
        }

        #menuModal .modal-dialog {
            width: 100%;
            max-width: none;
            height: 100%;
            margin: 0;
        }

        #menuModal .modal-content {
            height: 100%;
            border: 0;
            border-radius: 0;
            background-color: #f1f1f1;
        }

        .menu-thumbnail {
            cursor: pointer;
            margin-bottom: 15px;
            padding: 3px;
            border: 3px solid transparent;
            max-width: 40%;
            transition: border-color 0.3s ease;
        }

        .menu-thumbnail.active,
        .menu-thumbnail:hover {
            border-color: #000;
        }

        #menuModal .col-2 {
            overflow-y: auto;
        }

        /* Ensure body scroll is disabled when modal is open */
        body.modal-open {
            overflow: hidden;
        }
    </style>

</head>