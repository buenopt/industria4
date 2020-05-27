function registerServiceWorker() {
    // registrando o service worker para navegadores com suporte
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('sw.js', {scope: '/_pages'}).then(() => {
            console.log('Service Worker registrado com sucesso.');
        }).catch(error => {
            console.log('Service Worker falhou:', error);
        });
    }
}