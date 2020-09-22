    <!-- Footer -->
    <footer>
            <!-- Copyright -->
            <section id="copyright" class="copyright p-3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 text-lg-left text-left pt-2">
							<a href="{{ route ('aboutus') }}" class="nav-link float-left">من نحن</a>
							<a href="{{ route ('privacypolicy') }}" class="nav-link float-left">سياسة الإستخدام</a>
							<a href="{{route('usagepolicy')}}" class="nav-link float-left">بيان الخصوصية</a>
                        </div>
                        <div class="col-lg-6 col-md-12 p-3 text-center text-lg-right">
                            <p>© 2020 GEXIN All Rights Reserved | Powered by <a href="https://egydesigner.com" target="_blank">egy designer</a>.</p>
                        </div>
                    </div>
                </div>
            </section>

        </footer>

        <!-- Modal [responsive menu] -->
        <div id="menu" class="modal fade p-0" role="dialog" aria-labelledby="menu" aria-hidden="true">
            <div class="modal-dialog modal-dialog-slideout" role="document">
                <div class="modal-content">
                    <div class="modal-header" data-dismiss="modal">
                        القائمة <i class="icon-close icon-close"></i>
                    </div>
                    <div class="menu modal-body">
                        <div class="row w-100">
                            <div class="items p-0 col-12 text-center">
                                <!-- Append [navbar] -->
                            </div>
                            <div class="contacts p-0 col-12 text-center">
                                <!-- Append [navbar] -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll [to top] -->
        <div id="scroll-to-top" class="scroll-to-top">
            <a href="#">
                <i class="icon-arrow-up"></i>
            </a>
        </div>

        <!-- ==============================================
        Vendor Scripts
        =============================================== -->
        <script src="{{asset('site/assets/js/vendor/jquery.min.js')}}"></script>
        <script src="{{asset('site/assets/js/vendor/ponyfill.min.js')}}"></script>
        <script src="{{asset('site/assets/js/vendor/popper.min.js')}}"></script>
        <script src="{{asset('site/assets/js/vendor/bootstrap.min.js')}}"></script>
        <script src="{{asset('site/assets/js/vendor/slider.min.js')}}"></script>
        <script src="{{asset('site/assets/js/vendor/gallery.min.js')}}"></script>
        <script src="{{asset('site/assets/js/vendor/animation.min.js')}}"></script>
        <script src="{{asset('site/assets/js/main.js')}}"></script>
        <script src="../js/app.js"></script>
        

    </body>
</html>