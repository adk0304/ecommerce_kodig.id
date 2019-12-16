<script src="{{asset('assets/plugins/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/jquery-migrate.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/jquery.easing.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/reveal-animate/wow.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/base/js/scripts/reveal-animate/reveal-animate.js')}}" type="text/javascript"></script>
<!-- END: CORE PLUGINS -->
<!-- BEGIN: LAYOUT PLUGINS -->
<script src="{{asset('assets/plugins/revo-slider/js/jquery.themepunch.tools.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/revo-slider/js/jquery.themepunch.revolution.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/revo-slider/js/extensions/revolution.extension.slideanims.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/revo-slider/js/extensions/revolution.extension.layeranimation.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/revo-slider/js/extensions/revolution.extension.navigation.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/revo-slider/js/extensions/revolution.extension.video.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/owl-carousel/owl.carousel.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/counterup/jquery.waypoints.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/counterup/jquery.counterup.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/fancybox/jquery.fancybox.pack.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/smooth-scroll/jquery.smooth-scroll.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/slider-for-bootstrap/js/bootstrap-slider.js')}}" type="text/javascript"></script>
<!-- END: LAYOUT PLUGINS -->
<!-- BEGIN: THEME SCRIPTS -->
<script src="{{asset('assets/base/js/components.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/base/js/components-shop.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/base/js/app.js')}}" type="text/javascript"></script>
<script>
    $(document).ready(function()
    {
        App.init(); // init core    
    });
</script>
<!-- END: THEME SCRIPTS -->
<!-- BEGIN: PAGE SCRIPTS -->
<script src="{{asset('assets/base/js/scripts/revo-slider/slider-4.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/isotope/isotope.pkgd.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/isotope/imagesloaded.pkgd.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/isotope/packery-mode.pkgd.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/ilightbox/js/jquery.requestAnimationFrame.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/ilightbox/js/jquery.mousewheel.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/ilightbox/js/ilightbox.packed.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/base/js/scripts/pages/isotope-gallery.js')}}" type="text/javascript"></script>

<script type="text/javascript">

    $(".update-cart").click(function (e) {
       e.preventDefault();

       var ele = $(this);

        $.ajax({
           url: '{{ url('update-cart') }}',
           method: "patch",
           data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
           success: function (response) {
               window.location.reload();
           }
        });
    });

    $(".remove-from-cart").click(function (e) {
        e.preventDefault();

        var ele = $(this);

        if(confirm("Are you sure")) {
            $.ajax({
                url: '{{ url('remove-from-cart') }}',
                method: "DELETE",
                data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });

</script>

<!-- END: PAGE SCRIPTS -->
<!-- END: LAYOUT/BASE/BOTTOM -->