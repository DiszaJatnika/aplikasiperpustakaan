var popupViewsWA = document.querySelectorAll('.popup-view-whatsapp');
var popupBtnsWA = document.querySelectorAll('.popup-btn-whatsapp');
var closeBtnsWA = document.querySelectorAll('.close-btn-whatsapp');

//javascript for quick view button
var popupWA = function(popupClick){
    popupViewsWA[popupClick].classList.add('active');
}

popupBtnsWA.forEach((popupBtnWA, i) => {
    popupBtnWA.addEventListener("click", () => {
        popupWA(i);
  });
});

//javascript for close button
closeBtnsWA.forEach((closeBtnWA) => {
    closeBtnWA.addEventListener("click", () => {
    popupViewsWA.forEach((popupViewsWA) => {
      popupViewWA.classList.remove('active');
    });
  });
});