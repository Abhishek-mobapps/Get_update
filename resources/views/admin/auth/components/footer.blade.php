<!-- Footer -->
<div class="border-top p-3 text-center">
    <footer class="page-footer">
        <p class="mb-0">Copyright © 2025. All right reserved.</p>
    </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Bootstrap JS -->
<script src=" {{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<!--plugins-->
<script src=" {{ asset('assets/js/jquery.min.js') }}"></script>
<script src=" {{ asset('assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
<script src=" {{ asset('assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
<script src=" {{ asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
<script src=" {{ asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
<script src=" {{ asset('assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src=" {{ asset('assets/plugins/chartjs/js/chart.js') }}"></script>
<script src=" {{ asset('assets/plugins/sparkline-charts/jquery.sparkline.min.js') }}"></script>
<!--notification js -->
<script src=" {{ asset('assets/plugins/notifications/js/lobibox.min.js') }}"></script>
<script src=" {{ asset('assets/plugins/notifications/js/notifications.min.js') }}"></script>
<script src=" {{ asset('assets/js/index3.js') }}"></script>
<!--app JS-->
<script src=" {{ asset('assets/js/app.js') }}"></script>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<!-- Initialize DataTable -->
<script>
    $(document).ready(function() {
        $('#typeTable').DataTable({
            responsive: true,
            paging: true,
            searching: true,
            ordering: true,
        });
    });
</script>

</body>

</html>
