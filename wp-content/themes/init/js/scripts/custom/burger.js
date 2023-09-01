const btn = document.querySelector('.init__btn');
let modal = document.querySelector('.modal-menu');

btn.addEventListener('click', () => {
    btn.classList.toggle("change");

    modal.classList.toggle("active");
    if(modal.classList.contains('active')){
        document.body.style.overflow = 'hidden';
    }
    else{
        document.body.style.overflow = 'visible';
    }
   
});

