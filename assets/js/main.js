// tabs


$(function() {
    $("ul.tabs__caption").on("click", "li:not(.active)", function() {
        $(this)
            .addClass("active")
            .siblings()
            .removeClass("active")
            .closest("section.catalog__slider")
            .find("div.tabs__content")
            .removeClass("active")
            .eq($(this).index())
            .addClass("active");
    });
});

$(function() {
    $(".new__tabs ul").on("click", "li:not(.active)", function() {
        $(this)
            .addClass("active")
            .siblings()
            .removeClass("active")
            .closest("section.new")
            .find("div.new__tabs-content")
            .removeClass("active")
            .eq($(this).index())
            .addClass("active");
    });
});
