
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
            }
        );

       const pwd = document.querySelector('#password')
       document.querySelector('#showPwd').addEventListener('input', () => {
        pwd.type == 'password' ? pwd.type = 'text' : pwd.type = 'password'
       })


    </script>

</body>

</html>