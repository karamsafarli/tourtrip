/*========= index page ===========*/
var loan_li = document.querySelector("#loan_li");
var loan_drop = document.querySelector("#loan_drop");
if (loan_li) {
    loan_li.addEventListener("click", function () {
        loan_drop.classList.toggle("active");
    });
    document.addEventListener("click", function (event) {
        if (!loan_li.contains(event.target)) {
            loan_drop.classList.remove("active");
        }
    });
    loan_drop.addEventListener("click", function (event) {
        event.stopPropagation();
    });
}

//campaign
// var video_card1 = document.querySelector(".video_card1");
// var video_card2 = document.querySelector(".video_card2");

// if(video_card2)
// {

//     video_card2.addEventListener("mouseover", function()
//     {
//         video_card2.classList.add("active");
//         video_card1.classList.remove("video_border");

//     })

//     video_card2.addEventListener("mouseout", function()
//     {
//         video_card2.classList.remove("active");
//         video_card1.classList.add("video_border");

//     })
// }

var campaign_play = document.querySelectorAll(".campaign_play");
var video_popup = document.querySelector(".video_popup");
var video_popup_in = document.querySelector(".video_popup_in");
var video_iframe = document.querySelector(".video_popup iframe");

// if (campaign_play) {
//     campaign_play.forEach(function (elem) {
//         elem.addEventListener("click", function () {
//             var video_url = elem.getAttribute("data-video");
//             video_popup.style.display = "flex";
//             video_iframe.setAttribute("src", video_url);
//         });
//     });

//     video_popup.addEventListener("click", function (event) {
//         if (!video_popup_in.contains(event.target)) {
//             video_popup.style.display = "none";
//         }
//     });
// }

//app download popup
var app_download = document.querySelector(".app_download");

if (app_download) {
    window.addEventListener("scroll", function () {
        var scrollY = window.scrollY;
        if (scrollY > 800) {
            app_download.style.display = "block";
        } else {
            app_download.style.display = "none";
        }
    });
}

//small screen menu open close
var open_menu_btn = document.querySelector(".open_menu_btn");
var menu_ul_wrapper = document.querySelector(".menu_ul_wrapper");
var close_menu_btn = document.querySelector(".close_menu_btn");
var menu_ul = document.querySelector(".menu_ul");

open_menu_btn.addEventListener("click", function () {
    menu_ul_wrapper.classList.add("active");
});

close_menu_btn.addEventListener("click", function () {
    menu_ul_wrapper.classList.remove("active");
});

menu_ul_wrapper.addEventListener("click", function (event) {
    if (!menu_ul.contains(event.target)) {
        menu_ul_wrapper.classList.remove("active");
    }
});
