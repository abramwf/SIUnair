const searchInput = document.querySelector('input[name="search"]');
searchInput.addEventListener('input', function() {
    const searchValue = this.value.trim();
    if (searchValue === '') {
        window.location.search = ''; 
    }
});