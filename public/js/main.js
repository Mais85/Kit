function contentHeightChange(){

    let contentHeight = $(".content").height()

    let headerHeight = $("header").height()
    let headerPaddingTop = parseInt($("header").css("padding-top"))
    let headerPaddingBottom = parseInt($("header").css("padding-bottom"))
    
    let footerHeight = $("footer").height()
    let footerPaddingTop = parseInt($("footer").css("padding-top"))
    let footerPaddingBottom = parseInt($("footer").css("padding-bottom"))

    let headerAndFooterHeight = headerHeight + headerPaddingTop + headerPaddingBottom + footerHeight + footerPaddingTop + footerPaddingBottom
    
    if((headerAndFooterHeight + contentHeight) < window.innerHeight) $(".content").height(window.innerHeight - headerAndFooterHeight - 88)
}

$(window).on("load", function(){
    $("body").delegate(".view-change-list__link", "click", function(e){
        var $this
        if(e.target.tagName != "A") $this = $(e.target).closest(".view-change-list__link")
        if(!$this.hasClass("active")){
            $(".view-change-list__link").removeClass("active")
            $this.addClass("active")

            if($this.data("view") == "list"){
                $(".news-list").removeClass("news-list_grid")
                $(".news-list").removeClass("row")
                $(".news-list__item").removeClass("col-6")
            }
            else{
                $(".news-list").addClass("news-list_grid")
                $(".news-list").addClass("row")
                $(".news-list__item").addClass("col-6")
            }
        }
    })

    
    var headerHeight = $(".header").height()
    var headerIndexHeight = $(".header-index").height()
    var headerIndexTopHeight = $(".header-index__top").height()

    $(document).on("scroll", function(){

        //services
        if($(document).scrollTop() > 0){
            if(!$(".service-left-block").hasClass("service-left-block_fixed")) $(".service-left-block").addClass("service-left-block_fixed")
        }
        else{
            $(".service-left-block").removeClass("service-left-block_fixed")
        }

        //companies
        if($(document).scrollTop() > 0){
            if(!$(".company-left-block").hasClass("company-left-block_fixed")) $(".company-left-block").addClass("company-left-block_fixed")
        }
        else{
            $(".company-left-block").removeClass("company-left-block_fixed")
        }

        //gallery
        if($(document).scrollTop() > 0){
            if(!$(".gallery-block").hasClass("gallery-block_fixed")) $(".gallery-block").addClass("gallery-block_fixed")
        }
        else{
            $(".gallery-block").removeClass("gallery-block_fixed")
        }
        
        //index-page
        if($(document).scrollTop() > headerHeight){
            $(".index-page #comapnies-view-button-open").show()
        }
        else{
            $(".index-page #comapnies-view-button-open").hide()
        }

        //header
        if($(document).scrollTop() > headerHeight){

            headerHeight = $(".header").height()

            if(!$(".header").hasClass("header_resp")){
                let header = document.getElementsByClassName("header")[0]
                $(".header").addClass("header_resp")
                $(".header").css("top", -headerHeight)
                $(".content").css("margin-top", headerHeight)
                TweenLite.to(header, 0.5, {top: "0", ease: Power2.easeInOut});
            }
        }
        else{
            $(".header").removeClass("header_resp")
            $(".content").css("margin-top", 0)
        }

        //header-index
        if($(document).scrollTop() > headerIndexTopHeight){

            headerIndexTopHeight = $(".header-index__top").height()

            if(!$(".header-index__top").hasClass("header-index__top_resp")){
                let headerIndex = document.getElementsByClassName("header-index__top")[0]
                $(".header-index__top-substitute").addClass("active")
                $(".header-index__top").addClass("header-index__top_resp")
                $(".header-index__top").css("top", -headerIndexTopHeight)
                $(".header-index__center").css("margin-top", headerIndexTopHeight)
                TweenLite.to(headerIndex, 0.5, {top: "0", ease: Power2.easeInOut});
            }
        }
        else{
            $(".header-index__top-substitute").removeClass("active")
            $(".header-index__top").removeClass("header-index__top_resp")
            $(".header-index__center").css("margin-top", 0)
        }

        //header-index group of companies
        headerIndexGroupCompaniesHeight = $(".header-index .group-companies-mob-block").height()
        if($(document).scrollTop() > headerIndexHeight - headerIndexTopHeight - headerIndexGroupCompaniesHeight){

            if(!$(".header-index .group-companies-mob-block").hasClass("group-companies-mob-block_resp")){
                $(".header-index .group-companies-mob-block").addClass("group-companies-mob-block_resp")
            }
        }
        else{
            $(".header-index .group-companies-mob-block").removeClass("group-companies-mob-block_resp")
        }

        //header-index group of companies
        if($(document).scrollTop() > headerIndexHeight - headerIndexTopHeight){
            $(".header-index .header-index__top .button_header").css("margin-right", "56px")
            
            $(".index-page #comapnies-view-button-open").css("display", "block")
        }
        else{
            $(".header-index .header-index__top .button_header").css("margin-right", 0)
            
            $(".index-page #comapnies-view-button-open").css("display", "none")
        }

        if($("#comapnies-view-button-open").is(":visible")) $(".footer .footer__text").last().css("margin-right", "56px")
        else $(".footer .footer__text").last().css("margin-right", 0)

        if($(".comapnies-view").hasClass("active")) $("#comapnies-view-button-close").trigger("click")
        
    })

    $(document).trigger("scroll")


    $("#services-list-open").on("click", function(){

        if($(this).closest(".services-mob").hasClass("active")){
            $(this).find(".link").removeClass("link_icon_minus")
            $(this).find(".link").addClass("link_icon_plus")
            $(this).closest(".services-mob").removeClass("active")

            $("html").css("overflow-y", "auto")
        }
        else{
            $(this).find(".link").removeClass("link_icon_plus")
            $(this).find(".link").addClass("link_icon_minus")
            $(this).closest(".services-mob").addClass("active")

            $("html").css("overflow-y", "hidden")
        }
        
    })

    var companiesView = document.getElementsByClassName("comapnies-view")[document.getElementsByClassName("comapnies-view").length-1]
    var companiesViewWidth = $(companiesView).width() + 80 //paddings
    $(companiesView).css("right", -companiesViewWidth)
    var opened = false;
    $("#comapnies-view-button-open, #comapnies-view-button-close").on("click", function(){
        
        if($(companiesView).hasClass("active")){

            $(companiesView).removeClass("active")
            TweenLite.to(companiesView, 0.5, {display: "none", right: -companiesViewWidth, ease: Power2.easeInOut, onComplete: function(){ opened = false; }});

        }
        else{

            $(companiesView).addClass("active")
            TweenLite.to(companiesView, 0.5, {display: "flex", right: 0, ease: Power2.easeInOut, onComplete: function(){ opened = true; }});

        }
        
    })

    $(".comapnies-view").on("mouseleave", function(e){
        if(opened){
            $(companiesView).removeClass("active")
            TweenLite.to(companiesView, 0.5, {display: "none", right: -companiesViewWidth, ease: Power2.easeInOut, onComplete: function(){ opened = false; }});
        }
    })

    $("#group-companies-list-open").on("click", function(){

        if($(this).closest(".group-companies-mob").hasClass("active")){
            $(this).find(".link").removeClass("link_icon_minus-white")
            $(this).find(".link").addClass("link_icon_plus-white")
            $(this).closest(".group-companies-mob").removeClass("active")

            $("html").css("overflow-y", "auto")
        }
        else{

            $this = $(this)
            let top = $(".group-companies-mob-block").offset().top;

            closeGroupCompanies = function(){
                $this.find(".link").removeClass("link_icon_plus-white")
                $this.find(".link").addClass("link_icon_minus-white")
                $this.closest(".group-companies-mob").addClass("active")
                $("html").css("overflow-y", "hidden")
            }

            if($(".group-companies-mob-block").hasClass("group-companies-mob-block_resp")){
                closeGroupCompanies();
            }
            else{
                $('body,html').animate({scrollTop: top - 80}, {
                    duration: 1500,
                    complete: closeGroupCompanies
                });
            }
            
        }
        
    })
    
    
    $("#companies-list-open").on("click", function(){

        if($(this).closest(".companies-mob").hasClass("active")){
            $(this).find(".link").removeClass("link_icon_minus-white")
            $(this).find(".link").addClass("link_icon_plus-white")
            $(this).closest(".companies-mob").removeClass("active")

            $("html").css("overflow-y", "auto")
        }
        else{
            $(this).find(".link").removeClass("link_icon_plus-white")
            $(this).find(".link").addClass("link_icon_minus-white")
            $(this).closest(".companies-mob").addClass("active")

            $("html").css("overflow-y", "hidden")
        }
        
    })


    $("#mobile-nav-open").on("click", function(){
        let mobileNavBlock = document.getElementsByClassName("mobile-nav-block")[0]
        let headerIndexTopMobile = document.getElementsByClassName("header-index__top-mobile")[0]

        if($(this).hasClass("active")){
            $("html").css("overflow-y", "auto")

            $(this).removeClass("active")
            TweenLite.to(mobileNavBlock, 0.5, {display: "none", width: 0, ease: Power2.easeInOut});

            $(this).addClass("link_icon_menu")
            $(this).removeClass("link_icon_close")

            if($(mobileNavBlock).closest(".header-index").length > 0){
                // $(".header-index__top").removeClass("header-index__top_resp")
                $(headerIndexTopMobile).removeClass("header-index__top__mobile")
                TweenLite.to(headerIndexTopMobile, 0.5, {display: "none", width: "0", ease: Power2.easeInOut});
            }
        }
        else{
            $("html").css("overflow-y", "hidden")

            $(this).addClass("active")
            TweenLite.to(mobileNavBlock, 0.5, {display: "flex", width: "100%", ease: Power2.easeInOut});

            $(this).removeClass("link_icon_menu")
            $(this).addClass("link_icon_close")

            if($(mobileNavBlock).closest(".header-index").length > 0){
                $(".header-index__top").addClass("header-index__top_resp")
                $(headerIndexTopMobile).addClass("header-index__top__mobile")
                TweenLite.to(headerIndexTopMobile, 0.5, {display: "block", width: "100%", ease: Power2.easeInOut});
            }
        }
        
    })
    
    
    $("#gallery-list-open").on("click", function(){

        if($(this).closest(".gallery-mob").hasClass("active")){
            $(this).find(".link").removeClass("link_icon_minus-white")
            $(this).find(".link").addClass("link_icon_plus-white")
            $(this).closest(".gallery-mob").removeClass("active")

            $("html").css("overflow-y", "auto")
        }
        else{
            $(this).find(".link").removeClass("link_icon_plus-white")
            $(this).find(".link").addClass("link_icon_minus-white")
            $(this).closest(".gallery-mob").addClass("active")

            $("html").css("overflow-y", "hidden")
        }
        
    })


    function galleryPattern(data){
        return '\
        <div class="owl-item">\
            <div class="gallery-carousel__item" data-position="'+data.index+'">\
                <img src="img/'+data.img+'" class="gallery-carousel__img" />\
            </div>\
        </div>\
        '
    }

    $(document).delegate(".gallery-nav__link", "click", function(){
        $(".gallery-nav__link").closest(".gallery-nav__item").removeClass("active")

        $(this).closest(".gallery-nav__item").addClass("active")

        if($(this).closest(".gallery-mob-block").length > 0){
            $('#gallery-list-open').trigger("click")
        }

        
        let id = $(this).data("id")

        let galleryCarouselInner = ""

        albom[id].photos.map(function(item, index){
            galleryCarouselInner += galleryPattern({img: item, index: index})
        })

        $('.gallery-carousel').trigger('replace.owl.carousel', galleryCarouselInner).trigger('refresh.owl.carousel');

        galleryCarousel.trigger('translated.owl.carousel');


        $("#gallery-title-main").text(albom[id].name)
    })

    

    var galleryCarousel = $('.gallery-carousel')

    galleryCarousel.children().each( function( index ) {
        $(this).attr('data-position', index);
      });


    $(document).delegate(".gallery-carousel .owl-item .gallery-carousel__item", "click", function(){

        n = $(this).data("position")

        galleryCarousel.trigger('to.owl.carousel', n);
    })
    

    $(".carousel-button_left").click(function(){
        galleryCarousel.trigger('prev.owl.carousel');
    })

    $(".carousel-button_right").click(function(){
        galleryCarousel.trigger('next.owl.carousel');
    })


    $(".carousel-button-2_left").click(function(){
        galleryCarousel.trigger('prev.owl.carousel');
    })

    $(".carousel-button-2_right").click(function(){
        galleryCarousel.trigger('next.owl.carousel');
    })

    function changeNewsEvents(e) {
        var src = $(".gallery-carousel .owl-stage-outer .owl-stage .owl-item.center .gallery-carousel__img").attr("src")

        var mydiv1 = new TimelineMax();
        mydiv1
            .fromTo(".gallery-carousel-img", 0.4, {autoAlpha:1, ease: Linear.easeNone}, {autoAlpha:0, ease: Linear.easeNone, 
                onComplete: function(){
                    $(".gallery-carousel-img").attr("src", src)
                    mydiv1
                        .fromTo(".gallery-carousel-img", 0.4, {autoAlpha:0, ease: Linear.easeNone}, {autoAlpha:1, ease: Linear.easeNone})
                }})

    }

    galleryCarousel.on('translated.owl.carousel', changeNewsEvents)


    galleryCarousel.owlCarousel({
        loop: true,
        autoWidth: true,
        margin: 13,
        center: true,
        nav: false,
        responsive:{
            0:{
                items: 1
            },
            600:{
                items: 3
            },
            1000:{
                items: 6
            }
        }
    })


    let indexRef  = $(".index-ref-carousel")

    $("#index-ref-left").click(function(){
        indexRef.trigger('prev.owl.carousel');
    })

    $("#index-ref-right").click(function(){
        indexRef.trigger('next.owl.carousel');
    })

    var indexRefOwl = indexRef.owlCarousel({
        loop: true,
        items: 3,
        autoWidth: false,
        margin: 20,
        nav: false,
        dots: false,
        responsive:{
            0:{
                items: 1
            },
            768:{
                items: 2
            },
            1200:{
                items: 3
            }
        }
    })


    //tab start
    $(".tab-content").each(function(index, item){
        $(item).find(".tab-pane").css("display", "none")
        $(item).find(".tab-pane").first().css("display", "block")
    })
    $(".nav-tabs").each(function(index, item){
        $(item).find(".nav-tabs__item").first().addClass("active")
    })

    $(document).delegate(".nav-tabs__link", "click", (e) => {

        $(e.target).closest(".nav-tabs").find(".nav-tabs__link").each(function(index, item){

            $(item).closest(".nav-tabs__item").removeClass("active")

            $($(item).data("tab")).css("display", "none")
        })

        $(e.target).closest(".nav-tabs__item").addClass("active")

        $($(e.target).data("tab")).css("display", "block")
    })



    let newsCarousel = $(".news-carousel")

    $(".carousel-button_left").click(function(){
        newsCarousel.trigger('prev.owl.carousel');
    })

    $(".carousel-button_right").click(function(){
        newsCarousel.trigger('next.owl.carousel');
    })

    var newsCarouselOwl = newsCarousel.owlCarousel({
        loop: true,
        autoWidth: false,
        margin: 20,
        // center: true,
        nav: false,
        dots: false,
        responsive:{
            0:{
                items: 1
            },
            768:{
                items: 2
            },
            1200:{
                items: 4
            }
        }
    })



    let projectItemMission  = $(".project-item-carousel")

    $(".carousel-button-2_left").click(function(){
        projectItemMission.trigger('prev.owl.carousel');
    })

    $(".carousel-button-2_right").click(function(){
        projectItemMission.trigger('next.owl.carousel');
    })

    var projectItemMissionOwl = projectItemMission.owlCarousel({
        loop: true,
        items: 1,
        autoWidth: false,
        nav: false,
        dots: false
    })



    let certificates  = $(".certificates-carousel")

    $(".carousel-button-2_left").click(function(){
        certificates.trigger('prev.owl.carousel');
    })

    $(".carousel-button-2_right").click(function(){
        certificates.trigger('next.owl.carousel');
    })

    var certificatesOwl = certificates.owlCarousel({
        loop: true,
        autoWidth: false,
        margin: 15,
        nav: false,
        dots: false,
        responsive:{
            0:{
                items: 1
            },
            768:{
                items: 2
            },
            1200:{
                items: 3
            }
        }
    })



    let indexWhy  = $(".index-why-carousel")

    var indexWhyOwl = indexWhy.owlCarousel({
        loop: true,
        items: 1,
        autoWidth: false,
        margin: 5,
        nav: false,
        dots: true,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        autoplay: true,
        autoplayHoverPause: true,
        autoplayTimeout: 5000
    })



    let indexClients  = $(".index-clients-carousel")

    $("#index-clients-left").click(function(){
        indexClients.trigger('prev.owl.carousel');
    })

    $("#index-clients-right").click(function(){
        indexClients.trigger('next.owl.carousel');
    })

    var indexClientsOwl = indexClients.owlCarousel({
        loop: true,
        autoWidth: false,
        margin: 15,
        nav: false,
        dots: false,
        responsive:{
            0:{
                items: 1
            },
            576:{
                items: 2
            },
            768:{
                items: 4
            },
            1200:{
                items: 7
            }
        }
    })


    let indexTest  = $(".index-test-carousel")

    $("#index-test-left").click(function(){
        indexTest.trigger('prev.owl.carousel');
    })

    $("#index-test-right").click(function(){
        indexTest.trigger('next.owl.carousel');
    })

    var indexTestOwl = indexTest.owlCarousel({
        loop: true,
        autoWidth: false,
        margin: 20,
        nav: false,
        dots: false,
        responsive:{
            0:{
                items: 1
            },
            768:{
                items: 2
            },
            1200:{
                items: 3
            }
        }
    })
	console.log('test');
	// Block height
	indexTestOwl.on('initialized.owl.carousel', function(event) {
    console.log('test');
})
    setHeights2  = function()

    {
		console.log('test');
        var $list       = $( '.elems-block-wrap' );
        $list.each(function(){
            $items      = $(this).find( '.elems-block-extra' );

            $items.css( 'height', 'auto' );

            var perRow = Math.floor( $(this).width() / $items.width() );
            if( perRow == null || perRow < 2 ) return true;

            for( var i = 0, j = $items.length; i < j; i += perRow )
            {

                var maxHeight   = 0,
                    $row        = $items.slice( i, i + perRow );

                $row.each( function()
                {
                    var itemHeight = parseInt( $( this ).outerHeight() );
                    if ( itemHeight > maxHeight ) maxHeight = itemHeight;
                });
                $row.css( 'height', maxHeight );
                // console.log($row);
            }
        });

    };
    setHeights2();
    $( window ).on( 'resize', function(){setTimeout(function(){ setHeights2()}, 1000) });



    let indexHeader  = $(".header-index-carousel")

    $('#header-index-dots .owl-dot').click(function () {
        indexHeader.trigger('to.owl.carousel', [$(this).index(), 300]);
    });

    indexHeader.on('initialize.owl.carousel', function(){
        let count = $(".header-index-carousel .header-index-carousel__item").length
        $(".header-index-slider-text__all").text(count < 10 ? "0"+count : count)
    })

    indexHeader.children().each( function( index ) {
        $(this).attr('data-position', index);
    });

    function serialNumberChange(){

        let count = parseInt($(this).find(".owl-item.active .header-index-carousel__item").data("position")) + 1

        $(".header-index-slider-text__current").text(count < 10 ? "0"+count : count)
    }

    indexHeader.on('initialized.owl.carousel', serialNumberChange)

    indexHeader.on('translated.owl.carousel', serialNumberChange)

    var indexHeaderOwl = indexHeader.owlCarousel({
        loop: true,
        items: 1,
        autoWidth: false,
        nav: false,
        dots: true,
        dotsContainer: '#header-index-dots',
        autoplay: true,
        autoplayTimeout: 5000
    })



    $(".header-index-bottom-list__link").on("click", function(e){
        event.preventDefault();

        var id  = $(this).attr('href'),

        top = $(id).offset().top;

        $('body,html').animate({scrollTop: top - 80}, 1500);
    })
    
    $("#comapnies-view-button-open").css("right", (window.innerWidth - 1920 > 0 ? (window.innerWidth - 1920)/2 : 0) + "px")

    $(window).resize(function(){
        $("#comapnies-view-button-open").css("right", (window.innerWidth - 1920 > 0 ? (window.innerWidth - 1920)/2 : 0) + "px")
    })

})


// $(window).on("load", function(){
//     contentHeightChange()

//     //tab start
//     $(".tab-content").each(function(index, item){
//         $(item).find(".tab-pane").first().css("display", "block")
//     })
//     $(".nav-tabs").each(function(index, item){
//         $(item).find(".nav-tabs__item").first().addClass("active")
//     })

//     $(document).delegate(".nav-tabs__link", "click", (e) => {

//         $(e.target).closest(".nav-tabs").find(".nav-tabs__link").each(function(index, item){

//             $(item).closest(".nav-tabs__item").removeClass("active")

//             $($(item).data("tab")).css("display", "none")
//         })

//         $(e.target).closest(".nav-tabs__item").addClass("active")

//         $($(e.target).data("tab")).css("display", "block")
//     })
// })

// $(window).resize(contentHeightChange)