<table>
    <thead>
    <tr>
        <th></th> {{-- Espaço para o checkbox --}}
        @foreach($fields as $field)
            <th>{{ $field['label'] }}</th>
        @endforeach
    </tr>
    </thead>
    <tbody>
    @foreach($data as $row)
        <tr>
            <td><input  type="checkbox"/></td> {{-- Espaço checkbox --}}
            @foreach($fields as $field)
                <td>{{ $row->{$field['name']} }}</td>
            @endforeach
        </tr>
    @endforeach
    </tbody>
</table>
