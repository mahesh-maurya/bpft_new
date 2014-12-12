$(document).ready(function () {

    smoothScroll.init();

    $(".openstyleblender").click(function() {
        id=$(this).attr("data-id");
        var totalblenders = $(".blenderitem a");
        for (var i = 0; i < totalblenders.length; i++) {
            var styleid = $(totalblenders).eq(i).children("h5").html();
            console.log(styleid);
            if (styleid == id) {
                console.log($(".blenderitem a h2").eq(i));
                $(".blenderitem a").eq(i).trigger("click");
            }
            
        }
        return false

    });

    $(".closeblender").click(function () {
        $(".blenderoverlay").hide();
        $(".part1").show();
        $(".profile-text.part2").hide();
        return false;
    });

    $(".chooseshow").click(function () {
        if (isloggedin == "") {
            window.location.href = site_url + "/website/login";
        } else {
            $(".part1").hide();
            $(".profile-text.part2").show();

        }
        return false;
    });


    $(".blenderitem a").click(function () {
        $(".blenderoverlay").show();
        var text2 = $(this).children("h3").html();
        var favicons = "";
        switch (text2) {
        case "Designer":
            favicons = "flaticon-mannequin1";
            break;
        case "Musician":
            favicons = "flaticon-musical";
            break;
        case "Speaker":
            favicons = "flaticon-microphone58";
            break;
        case "Designers":
            favicons = "flaticon-mannequin1";
            break;
        case "Musicians":
            favicons = "flaticon-musical";
            break;
        case "Speakers":
            favicons = "flaticon-microphone58";
            break;        
        }
        var text3 = $(this).children("h5").html();
        $(".formidis").val(text3);
        
        
        $(".golden .fa").removeClass("flaticon-mannequin1");
        $(".golden .fa").removeClass("flaticon-musical");
        $(".golden .fa").removeClass("flaticon-microphone58");
        $(".golden .fa").addClass(favicons);


        $(".blenderoverlay .nameblender").html($(this).children("h2").html());
        $(".blenderoverlay .typeblender").html($(this).children("h3").html());
        $(".blenderoverlay .textblender").html($(this).children(".contentblender").html());
        $(".blenderoverlay img.proimage").attr("src", $(this).children("img").attr("src"));
        return false;
    });

    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    var container = document.querySelector('.section.top .container .row');

    $(".posts img").load(function () {
        var msnry = new Masonry(container, {
            // options
            columnWidth: 0,
            itemSelector: '.posts'
        });
    });
    var $container = 0;

    var container2 = document.querySelector('.container555');

    $(".posts img").load(function () {
        var msnry = new Masonry(container2, {
            // options
            columnWidth: 0,
            itemSelector: '.posts'
        });
    });


    $(".section").css("min-height", $(window).height());
    $(window).resize(function () {
        $(".section").css("min-height", $(window).height());
    });

    $(".videoonly").fancybox({
        fitToView: true,
        margin: 0,
        padding: 0,
        width: $(window).width() - 80,
        height: $(window).height(),
    });
    $container = $('.blender-img');
    $(".videoonly").click(function() {
       
    });
    // init
    $container.isotope({
        // options
        itemSelector: '.item',
        layoutMode: 'fitRows'
    });

    $(".filter").click(function () {
        $(".filter").removeClass("active");
        $(this).addClass("active");
        var filtertext = $(this).text();
        console.log(filtertext);
        filtertext = filtertext.slice(0, 3);
        if (filtertext == "all") {
            $container.isotope({
                filter: '*'
            });
        } else {
            $container.isotope({
                filter: '.' + filtertext
            });
        }
        return false;
    });



    function changescrollsize() {
        //$(".st-effect-11.st-menu").css("margin-top",window.scrollY+"px");
        var checkheight = $(".section").height() + 40;
        if (window.scrollY > checkheight) {
            $(".blendertopmenu").addClass("isfixed");
        } else {
            $(".blendertopmenu").removeClass("isfixed");
        }

    }

    $(window).scroll(function () {
        changescrollsize();
    });

    changescrollsize();


    $(".posts .panel .sharee").click(function () {
        console.log(site_url + "/website/facebookshare?url=www.google.com&title=ChintanRocks&img=sudo&des=autodes");
        FB.ui({
            method: 'share',
            href: site_url + "/website/facebookshare?url=www.google.com&title=ChintanRocks&img=sudo&des=autodes",
            // href:"https://developers.facebook.com/docs/",
        }, function (response) {

            // add points ...twitter
            var form_data = {
                points: "2"
            };
            //console.log(form_data);
            $.post(site_url + "/website/facebookpoints", form_data, function (data) {
                console.log(data);
            }, 'json');


        });

        return false;
    });


});


twttr.ready(
    function (twttr) {
        var twitterlength = $(".posts");
        for (var i = 0; i < twitterlength.length; i++) {
            console.log(i);
            if ($(".posts:eq(" + i + ") .panel .testing").length > 0) {
                var sharetext = $(".posts:eq(" + i + ") .panel .testing").text();
            } else {
                var sharetext = $(".posts:eq(" + i + ") .panel a img").attr("src");
            }
            //console.log($(this).parents(".panel"));
            twttr.widgets.createShareButton(
                'https://dev.twitter.com/',
                $(".twitterbutton").get(i), {

                    count: 'none',
                    text: sharetext
                }).then(function (el) {

                console.log("Button created.")
            });
        }

        twttr.events.bind(
            'tweet',
            function (event) {
                console.log("Android works");

                // add points ...twitter
                var form_data = {
                    points: "3"
                };
                //console.log(form_data);
                $.post(site_url + "/website/twittershare", form_data, function (data) {
                    console.log(data);
                }, 'json');

            }
        );
    }
);


var FB = 0;

window.fbAsyncInit = function () {
    FB.init({
        appId: '821682894560811',
        xfbml: true,
        version: 'v2.1'
    });



    $(".facebooklogin").click(function () {
        FB.getLoginStatus(function (response) {
            if (response.status === 'connected') {
                FB.api('/me', function (response) {
                    console.log('Good to see you, ' + response.name + '.');
                    console.log("already loged in");
                    console.log(response);

                    var fid = {
                        id: response.id,
                        email: response.email,
                        firstname: response.first_name,
                        lastname: response.last_name
                    };

                    // #########################################save facebook login#################################################
                    $.post(site_url + '/website/facebooklogin', fid, function (data) {
                        console.log("after success");
                        console.log(data);
                        window.location.href = site_url + "/website/blenderstyle";
                    }, 'json');

                    // #########################################save facebook login#################################################
                });
                //window.location.href = "<?php echo site_url();?>";

            } else {
                FB.login(function (response) {
                    if (response.authResponse) {
                        console.log('Welcome!  Fetching your information.... ');
                        FB.api('/me', function (response) {
                            console.log(response);
                            var fid = {
                                id: response.id,
                                email: response.email,
                                firstname: response.first_name,
                                lastname: response.last_name
                            };
                            FB.api('me/picture?type=large&redirect=false', function (data) {
                                console.log(data);
                                fid.image = data.data.url;
                                $.post(site_url + "/website/facebooklogin", fid, function (data) {
                                    console.log("after success");
                                    console.log(data);
                                    window.location.href = site_url + "/website/blenderstyle";
                                }, 'json');

                            });
                            //me/picture?type=large&redirect=false


                        });

                    } else {
                        console.log('User cancelled login or did not fully authorize.');
                    }
                }, {
                    scope: 'public_profile,email'
                });
            }
        });
        return false;
    });


};


(function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) {
        return;
    }
    js = d.createElement(s);
    js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));