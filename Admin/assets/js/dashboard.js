document.getElementById('toggle').addEventListener('change', function () {
    var textContainer = document.getElementById('status');
    textContainer.textContent = this.checked ? 'Active' : 'Hiatus';
});