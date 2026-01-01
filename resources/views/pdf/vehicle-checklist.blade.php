<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?
    family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900
    &family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900
    &display=swap" rel="stylesheet">
    <title>Title </title>


    <!-- red  ##FF0000 -->
    <!-- gray #9CA3AF -->
    <!-- white #FFFFFF -->
    <style>
        @page {
            margin: 40px 20px 20px;
        }

        body {
            font-family: 'Inter', 'Roboto', sans-serif;
            margin: 0;
            box-sizing: border-box;
            font-size: 14px;
        }

        .header {
            width: 100%;
        }

        .title {
            display: inline-block;
            vertical-align: middle;
            font-size: 28px;
            font-weight: normal;
        }

        .logo-img {
            display: inline-block;
            vertical-align: middle;
            float: right;
            margin-right: 35px;
        }



        table {
            width: 80%;
            border-collapse: collapse;
        }

        th,
        td {
            border: .5px solid gray;
            vertical-align: top;
        }

        .no-border td {
            border: none;
            padding: 3px 5px;

            font-size: 18px;
        }

        .legend-item {
            display: inline-block;
            vertical-align: middle;
            margin-right: 15px;
            font-size: 14px;
            text-align: center;
            line-height: 1.2;
        }

        .legend-item span {
            display: inline-block;
            vertical-align: middle;
        }

        .legend-box {
            display: inline-block;
            font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif;
            width: 16px;
            height: 16px;
            border: 1px solid gray;
            text-align: center;
            vertical-align: middle;
            line-height: 16px;
            padding: 2px;
            margin-left: 12px;

        }
    </style>
</head>

<body>

    <div class="header">
        <div class="title">Appraisal Checklist</div>
        <div class="logo-img">
            <img src="{{ public_path('logo.jpg') }}" width="250">
        </div>
    </div>

    <p style="line-height: 10px; margin-top: 35px;">Name:</p>
    <p style="line-height: 5px;margin-bottom: 15px;">Date:</p>

    <!-- TOP TABLE -->
    <table style="
    width: 92%;
    table-layout: fixed;
    text-align: left;
    font-weight: 400;
    border-collapse: collapse;  
    border: 1px solid gray;
    line-height: 1.2; 
">
        <tr>
            <th style="width: 53%; font-weight:400; text-align: left; padding: 2px 5px;">Model:</th>
            <th style="width: 47%; font-weight:400; text-align: left; padding: 2px 5px;">Year:</th>
        </tr>
        <tr>
            <td style="width: 53%; padding: 2px 5px;">VIN:</td>
            <td style="width: 47%; font-weight:bold; padding: 2px 5px;">Reg:</td>
        </tr>
        <tr>
            <td style="width: 53%; padding: 2px 5px;">Mileage:</td>
            <td style="width: 47%; font-weight:bold; padding: 2px 5px;">MOT expiry:</td>
        </tr>
        <tr>
            <td style="width: 53%; padding: 2px 5px;">Service History:</td>
            <td style="width: 47%; font-weight:bold; padding: 2px 5px;">Engine modification code clear:</td>
        </tr>
    </table>

    <!-- Legend -->
    <div style="margin-top: 10px; padding-left: 5px;">
        <div class="legend-item">
            <span>Legend:</span>
        </div>

        <div class="legend-item">
            <span style="text-decoration: underline;">Checked and OK:</span>
            <span class="legend-box">&#x2714;</span> <!-- check mark -->
        </div>

        <div class="legend-item">
            <span style="text-decoration: underline;">Requires Attention:</span>
            <span class="legend-box">&#10008;</span>
        </div>

        <div class="legend-item">
            <span style="text-decoration: underline;">Not applicable to this vehicle:</span>
            <span class="legend-box" style="padding: 2px 5px;">N/A</span>
        </div>
    </div>

    <!-- List of Table -->
    <table style="width: 100%; border-collapse: collapse; border: none;">
        <tr>
            <!-- Left Column -->
            <td style="width: 50%; vertical-align: top; padding-right: 25px; border: none;">

                <table style="border-collapse: collapse; width: 100%; font-size: 12px;">
                    <tr style="background-color: #999; color: #FF0000; line-height: 1.2;">
                        <th style="width: 7%; border: 1px solid white; padding: 1px 5px; line-height: 1.2;">&nbsp;</th>
                        <th style="width: 78%; border: 1px solid white; padding: 1px 5px; text-align: left; font-weight: normal; line-height: 1.2;">Pre-Work check</th>
                        <th style="width: 15%; border: 1px solid white; padding: 1px 5px; background-color: white; line-height: 1.2;">&nbsp;</th>
                    </tr>

                    <!-- Row 1 -->
                    <tr>
                        <td style="border: 1px solid white; padding: 1px 5px; background-color: #999; color: whitesmoke; line-height: 1.2;">1</td>
                        <td style="border: 1px solid white; padding: 1px 5px; background-color: #f0f0f0; line-height: 1.2;">Check side lights/parking lights</td>
                        <td style="border: 1px solid white; padding: 1px 5px; background-color: #f0f0f0; line-height: 1.2;">&nbsp;</td>
                    </tr>
                    <!-- Row 2 -->
                    <tr>
                        <td style="border: 1px solid white; padding: 1px 5px; background-color: #999; color: whitesmoke; line-height: 1.2;">2</td>
                        <td style="border: 1px solid white; padding: 1px 5px; background-color: #e0e0e0; line-height: 1.2;">Check dipped lights</td>
                        <td style="border: 1px solid white; padding: 1px 5px; background-color: #e0e0e0; line-height: 1.2;">&nbsp;</td>
                    </tr>
                    <!-- Row 3 -->
                    <tr>
                        <td style="border: 1px solid white; padding: 1px 5px; background-color: #999; color: whitesmoke; line-height: 1.2;">3</td>
                        <td style="border: 1px solid white; padding: 1px 5px; background-color: #f0f0f0; line-height: 1.2;">Check daytime/LED running lights</td>
                        <td style="border: 1px solid white; padding: 1px 5px; line-height: 1.2; background-color: #f0f0f0;">&nbsp;</td>
                    </tr>
                    <!-- Row 4 -->
                    <tr>
                        <td style="border: 1px solid white; padding: 1px 5px; background-color: #999; color: whitesmoke; line-height: 1.2;">4</td>
                        <td style="border: 1px solid white; padding: 1px 5px; background-color: #e0e0e0; line-height: 1.2;">Check main beam</td>
                        <td style="border: 1px solid white; padding: 1px 5px; line-height: 1.2; background-color: #e0e0e0;">&nbsp;</td>
                    </tr>
                    <!-- Row 5 -->
                    <tr>
                        <td style="border: 1px solid white; padding: 1px 5px; background-color: #999; color: whitesmoke; line-height: 1.2;">5</td>
                        <td style="border: 1px solid white; padding: 1px 5px; background-color: #f0f0f0; line-height: 1.2;">Check headlight adjuster</td>
                        <td style="border: 1px solid white; padding: 1px 5px; line-height: 1.2; background-color: #f0f0f0;">&nbsp;</td>
                    </tr>
                    <!-- Row 6 -->
                    <tr>
                        <td style="border: 1px solid white; padding: 1px 5px; background-color: #999; color: whitesmoke; line-height: 1.2;">6</td>
                        <td style="border: 1px solid white; padding: 1px 5px; background-color: #e0e0e0; line-height: 1.2;">Check headlight flashers</td>
                        <td style="border: 1px solid white; padding: 1px 5px; line-height: 1.2; background-color: #e0e0e0;">&nbsp;</td>
                    </tr>
                    <!-- Row 7 -->
                    <tr>
                        <td style="border: 1px solid white; padding: 1px 5px; background-color: #999; color: whitesmoke; line-height: 1.2;">7</td>
                        <td style="border: 1px solid white; padding: 1px 5px; background-color: #f0f0f0; line-height: 1.2;">Check fog lights front/rear</td>
                        <td style="border: 1px solid white; padding: 1px 5px; line-height: 1.2; background-color: #f0f0f0;">&nbsp;</td>
                    </tr>
                    <!-- Row 8 -->
                    <tr>
                        <td style="border: 1px solid white; padding: 1px 5px; background-color: #999; color: whitesmoke; line-height: 1.2;">8</td>
                        <td style="border: 1px solid white; padding: 1px 5px; background-color: #e0e0e0; line-height: 1.2;">Check indicators front/rear/side</td>
                        <td style="border: 1px solid white; padding: 1px 5px; line-height: 1.2; background-color: #e0e0e0;">&nbsp;</td>
                    </tr>
                    <!-- Row 9 -->
                    <tr>
                        <td style="border: 1px solid white; padding: 1px 5px; background-color: #999; color: whitesmoke; line-height: 1.2;">9</td>
                        <td style="border: 1px solid white; padding: 1px 5px; background-color: #f0f0f0; line-height: 1.2;">Check hazard warning lights</td>
                        <td style="border: 1px solid white; padding: 1px 5px; line-height: 1.2; background-color: #f0f0f0;">&nbsp;</td>
                    </tr>
                    <!-- Row 10 -->
                    <tr>
                        <td style="border: 1px solid white; padding: 1px 5px; background-color: #999; color: whitesmoke; line-height: 1.2;">10</td>
                        <td style="border: 1px solid white; padding: 1px 5px; background-color: #e0e0e0; line-height: 1.2;">Check headlight alignment</td>
                        <td style="border: 1px solid white; padding: 1px 5px; line-height: 1.2; background-color: #e0e0e0;">&nbsp;</td>
                    </tr>
                    <!-- Row 11 -->
                    <tr>
                        <td style="border: 1px solid white; padding: 1px 5px; background-color: #999; color: whitesmoke; line-height: 1.2;">11</td>
                        <td style="border: 1px solid white; padding: 1px 5px; background-color: #f0f0f0; line-height: 1.2;">Check number plate lights</td>
                        <td style="border: 1px solid white; padding: 1px 5px; line-height: 1.2; background-color: #f0f0f0;">&nbsp;</td>
                    </tr>
                    <!-- Row 12 -->
                    <tr>
                        <td style="border: 1px solid white; padding: 1px 5px; background-color: #999; color: whitesmoke; line-height: 1.2;">12</td>
                        <td style="border: 1px solid white; padding: 1px 5px; background-color: #e0e0e0; line-height: 1.2;">Check brake lights</td>
                        <td style="border: 1px solid white; padding: 1px 5px; line-height: 1.2; background-color: #e0e0e0;">&nbsp;</td>
                    </tr>
                    <!-- Row 13 -->
                    <tr>
                        <td style="border: 1px solid white; padding: 1px 5px; background-color: #999; color: whitesmoke; line-height: 1.2;">13</td>
                        <td style="border: 1px solid white; padding: 1px 5px; background-color: #f0f0f0; line-height: 1.2;">Check reversing lights</td>
                        <td style="border: 1px solid white; padding: 1px 5px; line-height: 1.2; background-color: #f0f0f0;">&nbsp;</td>
                    </tr>
                    <!-- Row 14 -->
                    <tr>
                        <td style="border: 1px solid white; padding: 1px 5px; background-color: #999; color: whitesmoke; line-height: 1.2;">14</td>
                        <td style="border: 1px solid white; padding: 1px 5px; background-color: #e0e0e0; line-height: 1.2;">Check wing mirror reflector</td>
                        <td style="border: 1px solid white; padding: 1px 5px; line-height: 1.2; background-color: #e0e0e0;">&nbsp;</td>
                    </tr>
                </table>

                <table style="border-collapse: collapse; width: 100%; font-size: 12px; margin-top: 10px;">
                    <tr style="background-color: #999; color: #FF0000; line-height: 1.2;">
                        <th style="width: 7%; border: 1px solid white; padding: 1px 5px;">&nbsp;</th>
                        <th style="width: 78%; border: 1px solid white; padding: 1px 5px; text-align: left; font-weight: normal;">Interior</th>
                        <th style="width: 15%; border: 1px solid white; padding: 1px 5px; background-color: white;">&nbsp;</th>
                    </tr>

                    <!-- Rows 15–42 -->
                    <tr>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#999; color:whitesmoke;">15</td>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#f0f0f0;">Check horn operation</td>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#f0f0f0;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#999; color:whitesmoke;">16</td>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#e0e0e0;">Check warning lights</td>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#e0e0e0;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#999; color:whitesmoke;">17</td>
                        <td style="border:1px solid white; padding:1px ; background-color:#f0f0f0;">Check air conditioning operation/AC cold/hot</td>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#f0f0f0;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#999; color:whitesmoke;">18</td>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#e0e0e0;">Check front seat control electric/manual/memory adjustment</td>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#e0e0e0;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#999; color:whitesmoke;">19</td>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#f0f0f0;">Check seat belt operation/height adjustment</td>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#f0f0f0;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#999; color:whitesmoke;">20</td>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#e0e0e0;">Check electric door mirrors</td>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#e0e0e0;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#999; color:whitesmoke;">21</td>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#f0f0f0;">Check operation of all windows/window child lock</td>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#f0f0f0;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#999; color:whitesmoke;">22</td>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#e0e0e0;">Check dash light/dimmer</td>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#e0e0e0;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#999; color:whitesmoke;">23</td>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#f0f0f0;">Check speedometer, odometer, and trip function, BC button</td>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#f0f0f0;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#999; color:whitesmoke;">24</td>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#e0e0e0;">Check multi-function steering wheel</td>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#e0e0e0;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#999; color:whitesmoke;">25</td>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#f0f0f0;">Check park assist operation/camera</td>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#f0f0f0;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#999; color:whitesmoke;">26</td>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#e0e0e0;">Check heads-up display</td>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#e0e0e0;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#999; color:whitesmoke;">27</td>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#f0f0f0;">Check WIFI connectivity/tablet connected</td>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#f0f0f0;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#999; color:whitesmoke;">28</td>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#e0e0e0;">Check boot release</td>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#e0e0e0;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#999; color:whitesmoke;">29</td>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#f0f0f0;">Check fuel flap release</td>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#f0f0f0;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#999; color:whitesmoke;">30</td>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#e0e0e0;">Check handbrake/electronic brake operation</td>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#e0e0e0;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#999; color:whitesmoke;">31</td>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#f0f0f0;">Convertible top operation</td>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#f0f0f0;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#999; color:whitesmoke;">32</td>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#e0e0e0;">Check interior bonnet release mechanism</td>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#e0e0e0;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#999; color:whitesmoke;">33</td>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#f0f0f0;">Check steering wheel tilt/lock/adjustment</td>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#f0f0f0;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#999; color:whitesmoke;">34</td>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#e0e0e0;">Check door lights/reflector</td>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#e0e0e0;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#999; color:whitesmoke;">35</td>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#f0f0f0;">Check windscreen wiper operation</td>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#f0f0f0;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#999; color:whitesmoke;">36</td>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#e0e0e0;">Check and align windscreen washer jets</td>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#e0e0e0;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#999; color:whitesmoke;">37</td>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#f0f0f0;">Check front visor/vanity mirrors and lights</td>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#f0f0f0;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#999; color:whitesmoke;">38</td>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#e0e0e0;">Check front and rear courtesy lights/floor lighting/footwell lighting</td>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#e0e0e0;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#999; color:whitesmoke;">39</td>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#f0f0f0;">Check operation of sunroof</td>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#f0f0f0;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#999; color:whitesmoke;">40</td>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#e0e0e0;">Check rear view mirror</td>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#e0e0e0;">&nbsp;</td>
                    </tr>

                </table>

            </td>

            <!-- Right Column -->
            <td style="width: 50%; vertical-align: top; padding-left: 25px; border: none;">

                <table style="border-collapse: collapse; width: 100%; font-size: 12px;">
                    <tr style="background-color: #999; color: #FF0000; line-height: 1.2;">
                        <th style="width: 7%; border: 1px solid white; padding: 1px 5px; line-height: 1.2;">&nbsp;</th>
                        <th style="width: 78%; border: 1px solid white; padding: 1px 5px; text-align: left; font-weight: normal; line-height: 1.2;"></th>
                        <th style="width: 15%; border: 1px solid white; padding: 1px 5px; background-color: #999; line-height: 1.2;">&nbsp;</th>
                    </tr>
                    <tr>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#999; color:whitesmoke;">41</td>
                        <td style="border:1px solid white; padding:1px;  padding-left:5px; background-color:#f0f0f0;">Check centre armrest adjustment</td>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#f0f0f0;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid white; padding:1px; padding-left:5px; background-color:#999; color:whitesmoke;">42</td>
                        <td style="border:1px solid white; padding:1px; padding-left:5px;  background-color:#e0e0e0;">Check ashtray/power outlet/12v plugs/USB</td>
                        <td style="border:1px solid white; padding:1px; background-color:#e0e0e0;">&nbsp;</td>
                    </tr>

                    <tr>
                        <td style="border:1px solid white; padding:1px 5px; background-color:#999; color:whitesmoke;">43</td>
                        <td style="border:1px solid white; padding:1px 5px; background-color:#f0f0f0;">Check media function/iDrive/MMI and touchpad</td>
                        <td style="border:1px solid white; padding:1px 5px; background-color:#f0f0f0;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid white; padding:1px 5px; background-color:#999; color:whitesmoke;">44</td>
                        <td style="border:1px solid white; padding:1px 5px; background-color:#e0e0e0;">Reset infotainment Nav/Bluetooth/Phone</td>
                        <td style="border:1px solid white; padding:1px 5px; background-color:#e0e0e0;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid white; padding:1px 5px; background-color:#999; color:whitesmoke;">45</td>
                        <td style="border:1px solid white; padding:1px 5px; background-color:#f0f0f0;">Check climate/AC controls</td>
                        <td style="border:1px solid white; padding:1px 5px; background-color:#f0f0f0;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid white; padding:1px 5px; background-color:#999; color:whitesmoke;">46</td>
                        <td style="border:1px solid white; padding:1px 5px; background-color:#e0e0e0;">Check heated/ventilated seats function</td>
                        <td style="border:1px solid white; padding:1px 5px; background-color:#e0e0e0;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid white; padding:1px 5px; background-color:#999; color:whitesmoke;">47</td>
                        <td style="border:1px solid white; padding:1px 5px; background-color:#f0f0f0;">Check heated steering wheel</td>
                        <td style="border:1px solid white; padding:1px 5px; background-color:#f0f0f0;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid white; padding:1px 5px; background-color:#999; color:whitesmoke;">48</td>
                        <td style="border:1px solid white; padding:1px 5px; background-color:#e0e0e0;">Check rear seats operation/adjustment/folding</td>
                        <td style="border:1px solid white; padding:1px 5px; background-color:#e0e0e0;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid white; padding:1px 5px; background-color:#999; color:whitesmoke;">49</td>
                        <td style="border:1px solid white; padding:1px 5px; background-color:#f0f0f0;">Check rear seatbelt operation</td>
                        <td style="border:1px solid white; padding:1px 5px; background-color:#f0f0f0;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid white; padding:1px 5px; background-color:#999; color:whitesmoke;">50</td>
                        <td style="border:1px solid white; padding:1px 5px; background-color:#e0e0e0;">Check rear controls/vents/power socket</td>
                        <td style="border:1px solid white; padding:1px 5px; background-color:#e0e0e0;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid white; padding:1px 5px; background-color:#999; color:whitesmoke;">51</td>
                        <td style="border:1px solid white; padding:1px 5px; background-color:#f0f0f0;">Check rear armrest/ski hatch</td>
                        <td style="border:1px solid white; padding:1px 5px; background-color:#f0f0f0;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid white; padding:1px 5px; background-color:#999; color:whitesmoke;">52</td>
                        <td style="border:1px solid white; padding:1px 5px; background-color:#e0e0e0;">Check tailgate/boot operation</td>
                        <td style="border:1px solid white; padding:1px 5px; background-color:#e0e0e0;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid white; padding:1px 5px; background-color:#999; color:whitesmoke;">53</td>
                        <td style="border:1px solid white; padding:1px 5px; background-color:#f0f0f0;">Check boot compartment lights</td>
                        <td style="border:1px solid white; padding:1px 5px; background-color:#f0f0f0;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid white; padding:1px 5px; background-color:#999; color:whitesmoke;">54</td>
                        <td style="border:1px solid white; padding:1px 5px; background-color:#e0e0e0;">Check side/rear blinds operational</td>
                        <td style="border:1px solid white; padding:1px 5px; background-color:#e0e0e0;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid white; padding:1px 5px; background-color:#999; color:whitesmoke;">55</td>
                        <td style="border:1px solid white; padding:1px 5px; background-color:#f0f0f0;">Check toolkit/emergency tyre kit/foam kit</td>
                        <td style="border:1px solid white; padding:1px 5px; background-color:#f0f0f0;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid white; padding:1px 5px; background-color:#999; color:whitesmoke;">56</td>
                        <td style="border:1px solid white; padding:1px 5px; background-color:#e0e0e0;">Locking wheel nut present?</td>
                        <td style="border:1px solid white; padding:1px 5px; background-color:#e0e0e0;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid white; padding:1px 5px; background-color:#999; color:whitesmoke;">57</td>
                        <td style="border:1px solid white; padding:1px 5px; background-color:#f0f0f0;">Check parcel shelf/removable luggage cover</td>
                        <td style="border:1px solid white; padding:1px 5px; background-color:#f0f0f0;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid white; padding:1px 5px; background-color:#999; color:whitesmoke;">58</td>
                        <td style="border:1px solid white; padding:1px 5px; background-color:#e0e0e0;">Check glovebox lock and light operation</td>
                        <td style="border:1px solid white; padding:1px 5px; background-color:#e0e0e0;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid white; padding:1px 5px; background-color:#999; color:whitesmoke;">59</td>
                        <td style="border:1px solid white; padding:1px 5px; background-color:#f0f0f0;">Check all floor mats are present/not damaged</td>
                        <td style="border:1px solid white; padding:1px 5px; background-color:#f0f0f0;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid white; padding:1px 5px; background-color:#999; color:whitesmoke;">60</td>
                        <td style="border:1px solid white; padding:1px 5px; background-color:#e0e0e0;">Check door hinges (all doors & boot)</td>
                        <td style="border:1px solid white; padding:1px 5px; background-color:#e0e0e0;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid white; padding:1px 5px; background-color:#999; color:whitesmoke;">61</td>
                        <td style="border:1px solid white; padding:1px 5px; background-color:#f0f0f0;">Check rear pop-up spoiler</td>
                        <td style="border:1px solid white; padding:1px 5px; background-color:#f0f0f0;">&nbsp;</td>
                    </tr>
                </table>

                <table style="border-collapse: collapse; width: 100%; font-size: 12px; margin-top: 10px;">
                    <tr style="background-color: #999; color: #FF0000; line-height: 1.2;">
                        <th style="width: 7%; border: 1px solid white; padding: 1px 5px; line-height: 1.2;">&nbsp;</th>
                        <th style="width: 78%; border: 1px solid white; padding: 1px 5px; text-align: left; font-weight: normal; line-height: 1.2;">Exterior</th>
                        <th style="width: 15%; border: 1px solid white; padding: 1px 5px; background-color: white; line-height: 1.2;">&nbsp;</th>
                    </tr>

                    <tr>
                        <td style="border:1px solid white; background:#999; color:#fff;">62</td>
                        <td style="border:1px solid white; background:#f0f0f0;">Check central locking/keyless entry/alarm/close doors</td>
                        <td style="border:1px solid white; background:#f0f0f0;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid white; background:#999; color:#fff;">63</td>
                        <td style="border:1px solid white; background:#e0e0e0;">Check window convenience open/closure operation</td>
                        <td style="border:1px solid white; background:#e0e0e0;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid white; background:#999; color:#fff;">64</td>
                        <td style="border:1px solid white; background:#f0f0f0;">Check bonnet alignment</td>
                        <td style="border:1px solid white; background:#f0f0f0;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid white; background:#999; color:#fff;">65</td>
                        <td style="border:1px solid white; background:#e0e0e0;">Front tow eye cover present?</td>
                        <td style="border:1px solid white; background:#e0e0e0;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid white; background:#999; color:#fff;">66</td>
                        <td style="border:1px solid white; background:#f0f0f0;">Check fuel cap/rubber stops and fuel flap</td>
                        <td style="border:1px solid white; background:#f0f0f0;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid white; background:#999; color:#fff;">67</td>
                        <td style="border:1px solid white; background:#e0e0e0;">Check rear screen glass for cracks and chips</td>
                        <td style="border:1px solid white; background:#e0e0e0;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid white; background:#999; color:#fff;">68</td>
                        <td style="border:1px solid white; background:#f0f0f0;">Check boot/tailgate</td>
                        <td style="border:1px solid white; background:#f0f0f0;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid white; background:#999; color:#fff;">69</td>
                        <td style="border:1px solid white; background:#e0e0e0;">Check security of bumpers/lower skirts</td>
                        <td style="border:1px solid white; background:#e0e0e0;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid white; background:#999; color:#fff;">70</td>
                        <td style="border:1px solid white; background:#f0f0f0;">Check roof/aerial attachment</td>
                        <td style="border:1px solid white; background:#f0f0f0;">&nbsp;</td>
                    </tr>
                </table>

                <table style="border-collapse: collapse; width: 100%; font-size: 12px; margin-top: 10px;">
                    <tr style="background-color: #999; color: #FF0000;">
                        <th style="width: 7%; border: 1px solid white;"></th>
                        <th style="width: 78%; border: 1px solid white; text-align: left;">Under the Bonnet</th>
                        <th style="width: 15%; border: 1px solid white; background-color: white;">&nbsp;</th>
                    </tr>
                    <tr>
                        <td style="border:1px solid white; background:#999; color:#fff;">71</td>
                        <td style="border:1px solid white; background:#f0f0f0;">Check battery condition</td>
                        <td style="border:1px solid white; background:#f0f0f0;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid white; background:#999; color:#fff;">72</td>
                        <td style="border:1px solid white; background:#e0e0e0;">Remove engine cover: visual check for leaks</td>
                        <td style="border:1px solid white; background:#e0e0e0;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid white; background:#999; color:#fff;">73</td>
                        <td style="border:1px solid white; background:#f0f0f0;">Top up AdBlue if less than 1000 miles</td>
                        <td style="border:1px solid white; background:#f0f0f0;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid white; background:#999; color:#fff;">74</td>
                        <td style="border:1px solid white; background:#e0e0e0;">Check screen washer level</td>
                        <td style="border:1px solid white; background:#e0e0e0;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid white; background:#999; color:#fff;">75</td>
                        <td style="border:1px solid white; background:#f0f0f0;">Check engine oil level</td>
                        <td style="border:1px solid white; background:#f0f0f0;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid white; background:#999; color:#fff;">76</td>
                        <td style="border:1px solid white; background:#e0e0e0;">Check brake fluid level and condition</td>
                        <td style="border:1px solid white; background:#e0e0e0;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid white; background:#999; color:#fff;">77</td>
                        <td style="border:1px solid white; background:#f0f0f0;">Check coolant level, strength & condition</td>
                        <td style="border:1px solid white; background:#f0f0f0;">&nbsp;</td>
                    </tr>
                </table>

                <table style="border-collapse: collapse; width: 100%; font-size: 12px; margin-top: 10px;">
                    <tr style="background-color: #999; color: #FF0000;">
                        <th style="width: 7%; border: 1px solid white;"></th>
                        <th style="width: 78%; border: 1px solid white; text-align: left;">For electric/ Hybrid vehicles</th>
                        <th style="width: 15%; border: 1px solid white; background-color: white;">&nbsp;</th>
                    </tr>
                    <tr>
                        <td style="border:1px solid white; background:#999; color:#fff;">78</td>
                        <td style="border:1px solid white; background:#f0f0f0;">Check vehicle charges</td>
                        <td style="border:1px solid white; background:#f0f0f0;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid white; background:#999; color:#fff;">79</td>
                        <td style="border:1px solid white; background:#f0f0f0;">Check charging cable present</td>
                        <td style="border:1px solid white; background:#f0f0f0;">&nbsp;</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <!-- Note -->
    <div style="width: 50%; font-size: 14px;">

        <p style="font-size: 12px;">Note: If tyre is less than 3mm then should be changed. Check for
            any cracks in the tyres, and if any shoulder wear, slits, cuts.</p>

        <table style="width: 100%;">
            <tr>
                <th style="width: 10%;"></th>
                <th style="font-weight: normal; font-size: 12px; width: 40%; text-align: left; padding-left: 10px;">Brand</th>
                <th style="font-weight: normal; font-size: 12px;">Run flat</th>
                <th style="font-weight: normal; font-size: 12px;">Craks</th>
                <th style="font-weight: normal; font-size: 12px;">Shoulder Wear</th>
            </tr>
            <tr>
                <td style="padding: 2px 4px; font-size: 12px;">N/S/F</td>
                <td style="padding: 2px 4px;"></td>
                <td style="padding: 2px 4px;"></td>
                <td style="padding: 2px 4px;"></td>
                <td style="padding: 2px 4px;"></td>
            </tr>
            <tr>

                <td style="padding: 2px 4px; font-size: 12px;">O/S/F</td>
                <td style="padding: 2px 4px;"></td>
                <td style="padding: 2px 4px;"></td>
                <td style="padding: 2px 4px;"></td>
                <td style="padding: 2px 4px;"></td>
            </tr>
            <tr>

                <td style="padding: 2px 4px; font-size: 12px;">N/S/R</td>
                <td style="padding: 2px 4px;"></td>
                <td style="padding: 2px 4px;"></td>
                <td style="padding: 2px 4px;"></td>
                <td style="padding: 2px 4px;"></td>
            </tr>

            <tr>
                <td style="padding: 2px 4px; font-size: 12px;">O/S/R</td>
                <td style="padding: 2px 4px;"></td>
                <td style="padding: 2px 4px;"></td>
                <td style="padding: 2px 4px;"></td>
                <td style="padding: 2px 4px;"></td>
            </tr>
            <tr>
                <td style="padding: 2px 4px; font-size: 12px;">Spare</td>
                <td style="padding: 2px 4px;"></td>
                <td style="padding: 2px 4px;"></td>
                <td style="padding: 2px 4px;"></td>
                <td style="padding: 2px 4px;"></td>
            </tr>
        </table>

        <!-- Miscellaneous -->
        <p style="font-size: 14px; margin-top: 30px;">Miscellaneous notes:</p>

        <hr style="margin: 30px 0 20px; color: #999;">
        <hr style="color: #999;">
        <hr style="margin: 20px 0; color: #999;">
        <hr style="margin-top: 20px; color: #999;">
    </div>

    <!-- Condition -->
    <div style="width: 100%; text-align: center; margin-top:35px">

        <h2 style="font-size: 14px; line-height: 10px;">CONDITION OF VEHICLE</h2>
        <P style="line-height: 5px; font-size: 12px; font-weight: bold;">Indicate any damage to the vehicle in the space provided using your own words or the following legend. <span style="text-decoration: underline;">if None write None</span></P>

    </div>

    <!-- Condition Table -->
    <table style="width: 100%; padding: 0 25px; border-collapse: collapse; font-size: 12px; color: black;">
        <tr>
            <td style="border: none;">Bent - B</td>
            <td style="border: none;">Broken - BR</td>
            <td style="border: none;">Chip - CH</td>
            <td style="border: none;">Cracked - CR</td>
            <td style="border: none;">Dented - D</td>
            <td style="border: none;">Missing - M</td>
            <td style="border: none;"></td>
        </tr>
        <tr>
            <td style="border: none;">Pitted - PT</td>
            <td style="border: none;">Rusty - R</td>
            <td style="border: none;">Rubbed - RU</td>
            <td style="border: none;">Scratch - S</td>
            <td style="border: none;">Heirline Scratch - HS</td>
            <td style="border: none;">Stained - ST</td>
            <td style="border: none;">Torn - T</td>
        </tr>
    </table>

    <!-- Car Table -->
    <table style="width: 100%; border-collapse: collapse; font-size: 12px;  margin-top: 10px;">
        <tr>
            <td style="width: 50%; padding: 0;">
                <table style="width: 100%; border-collapse: collapse; border: none;">
                    <tr>
                        <!-- IMAGE -->
                        <td style="width: 60%; vertical-align: middle; text-align: center; border: none;">
                            <img src="{{ public_path('logo.jpg') }}" width="250">
                        </td>

                        <!-- INNER TABLE -->
                        <td style="width: 40%; vertical-align: top; border: none;">
                            <table style="width: 100%; border-collapse: collapse; border: none;">
                                <tr>
                                    <td style="padding: 0 0 10px 10px; border-top: none; border-right: none;">1.</td>
                                </tr>
                                <tr>
                                    <td style="padding: 0 0 10px 10px;  border-top: none; border-right: none;">2.</td>
                                </tr>
                                <tr>
                                    <td style="padding: 0 0 10px 10px;  border-top: none; border-right: none;">3.</td>
                                </tr>
                                <tr>
                                    <td style="padding: 0 0 10px 10px;  border-top: none; border-right: none;">4.</td>
                                </tr>
                                <tr>
                                    <td style="padding: 0 0 10px 10px;  border-top: none; border-right: none;">5.</td>
                                </tr>
                                <tr>
                                    <td style="padding: 0 0 30px 10px; border: none;"></td>
                                </tr>
                            </table>
                        </td>

                    </tr>
                </table>
            </td>

            <td style="width: 50%; padding: 0;">
                <table style="width: 100%; border-collapse: collapse; border: none;">
                    <tr>
                        <!-- IMAGE -->
                        <td style="width: 60%; vertical-align: middle; text-align: center; border: none;">
                            <img src="{{ public_path('logo.jpg') }}" width="250">
                        </td>

                        <!-- INNER TABLE -->
                        <td style="width: 40%; vertical-align: top; border: none;">
                            <table style="width: 100%; border-collapse: collapse; border: none;">
                                <tr>
                                    <td style="padding: 0 0 10px 10px; border-top: none; border-right: none;">6.</td>
                                </tr>
                                <tr>
                                    <td style="padding: 0 0 10px 10px;  border-top: none; border-right: none;">7.</td>
                                </tr>
                                <tr>
                                    <td style="padding: 0 0 10px 10px;  border-top: none; border-right: none;">8.</td>
                                </tr>
                                <tr>
                                    <td style="padding: 0 0 10px 10px;  border-top: none; border-right: none;">9.</td>
                                </tr>
                                <tr>
                                    <td style="padding: 0 0 10px 10px;  border-top: none; border-right: none;">10.</td>
                                </tr>
                                <tr>
                                    <td style="padding: 0 0 30px 10px; border: none;"></td>
                                </tr>
                            </table>
                        </td>

                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td style="width: 50%; height: 150px;">
                <img src="{{ public_path('logo.jpg') }}" width="370" style="transform: scaleX(-1); display: block; margin-bottom: 10px;">
                <table style="border-collapse: collapse; width: 100%;">
                    <tr>
                        <td style="padding: 0 0 15px 15px; border-left: none;">11.</td>
                        <td style="padding: 0 0 15px 15px; border-left: none;">12.</td>
                        <td style="padding: 0 0 15px 15px; border-left: none; border-right: none;">13.</td>
                    </tr>
                    <tr>
                        <td style="padding: 0 0 15px 15px; border-left: none; border-bottom: none;">14.</td>
                        <td style="padding: 0 0 15px 15px; border-left: none; border-bottom: none;">15.</td>
                        <td style="padding: 0 0 15px 15px; border-bottom: none; border-right: none;">16.</td>
                    </tr>
                </table>
            </td>

            <td style="width: 50%; height: 150px;">
                <img src="{{ public_path('logo.jpg') }}" width="370" style="display: block; margin-bottom: 10px;">
                <table style="border-collapse: collapse; width: 100%;">
                    <tr>
                        <td style="padding: 0 0 15px 15px; border-left: none;">17.</td>
                        <td style="padding: 0 0 15px 15px; border-left: none; border-bottom: none;">18.</td>
                        <td style="padding: 0 0 15px 15px; border-left: none; border-bottom: none; border-right: none;">19.</td>
                    </tr>
                    <tr>
                        <td style="padding: 0 0 15px 15px; border-left: none; border-bottom: none;">20.</td>
                        <td style="padding: 0 0 15px 15px; border-left: none; border-bottom: none;">21.</td>
                        <td style="padding: 0 0 15px 15px; border-left: none; border-bottom: none; border-right: none;">22.</td>
                    </tr>
                </table>
            </td>
        </tr>

    </table>

    <div style="width: 100%; display: table; border-collapse: collapse; border: none; padding: 0 20px; margin-top: 20px;">

        <div style="display: table-cell; width: 40%; padding-right: 10px;">
            <h3 style="font-size: 12px; text-align: center; line-height: 5px;">Interior</h3>

            <p style="text-decoration: underline; font-size: 12px;">Worn - W Born - B Ripped - R Stain - S Cracked - C</p>

            <div style="width: 100%; display: flex; align-items: center;">
                <p style="margin: 0; font-size: 12px;">Front Carpet</p>
                <hr style="flex: 1; margin: 0 0 0 70px; border: 0; border-top: 1px solid black;">
            </div>
            <div style="width: 100%; display: flex; align-items: center;">
                <p style="margin: 0; font-size: 12px;">Rear Carpet</p>
                <hr style="flex: 1; margin: 0 0 0 70px; border: 0; border-top: 1px solid black;">
            </div>
            <div style="width: 100%; display: flex; align-items: center;">
                <p style="margin: 0; font-size: 12px;">Front Seat</p>
                <hr style="flex: 1; margin: 0 0 0 60px; border: 0; border-top: 1px solid black;">
            </div>
            <div style="width: 100%; display: flex; align-items: center;">
                <p style="margin: 0; font-size: 12px;">Rear Seat</p>
                <hr style="flex: 1; margin: 0 0 0 58px; border: 0; border-top: 1px solid black;">
            </div>
            <div style="width: 100%; display: flex; align-items: center;">
                <p style="margin: 0; font-size: 12px;">Headliner</p>
                <hr style="flex: 1; margin: 0 0 0 53px; border: 0; border-top: 1px solid black;">
            </div>
            <div style="width: 100%; display: flex; align-items: center;">
                <p style="margin: 0; font-size: 12px;">Door Panels</p>
                <hr style="flex: 1; margin: 0 0 0 70px; border: 0; border-top: 1px solid black;">
            </div>

        </div>

        <!-- Function & Tires -->
        <div style="display: table-cell; width: 60%; padding-left: 40px;">
            <h3 style="font-size: 12px; text-align: center; line-height: 5px;">Function & Tires</h3>
            <p style="font-size: 12px; width: 100%; color: gray; margin: 0; padding: 0; margin-left: 20px;">
                <span style="display: inline-block; width: 48%;">
                    Operational: <span style="margin-left: 10px;">Yes</span> <span style="margin-left: 10px;">No</span>
                </span>
                <span style="display: inline-block; width: 48%; text-align: end;">
                    Difficulty starting: <span style="margin-left: 10px;">Yes</span> <span style="margin-left: 10px;">No</span>
                </span>
            </p>
            <table style="width: 100%; border-collapse: collapse; margin: 0; padding: 0;">
                <tr>
                    <th style="padding: 0 10px 20px 10px; font-size: 12px; font-weight: normal; background-color: #e0e0e0;">Tires & Rims.</th>
                    <th style="padding: 0 10px 20px 10px; font-size: 12px; font-weight: normal; background-color: #e0e0e0;">Front R</th>
                    <th style="padding: 0 10px 20px 10px; font-size: 12px; font-weight: normal; background-color: #e0e0e0;">Front L</th>
                    <th style="padding: 0 10px 20px 10px; font-size: 12px; font-weight: normal; background-color: #e0e0e0;">Rear R</th>
                    <th style="padding: 0 10px 20px 10px; font-size: 12px; font-weight: normal; background-color: #e0e0e0;">Rear L</th>
                    <th style="padding: 0 10px 20px 10px; font-size: 12px; font-weight: normal; background-color: #e0e0e0;">Spare</th>
                </tr>
                <tr>
                    <td style="font-size: 12px;">
                        S - scratched <br />
                        D - dented <br />
                        W - worn C - cut<br />
                        R - rubbed
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

                </tr>
            </table>

        </div>

    </div>


</body>

</html>