<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PurpleTR | Küp Oyunu</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        <?php echo file_get_contents("cubestyles.css"); ?>  
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var cube = document.getElementById("cube");
            var message = document.getElementById("message");
            var pageTitle = document.title;
            var startTime = 0;
            var elapsedTime = 0;

            cube.addEventListener("mouseenter", function() {
                cube.style.animationPlayState = "paused";
            });

            cube.addEventListener("mouseleave", function() {
                cube.style.animationPlayState = "running";
            });

            setInterval(function() {
                if (startTime > 0) {
                    elapsedTime = Math.floor((new Date().getTime() - startTime) / 1000);
                    message.innerHTML = "Küpe " + elapsedTime + " süredir bakıyorsun";
                }
            }, 1000);  

            cube.addEventListener("click", function() {
                var currentTime = new Date().getTime();
                if (startTime === 0) {
                    startTime = currentTime;
                    message.innerHTML = "Küpe " + elapsedTime + " saniyedir bakıyorsun";
                } else {
                    elapsedTime = Math.floor((currentTime - startTime) / 1000);
                    message.innerHTML = "Kaybettin, " + elapsedTime + " saniye dayanabildin";
                    startTime = 0;
                }
            });

            setInterval(function() {
                if (startTime > 0) {
                    document.title = "PurpleTR | Süre: " + elapsedTime + " saniye";
                } else {
                    document.title = "PurpleTR";
                }
            }, 1000);  

        });
    </script>
</head>
<body> 
    <div id="background-blur"></div>
    <div id="cube-container">
        <div id="cube">
            <div class="face front"><div class="text-center" id="message">Küpe bakmaya hazır mısın?</div></div>
            <div class="face back"><div class="text-center" id="message">Küpe bakmaya hazır mısın?</div></div>
            <div class="face left"><div class="text-center" id="message">Küpe bakmaya hazır mısın?</div></div>
            <div class="face right"><div class="text-center" id="message">Küpe bakmaya hazır mısın?</div></div>
            <div class="face top"><div class="text-center" id="message">Küpe bakmaya hazır mısın?</div></div>
            <div class="face bottom"><div class="text-center" id="message">Küpe bakmaya hazır mısın?</div></div>
        </div>
    </div>
     
</body>
</html> 