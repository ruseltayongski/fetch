<x-layout>
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
                    

                           
                                <a href="" class="">
                                    <td class="editButton">Edit</td>
                                </a>
                            
                          

                            <td>Cancel Request</td>
                        </tr>    
                </tbody>
                  @endforeach
            </table>
        </div> 
    </div>
</x-layout>