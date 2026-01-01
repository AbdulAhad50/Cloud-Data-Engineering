<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?
    family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900
    &family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900
    &display=swap" rel="stylesheet">
    <title>Black Stone</title>
</head>
<style>
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
        /* margin-top: -15px; */
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
</style>

<body>
    <div class="wrapper">
        <div class="full-page">
            <div class="text-top">
                <h1 style="font-size: 33px;">BLACKSTONE MOTORS LIMITED</h1>
                <h2 style="font-size: 28px;">Investment Performnace Report</h2>
                <h2 style="font-size: 24px;">Investor <span style="font-weight: normal;">Neil Partridge</span></h2>
                <h2 style="font-size: 20px;">Period of this report: <span style="font-weight: normal;">from 14 Feb 2025 to 12 Dec 2026</span></h2>
            </div>
        </div>
    </div>


    {{-- <!-- Page 2 -->
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
                    <td style="text-align: right; padding-right:30px;">3</td>
                </tr>
                <tr style="background-color: #fff0f0; font-weight: bold; height: 30px;">
                    <td>SEMI-ANNUAL INVESTMENT PERFORMANCE TABLE (NP)</td>
                    <td style="text-align: right; padding-right:30px;">4</td>
                </tr>
                <tr style="background-color: #fff0f0; font-weight: bold; height: 30px;">
                    <td>RELATIVE PERFORMANCE CONTEXT</td>
                    <td style="text-align: right; padding-right:30px;">4</td>
                </tr>
                <tr style="background-color: #fff0f0; font-weight: bold; height: 30px;">
                    <td>APPENDIX A LIST OF VEHICLES SOLD - VEHICLE TRANSACTIONS - (FROM 14 Feb 2024 TO 12 Dec 2025)</td>
                    <td style="text-align: right; padding-right:30px;">5</td>
                </tr>
                <tr style="background-color: #fff0f0; font-weight: bold; height: 30px;">
                    <td>APPENDIX B LIST OF VEHICLES 'IN STOCK' AS OF 12th DECEMBER 2025</td>
                    <td style="text-align: right; padding-right:30px;">6</td>
                </tr>
                <tr style="background-color: #fff0f0; font-weight: bold; height: 30px;">
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

        <div class="report-block">
            <h2>BLACKSTONE MOTORS LIMITED</h2>
            <h3>Investment Performance Report</h3>
            <h4>Investor: <span>Neil Partridge</span></h4>
            <h4>Period of this report:
                <span>from 14 Feb 2024 to 12 Dec 2025</span>
            </h4>
        </div>

        <h2 style="background-color: lightgray; text-align: center; font-size: 14px;">EXECUTIVE SUMMARY - INVESTMENT SNAPSHOT</h2>

        
        <div style="margin-top: 20px;">
            <table style="width: 100%; table-layout: fixed; border-collapse: collapse;">
                <tr>
                    <td style="width: 55%; vertical-align: top; padding-right: 10px;">
                        <div style="text-align: center;">
                            <img src="data:image/png;base64,{{ base64_encode(file_get_contents($chart1)) }}"
                                style="width: 100%; max-width: 600px;" alt="Portfolio Performance">
                        </div>
                    </td>
                    <td style="width: 22%; vertical-align: top; text-align: center; padding: 0 5px;">
                        <h4 style="margin: 0 0 10px 0; font-size: 12px;">Total Investment vs Profit</h4>
                        <img src="data:image/png;base64,{{ base64_encode(file_get_contents($chart2)) }}"
                            style="width: 100%;" alt="Investment vs Profit">
                    </td>
                    <td style="width: 23%; vertical-align: top; text-align: center; padding-left: 5px;">
                        <h4 style="margin: 0 0 10px 0; font-size: 12px;">Liquidity Snapshot</h4>
                        <img src="data:image/png;base64,{{ base64_encode(file_get_contents($chart3)) }}"
                            style="width: 100%;" alt="Liquidity Snapshot">
                    </td>
                </tr>
            </table>
        </div>


    </div>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    {{-- 4th Page --}}
    <!-- HEADER -->
<table class="top-bar">
    <tr>
        <td align="left"><strong>BLACKSTONE MOTORS LIMITED</strong></td>
        <td align="center"><strong>INVESTOR'S REPORT</strong></td>
        <td align="right"><strong>DEC25</strong></td>
    </tr>
</table>

<!-- TITLE -->
<div class="title">BLACKSTONE MOTORS LIMITED</div>
<div class="subtitle">Investment Performance Report</div>

<div class="info">
    <strong>Investor:</strong> Neil Partridge<br>
    <strong>Period of this report:</strong> from 14 Feb 2024 to 12 Dec 2025
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
    * Incase no reinvestment of the profit then cumulative ROI would be <strong>15.59%</strong> (£111,642 / £715,897).
</div>

<div class="paragraph">
    The table above summarises semi-annual performance: Returns were positive in every reporting period. Performance moderated during weaker market conditions in H1-FY25. Margin recovery and capital redeployment drove improved returns in H2-FY25. Partial H1-FY26 performance remains positive despite shorter duration. This pattern reflects a defensive return profile, where performance slows during adverse market conditions.
</div>

<!-- RELATIVE PERFORMANCE -->
<div class="relative-title">RELATIVE PERFORMANCE CONTEXT</div>

<table class="chart-section">
    <tr>
        <td class="chart-left">
            <!-- Chart image placeholder -->
            {{-- <img src="{{ public_path('charts/cagr_chart.png') }}" width="100%"> --}}
        </td>
        <td class="chart-right">
            The achieved <strong>8.11%</strong> annualised return (same period) compares favourably with UK savings and money-market instruments, UK government bonds (gilts) and net yields from residential buy-to-let property. Crucially, these returns were achieved through tangible assets, rather than exposure to public market volatility.
        </td>
    </tr>
</table>

<div class="source">
    Source:<br>
    https://ycharts.com/indices/%5ESPXTR?utm<br>
    https://www.ig.com/ae/trading-strategies/what-are-the-average-returns-of-the-ftse-100--200529<br>
    https://www.lbram.org.uk/prices-and-data/precious-metal-prices/<br>
    https://www.bankofengland.co.uk/boeapps/database/fromshowcolumns.asp?Travel=NIsXTxDsUx&FromSeries=1&ToSeries=50&DA=RNG&FD=1&FM=Mar&FY=2024&TD=16&TM=Dec&TY=2025&CSV=TT&ht
</div>
</body>

</html>