<div class="container-xxl py-5 pt-5 bg-light">
    <div class="container">
        <div class="row g-5 ">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                <h1 class="display-6 text-black mb-5">
                    Segera daftarkan diri kalian di MTs SA Darul Muqodas!
                </h1>
                <p class="text-black mb-5">
                    Pendaftaran PPDB MTs SA Darul Muqodas dibuka mulai tanggal 1 Juni 2025 sampai dengan 10 Juli 2025.
                    Informasi lebih lanjut dapat dilihat di website sekolah atau menghubungi nomor telepon dibawah.
                </p>
                <div class="d-flex align-items-center mb-3">
                    <div class="d-flex align-items-center justify-content-center flex-shrink-0"
                        style="width: 50px; height: 50px; background-color: #006316;">
                        <i class="fa fa-map-marker-alt text-white"></i>
                    </div>
                    <div class="ms-3">
                        <h5>Alamat</h5>
                        <p class="mb-0">Banger, Mojomulyo, Kec. Tambakromo, Kabupaten Pati, Jawa Tengah, 59174
                        </p>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <div class="d-flex align-items-center justify-content-center flex-shrink-0"
                        style="width: 50px; height: 50px; background-color: #006316;">
                        <i class="fa fa-phone-alt text-white"></i>
                    </div>
                    <div class="ms-3">
                        <h5>Nomor Telepon</h5>
                        <p class="mb-0">+62 82336564081</p>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div class="d-flex align-items-center justify-content-center flex-shrink-0"
                        style="width: 50px; height: 50px; background-color: #006316;">
                        <i class="fa fa-envelope-open text-white"></i>
                    </div>
                    <div class="ms-3">
                        <h5>Email</h5>
                        <p class="mb-0">ppdbdarulmuqodas@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="bg-white rounded p-5">
                    <div class="d-flex justify-content-center">
                        <H2>Hubungi Kami</H2>
                    </div>
                    @if(session('sukses'))
                    <div class="alert alert-success" role="alert">
                        {{session('sukses')}}
                    </div>
                    @endif
                    <form class="needs-validation" novalidate method="POST" action="{{route('hub')}}">
                        @csrf
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" name="nama" class="form-control" id="gname"
                                        placeholder="Nama Lengkap" required />
                                    <label for="gname">Nama Lengkap</label>
                                    <div class="invalid-feedback">This field is required</div>
                                    <div class="valid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="email" name="email" class="form-control" id="gmail"
                                        placeholder="xxx@xxx.com" required />
                                    <label for="gmail">Email Valid</label>
                                    <div class="invalid-feedback">This field is required</div>
                                    <div class="valid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="number" name="nomor_hp" class="form-control" id="cname"
                                        placeholder="08xxxxxxxxx" required />
                                    <label for="cname">Nomor HP/WA</label>
                                    <div class="invalid-feedback">This field is required</div>
                                    <div class="valid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <select name="untuk" class="form-control" required>
                                        <option disabled selected value>Pesan Untuk</option>
                                        <option value="Customer Services">Customer Services</option>
                                        <option value="Technical Support">Technical Support</option>
                                        <div class="invalid-feedback">This field is required</div>
                                        <div class="valid-feedback"></div>
                                    </select>
                                    <label for="cage">Pesan Untuk</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea name="pesan" class="form-control" placeholder="Pesan kamu" id="message"
                                        style="height: 328px" required></textarea>
                                    <label for="message">Pesan</label>
                                    <div class="invalid-feedback">This field is required</div>
                                    <div class="valid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-success py-3 px-5" type="submit">
                                    Kirim Pesan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
(function() {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
        .forEach(function(form) {
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
})()
</script>
