//services section - Modal
const verifyUser = document.querySelectorAll(".verifyUser");
const forgot_passwd = document.querySelectorAll(".forgot_passwd");
const modalCloseBtns = document.querySelectorAll(".modal-close-btn");

var modal = function(modalClick){
    verifyUser[modalClick].classList.add("active");
}


forgot_passwd.forEach((forgot_passwdBtn, i) => {
    forgot_passwdBtn.addEventListener("click", () => {
        modal(i);
    });
});

modalCloseBtns.forEach((modalCloseBtn) => {
    modalCloseBtn.addEventListener("click", () => {
        verifyUser.forEach((modalView) => {
            modalView.classList.remove("active");
        });
    });
});

