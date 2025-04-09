<div class="view-inner" id="view-kierowcy">
    <h1>Sekcja kierowcy</h1>
</div>

<input type="number" id="driver-id" placeholder="Enter driver ID">
<button id="load-driver">Load Driver</button>
<pre id="driver-result"></pre>



<script>
document.getElementById("load-driver").addEventListener("click", function () {
    const id = document.getElementById("driver-id").value.trim();

    if (!id) {
        alert("Enter a valid driver ID");
        return;
    }

    const bodyData = new URLSearchParams();
    bodyData.append("submit", "true"); 
    bodyData.append("id", id);

    fetch("includes/get_drivers_endpoint.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: bodyData
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById("driver-result").textContent = data;
    })
    .catch(err => {
        document.getElementById("driver-result").textContent = "Error: " + err;
    });
});
</script>


