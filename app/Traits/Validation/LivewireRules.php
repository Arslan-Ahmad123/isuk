<?php

namespace App\Traits\Validation;

use Illuminate\Validation\Rule;

trait LivewireRules
{
    public function getEmployeeRules(int $id = 0): array
    {
        $baseRules = [
            'first_name' => 'required|min:1',
            'last_name' => 'sometimes|min:3',
            'cnic' => ['nullable', Rule::unique('users')->ignore($id)],
            'date_of_birth' => 'required|date',
            'gender' => 'required',
            'religion' => 'required',
            'marital_status' => 'sometimes',
            'city_id' => 'sometimes',
            'state_id' => 'sometimes',
            'permanent_address' => ['sometimes'],
            'current_address' => ['required'],
            'primary_contact' => 'required|string',
            'secondary_contact' => 'sometimes|string',
            'date_of_joining' => 'required|date',
            'blood_group' => 'sometimes',
            'type' => 'required|not_in:0',
            'license_number' => 'sometimes',
            'expiration_date' => 'nullable',
            'passport_expiration_date' => 'nullable',
            'branch_id' => 'required|not_in:0',
            'department_id' => 'required|not_in:0',
            'country_id' => 'required|not_in:0',
            'role_id' => 'required|not_in:0',
            'position_id' => 'required|not_in:0',
            'expiry_date' => 'sometimes|date',
            'tax_number' => 'sometimes',
            'emergency_contact_person' => 'required|min:3',
            'relation_name' => 'required|min:3',
            'emergency_phone_number' => 'required|string',
            'passport_number' => 'sometimes',
            'show_in_organogram' => 'nullable',
            'email' => ['sometimes', 'email', Rule::unique('users')->ignore($id)],
            'personal_email' => ['sometimes', 'email', Rule::unique('users')->ignore($id)],
        ];
        if ($id === 0) {
            $baseRules['profile_photo'] = 'nullable|image|mimes:jpg,jpeg,png|max:512';
            $baseRules['password'] = 'required';
        } else {
            $baseRules['profile_photo'] = 'nullable';
        }

        return $baseRules;
    }
}
