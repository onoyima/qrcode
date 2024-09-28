<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Generator Logo</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.logo-container {
    display: flex;
    align-items: center;
    background-color: #fff;
    border-radius: 50px;
    padding: 15px 30px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
}

.qr-icon {
    display: grid;
    grid-template-columns: repeat(2, 30px);
    grid-gap: 5px;
    margin-right: 15px;
}

.square, .small-square {
    width: 30px;
    height: 30px;
    background-color: #0055A4;
    border-radius: 5px;
}

.small-square {
    width: 15px;
    height: 15px;
    background-color: #007BFF;
}

.logo-text {
    font-size: 24px;
    font-weight: bold;
    color: #0055A4;
}

    </style>
</head>
<body>
    <div class="logo-container">
        <div class="qr-icon">
            <div class="square"></div>
            <div class="small-square"></div>
            <div class="small-square"></div>
            <div class="square"></div>
        </div>
        <div class="logo-text">QRGen</div>
    </div>
</body>
</html> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Generator Logo</title>
    <link rel="stylesheet" href="styles.css">

    <style>
        body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f8f9fa;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.logo-container {
    display: flex;
    align-items: center;
    background-color: #ffffff;
    padding: 15px 25px;
    border-radius: 10px;
    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
}

.qr-icon {
    position: relative;
    width: 60px;
    height: 60px;
    margin-right: 20px;
}

.qr-square {
    width: 20px;
    height: 20px;
    background-color: #007BFF;
    position: absolute;
}

.top-left {
    top: 0;
    left: 0;
}

.top-right {
    top: 0;
    right: 0;
}

.bottom-left {
    bottom: 0;
    left: 0;
}

.bottom-right {
    bottom: 0;
    right: 0;
}

.qr-dot {
    width: 10px;
    height: 10px;
    background-color: #007BFF;
    border-radius: 50%;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.logo-text {
    font-size: 28px;
    font-weight: 600;
    color: #007BFF;
}

    </style>
</head>
<body>
    <div class="logo-container">
        <div class="qr-icon">
            <div class="qr-square top-left"></div>
            <div class="qr-square top-right"></div>
            <div class="qr-square bottom-left"></div>
            <div class="qr-square bottom-right"></div>
            <div class="qr-dot"></div>
        </div>
        <div class="logo-text">QR-Generator</div>
    </div>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Generator Logo Export</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .logo-container {
            display: flex;
            align-items: center;
            background-color: #fff;
            padding: 20px 30px;
            border-radius: 12px;
            box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .icon-container {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 80px;
            height: 80px;
            border: 3px solid #28a745;
            border-radius: 50%;
            margin-right: 20px;
            position: relative;
        }

        .icon-container::before {
            content: "";
            width: 20px;
            height: 20px;
            background-color: #28a745;
            position: absolute;
            top: 10px;
            left: 10px;
        }

        .icon-container::after {
            content: "";
            width: 20px;
            height: 20px;
            background-color: #28a745;
            position: absolute;
            bottom: 10px;
            right: 10px;
        }

        .icon-dot {
            width: 10px;
            height: 10px;
            background-color: #28a745;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .logo-text {
            font-size: 30px;
            font-weight: bold;
            color: #28a745;
        }

        .export-button {
            padding: 10px 20px;
            background-color: #28a745;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .export-button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div id="logo-area" class="logo-container">
        <div class="icon-container">
            <div class="icon-dot"></div>
        </div>
        <div class="logo-text">QRGen</div>
    </div>
    <button class="export-button" onclick="exportLogo()">Export Logo as PNG</button>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script>
        function exportLogo() {
            const logoElement = document.getElementById('logo-area');
            
            html2canvas(logoElement, { scale: 2 }).then(canvas => {
                const link = document.createElement('a');
                link.href = canvas.toDataURL('image/png');
                link.download = 'qrgen_logo.png';
                link.click();
            });
        }
    </script>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Generator Logo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .logo-container {
            display: flex;
            align-items: center;
            background-color: #fff;
            padding: 20px 30px;
            border-radius: 12px;
            box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            position: relative;
        }

        .qr-icon {
            position: relative;
            width: 100px;
            height: 100px;
            margin-right: 20px;
            border: 2px solid #007BFF;
            border-radius: 10px;
            overflow: hidden;
        }

        .qr-square {
            width: 30px;
            height: 30px;
            background-color: #007BFF;
            position: absolute;
        }

        .top-left {
            top: 0;
            left: 0;
        }

        .top-right {
            top: 0;
            right: 0;
        }

        .bottom-left {
            bottom: 0;
            left: 0;
        }

        .bottom-right {
            bottom: 0;
            right: 0;
        }

        .qr-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 18px;
            font-weight: bold;
            color: #fff;
            background-color: #007BFF;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .logo-text {
            font-size: 28px;
            font-weight: 600;
            color: #007BFF;
        }

        .export-button {
            padding: 10px 20px;
            background-color: #007BFF;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .export-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div id="logo-area" class="logo-container">
        <div class="qr-icon">
            <div class="qr-square top-left"></div>
            <div class="qr-square top-right"></div>
            <div class="qr-square bottom-left"></div>
            <div class="qr-square bottom-right"></div>
            <div class="qr-text">QR</div> <!-- Centered text inside the QR icon -->
        </div>
        <div class="logo-text">QR-Generator</div>
    </div>
    <button class="export-button" onclick="exportLogo()">Export Logo as PNG</button>

    <!-- Include html2canvas library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script>
        function exportLogo() {
            const logoElement = document.getElementById('logo-area');
            
            // Use html2canvas to take a screenshot of the logo
            html2canvas(logoElement, { scale: 2 }).then(canvas => {
                // Convert the canvas to a PNG image
                const link = document.createElement('a');
                link.href = canvas.toDataURL('image/png');
                link.download = 'qrgen_logo.png';
                link.click();
            });
        }
    </script>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Generator Logo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .logo-container {
            display: flex;
            align-items: center;
            padding: 20px 30px;
            border-radius: 12px;
            margin-bottom: 20px;
            position: relative;
            /* Remove background color and shadow for transparency */
            background-color: transparent;
            box-shadow: none;
        }

        .qr-icon {
            position: relative;
            width: 100px;
            height: 100px;
            margin-right: 20px;
            border: 2px solid #007BFF;
            border-radius: 10px;
            overflow: hidden;
            /* Remove background color for transparency */
            background-color: transparent;
        }

        .qr-square {
            width: 30px;
            height: 30px;
            background-color: #007BFF; /* QR square color */
            position: absolute;
        }

        .top-left {
            top: 0;
            left: 0;
        }

        .top-right {
            top: 0;
            right: 0;
        }

        .bottom-left {
            bottom: 0;
            left: 0;
        }

        .bottom-right {
            bottom: 0;
            right: 0;
        }

        .qr-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 18px;
            font-weight: bold;
            color: #007BFF; /* Text color */
            background-color: transparent; /* Transparent background */
            padding: 5px 10px;
            border-radius: 5px;
        }

        .logo-text {
            font-size: 28px;
            font-weight: 600;
            color: #007BFF; /* Text color */
        }

        .export-button {
            padding: 10px 20px;
            background-color: #007BFF;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .export-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div id="logo-area" class="logo-container">
        <div class="qr-icon">
            <div class="qr-square top-left"></div>
            <div class="qr-square top-right"></div>
            <div class="qr-square bottom-left"></div>
            <div class="qr-square bottom-right"></div>
            <div class="qr-text">QR</div> <!-- Centered text inside the QR icon -->
        </div>
        <div class="logo-text">QR-Generator</div>
    </div>
    <button class="export-button" onclick="exportLogo()">Export Logo as PNG</button>

    <!-- Include html2canvas library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script>
        function exportLogo() {
            const logoElement = document.getElementById('logo-area');
            
            // Use html2canvas to take a screenshot of the logo
            html2canvas(logoElement, { scale: 2, backgroundColor: null }).then(canvas => {
                // Convert the canvas to a PNG image
                const link = document.createElement('a');
                link.href = canvas.toDataURL('image/png');
                link.download = 'qrgen_logo.png';
                link.click();
            });
        }
    </script>
</body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Logo</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
    background-color: #f4f4f4;
}

.logo-container {
    position: relative;
}

.logo {
    position: relative;
    width: 150px;
    height: 150px;
    background-color: transparent;
    display: flex;
    align-items: center;
    justify-content: center;
}

.circle {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    background: linear-gradient(135deg, #4CAF50, #2196F3);
    position: absolute;
}

.tech-t {
    font-size: 80px;
    font-weight: bold;
    color: white;
    position: relative;
    z-index: 2;
}

.circuit {
    position: absolute;
    top: 30%;
    left: 30%;
    width: 40px;
    height: 40px;
}

.line {
    background-color: white;
    border-radius: 5px;
}

.line1 {
    width: 5px;
    height: 30px;
    position: absolute;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
}

.line2 {
    width: 30px;
    height: 5px;
    position: absolute;
    top: 50%;
    left: 0;
}

.line3 {
    width: 5px;
    height: 30px;
    position: absolute;
    top: 50%;
    right: 0;
}

#downloadBtn {
    margin-top: 20px;
    padding: 10px 20px;
    background-color: #2196F3;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

    </style>
</head>
<body>
    <div class="logo-container" id="logoContainer">
        <div class="logo">
            <div class="circle"></div>
            <div class="tech-t">T</div>
            <div class="circuit">
                <div class="line line1"></div>
                <div class="line line2"></div>
                <div class="line line3"></div>
            </div>
        </div>
    </div>
    <button id="downloadBtn">Download Logo as PNG</button>

    <script src="script.js"></script>
</body>
</html>
