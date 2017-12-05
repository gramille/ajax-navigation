$(function () {

    "use strict";

    var app = {

        nav: $("nav ul li a"),
        content: $("section#main")
    };

    app.putContent = function(content) {

        this.content.html(content);
    }

    app.loadPage = function(page) {

        $.ajax({

            url: "display.php",
            type: "get",
            cache: false,
            data: {page: page},
            success: function(data) {

                app.putContent(data);
            },
            error: function () {

                app.putContent("This page has not been found.");
            }
        });
    }

    app.init = function() {

        //app.loadPage("grands-formats");
        app.nav.on("click", function() {

            var page = $(this).data("page");
            app.loadPage(page);
        })
    }();
});
