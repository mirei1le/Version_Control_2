<script>
document.addEventListener("DOMContentLoaded", function() {
    const dropdown = document.querySelector(".dropbtn");
    const dropdownMenu = document.querySelector(".dropdown-content");

    dropdown.addEventListener("click", function(event) {
        event.preventDefault();
        dropdownMenu.style.display = (dropdownMenu.style.display === "block") ? "none" : "block";
    });

    document.addEventListener("click", function(event) {
        if (!dropdown.contains(event.target)) {
            dropdownMenu.style.display = "none";
        }
    });
});
</script>
