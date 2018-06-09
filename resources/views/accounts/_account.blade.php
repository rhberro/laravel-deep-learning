<tr>
    <td>
        {{ $account->social_network_id }}
    </td>
    <td>
        {{ $account->name }}
    </td>
    <td width="100">
        {{ \Carbon\Carbon::parse($account->created_at)->format('d/m/Y') }}
    </td>
</tr>
