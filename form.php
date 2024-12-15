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

        label {
            display: block;
            font-weight: bold;
            margin: 10px 0 5px;
            text-align: left;
            color: #daa520; /* Dark gold color */
        }

        input[type="text"], textarea {
            width: calc(100% - 10px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        textarea {
            height: 100px;
            resize: none;
        }

        fieldset {
            border: 1px solid #daa520;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 15px;
            text-align: left;
        }

        legend {
            color: #daa520;
            font-weight: bold;
        }

        button {
            background-color: #ffd700;
            color: #013220;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #e6c200;
        }

        .logo {
            width: 80px;
            margin: 0 auto 20px;
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
        <form method="post" action="send.php">
            <label for="number">Recipient Number</label>
            <input type="text" name="number" id="number" placeholder="Enter phone number" />

            <label for="message">Message</label>
            <textarea name="message" id="message" placeholder="Enter your message"></textarea>

            <button type="submit">Send Message</button>
        </form>
    </div>

    <footer>UNIVERSIDAD DE MANILA CLINIC - <script>document.write(new Date().toLocaleDateString());</script></footer>

</body>
</html>