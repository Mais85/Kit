    <script src="/assets/admin/js/neat.minc619.js?v=1.0"></script>
    <script src="//cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

    <!-- Global Site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-88739867-5"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-88739867-5');
    </script>

    <script>
      var options = {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
    };
    $("textarea.editor").each(function(){
      var txt = $( this ).attr('name');
      CKEDITOR.replace(txt ,options);
    });
    </script>

    <script>
        // Main.js
        function delete_old_image(name){
            $('.'+name).remove();
            $('input[name="'+name+'"]').val('');
        }
        function confirm_delete(link){
            Swal.fire({
              title: 'Əminsiniz?',
              text: "Silinən elementləri geri qaytara bilməyəcəksiniz!",
              type: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Bəli, sil!',
              cancelButtonText: 'Ləğv Et'
            }).then((result) => {
              if (result.value) {
                window.location.href = link;
              }
            });
        }

        function confirm_gitem_delete(t,link){
          console.log($(t).closest('.fake-gallerry-item'));
            Swal.fire({
              title: 'Əminsiniz?',
              text: "Silinən elementləri geri qaytara bilməyəcəksiniz!",
              type: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Bəli, sil!',
              cancelButtonText: 'Ləğv Et'
            }).then((result) => {
              if (result.value) {
                $.post( link, function( data ) {
                  $(t).closest('.fake-gallerry-item').hide();
                });
              }
            });
			$.ajaxSetup({
					headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
        }
        //Check All
        $("#checkAll").click(function(){
          $('input:checkbox').not(this).prop('checked', this.checked);
        });

        //Mass Delete
        function massDelete(link){
          var IDs = $("tbody input:checkbox:checked").map(function(){
            return $(this).val();
          }).get();
          IDs = IDs.join(",");
          if(IDs == ""){
            Swal.fire(
              "Xəta!",
              "Heç bir element seçilməyib.",
              "warning"
              );
            return;
          }
          confirm_delete(link+"/delete/"+IDs+"?massDelete=1");
        }
    </script>
