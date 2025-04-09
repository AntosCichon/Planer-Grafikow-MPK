<div class="view-inner" id="view-kierowcy">
    <h1>Sekcja kierowcy</h1>
</div>

<button id="load-driver">Load Driver</button>
<pre id="driver-result"></pre>

<script>
document.getElementById("load-driver").addEventListener("click", function () {
    fetch('includes/get_drivers_endpoint.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: 'submit=true'
    })
    .then(response => response.text()) // ⬅️ parse as plain text instead of JSON
    .then(data => {
        document.getElementById("driver-result").textContent = data;
    })
    .catch(err => {
        document.getElementById("driver-result").textContent = 'Error: ' + err;
    });
});
</script>
