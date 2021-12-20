<tbody>
    @foreach ($users as $idx => $user)
        <tr x-data="{}">
            <td>
                {{ $user['id'] }}
            </td>
        
            <td>
                @if ($field === $idx.'.name')
                    <x-adminlte-input 
                    name="name" 
                    wire:model.defer="users.{{ $idx }}.name" 
                    @keyup.enter="$wire.field === '{{ $idx }}.name' ? $wire.save({{ $idx }}) : null" />
                @else
                    <div wire:click="edit({{ $idx }}, 'name')">
                        {{ $user['name'] }}
                    </div>
                @endif
            </td>
        
            <td>
                @if ($field === $idx.'.email')
                    <x-adminlte-input 
                    name="email" 
                    wire:model.defer="users.{{ $idx }}.email" 
                    @keyup.enter="$wire.field === '{{ $idx }}.email' ? $wire.save({{ $idx }}) : null" />
                @else
                    <div wire:click="$set('field','{{ $idx }}.email')">
                        {{ $user['email'] }}
                    </div>
                @endif
            </td>

            <td>
                @if ($field === $idx.'.expertise_area')
                    <x-adminlte-input 
                    name="expertise_area" 
                    wire:model.defer="users.{{ $idx }}.expertise_area" 
                    @keyup.enter="$wire.field === '{{ $idx }}.expertise_area' ? $wire.save({{ $idx }}) : null" />
                @else
                    <div wire:click="$set('field','{{ $idx }}.expertise_area')">
                        {{ $user['expertise_area'] }}
                    </div>
                @endif
            </td>

            <td>
                @if ($field === $idx.'.partner')
                    <x-adminlte-input 
                    name="partner" 
                    wire:model.defer="users.{{ $idx }}.partner" 
                    @keyup.enter="$wire.field === '{{ $idx }}.partner' ? $wire.save({{ $idx }}) : null" />
                @else
                    <div wire:click="$set('field','{{ $idx }}.partner')">
                        {{ $user['partner'] }}
                    </div>
                @endif
            </td>

            <td>
                @if ($field === $idx.'.employee_type')
                    <x-adminlte-input 
                    name="employee_type" 
                    wire:model.defer="users.{{ $idx }}.employee_type" 
                    @keyup.enter="$wire.field === '{{ $idx }}.employee_type' ? $wire.save({{ $idx }}) : null" />
                @else
                    <div wire:click="$set('field','{{ $idx }}.employee_type')">
                        {{ $user['employee_type'] }}
                    </div>
                @endif
            </td>

            <td>
                @if ($field === $idx.'.managerial_capacity')
                    <x-adminlte-input 
                    name="managerial_capacity" 
                    wire:model.defer="users.{{ $idx }}.managerial_capacity" 
                    @keyup.enter="$wire.field === '{{ $idx }}.managerial_capacity' ? $wire.save({{ $idx }}) : null" />
                @else
                    <div wire:click="$set('field','{{ $idx }}.managerial_capacity')">
                        {{ $user['managerial_capacity'] }}
                    </div>
                @endif
            </td>

            <td>
                @if ($field === $idx.'.sbu')
                    <x-adminlte-input 
                    name="sbu" 
                    wire:model.defer="users.{{ $idx }}.sbu" 
                    @keyup.enter="$wire.field === '{{ $idx }}.sbu' ? $wire.save({{ $idx }}) : null" />
                @else
                    <div wire:click="$set('field','{{ $idx }}.sbu')">
                        {{ $user['sbu'] }}
                    </div>
                @endif
            </td>

            <td>
                @if ($field === $idx.'.hr')
                    <x-adminlte-input 
                    name="hr" 
                    wire:model.defer="users.{{ $idx }}.hr" 
                    @keyup.enter="$wire.field === '{{ $idx }}.hr' ? $wire.save({{ $idx }}) : null" />
                @else
                    <div wire:click="$set('field','{{ $idx }}.hr')">
                        {{ $user['hr'] }}
                    </div>
                @endif
            </td>

            <td>
                @if ($field === $idx.'.joining_date')
                    <x-adminlte-input 
                    name="joining_date" 
                    wire:model.defer="users.{{ $idx }}.joining_date" 
                    @keyup.enter="$wire.field === '{{ $idx }}.joining_date' ? $wire.save({{ $idx }}) : null" />
                @else
                    <div wire:click="$set('field','{{ $idx }}.joining_date')">
                        {{ $user['joining_date'] }}
                    </div>
                @endif
            </td>

            <td>
                @if ($field === $idx.'.confirmation_date')
                    <x-adminlte-input 
                    name="confirmation_date" 
                    wire:model.defer="users.{{ $idx }}.confirmation_date" 
                    @keyup.enter="$wire.field === '{{ $idx }}.confirmation_date' ? $wire.save({{ $idx }}) : null" />
                @else
                    <div wire:click="$set('field','{{ $idx }}.confirmation_date')">
                        {{ $user['confirmation_date'] }}
                    </div>
                @endif
            </td>

            <td>
                @if ($field === $idx.'.career_start_date')
                    <x-adminlte-input 
                    name="career_start_date" 
                    wire:model.defer="users.{{ $idx }}.career_start_date" 
                    @keyup.enter="$wire.field === '{{ $idx }}.career_start_date' ? $wire.save({{ $idx }}) : null" />
                @else
                    <div wire:click="$set('field','{{ $idx }}.career_start_date')">
                        {{ $user['career_start_date'] }}
                    </div>
                @endif
            </td>

            <td>
                @if ($field === $idx.'.employee_category')
                    <x-adminlte-input 
                    name="employee_category" 
                    wire:model.defer="users.{{ $idx }}.employee_category" 
                    @keyup.enter="$wire.field === '{{ $idx }}.employee_category' ? $wire.save({{ $idx }}) : null" />
                @else
                    <div wire:click="$set('field','{{ $idx }}.employee_category')">
                        {{ $user['employee_category'] }}
                    </div>
                @endif
            </td>

            <td>
                @if ($field === $idx.'.designation')
                    <x-adminlte-input 
                    name="designation" 
                    wire:model.defer="users.{{ $idx }}.designation" 
                    @keyup.enter="$wire.field === '{{ $idx }}.designation' ? $wire.save({{ $idx }}) : null" />
                @else
                    <div wire:click="$set('field','{{ $idx }}.designation')">
                        {{ $user['designation'] }}
                    </div>
                @endif
            </td>

            <td>
                @if ($field === $idx.'.blood_group')
                    <x-adminlte-input 
                    name="blood_group" 
                    wire:model.defer="users.{{ $idx }}.blood_group" 
                    @keyup.enter="$wire.field === '{{ $idx }}.blood_group' ? $wire.save({{ $idx }}) : null" />
                @else
                    <div wire:click="$set('field','{{ $idx }}.blood_group')">
                        {{ $user['blood_group'] }}
                    </div>
                @endif
            </td>

            <td>
                @if ($field === $idx.'.level')
                    <x-adminlte-input 
                    name="level" 
                    wire:model.defer="users.{{ $idx }}.level" 
                    @keyup.enter="$wire.field === '{{ $idx }}.level' ? $wire.save({{ $idx }}) : null" />
                @else
                    <div wire:click="$set('field','{{ $idx }}.level')">
                        {{ $user['level'] }}
                    </div>
                @endif
            </td>
        
            <td>
                <x-adminlte-button wire:click="delete({{ $idx }})" theme="dark" icon="fas fa-trash-alt"/>
            </td>
        </tr>
    @endforeach
</tbody>