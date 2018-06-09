<tr>
    <td>
        {{ $project->name }}
    </td>
    <td width="100">
        {{ \Carbon\Carbon::parse($project->created_at)->format('d/m/Y') }}
    </td>
    <td width="145">
        <a class="button" href="{{ route('projects.select', $project) }}">{{ __('Use This Project') }}</button>
    </td>
</tr>
