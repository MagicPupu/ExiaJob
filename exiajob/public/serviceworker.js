const staticCacheName = "pwa-v" + new Date().getTime();
const filesToCache = [
    '/',
    '/offline',
    '/css/layout.css',
    '/js/layout.js',
    '/css/home.css',
    '/js/home.js'
    // Ajoutez les chemins d'accès aux autres ressources que vous souhaitez mettre en cache
];

self.addEventListener("install", (event) => {
    event.waitUntil(
        caches.open(staticCacheName).then((cache) => {
            return cache.addAll(filesToCache);
        })
    );
});

self.addEventListener("activate", (event) => {
    event.waitUntil(
        caches.keys().then((cacheNames) => {
            return Promise.all(
                cacheNames
                    .filter((cacheName) => cacheName.startsWith("pwa-"))
                    .filter((cacheName) => cacheName !== staticCacheName)
                    .map((cacheName) => caches.delete(cacheName))
            );
        })
    );
});

self.addEventListener("fetch", (event) => {
    event.respondWith(
        caches.match(event.request).then((response) => {
            return response || fetch(event.request);
        }).catch(() => {
            return caches.match('offline');
        })
    );
});