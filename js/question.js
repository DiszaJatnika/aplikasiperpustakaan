function openFaq(evt, faqName) {
    var i, x, faqlinks;
    x = document.getElementsByClassName("faqs-spec");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    faqlinks = document.getElementsByClassName("faqlink");
    for (i = 0; i < x.length; i++) {
      faqlinks[i].className = faqlinks[i].className.replace(" faqActive", "");
    }
    document.getElementById(faqName).style.display = "block";
    evt.currentTarget.className += " faqActive";
  }