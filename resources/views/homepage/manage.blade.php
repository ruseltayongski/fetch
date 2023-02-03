<x-layout>
    @include('sweetalert::alert')
    <div class="container">
        <div class="tableWrapper">
            <table class="table">
                <th>
                    <tr class="tableHeader">
                        <td>Your Request</td>
                        <td>Sitio</td>
                        <td>Purpose</td>
                        <td>Status</td>
                        <td></td>
                        <td></td>
                    </tr> 
                </th>
                <tbody>
                    @foreach ($document as $row)
                        <tr class="tableContent">
                            <td>{{ $row->request_type }}</td>
                            <td>{{ $row->sitio }}</td>
                            <td>{{ $row->purpose }}</td>
                            <td>{{ $row->status }}</td>
                             <td> 
                                <form method="POST" action="/cancel/{{ $row->id }}">
                                    @csrf

                                    @method('DELETE')
                                    
                                    <button class="btn btn-primary">
                                        Cancel Request
                                    </button>
                                </form>
                             </td>
                        </tr>    
                </tbody>
                  @endforeach
            </table>
        </div> 
    </div>
</x-layout>