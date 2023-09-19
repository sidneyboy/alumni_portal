
    <table class="table table-bordered table-sm table-striped" style="width:100%;" id="example">
        <thead>
            <tr>
                <th>Year Graduated</th>
                <th>Name</th>
                <th>Career</th>
                <th>Started</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($career_path as $item)
                <tr>
                    <td>{{ $item->user->year_graduated }}</td>
                    <td>{{ $item->user->name }}</td>
                    <td>{{ $item->career }}</td>
                    <td>{{ $item->from }}</td>
                    <th>{{ $item->description }}</th>
                </tr>
            @endforeach
        </tbody>
    </table>


<script>
    $(document).ready(function() {
        $('#example').DataTable({
            dom: 'Bfrtip',
            "paging": false,
            info: 'false',
            ordering: 'false',
            buttons: [
                // 'copyHtml5',
                'excelHtml5',
                // 'csvHtml5',
                // 'pdfHtml5'
            ]
        });
    });
</script>
