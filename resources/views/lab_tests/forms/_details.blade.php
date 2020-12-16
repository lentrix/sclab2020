<h3>Lab Test Details</h3>
<table class="table table-bordered">
    <tr>
        <th class="bg-primary text-white">
            Lab Test Desired
        </th>
        <td style="text-transform: capitalize">
            {{$labtest->formal_name}}
        </td>
    </tr>
    <tr>
        <th class="bg-primary text-white">
            Patient Name
        </th>
        <td>
            {{$labtest->patient->name}}
        </td>
    </tr>
    <tr>
        <th class="bg-primary text-white">
            Patient Age
        </th>
        <td>
            {{$labtest->patient->bdate->age}}
        </td>
    </tr>
    <tr>
        <th class="bg-primary text-white">
            Physician
        </th>
        <td>
            {{$labtest->physician}}
        </td>
    </tr>
</table>
