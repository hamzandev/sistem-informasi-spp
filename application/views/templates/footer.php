
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; SI-SPP SMK Lopok 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Modal User Profile-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Profil Kamu</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label for="nama_keahlian">Nama</label>
                        <?php if($this->session->userdata('user_name')): ?>
                            <input disabled value="<?= $this->session->userdata('user_name'); ?>" type="text" name="nama_keahlian" class="form-control">
                        <?php else : ?>
                            <input disabled value="<?= $this->session->userdata('nama_siswa'); ?>" type="text" name="nama_keahlian" class="form-control">
                        <?php endif ?>
                    </div>
                    <div class="form-group mb-3">
                        <label for="nama_keahlian">NISN</label>
                        <input disabled value="2007" type="text" name="nama_keahlian" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="nama_keahlian">Tahun Penegerian</label>
                        <input disabled value="2007" type="text" name="nama_keahlian" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="nama_keahlian">Jalan Lintas</label>
                        <input disabled value="Jalan Lopok -  Lantung km 15" type="text" name="nama_keahlian" class="form-control">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/js/sb-admin-2.min.js') ?>"></script>


    <!-- datatables & jquery -->
    <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/datatables/js/jquery.dataTables.min.js') ?>"></script>
    <script src="<?= base_url('assets/datatables/js/dataTables.min.js') ?>"></script>
    <script src="<?= base_url('assets/datatables/js/dataTables.bootstrap4.min.js') ?>"></script>

    <!-- My Script -->
    <script>
        $('document').ready(
            function() {
                $('#tb_dashboard').DataTable({
                    responsive: true,
                    pageLength: 4,
                    lengthMenu: [[4, 8, 15, -1], [4, 8, 15, "Semua"]]
                });
                $('#tb_siswa').DataTable({
                    responsive: true,
                    pageLength: 10,
                    lengthMenu: [[5, 10, 20, -1], [4, 10, 20, "Semua"]]
                });
                $('#tb_komp_keahlian').DataTable({
                    responsive: true,
                    pageLength: 10,
                    lengthMenu: [[5, 10, 20, -1], [4, 10, 20, "Semua"]]
                });
            }
        );

        const pwd = document.querySelector('#password');
        const showPwd = document.querySelector('#showPwd');

        showPwd.addEventListener('click', () => {
            pwd.type == 'password' ? pwd.type = 'text' : pwd.type = 'password'
        })
    </script>

</body>

</html>