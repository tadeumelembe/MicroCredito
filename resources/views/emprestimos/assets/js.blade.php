@include('template.js')

<!-- apexcharts -->
<script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>

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

<script src="{{ asset('assets/libs/select2/js/select2.min.js')}}"></script>
<script src="{{ asset('assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{ asset('assets/libs/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
<script src="{{ asset('assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js')}}"></script>
<script src="{{ asset('assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
<script src="{{ asset('assets/js/pages/form-advanced.init.js')}}"></script>

<!-- form mask -->
<script src="{{ asset('assets/libs/inputmask/jquery.inputmask.min.js')}}"></script>
<script src="{{ asset('assets/js/pages/form-mask.init.js')}}"></script>

<script src="{{ asset('assets/js/app.js')}}"></script>

<script>
    $("#valor-concedido").keyup(function() {

        var juro = parseFloat($('#taxa-juro').val().replace(",", ""));
        var valor = parseFloat($('#valor-concedido').val().replace(",", ""));
        var total = valor + (valor * juro / 100);
        total = total.toFixed(2);
        total = total.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");

        $("#valor-total").html("MT " + total);

        $("#valorDivida").val(total);

    });

    //form submit
    $("#create-submit").click(function() {

        $('#create-form').submit()
    });

    $("#edit-submit").click(function() {

        $('#edit-form').submit()
    });
</script>

<script type="text/javascript">
    $(function() {
        var table = $('#emprestimoDatatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('emprestimos') }}",
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
                    data: 'data_emprestimo',
                    name: 'data_emprestimo'
                },

                {
                    data: 'valorConcedido',
                    name: 'valorConcedido'
                },

                {
                    data: 'taxaJuro',
                    name: 'taxaJuro'
                },

                {
                    data: 'valorRemanescente',
                    name: 'valorRemanescente'
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



<script type="text/javascript">

    // CSRF Token
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $(document).ready(function(){

      $( "#Customer" ).select2({
        ajax: {
          url: "{{route('getCustomerSelect2')}}",
          type: "post",
          dataType: 'json',
          delay: 250,
          data: function (params) {
            return {
                "_token": "{{ csrf_token() }}",
              search: params.term // search term
            };
          },
          processResults: function (response) {
            return {
              results: response
            };
          },
          formatNoMatches: function () { return "Pesquisa não encontrada"; },
           formatInputTooShort: function (input, min) { return "Digite " + (min - input.length) + " caracteres para pesquisar"; },
           formatSelectionTooBig: function (limit) { return "Seleciona apenas uma opção " + limit + " item" + (limit == 1 ? "" : "s"); },
          formatLoadMore: function (pageNumber) { return "Carregando mais dados..."; },
           formatSearching: function () { return "Pesquisando..."; },
          cache: true
        }

      });

    });
    </script>
