<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang Di Fakultas Teknik</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <div id="autoScroll">
        <div class="section_1">
            <h1 class="hero-welcome">Selamat Datang Di Fakultas Teknik</h1>
        </div>
        <div class="section_2"></div>
        <div class="section_3"></div>
    </div>
</body>
<script>
function autoScroll() {
      const scrollContainer = document.getElementById('autoScroll');
      // Set the amount of pixels you want to scroll at a time (adjust as needed)
      const scrollAmount = 1;
      const delay = 1000;

      // Check if we have reached the bottom of the scroll container
      if (scrollContainer.scrollTop + scrollContainer.clientHeight >= scrollContainer.scrollHeight) {
        // If we are at the bottom, reset the scrollTop position to 0
        setTimeout(() => {
            scrollContainer.scrollTop = 0;
        }, delay);
      } else {
        // If we are not at the bottom, scroll down
        setTimeout(() => {
            scrollContainer.scrollTop += scrollAmount;
        }, delay);
      }
    }

    // Set the interval to autoScroll every 30 milliseconds (adjust as needed)
    // setInterval(autoScroll, 3);
</script>
</html>