<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Blackstone Motors – Investor Report</title>
    <style>
        /* Cover Page Background */
        .cover-page {
            font-family: 'Arial', Helvetica, sans-serif;
            color: #111;
            font-size: 12px;
            background: #0a0a0a;
            margin: 0;
            padding: 0;
            position: relative;
            height: 100%;
            overflow: hidden;
        }

        /* Full-page background with gradient overlay - ONLY for cover page */
        .cover-page::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background:
                linear-gradient(rgba(10, 10, 10, 0.85),
                    rgba(10, 10, 10, 0.95)),
                url('https://images.unsplash.com/photo-1503376780353-7e6692767b70?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');
            /* background-size: cover; */
            background-position: center;
            background-attachment: fixed;
            z-index: -1;
        }

        /* Subtle pattern overlay for texture - ONLY for cover page */
        .cover-page::after {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image:
                radial-gradient(circle at 25% 25%,
                    rgba(179, 18, 23, 0.1) 0%,
                    transparent 50%),
                radial-gradient(circle at 75% 75%,
                    rgba(179, 18, 23, 0.05) 0%,
                    transparent 50%);
            z-index: -1;
            pointer-events: none;
        }

        /* Cover page main container with glass effect */
        .cover-page .report-wrapper {
            width: 100%;
            background: rgba(0, 0, 0, 0.85);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            /* padding: 40px; */
            /* margin: 40px auto; */
            position: relative;
            background-size: cover;
            height: 695px;
        }

        /* Decorative corner accents for cover page only */
        .cover-page .report-wrapper::before,
        .cover-page .report-wrapper::after {
            content: '';
            position: absolute;
            width: 60px;
            height: 60px;
            border: 2px solid #b11217;
            z-index: 2;
        }

        .cover-page .report-wrapper::before {
            top: 20px;
            left: 20px;
            border-width: 2px 0 0 2px;
        }

        .cover-page .report-wrapper::after {
            bottom: 20px;
            right: 20px;
            border-width: 0 2px 2px 0;
        }

        /* Cover page header styles */
        .cover-page .logo-bar {
            width: 100%;
            border-bottom: 3px solid #b11217;
            padding-bottom: 20px;
            margin-bottom: 30px;
            position: relative;
        }

        .cover-page .logo-bar::after {
            content: '';
            position: absolute;
            bottom: -3px;
            left: 0;
            width: 100px;
            height: 3px;
            background: linear-gradient(90deg, #b11217, transparent);
        }

        .cover-page .company-name {
            font-size: 42px;
            font-weight: 800;
            color: #b11217;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
            position: relative;
            display: inline-block;
        }

        .cover-page .company-name::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, #b11217, transparent);
        }

        .cover-page .report-title {
            font-size: 28px;
            font-weight: 600;
            color: #222;
            margin-top: 5px;
            padding-bottom: 10px;
            letter-spacing: 1px;
        }

        /* Cover page info block */
        .cover-page .info-block {
            margin: 0 auto;
            font-size: 20px;
            line-height: 1.6;
            padding: 20px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 8px;
            border-left: 4px solid #b11217;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            width: 70%;
            padding: 20 40px;
            
        }

        .cover-page .info-label {
            font-weight: 700;
            color: #b11217;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            min-width: 190px;
            display: inline-block;
        }

        /* Cover page image overlay styles */
        .cover-page .header-image {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease;
        }

        .cover-page .header-image:hover {
            transform: translateY(-5px);
        }

        .cover-page .header-image::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom right,
                    rgba(179, 18, 23, 0.2),
                    rgba(10, 10, 10, 0.6));
            z-index: 1;
            border-radius: 8px;
        }

        .cover-page .header-image img {
            width: 100%;
            height: auto;
            display: block;
            position: relative;
            z-index: 0;
            border-radius: 8px;
        }

        /* Cover page banner image with overlay */
        .cover-page td[align="right"] {
            position: relative;
        }

        .cover-page td[align="right"] img {
            max-width: 400px;
            border-radius: 8px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.4);
            position: relative;
            z-index: 1;
        }

        .cover-page td[align="right"]::before {
            content: '';
            position: absolute;
            top: -10px;
            right: -10px;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, #b11217, transparent 70%);
            z-index: 0;
            border-radius: 8px;
            opacity: 0.3;
        }

        /* Cover page divider styles */
        .cover-page .soft-divider {
            height: 1px;
            background: linear-gradient(90deg, transparent, #b11217, transparent);
            margin: 30px 0;
            position: relative;
        }

        .cover-page .soft-divider::before,
        .cover-page .soft-divider::after {
            content: '✦';
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            color: #b11217;
            font-size: 16px;
        }

        .cover-page .soft-divider::before {
            left: 0;
        }

        .cover-page .soft-divider::after {
            right: 0;
        }

        /* Cover page highlights section */
        .cover-page .info-block p {
            margin: 0;
            padding: 15px;
            background: linear-gradient(135deg, rgba(179, 18, 23, 0.05), transparent);
            border-radius: 6px;
            border: 1px solid rgba(179, 18, 23, 0.1);
            font-size: 18px;
            line-height: 1.8;
        }

        /* Cover page footer styles */
        .cover-page .footer {
            text-align: center;
            font-size: 14px;
            color: #666;
            /* margin-top: 40px;
            padding-top: 20px; */
            border-top: 1px solid rgba(179, 18, 23, 0.2);
            position: relative;
        }

        .cover-page .footer::before {
            content: '';
            position: absolute;
            top: -1px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 2px;
            background: #b11217;
        }

        /* Floating elements for cover page only */
        .cover-page .floating-elements {
            position: fixed;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
        }

        .cover-page .floating-element {
            position: absolute;
            background: rgba(179, 18, 23, 0.1);
            border-radius: 50%;
            animation: float 20s infinite linear;
        }

        .cover-page .floating-element:nth-child(1) {
            width: 100px;
            height: 100px;
            top: 10%;
            left: 10%;
            animation-delay: 0s;
        }

        .cover-page .floating-element:nth-child(2) {
            width: 150px;
            height: 150px;
            top: 60%;
            right: 15%;
            animation-delay: -5s;
        }

        .cover-page .floating-element:nth-child(3) {
            width: 80px;
            height: 80px;
            bottom: 20%;
            left: 20%;
            animation-delay: -10s;
        }

        @keyframes float {
            0% {
                transform: translateY(0) rotate(0deg);
                opacity: 0.5;
            }

            50% {
                transform: translateY(-20px) rotate(180deg);
                opacity: 0.8;
            }

            100% {
                transform: translateY(0) rotate(360deg);
                opacity: 0.5;
            }
        }

        /* ============================================
   REGULAR PAGES STYLES (Pages 2-6)
   These are your original styles for other pages
============================================ */

        /* General Body for regular pages */
        body:not(.cover-page) {
            font-family: 'Arial', Helvetica, sans-serif;
            color: #111;
            font-size: 12px;
            background-color: #fff;
            margin: 0;
            padding: 0;
        }

        @page {
            margin: 0;
            padding: 0;
        }

        html,
        body {
            font-family: 'Inter', 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
            position: relative;
        }

        .next-page {
            page-break-before: always;
            padding: 0;
        }

        .wrapper {
            position: relative;
        }

        /* Your original report wrapper for regular pages */
        body:not(.cover-page) .report-wrapper {
            width: 95%;
            background: #ffffff;
            padding: 20px;
            padding-top: 5rem;
        }

        /* Regular pages logo bar */
        body:not(.cover-page) .logo-bar {
            width: 100%;
            border-bottom: 4px solid #b11217;
            padding-bottom: 12px;
            margin-bottom: 3rem;
        }

        body:not(.cover-page) .logo-bar td {
            vertical-align: middle;
        }

        body:not(.cover-page) .company-name {
            font-size: 36px;
            font-weight: bold;
            color: #b11217;
            letter-spacing: 1px;
        }

        body:not(.cover-page) .report-title {
            font-size: 24px;
            font-weight: bold;
            color: #111;
            margin-top: 5px;
            padding-bottom: 10px;
        }

        /* Regular pages info block */
        body:not(.cover-page) .info-block {
            margin-top: 8px;
            font-size: 18px;
            line-height: 1.6;
        }

        body:not(.cover-page) .info-label {
            font-weight: bold;
            color: #b11217;
        }

        /* Regular pages header image */
        body:not(.cover-page) .header-image {
            text-align: right;
            padding-left: 15px;
        }

        body:not(.cover-page) .header-image img {
            max-width: 220px;
        }

        /* Regular pages soft divider */
        body:not(.cover-page) .soft-divider {
            height: 8px;
            border-bottom: 2px solid #e5e5e5;
            margin: 15px 0;
        }

        /* Regular pages footer */
        body:not(.cover-page) .footer {
            text-align: center;
            font-size: 12px;
            color: #555;
            margin-top: 25px;
            border-top: 1px solid #e5e5e5;
            padding-top: 10px;
        }

        /* ============================================
   RESPONSIVE DESIGN FOR COVER PAGE
============================================ */
        @media (max-width: 768px) {
            .cover-page .report-wrapper {
                width: 95%;
                padding: 20px;
                margin: 20px auto;
            }

            .cover-page .company-name {
                font-size: 32px;
            }

            .cover-page .report-title {
                font-size: 22px;
            }

            .cover-page .info-block {
                font-size: 16px;
            }

            .cover-page td[align="right"] img {
                max-width: 300px;
            }
        }

        @media print {

            /* Hide animations and effects for printing */
            .cover-page::before,
            .cover-page::after,
            .cover-page .floating-elements,
            .cover-page .header-image::before,
            .cover-page td[align="right"]::before,
            .cover-page .report-wrapper::before,
            .cover-page .report-wrapper::after {
                display: none;
            }

            .cover-page .report-wrapper {
                box-shadow: none;
                border: 1px solid #ccc;
                background: #fff;
            }

            /* Remove hover effects for print */
            .cover-page .header-image:hover {
                transform: none;
            }
        }



      

        .next-page {
            page-break-before: always;
            padding: 0;
        }

        .wrapper {
            position: relative;
        }

        .full-page {
            width: 80%;
            height: 65%;
            padding: 50px;
            box-sizing: border-box;
            background: url('example.jpg') no-repeat center center;
            background-size: cover;
            position: absolute;
            top: 40%;
            left: 45%;
            right: 50%;
            transform: translate(-50%, -50%);
            font-family: Arial, sans-serif;
            color: white;
        }

        .text-top {
            font-size: 24px;
            font-weight: bold;
            color: black;
            text-align: center;
        }

        .report-block {
            margin-top: 100px;
            width: 80%
        }

        .report-block h2,
        .report-block h3,
        .report-block h4 {
            margin: 0;
            padding: 0;
            line-height: 1.2;
        }

        .report-block h2 {
            font-size: 15px;
        }

        .report-block h3 {
            font-size: 13px;
        }

        .report-block h4 {
            font-size: 10px;

        }

        .report-block span {
            font-weight: normal;
        }


        .report-wrapper {
            width: 95%;
            /* border: 2px solid #b11217; */
            background: #ffffff;
            padding: 40px;
            padding-top: 5rem;

        }

        /* TOP BAR */
        .logo-bar {
            width: 100%;
            border-bottom: 4px solid #b11217;
            padding-bottom: 12px;
            margin-bottom: 3rem;
        }

        .logo-bar td {
            vertical-align: middle;
        }

        .company-name {
            font-size: 36px;
            font-weight: bold;
            color: #b11217;
            letter-spacing: 1px;
        }

        .report-title {
            font-size: 24px;
            font-weight: bold;
            color: #111;
            margin-top: 5px;
            padding-bottom: 10px;
        }

        /* INFO AREA */
        .info-block {
            margin-top: 8px;
            font-size: 18px;
            line-height: 1.6;
        }

        .info-label {
            font-weight: bold;
            color: #b11217;
        }

        /* RIGHT BRAND AREA */
        .header-image {
            text-align: right;
            /* border-left: 2px solid #e2e2e2; */
            padding-left: 15px;
        }


        /* SOFT DIVIDER */
        .soft-divider {
            height: 8px;
            border-bottom: 2px solid #e5e5e5;
            margin: 15px 0;
        }

        /* TABLE STYLING */
        table {
            border-collapse: collapse;
            width: 100%;
        }

        tr {
            page-break-inside: avoid;
        }

        td {
            padding: 5px;
        }

        /* FOOTER (optional) */
        .footer {
            text-align: center;
            font-size: 12px;
            color: #555;
            margin-top: 25px;
            border-top: 1px solid #e5e5e5;
            padding-top: 10px;
        }


        /* 4th Page */

        .top-bar {
            width: 100%;
            border-bottom: 2px solid #000;
            font-size: 10px;
        }

        .top-bar td {
            padding: 4px 0;
        }

        .title {
            font-size: 16px;
            font-weight: bold;
            margin-top: 18px;
        }

        .subtitle {
            font-size: 13px;
            font-weight: bold;
            margin-top: 2px;
        }

        .info {
            margin-top: 6px;
            line-height: 1.4;
        }

        .section-title {
            font-weight: bold;
            margin-top: 18px;
            margin-bottom: 6px;
        }

        table.performance {
            width: 100%;
            border-collapse: collapse;
            font-size: 10px;
        }

        table.performance th,
        table.performance td {
            border: 1px solid #000;
            padding: 4px;
            text-align: right;
            vertical-align: middle;
        }

        table.performance th {
            font-weight: bold;
            text-align: center;
        }

        table.performance td:first-child,
        table.performance th:first-child {
            text-align: center;
        }

        table.performance td:nth-child(2) {
            text-align: center;
        }

        .note {
            margin-top: 8px;
            font-size: 10px;
        }

        .paragraph {
            margin-top: 10px;
            font-size: 10px;
            line-height: 1.4;
            text-align: justify;
        }

        .relative-title {
            font-weight: bold;
            margin-top: 20px;
            margin-bottom: 6px;
        }

        .chart-section {
            width: 100%;
            margin-top: 10px;
        }

        .chart-left {
            width: 55%;
            vertical-align: top;
        }

        .chart-right {
            width: 45%;
            vertical-align: top;
            font-size: 10px;
            line-height: 1.4;
        }

        .source {
            margin-top: 12px;
            font-size: 9px;
        }

        .source a {
            color: #0000EE;
            text-decoration: underline;
        }


        .company-name {
            font-size: 18px;
            font-weight: bold;
            color: #000;
            text-align: center;
            margin-bottom: 5px;
        }

        .report-title {
            font-size: 14px;
            font-weight: bold;
            color: #000;
            text-align: center;
            margin-bottom: 3px;
        }

        .report-date {
            font-size: 12px;
            text-align: center;
            color: #333;
            margin-bottom: 5px;
        }

        .investor-info {
            font-size: 11px;
            margin-top: 10px;
            margin-bottom: 5px;
        }

        /* Executive Summary Section */
        .executive-summary {
            margin-bottom: 15px;
            width: 95%;
        }

        .section-title {
            font-size: 12px;
            font-weight: bold;
            margin-bottom: 8px;
            border-bottom: 1px solid #000;
            padding-bottom: 2px;
        }

        .metric-box {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: center;
        }

        .metric-label {
            font-size: 9px;
            margin-bottom: 3px;
            color: #666;
        }

        .metric-value {
            font-size: 14px;
            font-weight: bold;
            color: #000;
        }

        /* Chart Container */
        .chart-container {
            margin-bottom: 15px;
            position: relative;
            height: 220px;
            text-align: center;
        }

        /* Total Investment vs Profit */
        .investment-pie-container {
            margin-bottom: 15px;
            position: relative
        }

        .pie-chart-wrapper {
            margin: 0 auto;
            text-align: center;
        }

        /* Table Styles */
        .data-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 15px;
            font-size: 8px;
        }

        .data-table th {
            background-color: #f2f2f2;
            border: 1px solid #ccc;
            padding: 4px;
            text-align: center;
            font-weight: bold;
        }

        .data-table td {
            border: 1px solid #ccc;
            padding: 4px;
            text-align: center;
        }

        .liquidity-box {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .liquidity-chart-container {
            text-align: center;
        }

        .liquidity-details {
            flex-grow: 1;
        }

        .liquidity-item {
            display: flex;
            justify-content: space-between;
            font-size: 9px;
        }

        .liquidity-value {
            font-weight: bold;
        }

        /* Footer */
        .footer {
            position: absolute;
            bottom: 10px;
            width: calc(100% - 30px);
            text-align: center;
            font-size: 9px;
            color: #666;
        }

        /* Text Content */
        .report-content {
            font-size: 9px;
            line-height: 1.4;
            margin-bottom: 10px;
        }

        .highlight {
            font-weight: bold;
        }

        /* Grid layout for charts */
        .charts-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin-bottom: 15px;
        }

        /* Chart image styles */
        .chart-image {
            max-width: 100%;
            height: auto;
        }

        /* 5th Page */

        .main-title {
            font-size: 28px;
            font-weight: bold;
            color: #d32f2f;
            margin: 5px 0;
            text-transform: uppercase;
            letter-spacing: 1.5px;
        }

        .report-title {
            font-size: 20px;
            font-weight: bold;
            color: #000000;
            margin: 10px 0 5px 0;
        }

        .investor-info {
            font-size: 12px;
            color: #555555;
            margin: 8px 0;
        }

        .report-period {
            font-size: 11px;
            color: #666666;
            margin: 5px 0 15px 0;
        }

        /* Divider */
        .divider {
            height: 2px;
            background-color: #d32f2f;
            margin: 20px 0 25px 0;
            width: 100%;
        }

        /* Section Title */
        .section-title {
            font-size: 16px;
            font-weight: bold;
            color: #d32f2f;
            text-align: center;
            margin: 25px 0 20px 0;
            padding-bottom: 8px;
            border-bottom: 2px solid #d32f2f;
            text-transform: uppercase;
        }

        /* Table Styles */
        .vehicles-table {
            width: 95%;
            border-collapse: collapse;
            /* margin: 20px 0 30px 0; */
            font-size: 9px;
            table-layout: fixed;
        }

        .vehicles-table th {
            background-color: #d32f2f;
            color: #ffffff;
            border: 1.5px solid #b71c1c;
            padding: 8px 4px;
            text-align: center;
            font-weight: bold;
            font-size: 9.5px;
            text-transform: uppercase;
        }

        .vehicles-table td {
            border: 1px solid #cccccc;
            padding: 7px 4px;
            text-align: center;
            vertical-align: top;
        }

        /* Alternating row colors with red theme */
        .vehicles-table tbody tr:nth-child(even) {
            background-color: #fff5f5;
        }

        .vehicles-table tbody tr:nth-child(odd) {
            background-color: #ffffff;
        }

        /* Highlight NP Share column */
        .np-share-column {
            background-color: #ffebee !important;
            font-weight: bold;
            color: #d32f2f;
        }

        .np-share-header {
            background-color: #b71c1c !important;
        }

        /* Totals Row */
        .totals-row {
            background-color: #ffebee !important;
            font-weight: bold;
            border-top: 2.5px solid #d32f2f;
            border-bottom: 2.5px solid #d32f2f;
        }

        .totals-row td {
            border-top: 2.5px solid #d32f2f;
            border-bottom: 2.5px solid #d32f2f;
            font-size: 10px;
        }

        .totals-label {
            text-align: left !important;
            padding-left: 15px !important;
            font-size: 10.5px;
        }

        /* Personal Expenses Section */
        .expenses-section {
            width: 95%;
            margin: 30px auto;

        }

        .expenses-title {
            font-size: 12px;
            font-weight: bold;
            color: #d32f2f;
        }

        .expenses-table {
            width: 50%;
            border-collapse: collapse;
            font-size: 10px;
        }

        .expenses-table td {
            border: 1px solid #cccccc;
            padding: 6px 10px;
            text-align: left;
        }

        .expenses-amount {
            text-align: right;
            font-family: 'Courier New', monospace;
            font-weight: bold;
            color: #d32f2f;
        }

        /* Make/Model Column Styling */
        .make-model-cell {
            text-align: left;
            padding-left: 10px !important;
            font-weight: 600;
            color: #333333;
        }

        /* Footer */
        .footer {
            position: absolute;
            bottom: 15px;
            width: 100%;
            text-align: center;
            font-size: 11px;
            color: #777777;
            padding-top: 20px;
            border-top: 1px solid #dddddd;
        }

        /* Number formatting */
        .number-cell {
            text-align: right;
            font-family: 'Courier New', monospace;
            padding-right: 12px;
            font-size: 9.5px;
        }

        /* Currency formatting */
        .currency-cell:before {
            content: "£";
        }

        /* Negative amounts */
        .negative-amount {
            color: #d32f2f;
            font-weight: bold;
        }

        /* Column widths - Exact match to original */
        .col-1 {
            width: 8.5%;
        }

        /* Date */
        .col-2 {
            width: 9.5%;
        }

        /* Vehicle ID */
        .col-3 {
            width: 8.5%;
        }

        /* Purchase cost */
        .col-4 {
            width: 7.5%;
        }

        /* Additional costs */
        .col-5 {
            width: 8.5%;
        }

        /* Total Cost */
        .col-6 {
            width: 8.5%;
        }

        /* Sales */
        .col-7 {
            width: 8.5%;
        }

        /* Net profit */
        .col-8 {
            width: 7.5%;
        }

        /* NP Share */
        .col-9 {
            width: 32.5%;
        }

        /* Make/Model */

        /* Page break control */
        .page-break {
            page-break-before: always;
        }

        /* Print optimizations */
        @media print {
            body {
                font-size: 9.5px;
            }

            .container {
                min-height: 1100px;
            }

            .vehicles-table {
                font-size: 8.5px;
            }
        }

        /* Text formatting */
        .bold {
            font-weight: bold;
        }

        .italic {
            font-style: italic;
        }

        /* Data highlighting */
        .highlight-red {
            color: #d32f2f;
            font-weight: bold;
        }

        /* Border utilities */
        .border-top-red {
            border-top: 2px solid #d32f2f !important;
        }

        .border-bottom-red {
            border-bottom: 2px solid #d32f2f !important;
        }


        /* 6th Page */

        .main-title {
            font-size: 28px;
            font-weight: bold;
            color: #d32f2f;
            margin: 5px 0;
            text-transform: uppercase;
            letter-spacing: 1.5px;
        }

        .report-title {
            font-size: 18px;
            font-weight: bold;
            color: #000000;
            margin: 8px 0 4px 0;
        }

        .report-subtitle {
            font-size: 20px;
            font-weight: bold;
            color: #d32f2f;
            margin: 15px 0 5px 0;
        }

        .investor-info {
            font-size: 12px;
            color: #555555;
            margin: 6px 0;
        }

        .report-period {
            font-size: 11px;
            color: #666666;
            margin: 4px 0 15px 0;
        }

        /* Divider */
        .divider {
            height: 2px;
            background-color: #d32f2f;
            margin: 20px 0;
            width: 100%;
        }

        /* Appendix Title */
        .appendix-title {
            font-size: 18px;
            font-weight: bold;
            color: #d32f2f;
            text-align: left;
            margin: 30px 0 15px 0;
            padding-bottom: 6px;
            border-bottom: 2px solid #d32f2f;
            text-transform: uppercase;
        }

        .appendix-subtitle {
            font-size: 14px;
            font-weight: bold;
            color: #333333;
            text-align: center;
            margin: 20px 0 15px 0;
            padding: 5px;
            background-color: #fff5f5;
            border-left: 4px solid #d32f2f;
        }

        /* Table Styles */
        .appendix-table {
            width: 95%;
            border-collapse: collapse;
            /* margin: 15px 0 25px 0; */
            font-size: 9px;
            table-layout: fixed;
        }

        .appendix-table th {
            background-color: #d32f2f;
            color: #ffffff;
            border: 1.5px solid #b71c1c;
            padding: 8px 4px;
            text-align: center;
            font-weight: bold;
            font-size: 9.5px;
            text-transform: uppercase;
        }

        .appendix-table td {
            border: 1px solid #cccccc;
            padding: 7px 4px;
            text-align: center;
            vertical-align: top;
        }

        /* Alternating row colors with red theme */
        .appendix-table tbody tr:nth-child(even) {
            background-color: #fff5f5;
        }

        .appendix-table tbody tr:nth-child(odd) {
            background-color: #ffffff;
        }

        /* Highlight important columns */
        .highlight-column {
            background-color: #ffebee !important;
            font-weight: bold;
        }

        .highlight-column-red {
            background-color: #ffcdd2 !important;
            font-weight: bold;
            color: #d32f2f;
        }

        /* Totals Row */
        .totals-row {
            background-color: #ffebee !important;
            font-weight: bold;
            border-top: 2.5px solid #d32f2f;
            border-bottom: 2.5px solid #d32f2f;
        }

        .totals-row td {
            border-top: 2.5px solid #d32f2f;
            border-bottom: 2.5px solid #d32f2f;
            font-size: 10px;
        }

        .total-stock-box {
            text-align: center;
            margin: 25px auto;
            padding: 15px;
            border: 3px solid #d32f2f;
            background-color: #fff5f5;
            width: 60%;
            font-size: 14px;
            font-weight: bold;
        }

        .total-stock-value {
            font-size: 24px;
            font-weight: bold;
            color: #d32f2f;
            margin-top: 5px;
        }

        /* Footnote */
        .footnote {
            font-size: 9px;
            color: #666666;
            font-style: italic;
            margin-top: 5px;
            padding-left: 10px;
        }

        /* Footer */
        .footer {
            position: absolute;
            bottom: 15px;
            width: 100%;
            text-align: center;
            font-size: 11px;
            color: #777777;
            padding-top: 20px;
            border-top: 1px solid #dddddd;
        }

        /* Number formatting */
        .number-cell {
            text-align: right;
            font-family: 'Courier New', monospace;
            padding-right: 12px;
            font-size: 9.5px;
        }

        /* Currency formatting */
        .currency-cell:before {
            content: "£";
        }

        /* Negative amounts */
        .negative-amount {
            color: #d32f2f;
            font-weight: bold;
        }

        /* Column widths for Appendix B */
        .col-b1 {
            width: 10%;
        }

        /* Date */
        .col-b2 {
            width: 15%;
        }

        /* Vehicle ID */
        .col-b3 {
            width: 12%;
        }

        /* Purchase Cost */
        .col-b4 {
            width: 12%;
        }

        /* Additional cost* */
        .col-b5 {
            width: 12%;
        }

        /* Total cost */
        .col-b6 {
            width: 39%;
        }

        /* Make/Model */

        /* Column widths for Appendix C */
        .col-c1 {
            width: 12%;
        }

        /* Investment Date */
        .col-c2 {
            width: 10%;
        }

        /* Principal Amount (£) */
        .col-c3 {
            width: 10%;
        }

        /* Cumulative Principal (£) */
        .col-c4 {
            width: 10%;
        }

        /* Periodic Profit (£) */
        .col-c5 {
            width: 10%;
        }

        /* Cumulative profit (£) */
        .col-c6 {
            width: 8%;
        }

        /* Other charges */
        .col-c7 {
            width: 10%;
        }

        /* Total Value (£) */
        .col-c8 {
            width: 8%;
        }

        /* Years Since Start */
        .col-c9 {
            width: 12%;
        }

        /* CAGR % */

        /* Page break control */
        .page-break {
            page-break-before: always;
        }

        /* Print optimizations */
        @media print {
            body {
                font-size: 9.5px;
            }

            .container {
                min-height: 1100px;
            }

            .appendix-table {
                font-size: 8.5px;
            }
        }

        /* Text formatting */
        .bold {
            font-weight: bold;
        }

        .italic {
            font-style: italic;
        }

        /* Data highlighting */
        .highlight-red {
            color: #d32f2f;
            font-weight: bold;
        }

        /* Border utilities */
        .border-top-red {
            border-top: 2px solid #d32f2f !important;
        }

        /* Section spacing */
        .section-spacing {
            margin-top: 40px;
        }

        /* Appendix C totals */
        .appendix-c-totals {
            text-align: center;
            margin-top: 20px;
            font-size: 11px;
            font-weight: bold;
            color: #d32f2f;
        }

        .appendix-c-totals span {
            margin: 0 15px;
        }

        /* Make/Model column styling */
        .make-model-cell {
            text-align: left;
            padding-left: 10px !important;
            font-weight: 600;
            color: #333333;
        }
    </style>
</head>

<body>



    <!-- COVER PAGE - Page 1 Only -->
    <div class="cover-page">
    

        <div class="report-wrapper" style="padding-left: 0; ">
            <!-- HEADER BAR -->
            <table class="logo-bar" width="100%" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="100%" style="text-align: center;">
                        <div class="company-name" style="padding-left: 0;">BLACKSTONE MOTORS LIMITED</div>
                        <div class="report-title" style="color: #fff;">INVESTMENT PERFORMANCE REPORT</div>
                    </td>
                </tr>
            </table>

            <!-- INFO ROW -->
            <table width="100%" cellspacing="0" cellpadding="6">
                <tr>
                    <td width="65%">
                        <div class="info-block">
                            <div><span class="info-label">Investor:</span>Neil Partridge</div>
                            <div><span class="info-label">Period of this Report:</span> 14 Feb 2024 – Dec 2025</div>
                            <div><span class="info-label">Report Generated:</span> {{ date('d M Y') }}</div>
                            <div><span class="info-label">Portfolio Status:</span> Active & Performing</div>
                        </div>
                    </td>
                </tr>
            </table>

            <div class="soft-divider"></div>


            <div class="footer" style="color: white;">
                <strong>CONFIDENTIAL & PROPRIETARY</strong><br>
                &copy; {{ date('Y') }} Blackstone Motors Limited. All rights reserved.<br>
                This report contains confidential investment information intended for authorized recipients only.
            </div>
        </div>
    </div>

    {{-- Page 2 --}}

    <div class="next-page" style="padding:0 50px;">
        <!-- TOP -->
        <table style="width: 100%; border-collapse: collapse; font-size: 10px;">
            <tr>
                <td style="width: 33.33%; text-align: left;">
                    BLACKSTONE MOTORS LIMITED
                </td>

                <td style="width: 33.33%; text-align: center;">
                    INVESTOR'S REPORT
                </td>

                <td style="width: 33.33%; text-align: right;">
                    DEC25
                </td>
            </tr>
        </table>

        <div class="report-block">
            <h2>BLACKSTONE MOTORS LIMITED</h2>
            <h3>Investment Performance Report</h3>
            <h4>Investor: <span>Neil Partridge</span></h4>
            <h4>Period of this report:
                <span>from 14 Feb 2024 to 12 Dec 2025</span>
            </h4>
        </div>

        <h2 style="background-color: lightblue; text-align: center; font-size: 14px;">TABLE OF CONTENT</h2>

        <div style="max-width: 80%; margin: 0 auto;">

            <h3 style="font-size: 14px; text-align: right; margin:0;">Page Number</h3>

            <table style="width: 100%; border-collapse: separate; border-spacing: 0 20px; font-size: 12px;">
                <tr style="background-color: #fff0f0; font-weight: bold; height: 30px;">
                    <td>EXECUTIVE SUMMARY - INVESTMENT SNAPSHOT</td>
                    <td style="text-align: right; padding-right:30px; ">3</td>
                </tr>
                <tr style="background-color: #ff0000; font-weight: bold; height: 30px; color:white;">
                    <td>SEMI-ANNUAL INVESTMENT PERFORMANCE TABLE (NP)</td>
                    <td style="text-align: right; padding-right:30px; color:white;">4</td>
                </tr>
                <tr style="background-color: #fff0f0; font-weight: bold; height: 30px;">
                    <td>RELATIVE PERFORMANCE CONTEXT</td>
                    <td style="text-align: right; padding-right:30px;">4</td>
                </tr>
                <tr style="background-color: #ff0000; font-weight: bold; height: 30px;color:white;">
                    <td>APPENDIX A LIST OF VEHICLES SOLD - VEHICLE TRANSACTIONS - (FROM 14 Feb 2024 TO 12 Dec 2025)</td>
                    <td style="text-align: right; padding-right:30px;">5</td>
                </tr>
                <tr style="background-color: #fff0f0; font-weight: bold; height: 30px;">
                    <td>APPENDIX B LIST OF VEHICLES 'IN STOCK' AS OF 12th DECEMBER 2025</td>
                    <td style="text-align: right; padding-right:30px;">6</td>
                </tr>
                <tr style="background-color: #ff0000; font-weight: bold; height: 30px; color:white;">
                    <td>APPENDIX C INVESTMENT BREAK-UP OF AMOUNTS - FROM 14 Feb 2024 TO 12 Dec 2025</td>
                    <td style="text-align: right; padding-right:30px;">6</td>
                </tr>
            </table>

        </div>

    </div>

    <!-- Page 3 -->
    <div class="next-page" style="padding:0 50px;">
        <!-- TOP -->
        <table style="width: 100%; border-collapse: collapse; font-size: 10px;">
            <tr>
                <td style="width: 33.33%; text-align: left;">
                    BLACKSTONE MOTORS LIMITED
                </td>

                <td style="width: 33.33%; text-align: center;">
                    INVESTOR'S REPORT
                </td>

                <td style="width: 33.33%; text-align: right;">
                    DEC25
                </td>
            </tr>
        </table>

        <div class="report-block" style="margin-top: 20px;">
            <h2>BLACKSTONE MOTORS LIMITED</h2>
            <h3>Investment Performance Report</h3>
            <h4>Investor: <span>Neil Partridge</span></h4>
            <h4>Period of this report:
                <span>from 14 Feb 2024 to 12 Dec 2025</span>
            </h4>
        </div>

        <!-- Executive Summary -->
        <div class="executive-summary">
            <div class="section-title">EXECUTIVE SUMMARY - INVESTMENT SNAPSHOT</div>

            <table style="border-collapse: collapse; width:70%; margin:15px auto;">
                <tr>
                    <td style="font-weight: bold;">Closing Portfolio Value (£) <span style="font-weight: normal;">
                            {{ number_format($closingPortfolioValue) }}</span></td>
                    <td style="font-weight: bold;">Cumulative Profit (£) <span
                            style="font-weight: normal;">{{ number_format($cumulativeProfit) }}</span></td>
                    <td style="font-weight: bold;">Cumulative ROI (%) <span
                            style="font-weight: normal;">{{ number_format($cumulativeROI, 2) }}%</span></td>
                </tr>
            </table>
            <!-- Performance Chart -->
            <div class="chart-container">
                <img src="{{ $chartImages['performance'] }}" alt="Performance Chart" class="chart-image"
                    style="width: 700px;">
            </div>
        </div>

        <!-- Charts Grid -->
        <div class="charts-grid">

            <table width="100%">
                <tr>
                    <td width="50%">
                        <div>
                            <div class="section-title">Total Investment vs Profit</div>
                            <div class="investment-pie-container">
                                <div class="pie-chart-wrapper">
                                    <img src="{{ $chartImages['investment'] }}" alt="Investment Pie Chart"
                                        class="chart-image" style="width: 200px;">
                                </div>
                            </div>
                        </div>
                    </td>
                    <td width="50%">
                        <!-- Liquidity Snapshot -->
                        <div>
                            <div class="section-title">Liquidity Snapshot</div>

                            <div class="liquidity-box">
                                <div class="liquidity-chart-container">
                                    <img src="{{ $chartImages['liquidity'] }}" alt="Liquidity Chart"
                                        class="chart-image" style="width: 200px;">
                                </div>
                                <div class="liquidity-details">
                                    <span class="liquidity-item">
                                        <span>Cash Available</span>
                                        <span class="liquidity-value"
                                            style="color:black;">£{{ number_format($liquidityData['cashAvailable']) }}
                                            ({{ $liquidityData['cashPercentage'] }}%)</span>
                                    </span>
                                    <span class="liquidity-item">
                                        <span>Vehicles Stock at Cost</span>
                                        <span class="liquidity-value"
                                            style="color:black;">£{{ number_format($liquidityData['vehiclesStock']) }}
                                            ({{ $liquidityData['vehiclesPercentage'] }}%)</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>



        </div>

        {{-- <!-- Main Data Table -->
        <table class="data-table" style="margin-top: 30px;">
            <thead>
                <tr>
                    <th>Total Value £ (D - C + E)</th>
                    <th>Total Capital invested £</th>
                    <th>Total Withdrawals/charges £</th>
                    <th>Net Investment £ (B - C)</th>
                    <th>Total Gain/Loss £</th>
                    <th>Cumulative ROI * (Absolute Gain/Loss) %</th>
                    <th>Annualised Return (CAGR) %</th>
                    <th>Avg Profit per Sold Vehicle £</th>
                    <th>Vehicles Sold #</th>
                    <th>Vehicles in Stock #</th>
                    <th>Vehicles Stock at Cost £</th>
                    <th>Cash Available £</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ number_format($tableData['totalValue']) }}</td>
                    <td>{{ number_format($tableData['totalCapitalInvested']) }}</td>
                    <td>({{ number_format(abs($tableData['totalWithdrawals'])) }})</td>
                    <td>{{ number_format($tableData['netInvestment']) }}</td>
                    <td>{{ number_format($tableData['totalGainLoss']) }}</td>
                    <td>{{ number_format($tableData['cumulativeROI'], 2) }}%</td>
                    <td>{{ number_format($tableData['annualizedReturn'], 2) }}%</td>
                    <td>{{ number_format($tableData['avgProfitPerVehicle'], 2) }}</td>
                    <td>{{ $tableData['vehiclesSold'] }}</td>
                    <td>{{ $tableData['vehiclesInStock'] }}</td>
                    <td>{{ number_format($tableData['vehiclesStockCost']) }}</td>
                    <td>{{ number_format($tableData['cashAvailable']) }}</td>
                </tr>
            </tbody>
        </table>

        <!-- Report Content -->
        <div class="report-content">
            <p>As at 12 December 2025, the investment with Blackstone Motors has delivered a solid, asset-backed
                performance over the review period, despite operating in a challenging macroeconomic environment marked
                by higher interest rates and slower consumer demand. NP has deployed a net capital of <span
                    class="highlight">£{{ number_format($tableData['netInvestment']) }}</span>, after accounting for
                minor withdrawals and charges of <span
                    class="highlight">£{{ number_format(abs($tableData['totalWithdrawals'])) }}</span>, resulting in a
                total portfolio value of <span
                    class="highlight">£{{ number_format($tableData['totalValue']) }}</span>. This represents an
                absolute gain of <span class="highlight">£{{ number_format($tableData['totalGainLoss']) }}</span>,
                translating into a cumulative return on investment (ROI) of <span
                    class="highlight">{{ number_format($tableData['cumulativeROI'], 2) }}%</span> since inception.</p>

            <p>On an annualised basis, the investment has generated a compound annual growth rate (CAGR) of <span
                    class="highlight">{{ number_format($tableData['annualizedReturn'], 1) }}%</span>, (incase no
                reinvestment of the profit then cumulative ROI would be 15.59% (£111,642/ £715,897)), which compares
                favourably with traditional low-risk asset classes such as bank deposits, gilts, and income-focused
                property investments over the same period. Importantly, these returns have been achieved through
                tangible, tradeable assets, rather than financial instruments exposed to market volatility.</p>

            <p>Operationally, the portfolio has completed <span class="highlight">{{ $tableData['vehiclesSold'] }}
                    vehicle sales</span>, delivering an average profit per sold vehicle of <span
                    class="highlight">£{{ number_format($tableData['avgProfitPerVehicle'], 2) }}</span>.</p>

            <p>As at the reporting date, <span class="highlight">{{ $tableData['vehiclesInStock'] }} vehicles remain
                    in stock</span>, held at a total cost of <span
                    class="highlight">£{{ number_format($tableData['vehiclesStockCost']) }}</span>, providing further
                embedded value and future profit potential. Liquidity remains managed but deliberately deployed, with
                <span class="highlight">£{{ number_format($tableData['cashAvailable']) }} held in cash</span>, while
                the majority of capital is invested in vehicle inventory that is actively marketed and priced with
                reference to observable market values. This liquidity profile is consistent with an asset-backed trading
                strategy, where returns are generated through stock turnover rather than idle cash holdings.
            </p>
        </div>

    </div>

    {{-- 4th Page --}}
     <div class="next-page" style="width: 80%; margin:0 auto;">
        <!-- TOP -->
        <table style="width: 100%; border-collapse: collapse; font-size: 10px;">
            <tr>
                <td style="width: 33.33%; text-align: left;">
                    BLACKSTONE MOTORS LIMITED
                </td>

                <td style="width: 33.33%; text-align: center;">
                    INVESTOR'S REPORT
                </td>

                <td style="width: 33.33%; text-align: right;">
                    DEC25
                </td>
            </tr>
        </table>

        <div class="report-block" style="margin-top: 20px;">
            <h2>BLACKSTONE MOTORS LIMITED</h2>
            <h3>Investment Performance Report</h3>
            <h4>Investor: <span>Neil Partridge</span></h4>
            <h4>Period of this report:
                <span>from 14 Feb 2024 to 12 Dec 2025</span>
            </h4>
        </div>
        <!-- PERFORMANCE TABLE -->
        <div class="section-title">SEMI-ANNUAL INVESTMENT PERFORMANCE TABLE (NP)</div>

        <table class="performance">
            <tr>
                <th>Period End</th>
                <th>Period</th>
                <th>Opening Capital (£)</th>
                <th>Capital Added (£)</th>
                <th>Capital Withdrawn (£)</th>
                <th>NP Profit in Period (£)</th>
                <th>Closing Portfolio Value (£)</th>
                <th>Cumulative Profit (£)</th>
                <th>Cumulative ROI (%)</th>
                <th>Half Yearly - Periods:<br>H1 = up to 31 March and<br>H2 = up to 30 Sept</th>
            </tr>

            <tr>
                <td>30-Sep-24</td>
                <td>H2-FY24</td>
                <td>0</td>
                <td>623,244</td>
                <td>0</td>
                <td>57,407</td>
                <td>680,651</td>
                <td>57,407</td>
                <td>9.21%</td>
                <td>H2-FY24 = From 14 Feb 2024 to 30 Sept 2024</td>
            </tr>

            <tr>
                <td>31-Mar-25</td>
                <td>H1-FY25</td>
                <td>680,651</td>
                <td>0</td>
                <td>0</td>
                <td>13,451</td>
                <td>694,102</td>
                <td>70,858</td>
                <td>10.41%</td>
                <td>H1-FY25 = From 1 Oct 2024 to 31 March 2025</td>
            </tr>

            <tr>
                <td>30-Sep-25</td>
                <td>H2-FY25</td>
                <td>694,102</td>
                <td>92,653</td>
                <td>-1,412</td>
                <td>29,007</td>
                <td>814,350</td>
                <td>99,866</td>
                <td>12.72%</td>
                <td>H2-FY25 = From 1 March 2025 to 30 Sept 2025</td>
            </tr>

            <tr>
                <td>12-Dec-25</td>
                <td>H1-FY26 - Partial</td>
                <td>814,350</td>
                <td>0</td>
                <td>-356</td>
                <td>11,776</td>
                <td>825,771</td>
                <td>111,642</td>
                <td>13.72%</td>
                <td>H1-FY26 - Partial = From 1 Oct 2025 to 12 Dec 2025</td>
            </tr>

            <tr>
                <td colspan="3"></td>
                <td><strong>715,897</strong></td>
                <td><strong>-1,768</strong></td>
                <td><strong>111,642</strong></td>
                <td colspan="4"></td>
            </tr>
        </table>

        <div class="note">
            * Incase no reinvestment of the profit then cumulative ROI would be <strong>15.59%</strong> (£111,642 /
            £715,897).
        </div>

        <div class="paragraph">
            The table above summarises semi-annual performance: Returns were positive in every reporting period.
            Performance moderated during weaker market conditions in H1-FY25. Margin recovery and capital redeployment
            drove improved returns in H2-FY25. Partial H1-FY26 performance remains positive despite shorter duration.
            This pattern reflects a defensive return profile, where performance slows during adverse market conditions.
        </div>

        <!-- RELATIVE PERFORMANCE -->
        <div class="relative-title">RELATIVE PERFORMANCE CONTEXT</div>

        <!-- <table class="chart-section">
            <tr>
                <td class="chart-left">
                     Chart image placeholder
                    <img src="{{ public_path('charts/page_chart.png') }}" style="max-width:400px;" alt="">
                </td>
                <td class="chart-right">
                    The achieved <strong>8.11%</strong> annualised return (same period) compares favourably with UK
                    savings and money-market instruments, UK government bonds (gilts) and net yields from residential
                    buy-to-let property. Crucially, these returns were achieved through tangible assets, rather than
                    exposure to public market volatility.
                </td>
            </tr>
        </table> -->


        <table class="chart-section" style="width: 100%; border-collapse: collapse; margin-top: 20px;">
    <tr>
        <td class="chart-left" style="width: 50%; vertical-align: top; padding-right: 20px;">
            <!-- CAGR Chart image -->
            @if(isset($cagrChartImage))
            <img src="{{ $cagrChartImage }}" style="width: 100%; max-width: 400px;" alt="CAGR Comparison Chart">
            @else
            <div style="width: 400px; height: 300px; background: #f0f0f0; border: 1px solid #ddd; display: flex; align-items: center; justify-content: center;">
                <span style="color: #666;">CAGR Chart Placeholder</span>
            </div>
            @endif
        </td>
        <td class="chart-right" style="width: 50%; vertical-align: top; padding-left: 20px;">
            <p style="font-size: 12px; line-height: 1.5; color: #333;">
                {!! $cagrComparisonText !!}
            </p>
            
            <!-- Optional: Display actual data values -->
            <div style="margin-top: 15px; font-size: 11px; color: #555;">
                <table style="width: 100%; border-collapse: collapse;">
                    <tr style="border-bottom: 1px solid #eee;">
                        <td style="padding: 4px 0;"><strong>Investment Type</strong></td>
                        <td style="padding: 4px 0; text-align: right;"><strong>Annualized Return</strong></td>
                    </tr>
                    @if(isset($cagrData))
                    <tr>
                        <td style="padding: 4px 0;">Blackstone Motors</td>
                        <td style="padding: 4px 0; text-align: right;">{{ number_format($cagrData['blackstoneMotors'], 2) }}%</td>
                    </tr>
                    <tr>
                        <td style="padding: 4px 0;">FTSE 100</td>
                        <td style="padding: 4px 0; text-align: right;">{{ number_format($cagrData['ftse100'], 2) }}%</td>
                    </tr>
                    <tr>
                        <td style="padding: 4px 0;">Gilts (UK Govt. bonds)</td>
                        <td style="padding: 4px 0; text-align: right;">{{ number_format($cagrData['gilts'], 2) }}%</td>
                    </tr>
                    <tr>
                        <td style="padding: 4px 0;">Savings/ Bank Deposits</td>
                        <td style="padding: 4px 0; text-align: right;">{{ number_format($cagrData['savings'], 2) }}%</td>
                    </tr>
                    <tr>
                        <td style="padding: 4px 0;">Buy to let property</td>
                        <td style="padding: 4px 0; text-align: right;">{{ number_format($cagrData['buyToLet'], 2) }}%</td>
                    </tr>
                    @endif
                </table>
            </div>
        </td>
    </tr>
</table>

        <div class="source" style="font-size: 12px;">
            Source:<br>
            https://ycharts.com/indices/%5ESPXTR?utm<br>
            https://www.ig.com/ae/trading-strategies/what-are-the-average-returns-of-the-ftse-100--200529<br>
            https://www.lbram.org.uk/prices-and-data/precious-metal-prices/<br>
            https://www.bankofengland.co.uk/boeapps/database/fromshowcolumns.asp?Travel=NIsXTxDsUx&FromSeries=1&ToSeries=<br>
            50&DA=RNG&FD=1&FM=Mar&FY=2024&TD=16&TM=Dec&TY=2025&CSV=TT&ht
        </div>
    </div>

    {{-- Page 5th --}}
    <div class="next-page">
        <!-- Header Section -->
        <div class="header">
            <div class="main-title" style="text-align: center;">BLACKSTONE MOTORS LIMITED</div>
            <div class="report-title">Investment Performance Report</div>
        </div>

        {{-- <!-- Divider -->
        <div class="divider"></div> --}}

        <!-- Section Title -->
        <div class="section-title">
            LIST OF VEHICLES SOLD - VEHICLE TRANSACTIONS - (FROM 14 Feb 2024 TO 12 Dec 2025)
        </div>

        <!-- Vehicles Sold Table -->
        <table class="vehicles-table" style="margin: 0 auto;">
            <thead>
                <tr>
                    <th class="col-1">Date</th>
                    <th class="col-2">Vehicle ID</th>
                    <th class="col-3">Purchase cost</th>
                    <th class="col-4">Additional costs</th>
                    <th class="col-5">Total Cost</th>
                    <th class="col-6">Sales</th>
                    <th class="col-7">Net profit</th>
                    <th class="col-8 np-share-header">NP Share</th>
                    <th class="col-9">Make/Model</th>
                </tr>
            </thead>
            <tbody>
                <!-- Row 1 -->
                <tr>
                    <td>14 Feb 2024</td>
                    <td>RXQ2 ZTK</td>
                    <td class="number-cell currency-cell">100,508</td>
                    <td class="number-cell currency-cell">537</td>
                    <td class="number-cell currency-cell">101,045</td>
                    <td class="number-cell currency-cell">104,000</td>
                    <td class="number-cell currency-cell">2,955</td>
                    <td class="number-cell np-share-column">1.478</td>
                    <td class="make-model-cell">Porsche 911 Carrera GTS</td>
                </tr>

                <!-- Row 2 -->
                <tr>
                    <td>11 Jun 2024</td>
                    <td>IC68 AOJ</td>
                    <td class="number-cell currency-cell">180,000</td>
                    <td class="number-cell currency-cell">3,086</td>
                    <td class="number-cell currency-cell">183,045</td>
                    <td class="number-cell currency-cell">210,000</td>
                    <td class="number-cell currency-cell">26,964</td>
                    <td class="number-cell np-share-column">13.682</td>
                    <td class="make-model-cell">RR Cullinan</td>
                </tr>

                <!-- Row 3 -->
                <tr>
                    <td>24 Jul 2024</td>
                    <td>GA7 KPW</td>
                    <td class="number-cell currency-cell">137,000</td>
                    <td class="number-cell currency-cell">455</td>
                    <td class="number-cell currency-cell">137,455</td>
                    <td class="number-cell currency-cell">155,000</td>
                    <td class="number-cell currency-cell">17,545</td>
                    <td class="number-cell np-share-column">8.772</td>
                    <td class="make-model-cell">Mercedes AMG GT & Pro</td>
                </tr>

                <!-- Row 4 -->
                <tr>
                    <td>29 Jul 2024</td>
                    <td>LR70 MMX</td>
                    <td class="number-cell currency-cell">150,000</td>
                    <td class="number-cell currency-cell">943</td>
                    <td class="number-cell currency-cell">150,943</td>
                    <td class="number-cell currency-cell">185,000</td>
                    <td class="number-cell currency-cell">34,057</td>
                    <td class="number-cell np-share-column">17.028</td>
                    <td class="make-model-cell">Brabus G63 AMG</td>
                </tr>

                <!-- Row 5 -->
                <tr>
                    <td>30 Jul 2024</td>
                    <td>AO73 VTA</td>
                    <td class="number-cell currency-cell">62,000</td>
                    <td class="number-cell currency-cell">797</td>
                    <td class="number-cell currency-cell">62,797</td>
                    <td class="number-cell currency-cell">62,989</td>
                    <td class="number-cell currency-cell">192</td>
                    <td class="number-cell np-share-column">96</td>
                    <td class="make-model-cell">BMW M3 Convertible</td>
                </tr>

                <!-- Row 6 -->
                <tr>
                    <td>23 Aug 2024</td>
                    <td>AO72 KPE</td>
                    <td class="number-cell currency-cell">97,264</td>
                    <td class="number-cell currency-cell">3,667</td>
                    <td class="number-cell currency-cell">100,931</td>
                    <td class="number-cell currency-cell">109,989</td>
                    <td class="number-cell currency-cell">9,058</td>
                    <td class="number-cell np-share-column">4.529</td>
                    <td class="make-model-cell">Mercedes G400d AMG L</td>
                </tr>

                <!-- Row 7 -->
                <tr>
                    <td>22 Aug 2024</td>
                    <td>RV69 XKD</td>
                    <td class="number-cell currency-cell">128,000</td>
                    <td class="number-cell currency-cell">2,777</td>
                    <td class="number-cell currency-cell">130,777</td>
                    <td class="number-cell currency-cell">139,989</td>
                    <td class="number-cell currency-cell">9,212</td>
                    <td class="number-cell np-share-column">4,606</td>
                    <td class="make-model-cell">Aston Martin DBS S V12</td>
                </tr>

                <!-- Row 8 -->
                <tr>
                    <td>08 Sep 2024</td>
                    <td>CF32 JIU</td>
                    <td class="number-cell currency-cell">68,731</td>
                    <td class="number-cell currency-cell">627</td>
                    <td class="number-cell currency-cell">69,385</td>
                    <td class="number-cell currency-cell">69,989</td>
                    <td class="number-cell currency-cell">426</td>
                    <td class="number-cell np-share-column">9.131</td>
                    <td class="make-model-cell">Porsche Taycan Turbo S</td>
                </tr>

                <!-- Row 9 -->
                <tr>
                    <td>12 Sep 2024</td>
                    <td>FJ22 BVV</td>
                    <td class="number-cell currency-cell">179,500</td>
                    <td class="number-cell currency-cell">295</td>
                    <td class="number-cell currency-cell">179,795</td>
                    <td class="number-cell currency-cell">194,000</td>
                    <td class="number-cell currency-cell">14,205</td>
                    <td class="number-cell np-share-column">7.103</td>
                    <td class="make-model-cell">Lamborghini Urus</td>
                </tr>

               
                <!-- Row 16 -->
                <tr>
                    <td>22 May 2025</td>
                    <td>HV68 KCZ</td>
                    <td class="number-cell currency-cell">168,588</td>
                    <td class="number-cell currency-cell">4,198</td>
                    <td class="number-cell currency-cell">172,786</td>
                    <td class="number-cell currency-cell">187,000</td>
                    <td class="number-cell currency-cell">14,214</td>
                    <td class="number-cell np-share-column">7.107</td>
                    <td class="make-model-cell">RR Cullinan</td>
                </tr>

                <!-- Row 17 -->
                <tr>
                    <td>18 Jul 2025</td>
                    <td>WV69 MKN</td>
                    <td class="number-cell currency-cell">71,313</td>
                    <td class="number-cell currency-cell">2,018</td>
                    <td class="number-cell currency-cell">73,330</td>
                    <td class="number-cell currency-cell">81,000</td>
                    <td class="number-cell currency-cell">7,670</td>
                    <td class="number-cell np-share-column">3.835</td>
                    <td class="make-model-cell">MB AMG GT Roadster</td>
                </tr>

                <!-- Row 18 -->
                <tr>
                    <td>12 Sep 2025</td>
                    <td>H4 DCF / HK74 VVC</td>
                    <td class="number-cell currency-cell">48,000</td>
                    <td class="number-cell currency-cell">250</td>
                    <td class="number-cell currency-cell">48,250</td>
                    <td class="number-cell currency-cell">50,900</td>
                    <td class="number-cell currency-cell">2,950</td>
                    <td class="number-cell np-share-column">1.125</td>
                    <td class="make-model-cell">BMW X3 20d MINT</td>
                </tr>

                

                <!-- Totals Row -->
                <tr class="totals-row">
                    <td colspan="2" class="totals-label">Personal expenses of NP</td>
                    <td class="number-cell currency-cell bold">2,466,551</td>
                    <td class="number-cell currency-cell bold">42,845</td>
                    <td class="number-cell currency-cell bold">2,509,396</td>
                    <td class="number-cell currency-cell bold">2,732,572</td>
                    <td class="number-cell currency-cell bold">223,176</td>
                    <td class="number-cell np-share-column bold">111,642</td>
                    <td></td>
                </tr>
            </tbody>
        </table>

        <!-- Personal Expenses Section -->
        <div class="expenses-section">
            <div class="expenses-title">Personal Expenses:</div>
            <table class="expenses-table">
                <tr>
                    <td>22 May 2025</td>
                    <td>Exp of NP</td>
                    <td class="expenses-amount negative-amount">(1,411.94)</td>
                </tr>
                <tr>
                    <td>31 Oct 2025</td>
                    <td>Exp of NP</td>
                    <td class="expenses-amount negative-amount">(110.00)</td>
                </tr>
                <tr>
                    <td>11 Nov 2025</td>
                    <td>Exp of NP</td>
                    <td class="expenses-amount negative-amount">(110.00)</td>
                </tr>
            </table>
        </div>

    </div>

    {{-- 6th Page --}}
    <div class="next-page">
        <!-- Header Section -->
        <div class="header">
            <div class="main-title" style="text-align: center;">BLACKSTONE MOTORS LIMITED</div>
            <div class="report-title">Investment Performance Report</div>
        </div>

        <!-- Section Title -->
        <div class="section-title">
           APPENDIX B
        </div>
        
        <div class="appendix-subtitle">LIST OF VEHICLES 'IN STOCK' AS OF 12th DECEMBER 2025</div>

        <!-- Appendix B Table -->
        <table class="appendix-table" style="margin: 0 auto;">
            <thead>
                <tr>
                    <th class="col-b1">Date</th>
                    <th class="col-b2">Vehicle ID</th>
                    <th class="col-b3">Purchase Cost</th>
                    <th class="col-b4">Additional cost*</th>
                    <th class="col-b5">Total cost</th>
                    <th class="col-b6">Make/Model</th>
                </tr>
            </thead>
            <tbody>
                <!-- Row 1 -->
                <tr>
                    <td>18-Sep-24</td>
                    <td>KE71 NZW/ (MA71 MAM)</td>
                    <td class="number-cell currency-cell">190,000</td>
                    <td class="number-cell currency-cell">2,174</td>
                    <td class="number-cell currency-cell">192,174</td>
                    <td class="make-model-cell">ROLLS ROYCE Ghost V12 4x4 Auto</td>
                </tr>

                <!-- Row 2 -->
                <tr>
                    <td>27-Aug-25</td>
                    <td>S666 YSH</td>
                    <td class="number-cell currency-cell">101,000</td>
                    <td class="number-cell currency-cell">4,894</td>
                    <td class="number-cell currency-cell">105,894</td>
                    <td class="make-model-cell">ROLLS ROYCE Wraith 6.6 V12 Coupe 2dr</td>
                </tr>

                <!-- Row 3 -->
                <tr>
                    <td>21-Sep-25</td>
                    <td>DFZ 299</td>
                    <td class="number-cell currency-cell">100,000</td>
                    <td class="number-cell">-</td>
                    <td class="number-cell currency-cell">10,000</td>
                    <td class="make-model-cell">ROLLS ROYCE SILVER SPIRIT</td>
                </tr>

                <!-- Row 4 -->
                <tr>
                    <td>22-Sep-25</td>
                    <td>FP65 SW</td>
                    <td class="number-cell currency-cell">49,500</td>
                    <td class="number-cell currency-cell">1,908</td>
                    <td class="number-cell currency-cell">54,408</td>
                    <td class="make-model-cell">MERCEDES-BENZ G 350 Matte D Auto</td>
                </tr>

                <!-- Row 5 -->
                <tr>
                    <td>29-Sep-25</td>
                    <td>YO70 OFF</td>
                    <td class="number-cell currency-cell">65,073</td>
                    <td class="number-cell">-</td>
                    <td class="number-cell currency-cell">65,073</td>
                    <td class="make-model-cell">BMW M2 C3 AUTO Black</td>
                </tr>

                <!-- Row 6 -->
                <tr>
                    <td>29-Oct-25</td>
                    <td>SM65 LTE</td>
                    <td class="number-cell currency-cell">43,123</td>
                    <td class="number-cell currency-cell">95</td>
                    <td class="number-cell currency-cell">43,218</td>
                    <td class="make-model-cell">MERCEDES-BENZ AMG GT 5 Auto</td>
                </tr>

                <!-- Row 7 -->
                <tr>
                    <td>28-Nov-25</td>
                    <td>LL24 XZG</td>
                    <td class="number-cell currency-cell">165,000</td>
                    <td class="number-cell currency-cell">30</td>
                    <td class="number-cell currency-cell">165,030</td>
                    <td class="make-model-cell">BENTLEY Continental GT Speed Edition 12 A</td>
                </tr>

                <!-- Row 8 -->
                <tr>
                    <td>2-Dec-25</td>
                    <td>LC23 NMN</td>
                    <td class="number-cell currency-cell">77,447</td>
                    <td class="number-cell">-</td>
                    <td class="number-cell currency-cell">77,447</td>
                    <td class="make-model-cell">PORSCHE 718 Cayman GT4 Semi-Auto</td>
                </tr>

                <!-- Row 9 -->
                <tr>
                    <td>8-Dec-25</td>
                    <td>WW69 MKN</td>
                    <td class="number-cell currency-cell">75,380</td>
                    <td class="number-cell">-</td>
                    <td class="number-cell currency-cell">76,380</td>
                    <td class="make-model-cell">MERCEDES-BENZ AMG GT Premium Auto</td>
                </tr>
            </tbody>
        </table>

        <!-- Footnote for Appendix B -->
        <div class="footnote">*Additional cost incurred as part of vehicle cost.</div>

        <!-- Total Stock Value -->
        <div class="total-stock-box">
            Total Current Stock >>>
            <div class="total-stock-value">780,675</div>
        </div>

    </div>

    <div class="next-page">
        <!-- Appendix C Section -->
        <div class="section-title">
           APPENDIX C
        </div>
        <div class="appendix-subtitle">INVESTMENT BREAK-UP OF AMOUNTS - FROM 14 Feb 2024 TO 12 Dec 2025</div>

        <!-- Appendix C Table -->
        <table class="appendix-table" style="margin: 0 auto;">
            <thead>
                <tr>
                    <th class="col-c1">Investment Date</th>
                    <th class="col-c2">Principal Amount (£)</th>
                    <th class="col-c3">Cumulative Principal (£)</th>
                    <th class="col-c4">Periodic Profit (£)</th>
                    <th class="col-c5">Cumulative profit (£)</th>
                    <th class="col-c6">Other charges</th>
                    <th class="col-c7">Total Value (£)</th>
                    <th class="col-c8">Years Since Start</th>
                    <th class="col-c9">CAGR %</th>
                </tr>
            </thead>
            <tbody>
                <!-- Row 1 -->
                <tr>
                    <td>14 Feb 2024</td>
                    <td class="number-cell currency-cell">50,000</td>
                    <td class="number-cell currency-cell">50,000</td>
                    <td class="number-cell currency-cell">1,478</td>
                    <td class="number-cell currency-cell">1,478</td>
                    <td class="number-cell">-</td>
                    <td class="number-cell currency-cell">51,478</td>
                    <td class="number-cell">0.00</td>
                    <td class="number-cell">N/A</td>
                </tr>

                <!-- Row 2 -->
                <tr>
                    <td>15 Feb 2024</td>
                    <td class="number-cell currency-cell">48,406</td>
                    <td class="number-cell currency-cell">98,406</td>
                    <td class="number-cell">-</td>
                    <td class="number-cell currency-cell">1,478</td>
                    <td class="number-cell">-</td>
                    <td class="number-cell currency-cell">99,884</td>
                    <td class="number-cell">0.00</td>
                    <td class="number-cell">N/A</td>
                </tr>

                <!-- Row 3 -->
                <tr>
                    <td>11 Jun 2024</td>
                    <td class="number-cell currency-cell">180,000</td>
                    <td class="number-cell currency-cell">212,406</td>
                    <td class="number-cell currency-cell">13,482</td>
                    <td class="number-cell currency-cell">14,959</td>
                    <td class="number-cell">-</td>
                    <td class="number-cell currency-cell">293,365</td>
                    <td class="number-cell">0.52</td>
                    <td class="number-cell">17.9%</td>
                </tr>

                <!-- Row 4 -->
                <tr>
                    <td>22 Aug 2024</td>
                    <td class="number-cell currency-cell">50,000</td>
                    <td class="number-cell currency-cell">328,406</td>
                    <td class="number-cell currency-cell">25,397</td>
                    <td class="number-cell currency-cell">40,856</td>
                    <td class="number-cell">-</td>
                    <td class="number-cell currency-cell">369,262</td>
                    <td class="number-cell">0.52</td>
                    <td class="number-cell">25.3%</td>
                </tr>

                <!-- Row 5 -->
                <tr>
                    <td>23 Aug 2024</td>
                    <td class="number-cell currency-cell">47,264</td>
                    <td class="number-cell currency-cell">375,670</td>
                    <td class="number-cell">-</td>
                    <td class="number-cell currency-cell">40,856</td>
                    <td class="number-cell">-</td>
                    <td class="number-cell currency-cell">416,526</td>
                    <td class="number-cell">0.52</td>
                    <td class="number-cell">21.8%</td>
                </tr>

                <!-- Row 6 -->
                <tr>
                    <td>12 Sep 2024</td>
                    <td class="number-cell currency-cell">119,574</td>
                    <td class="number-cell currency-cell">495,244</td>
                    <td class="number-cell currency-cell">16,551</td>
                    <td class="number-cell currency-cell">57,407</td>
                    <td class="number-cell">-</td>
                    <td class="number-cell currency-cell">552,651</td>
                    <td class="number-cell">0.58</td>
                    <td class="number-cell">20.9%</td>
                </tr>

                <!-- Row 7 -->
                <tr>
                    <td>19 Sep 2024</td>
                    <td class="number-cell currency-cell">128,000</td>
                    <td class="number-cell currency-cell">623,244</td>
                    <td class="number-cell">-</td>
                    <td class="number-cell currency-cell">57,407</td>
                    <td class="number-cell">-</td>
                    <td class="number-cell currency-cell">680,651</td>
                    <td class="number-cell">0.60</td>
                    <td class="number-cell">15.9%</td>
                </tr>

                <!-- Row 8 -->
                <tr>
                    <td>22 May 2025</td>
                    <td class="number-cell currency-cell">50,000</td>
                    <td class="number-cell currency-cell">673,244</td>
                    <td class="number-cell currency-cell">26,752</td>
                    <td class="number-cell currency-cell">84,159</td>
                    <td class="number-cell negative-amount">(1,412)</td>
                    <td class="number-cell currency-cell">755,990</td>
                    <td class="number-cell">1.27</td>
                    <td class="number-cell">9.6%</td>
                </tr>

                <!-- Row 9 -->
                <tr>
                    <td>23 May 2025</td>
                    <td class="number-cell currency-cell">42,653</td>
                    <td class="number-cell currency-cell">715,897</td>
                    <td class="number-cell">-</td>
                    <td class="number-cell currency-cell">83,459</td>
                    <td class="number-cell">-</td>
                    <td class="number-cell currency-cell">798,643</td>
                    <td class="number-cell">1.27</td>
                    <td class="number-cell">9.0%</td>
                </tr>

                <!-- Row 10 -->
                <tr>
                    <td>12 Dec 2025</td>
                    <td class="number-cell">-</td>
                    <td class="number-cell currency-cell">715,897</td>
                    <td class="number-cell currency-cell">27,483</td>
                    <td class="number-cell currency-cell">111,642</td>
                    <td class="number-cell negative-amount">(220)</td>
                    <td class="number-cell currency-cell">825,907</td>
                    <td class="number-cell">1.83</td>
                    <td class="number-cell">8.1%</td>
                </tr>

                <!-- Totals Row -->
                <tr class="totals-row">
                    <td colspan="2" style="text-align: center;">--- 715,897 ---</td>
                    <td></td>
                    <td></td>
                    <td style="text-align: center;">--- 111,642 ---</td>
                    <td style="text-align: center;">--- (1,632)</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>

    </div>

</body>
</html>
