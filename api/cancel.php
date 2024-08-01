<script>
   var count = 5; // Number of seconds to wait
   var counter; // Handle for the countdown event.

   function start() {
    counter = setInterval(timer, 1000);
   }

   function timer() {
    // Show the number of remaining seconds on the web page.
    var output = document.getElementById("displaySeconds");
    output.innerHTML = count;

    // Decrease the remaining number of seconds by one.
    count--;

    // Check if the counter has reached zero.
    if (count < 0) { // If the counter has reached zero...
     // Stop the counter.
     clearInterval(counter);

     // Start the download.
     window.location.href = "https://blank.org";
//if you want to open in new window then use window.open(url);
     return;
    }
   }  

   window.addEventListener("load", start, false);
  </script>

  <div>
  Account restored successfully ,No further action is needed <span id="displaySeconds">5</span> seconds.<br />
</div>