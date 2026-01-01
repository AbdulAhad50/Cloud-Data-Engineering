<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;

class PdfController extends Controller
{
    public function blackStonePdf()
    {
        // Generate chart images first and convert to base64
        $chartImages = $this->generateChartImages();
        
        // Generate the CAGR chart image
        $cagrChartImage = $this->generateCAGRChart();
        
        // Convert other static images to base64
        $coverBg = $this->imageToBase64('https://images.unsplash.com/photo-1503376780353-7e6692767b70?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');
        $luxuryCar = $this->imageToBase64('https://images.unsplash.com/photo-1555212697-194d92e40b14?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80');
        // $logo = $this->imageToBase64(public_path('logo.jpg')); // Example for local file

        $data = [
            'investorName' => 'Neil Partridge',
            'reportDate' => 'DEC25',
            'periodStart' => '14 Feb 2024',
            'periodEnd' => '12 Dec 2025',
            'closingPortfolioValue' => 825771,
            'cumulativeProfit' => 111642,
            'cumulativeROI' => 13.72,
            'performanceData' => [
                'labels' => ['1/3 FY24', 'H1-FY25', 'H2-FY25', 'H1-FY26 - Partial'],
                'portfolioValues' => [680053, 694101, 814350, 825771],
                'roiValues' => [9.238, 10.41, 12.72, 13.73]
            ],
            'investmentBreakdown' => [
                'gainLoss' => 13.72,
                'netInvestment' => 86.28
            ],
            'liquidityData' => [
                'cashAvailable' => 45146,
                'cashPercentage' => 5,
                'vehiclesStock' => 780625,
                'vehiclesPercentage' => 95
            ],
            'tableData' => [
                'totalValue' => 825771,
                'totalCapitalInvested' => 715897,
                'totalWithdrawals' => -1768,
                'netInvestment' => 714129,
                'totalGainLoss' => 111642,
                'cumulativeROI' => 13.72,
                'annualizedReturn' => 8.14,
                'avgProfitPerVehicle' => 4465.68,
                'vehiclesSold' => 25,
                'vehiclesInStock' => 9,
                'vehiclesStockCost' => 780625,
                'cashAvailable' => 45146
            ],
            'chartImages' => $chartImages,
            'coverBg' => $coverBg,
            'luxuryCar' => $luxuryCar,
            // NEW: CAGR chart data and image
            'cagrChartImage' => $cagrChartImage,
            'cagrComparisonText' => 'The achieved <strong>8.11%</strong> annualised return (same period) compares favourably with UK savings and money-market instruments, UK government bonds (gilts) and net yields from residential buy-to-let property. Crucially, these returns were achieved through tangible assets, rather than exposure to public market volatility.',
            'cagrData' => [
                'blackstoneMotors' => 8.11, // Annualized return from tableData
                'ftse100' => 5.8, // Example value - you can adjust these
                'gilts' => 4.2, // Example value
                'savings' => 2.1, // Example value
                'buyToLet' => 3.5 // Example value
            ]
        ];

        $pdf = Pdf::loadView('pdf.black-stone-pdf', $data)
            ->setPaper('letter', 'landscape')
            ->setOptions([
                'isHtml5ParserEnabled' => true,
                'isRemoteEnabled' => true,
                'defaultFont' => 'Arial',
                'isPhpEnabled' => true
            ]);
        
        return $pdf->stream('Blackstone-Motors-Investment-Report.pdf');
    }
    
    private function imageToBase64($path) {
        // 1x1 Transparent PNG as fallback
        $fallback = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg==';
        
        try {
            if (empty($path)) return $fallback;

            $type = '';
            $data = '';

            if (filter_var($path, FILTER_VALIDATE_URL)) {
                // Strip query parameters for extension detection
                $pathWithoutQuery = strtok($path, '?');
                $type = strtolower(pathinfo($pathWithoutQuery, PATHINFO_EXTENSION));
                
                // Fetch content
                $data = @file_get_contents($path); // suppress warnings
            } else {
                if (file_exists($path)) {
                    $type = strtolower(pathinfo($path, PATHINFO_EXTENSION));
                    $data = @file_get_contents($path);
                }
            }

            if ($data === false || empty($data)) {
                return $fallback;
            }

            // Normalize type
            if (!$type || !in_array($type, ['jpg', 'jpeg', 'png', 'gif', 'svg'])) {
                $type = 'png';
            }
            if ($type === 'svg') $type = 'svg+xml';

            return 'data:image/' . $type . ';base64,' . base64_encode($data);

        } catch (\Exception $e) {
            return $fallback;
        }
    }

    private function generateChartImages()
    {
        $chartImages = [];
    

// Chart 1: Performance Line Chart
$chart1Config = [
    'type' => 'line',
    'data' => [
        'labels' => ['1/3 FY24', 'H1-FY25', 'H2-FY25', 'H1-FY26 - Partial'],
        'datasets' => [
            [
                'label' => 'Portfolio Value',
                'data' => [680053, 694101, 814350, 825771],
                'borderColor' => '#000000',
                'backgroundColor' => 'rgba(0, 0, 0, 0.1)',
                'fill' => true,
                'tension' => 0.1
            ],
            [
                'label' => 'ROI (%)',
                'data' => [9.238, 10.41, 12.72, 13.73],
                'borderColor' => '#666666',
                'backgroundColor' => 'rgba(102, 102, 102, 0.1)',
                'fill' => false,
                'tension' => 0.1,
                'borderDash' => [5, 5]
            ]
        ]
    ],
    'options' => [
        'responsive' => false,
        'maintainAspectRatio' => false,
        'width' => 700,
        'height' => 180,
        'plugins' => [
            'legend' => [
                'position' => 'top',
                'labels' => [
                    'color' => '#FFFFFF', // White text for legend
                    'font' => ['size' => 10]
                ]
            ]
        ],
        'scales' => [
            'x' => [
                'ticks' => [
                    'color' => '#FFFFFF', // White text for x-axis
                    'font' => ['size' => 9]
                ],
                'grid' => [
                    'color' => 'rgba(255, 255, 255, 0.1)' // Light grid lines
                ]
            ],
            'y' => [
                'beginAtZero' => false,
                'position' => 'left',
                'ticks' => [
                    'color' => '#FFFFFF', // White text for y-axis
                    'callback' => 'function(value) {
                        if (value >= 1000000) return "£" + (value/1000000).toFixed(1) + "M";
                        if (value >= 1000) return "£" + (value/1000).toFixed(0) + "k";
                        return "£" + value;
                    }'
                ],
                'grid' => [
                    'color' => 'rgba(255, 255, 255, 0.1)' // Light grid lines
                ]
            ],
            'y1' => [
                'position' => 'right',
                'beginAtZero' => true,
                'max' => 16,
                'ticks' => [
                    'color' => '#FFFFFF', // White text for secondary y-axis
                    'callback'=> 'function(value) { return value + "%"; }'
                ],
                'grid' => [
                    'drawOnChartArea' => false
                ]
            ]
        ]
    ]
];

// Chart 2: Investment Pie Chart
$chart2Config = [
    'type' => 'doughnut',
    'data' => [
        'labels' => ['Total Gain/Loss', 'Net Investment'],
        'datasets' => [[
            'data' => [13.72, 86.28],
            'backgroundColor' => ['red', 'black'],
            'borderWidth' => 1
        ]]
    ],
    'options' => [
        'responsive' => false,
        'maintainAspectRatio' => false,
        'width' => 200,
        'height' => 200,
        'cutout' => '60%',
        'plugins' => [
            'legend' => [
                'position' => 'bottom',
                'labels' => [
                    'color' => '#FFFFFF', // White text for legend
                    'font' => ['size' => 9]
                ]
            ],
            'datalabels' => [
                'color' => '#FFFFFF', // White text for data labels
                'font' => ['size' => 10, 'weight' => 'bold'],
                'formatter' => 'function(value, context) {
                    return value.toFixed(1) + "%";
                }'
            ]
        ]
    ]
];

// Chart 3: Liquidity Pie Chart
$chart3Config = [
    'type' => 'pie',
    'data' => [
        'labels' => ['Cash Available', 'Vehicles Stock at Cost'],
        'datasets' => [[
            'data' => [5, 95],
            'backgroundColor' => ['red', 'black'],
            'borderWidth' => 1
        ]]
    ],
    'options' => [
        'responsive' => false,
        'maintainAspectRatio' => false,
        'width' => 200,
        'height' => 200,
        'plugins' => [
            'legend' => [
                'display' => false
            ],
            'datalabels' => [
                'color' => '#FFFFFF', // White text for data labels
                'font' => ['size' => 10, 'weight' => 'bold'],
                'formatter' => 'function(value, context) {
                    return value.toFixed(1) + "%";
                }'
            ]
        ]
    ]
];
        
        // Generate image URLs using QuickChart and convert to Base64
        $baseUrl = 'https://quickchart.io/chart?';
        
        $url1 = $baseUrl . 'c=' . urlencode(json_encode($chart1Config)) . '&width=700&height=180';
        $url2 = $baseUrl . 'c=' . urlencode(json_encode($chart2Config)) . '&width=200&height=200';
        $url3 = $baseUrl . 'c=' . urlencode(json_encode($chart3Config)) . '&width=200&height=200';

        $chartImages['performance'] = $this->imageToBase64($url1);
        $chartImages['investment'] = $this->imageToBase64($url2);
        $chartImages['liquidity'] = $this->imageToBase64($url3);
        
        return $chartImages;
    }

    /**
     * Generate the CAGR comparison chart image
     */
    private function generateCAGRChart()
{
    $cagrConfig = [
        'type' => 'bar',
        'data' => [
            'labels' => [
                'Blackstone Motors',
                'FTSE 100',
                'Gilts (UK Govt. bonds)',
                'Savings/ Bank Deposits',
                'Buy to let property'
            ],
            'datasets' => [[
                'label' => 'Annualized Return (%)',
                'data' => [8.11, 5.8, 4.2, 2.1, 3.5],
                'backgroundColor' => [
                    'black',
                    'red',
                    'black',
                    'red',
                    'black'
                ],
                'borderColor' => [
                    'black',
                    'red',
                    'black',
                    'red',
                    'black'
                ],
                'borderWidth' => 1
            ]]
        ],
        'options' => [
            'responsive' => false,
            'maintainAspectRatio' => false,
            'width' => 400,
            'height' => 300,
            'indexAxis' => 'y',
            'plugins' => [
                'title' => [
                    'display' => true,
                    'text'   => 'CAGR Comparison (%)',
                    'font'   => ['size' => 14, 'weight' => 'bold']
                ],
                'legend' => [
                    'display' => false
                ]
            ],
            'scales' => [
                'x' => [
                    'beginAtZero' => true,
                    'ticks' => [
                        'callback' => 'function(value) { return value + "%"; }'
                    ],
                    'title' => [
                        'display' => true,
                        'text' => 'Annualized Return (%)'
                    ]
                ],
                'y' => [
                    'ticks' => [
                        'font' => [
                            'size' => 10
                        ]
                    ]
                ]
            ]
        ]
    ];

    // Alternative: Use QuickChart for bar chart
    $baseUrl = 'https://quickchart.io/chart?';
    $url = $baseUrl . 'c=' . urlencode(json_encode($cagrConfig)) . '&width=400&height=300';
    
    return $this->imageToBase64($url);
}

    private function saveChartImages($chartImages)
    {
        $storagePath = storage_path('app/public/charts/');
        
        if (!file_exists($storagePath)) {
            mkdir($storagePath, 0755, true);
        }
        
        $savedImages = [];
        
        foreach ($chartImages as $key => $url) {
            $imageData = file_get_contents($url);
            $filename = $key . '_' . time() . '.png';
            $filepath = $storagePath . $filename;
            
            file_put_contents($filepath, $imageData);
            $savedImages[$key] = asset('storage/charts/' . $filename);
        }
        
        return $savedImages;
    }
}