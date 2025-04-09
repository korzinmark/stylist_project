//Hamburger
const hamburger = document.querySelector('.hamburger'),
      menu = document.querySelector('.menu'),
      close = document.querySelector('.menu__close'),
      link = document.querySelector('.menu-item');
      
hamburger.addEventListener('click', () => {
    menu.classList.add('active');
});

close.addEventListener('click', () => {
    menu.classList.remove('active');
});

link.addEventListener('click', () => {
    menu.classList.remove('active');
});

//Slider

const slider = tns({
	container: '.carousel__inner',
	items: 1,
	slideBy: 'page',
	autoplay: false,
	controls: false
});

document.querySelector('.prev').addEventListener('click', function () {
	slider.goTo('prev');
});

document.querySelector('.next').addEventListener('click', function () {
	slider.goTo('next');
});

//Modal windows closing function

$('.modal__close').on('click', function() {
    $('.overlay').fadeOut('slow');
});

//Form sending

$("form").submit(function(e) {
    return e.preventDefault(),
    $.ajax({
        type: "POST",
        url: "wp-content/themes/stylist/assets/mailer/smart.php",
        data: $(this).serialize()
    }).done(function() {
        $(this).find("input").val(""),
        $(".overlay, #thanks").fadeIn("slow"),

        $("form").trigger("reset")
    }),
!1});