document.getElementById('searchInput').addEventListener('keyup', function() {
    var searchQuery = this.value.toLowerCase();
    var workoutItems = document.querySelectorAll('.workout-list .workout-item');

    workoutItems.forEach(function(item) {
        var itemName = item.querySelector('h2').textContent.toLowerCase();
        if (itemName.includes(searchQuery)) {
            item.style.display = '';
        } else {
            item.style.display = 'none';
        }
    });
});