const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#id_password');
 
  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});

const toggleNewPassword = document.querySelector('#toggleNewPassword');
  const passwordNew = document.querySelector('#id_Newpassword');
 
  toggleNewPassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type2 = passwordNew.getAttribute('type') === 'Newpassword' ? 'text' : 'Newpassword';
    passwordNew.setAttribute('type', type2);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});

// $(document).ready(function(){
//     $(".FormPassGroup .eyeImg").click(function(){
//         if($(this).hasClass("show")){
//             $(this).addClass("hide");
//             $(this).removeClass("show");
//             $(this).siblings("#password").attr("type", "text");
//             $(this).siblings("#confirmPass").attr("type", "text");
//         }else{
//             $(this).addClass("show");
//             $(this).removeClass("hide");
//             $(this).siblings("#password").attr("type", "password");
//             $(this).siblings("#confirmPassword").attr("type", "password");
//         }
//     })
// })