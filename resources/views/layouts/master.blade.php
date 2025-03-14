<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
</head>
<body>
    <div id="loading-area"></div>
    <div class="onepage"></div>
    @if(Route::currentRouteName() == 'home')
        <!-- header END -->
        <div class="sidenav-list">
            <ul class="navbar">
                <li><a class="scroll nav-link" href="#home"><i class="las la-home"></i> <span>TRANG CHỦ</span></a></li>
                <li><a class="scroll nav-link" href="#products"><i class="las la-file-alt"></i> <span>SẢN PHẨM</span></a></li>
                <li><a class="scroll nav-link" href="#aboutUs"><i class="las la-user"></i> <span>CHỦ ĐẦU TƯ</span></a></li>
                <li><a class="scroll nav-link" href="#masterPlan"><i class="las la-object-ungroup"></i> <span>MẶT BẰNG</span></a></li>
                <li><a class="scroll nav-link" href="#map"><i class="las la-map"></i> <span>VỊ TRÍ</span></a></li>
                <li><a class="scroll nav-link" href="#quanThe"><i class="las la-archway"></i> <span>ƯU ĐIỂM</span></a></li>
                <li><a class="scroll nav-link" href="#" data-toggle="modal" data-target="#ctaModal"><i class="las la-phone-volume"></i> <span>Contact Us</span></a></li>
            </ul>
        </div>
    @endif
    <div class="page-wraper">
        @include('partials.header')
        <div class="page-content bg-white">
            @yield('content')
        </div>
        @include('partials.footer')
    </div>
    <!-- InquiryModal -->
    <div class="modal fade inquiry-modal-2" id="ctaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="inquiry-adv">
                <img src="{{ asset('images/main-slider/slide1.jpg') }}" alt=""/>
            </div>
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">* Thông tin của quý khách được bảo mật tuyệt đối không ảnh hưởng đến công việc.</h5>
                </div>
                <div class="modal-body">
                    <form id="contactForm" method="post">
                        @csrf
                        <div class="dzSubscribeMsg"></div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" required placeholder="Tên">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="phone" name="phone" class="form-control" required placeholder="Số điện thoại">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button name="submit" type="submit" value="Submit" class="btn btn-primary btn-block">GỬI NGAY</button>
                            </div>
                        </div>
                    </form>
                    <div id="successMessage" class="alert alert-success mt-3" style="display: none;">
                        Contact saved successfully.
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#contactForm').on('submit', function(e) {
                e.preventDefault();
                $.ajax({
                    url: "{{ route('contact.store') }}",
                    method: 'POST',
                    data: $(this).serialize(),
                    success: function(response) {
                        
                        $('#ctaModal').modal('hide');
                        alertbox.render({
                        alertIcon: 'success',
                        title: 'Cảm ơn bạn đã liên hệ với chúng tôi!',
                        message: 'Chúng tôi sẽ liên hệ với bạn sớm nhất.',
                        btnTitle: 'OK',
                        themeColor: '#6e211f',
                        btnColor: '#FCA41C',
                        btnColor: true
                        });
                    },
                    error: function(response) {
                        alert('An error occurred. Please try again.');
                    }
                });
            });
        });
    </script>
</body>
</html>
