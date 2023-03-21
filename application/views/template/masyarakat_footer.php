<!-- Footer -->

<!-- <footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>copyright &copy; <script>
                    document.write(new Date().getFullYear());
                </script> - developed by
                <b><a> galang </a></b>
            </span>
        </div>
    </div> -->

<!-- <div class="container my-auto py-2">
        <div class="copyright text-center my-auto">
            <span>copyright &copy; <script>
                    document.write(new Date().getFullYear());
                </script> - SocialMedia
                <b><a href="https://www.youtube.com/@playerallgame9632/featured" target="_blank">My Youtube</a></b>
            </span>
        </div> -->
</div>
</footer>
<!-- Footer -->
</div>
</div>

<!-- Scroll to top -->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<script src="<?= base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="<?= base_url('assets/') ?>js/ruang-admin.min.js"></script>
<script src="<?= base_url('assets/') ?>vendor/chart.js/Chart.min.js"></script>
<script src="<?= base_url('assets/') ?>js/demo/chart-area-demo.js"></script>
<!-- Bootstrap core JavaScript-->
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {

        $('#kategori').change(function() {
            var id = $(this).val();
            $.ajax({
                url: "<?php echo base_url() ?>masyarakat/get_sub_kategori",
                method: "POST",
                data: {
                    id: id
                },
                async: true,
                dataType: 'json',
                success: function(data) {

                    var html = '';
                    var i;
                    for (i = 0; i < data.length; i++) {

                        html += '<option value=' + data[i].id_subkategori + '>' + data[i].sub_kategori + '</option>';
                    }
                    $('#sub_kategori').html(html);
                    // console.dir(data);
                    // console.log();    

                }
            });
            return false;

        });

    });
</script>
</body>

</html>