<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Arial, sans-serif;
        }

        body {
            background-color: #f0f2f5;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .navbar {
            background: linear-gradient(90deg, #11998e, #38ef7d);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-text {
            font-size: 24px;
            font-weight: bold;
            color: #fff;
            text-decoration: none;
            letter-spacing: 1px;
        }

        .menu {
            list-style: none;
            display: flex;
            gap: 30px;
            margin: 0;
            padding: 0;
        }

        .menu li a {
            color: #fff;
            text-decoration: none;
            font-size: 16px;
            font-weight: 500;
            transition: 0.3s;
        }

        .menu li a:hover {
            color: #f0f0f0;
            text-decoration: underline;
        }

        .nav-right {
            display: flex;
            gap: 20px;
        }

        .nav-item {
            color: #fff;
            text-decoration: none;
            font-size: 16px;
            font-weight: 500;
            transition: 0.3s;
        }

        .nav-item:hover {
            text-decoration: underline;
        }

        .main-footer
        {
            background-color: #388E3C;
            color: #fff;
            padding: 40px 20px 15px;
            margin-top: auto;
        }

        .footer-container
        {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            padding-bottom: 20px;
        }

        .footer-col h3
        {
            font-size: 20px;
            margin-bottom: 15px;
            font-weight: 700;
            color: #fff;
        }

        .footer-col p
        {
            color: #d1d5db;
            line-height: 1.5;
            margin-bottom: 12px;
            font-size: 14px;
        }

        .footer-links
        {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-links li
        {
            margin-bottom: 12px;
        }

        .footer-links a
        {
            color: #d1d5db;
            text-decoration: none;
            transition: color 0.3s;
            font-size: 15px;
            display: inline-block
        }

        .footer-links a:hover
        {
            color: #ffd700;
            transform: translateX(5px);
        }

        .contact-info
        {
            list-style: none;
            padding: 0;
        }

        .contact-info li
        {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            margin-bottom: 15px;
            color: #d1d5db;
            font-size: 15px;
        }

        .contact-info svg
        {
            margin-top: 3px;
            flex-shrink: 0;
        }

        .copyright-bar
        {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 25px;
            text-align: center;
        }

        .copyright-bar p
        {
            color: #9ca3af;
            font-size: 14px;
            margin: 0;
        }
    </style>

    @stack('css')
</head>

<body>
