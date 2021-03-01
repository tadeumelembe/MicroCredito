@include('template.js')
<!-- jquery.vectormap map -->
<script src="{{ asset('assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{ asset('assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js')}}"></script>

<!-- Required datatable js -->
<script src="{{ asset('assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>

<script src="{{ asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ asset('assets/libs/jszip/jszip.min.js')}}"></script>
<script src="{{ asset('assets/libs/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{ asset('assets/libs/pdfmake/build/vfs_fonts.js')}}"></script>
<script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>

<script src="{{ asset('assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
<script src="{{ asset('assets/libs/datatables.net-select/js/dataTables.select.min.js')}}"></script>

<!-- Responsive examples -->
<script src="{{ asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>

<script src="{{ asset('assets/js/pages/datatables.init.js')}}"></script>

<!-- form mask -->
<script src="{{ asset('assets/libs/inputmask/jquery.inputmask.min.js')}}"></script>

<!-- form mask init -->
<script src="{{ asset('assets/js/pages/form-mask.init.js')}}"></script>

<script src="{{ asset('assets/js/app.js')}}"></script>

<script>
    //form submit
    $(document).ready(function() {
        $('#doc-create').hide();

        var bi = '<label for="bi">BI</label><input type="text" class="form-control input-mask" data-inputmask="' + 'mask' + ': ' + '9999999999999a' + '" id="doc-number" name="docNumber" placeholder="Número do BI" required><div class="valid-feedback">Looks good!</div>';

        var pass = '<label for="bi">Passaporte</label><input type="text" class="form-control input-mask" data-inputmask="' + 'mask' + ': ' + '9999999999999a' + '" id="doc-number" name="docNumber" placeholder="Número do passaporte" required><div class="valid-feedback">Looks good!</div>';

        $('#doctype').on('change', function(event) {

            if ($(this).find('option:selected').val() === 'BI') {
                $('#doc-create').show();
                $('#doc-create').html(bi);
            } else if ($(this).find('option:selected').val() === 'PASSAPORTE') {
                $('#doc-create').html(pass);
                $('#doc-create').show();
            }
        });
    });
    $('#create-submit').click(function() {
        $('#create-form').submit()
    })
    $('#edit-submit').click(function() {
        $('#edit-form').submit()
    })
</script>

<script type="text/javascript">
    $(function() {
        var table = $('#customerDatatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('customers') }}",
            oLanguage: {
                "sEmptyTable": "Não foi encontrado nenhum registo",
                "sLoadingRecords": "A carregar...",
                "sProcessing": "A processar...",
                "sLengthMenu": "Mostrar _MENU_ registos",
                "sZeroRecords": "Não foram encontrados resultados",
                "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registos",
                "sInfoEmpty": "Mostrando de 0 até 0 de 0 registos",
                "sInfoFiltered": "(filtrado de _MAX_ registos no total)",
                "sInfoPostFix": "",
                "sSearch": "Procurar:",
                "sUrl": "",
                "oPaginate": {
                    "sFirst": "Primeiro",
                    "sPrevious": "Anterior",
                    "sNext": "Seguinte",
                    "sLast": "Último"
                },
                "oAria": {
                    "sSortAscending": ": Ordenar colunas de forma ascendente",
                    "sSortDescending": ": Ordenar colunas de forma descendente"
                }
            },
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'name',
                    name: 'name'
                },

                {
                    data: 'phoneNumber',
                    name: 'phoneNumber'
                },

                {
                    data: 'email',
                    name: 'email'
                },

                {
                    data: 'estado',
                    name: 'estado'
                },

                {
                    data: 'acção',
                    name: 'acção',
                    orderable: true,
                    searchable: true
                },
            ]
        });

    });
</script>