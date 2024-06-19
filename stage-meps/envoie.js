function toggleLoading() {
    const button = document.getElementById('loadingButton');
    const loaderExists = button.querySelector('.loader');
    
    if (loaderExists) {
        loaderExists.remove(); // Arrêter le chargement
    } else {
        const loader = document.createElement('div');
        loader.className = 'loader';
        loader.style.visibility = 'visible';
        button.appendChild(loader);
    }
}
