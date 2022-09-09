// var video = document.getElementById("myVideo");
// var btn = document.getElementById("myBtn");
// function myFunction() {
//     if (video.paused) {
//         video.play();
//         btn.innerHTML = "Pause";
//     } else {
//         video.pause();
//         btn.innerHTML = "Play";
//     }
// }

// function sendEmail(){
//     Email.send({
//         Host : "smtp.elasticemail.com",
//         Username : "ayman.alshantaf.work@gmail.com",
//         Password : "3D1F0A1AABB6AC5A577BA9C81F78ECCFFFCE",
//         To : '"ayman.alshantaf.work@gmail.com',
//         From : document.getElementById("email").value,
//         Subject : "This is the subject",
//         Body : "And this is the body"
//     }).then(
//         message => alert(message)
//     );
// }

//
// const form = document.querySelector(".contact-form");
// form.addEventListener("submit", e => {
//     e.preventDefault();
//     let name = document.getElementById("name").value;
//     let email = document.getElementById("email").value;
//     alert(name);
//     document.querySelector(".contact-form").reset();
//
//     sendEmail(name, email);
// })
// function sendEmail(name, email){
//     Email.send({
//
//         Host: "smtp.elasticemail.com",
//         Username: "ayman.alshantaf.work@gmail.com",
//         Password: "07215FFBBA4D5FE931A26ABB2371AD363AA7",
//         To: "ayman.alshantaf.work@gmail.com",
//         From: email,
//         Subject: ' Just messaged you from the website form',
//         Body: 'ayman',
//     }).then((success) => {
//
//         alert("message sent successfully. Please check the spam folder in your mail.");
//     }).catch((error) => {
//
//         alert("error sending message");
//     })
// }
