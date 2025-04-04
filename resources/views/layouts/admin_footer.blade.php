<script src="{{asset('admin_assets/vendors/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('admin_assets/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('admin_assets/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin_assets/js/main.js')}}"></script>


<script src="{{asset('admin_assets/vendors/chart.js/dist/Chart.bundle.min.js')}}"></script>
<script src="{{asset('admin_assets/js/dashboard.js')}}"></script>
<script src="{{asset('admin_assets/js/widgets.js')}}"></script>
<script src="{{asset('admin_assets/vendors/jqvmap/dist/jquery.vmap.min.js')}}"></script>
<script src="{{asset('admin_assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
<script src="{{asset('admin_assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
<script src="{{asset('admin_assets/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin_assets/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin_assets/js/init-scripts/data-table/datatables-init.js')}}"></script>




<script>
    (function($) {
        "use strict";

        jQuery('#vmap').vectorMap({
            map: 'world_en',
            backgroundColor: null,
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#1de9b6',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ['#1de9b6', '#03a9f5'],
            normalizeFunction: 'polynomial'
        });
    })(jQuery);

     
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
      const titleInput = document.getElementById('title');
      const slugInput = document.getElementById('slug');

      titleInput.addEventListener('input', function() {
          const titleValue = titleInput.value;
          const slugValue = titleValue
              .toLowerCase()
              .replace(/\s+/g, '_')  // Replace spaces with underscores
              .replace(/[^\w\-]+/g, '')  // Remove non-word characters
              .replace(/\-\-+/g, '-')  // Replace multiple dashes with a single dash
              .replace(/^-+/, '')  // Remove leading dashes
              .replace(/-+$/, '');  // Remove trailing dashes

          slugInput.value = slugValue;
      });
  });

  document.addEventListener('DOMContentLoaded', function() {
          const slugInput = document.getElementById('slug');

          slugInput.addEventListener('input', function() {
              const slugValue = slugInput.value
                  .replace(/\s+/g, '_');  // Replace spaces with underscores

              // Only update if the slug value is different from the input value
              if (slugInput.value !== slugValue) {
                  slugInput.value = slugValue;
              }
          });
      });

</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.getElementById('logout-button').addEventListener('click', function (e) {
      e.preventDefault();
    // Show SweetAlert confirmation
    Swal.fire({
      title: 'Are you sure?',
      text: "Do you want to log out?",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Yes, logout!',
      cancelButtonText: 'Cancel',
      reverseButtons: true,
      customClass: {
        confirmButton: 'btn btn-primary',  // Change confirm button to orange (Bootstrap class 'btn-warning')
        cancelButton: 'btn btn-secondary'  // Optional: Change cancel button to gray (Bootstrap class 'btn-secondary')
      }
    }).then((result) => {
      if (result.isConfirmed) {
        // If the user confirms, submit the logout form
        document.getElementById('logout-form').submit();
      }
    });
  });
  </script>
