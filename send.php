<?php

require __DIR__ . "/vendor/autoload.php";

use Infobip\Configuration;
use Infobip\Api\SmsApi;
use Infobip\Model\SmsDestination;
use Infobip\Model\SmsMessage;
use Infobip\Model\SmsTextContent;
use Infobip\Model\SmsRequest;

$number = $_POST["number"] ?? '';
$message = $_POST["message"] ?? '';

// API Credentials
$base_url = "qdem83.api.infobip.com"; // Ensure HTTPS is included
$api_key = "0050ae0112eae1caf9e185b4fe4cbd55-40e8b33f-ad7a-410b-bd2f-74f545ab3aaf";

// Set up Infobip configuration
$configuration = new Configuration(
    host: $base_url,
    apiKey: $api_key
);

$smsApi = new SmsApi(config: $configuration);

?>
<!DOCTYPE html>
<html>
<head>
    <title>UDM Clinic SMS System</title>
    <meta charset="UTF-8" />
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #013220;
            color: #ffd700;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            position: relative;
        }

        .container {
            background-color: #f5f5dc; /* Light beige color */
            border: 2px solid #ffd700;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 90%;
            max-width: 400px;
            text-align: center;
        }

        h1 {
            color: #daa520; /* Dark gold color */
            font-size: 24px;
            margin-bottom: 20px;
        }

        .message {
            color: #013220; /* Match button text color */
            font-size: 20px;
            font-weight: bold;
            padding: 20px;
        }

        .error {
            color: #ff0000; /* Red color for error message */
        }

        .btn {
            margin-top: 20px;
            display: inline-block;
            padding: 10px 20px;
            background-color: #ffd700;
            color: #013220;
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #e6c200;
        }

        footer {
            position: absolute;
            bottom: 10px;
            width: 100%;
            text-align: center;
            color: #daa520;
            font-weight: bold;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="image.png" alt="Universidad de Manila Logo" class="logo" />
        <h1>UDM Clinic SMS System</h1>
        <div class="message">
            <?php
            if (empty($number) || empty($message)) {
                // Error if fields are empty
                echo "<span class='error'>Failed to send message, please fill the form correctly.</span>";
            } else {
                try {
                    // Prepare SMS message
                    $smsMessage = new SmsMessage(
                        destinations: [new SmsDestination(to: $number)],
                        content: new SmsTextContent(text: $message),
                        sender: 'UDM CLINIC' // Replace with your sender name or phone number
                    );

                    $smsRequest = new SmsRequest(messages: [$smsMessage]);

                    // Send SMS
                    $response = $smsApi->sendSmsMessages($smsRequest);
                    echo "Message Sent Successfully";
                } catch (Exception $e) {
                    echo "<span class='error'>Failed to send message: " . htmlspecialchars($e->getMessage()) . "</span>";
                }
            }
            ?>
        </div>
        <!-- Button to redirect back to the previous page -->
        <a href="form.php" class="btn">Send Another Message</a>
    </div>

    <footer>UNIVERSIDAD DE MANILA CLINIC - <script>document.write(new Date().toLocaleDateString());</script></footer>
</body>
</html>
