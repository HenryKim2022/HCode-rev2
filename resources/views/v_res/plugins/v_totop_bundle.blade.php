<style>
    #pageuserscroll {
        bottom: 4vh;
        height: fit-content;
        overflow: hidden;
        position: fixed;
        right: 1vw;
        width: 41px;
        z-index: 200;
    }

    #pageuserscroll ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    #pageuserscroll ul li {
        display: block;
        height: 36px;
        margin-bottom: 3px;
        width: 41px;
    }

    #pageuserscroll ul li div {
        background-size: 100% 100%;
        cursor: pointer;
        height: 36px;
        width: 41px;
        background-image: url({{ asset('custom/totop/dist/img/nav-top.png') }}?v={{ time() }});
    }

    #pageuserscroll ul li div.page-up {
        background-image: url({{ asset('custom/totop/dist/img/nav-up.png') }}?v={{ time() }});
    }

    #pageuserscroll ul li div.page-down {
        background-image: url({{ asset('custom/totop/dist/img/nav-down.png') }}?v={{ time() }});
    }

    #pageuserscroll ul li div.page-bottom {
        background-image: url({{ asset('custom/totop/dist/img/nav-bottom.png') }}?v={{ time() }});
    }
</style>

<!-- Stacked Page User Scroll Container -->
<div id="pageuserscroll">
    <ul class="list-unstyled">
        <li>
            <div class="page-top" title="To the top"></div>
        </li>
        <li>
            <div class="page-up" title="Previous screen"></div>
        </li>
        <li>
            <div class="page-down" title="Next screen"></div>
        </li>
        <li>
            <div class="page-bottom" title="To the bottom"></div>
        </li>
    </ul>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        // Append the scroll container to the body
        $('<div id="pageuserscroll"><ul><li><div class="page-top" title="To the top"></div></li><li><div class="page-up" title="Previous screen"></div></li><li><div class="page-down" title="Next screen"></div></li><li><div class="page-bottom" title="To the bottom"></div></li></ul></div>')
            .appendTo($('body'));

        // Initial visibility check
        if ($(window).scrollTop() < 200) {
            $('#pageuserscroll .page-bottom, #pageuserscroll .page-down').parent().fadeIn();
            $('#pageuserscroll .page-up, #pageuserscroll .page-top').parent().fadeOut();
        } else {
            $('#pageuserscroll .page-up, #pageuserscroll .page-top').parent().fadeIn();
            $('#pageuserscroll .page-bottom, #pageuserscroll .page-down').parent().fadeOut();
        }

        // Click handlers for scrolling
        $('#pageuserscroll li div').click(function () {
            var currentScroll = $(document).scrollTop();
            if ($(this).hasClass('page-top')) {
                $('html, body').animate({
                    scrollTop: $("body").offset().top
                }, 400);
            }
            if ($(this).hasClass('page-bottom')) {
                $('html, body').animate({
                    scrollTop: $(document).height()
                }, 400);
            }
            if ($(this).hasClass('page-up')) {
                $('html, body').animate({
                    scrollTop: currentScroll - $(window).height()
                }, 400);
            }
            if ($(this).hasClass('page-down')) {
                $('html, body').animate({
                    scrollTop: currentScroll + $(window).height()
                }, 400);
            }
        });

        // Scroll event handler
        $(window).scroll(function () {
            if ($(this).scrollTop() >= $(window).height() / 2) {
                $('#pageuserscroll .page-up, #pageuserscroll .page-top').parent().fadeIn();
            } else {
                $('#pageuserscroll .page-up, #pageuserscroll .page-top').parent().fadeOut();
            }

            if ($(this).scrollTop() >= $(document).height() - $(window).height()) {
                $('#pageuserscroll .page-up, #pageuserscroll .page-top').parent().fadeIn();
                $('#pageuserscroll .page-bottom, #pageuserscroll .page-down').parent().fadeOut();
            } else {
                $('#pageuserscroll .page-bottom, #pageuserscroll .page-down').parent().fadeIn();
            }
        });
    });
</script>
