// Ensure the DOM is fully loaded
document.addEventListener('DOMContentLoaded', function () {
    // Example: Add a click event listener to a button
    const myPluginButton = document.querySelector('.my-plugin-button');

    if (myPluginButton) {
        myPluginButton.addEventListener('click', function (e) {
            e.preventDefault(); // Prevent default action (e.g., form submission)
            alert('Button clicked! This is a custom plugin script.');
        });
    }
});
