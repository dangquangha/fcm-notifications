importScripts('https://www.gstatic.com/firebasejs/8.3.2/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/8.3.2/firebase-messaging.js');

firebase.initializeApp({
    apiKey: "AIzaSyDww8TwkJ_sONRJgz5GLEnvLq35vzWN8pw",
    authDomain: "notifications-test-43f0f.firebaseapp.com",
    projectId: "notifications-test-43f0f",
    storageBucket: "notifications-test-43f0f.appspot.com",
    messagingSenderId: "1048269334430",
    appId: "1:1048269334430:web:00f9ac82c97f21c4bd188f",
    measurementId: "G-SNBR7Y7Y7W"
});

const messaging = firebase.messaging();
messaging.setBackgroundMessageHandler(function (payload) {
    console.log("Message received.", payload);
    const title = "Hello world is awesome";
    const options = {
        body: "Your notificaiton message .",
        icon: "/firebase-logo.png",
    };
    return self.registration.showNotification(
        title,
        options,
    );
});