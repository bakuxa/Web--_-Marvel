// этот скрипт для того, чтобы менюшки справа и слева не возвращались в самое начало

document.addEventListener("DOMContentLoaded", function () {
    const menu = document.getElementById("menu");

    menu.scrollTop = localStorage.getItem("menuScrollTop") || 0;

    menu.addEventListener("scroll", () => {
        localStorage.setItem("menuScrollTop", menu.scrollTop);
    });
});
