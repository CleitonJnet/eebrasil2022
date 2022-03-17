<?php

namespace App\Actions\Fortify;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    public function update($user, array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:100', Rule::unique('users')->ignore($user->id)],
            'phone' => ['nullable', 'numeric'],
            'street' => ['nullable', 'max:100'],
            'number' => ['nullable', 'max:20'],
            'complement' => ['nullable', 'max:100'],
            'neighborhood' => ['nullable', 'max:100'],
            'city' => ['nullable', 'max:100'],
            'state' => ['nullable', 'max:2'],
            'zipcode' => ['nullable', 'max:10'],
            'comment' => ['nullable'],
            'photo' => ['nullable', 'mimes:jpg,jpeg,png', 'max:1024'],
        ])->validateWithBag('updateProfileInformation');

        if (isset($input['photo'])) {
            $user->updateProfilePhoto($input['photo']);
        }

        if ($input['email'] !== $user->email &&
            $user instanceof MustVerifyEmail) {
            $this->updateVerifiedUser($user, $input);
        } else {
            $user->forceFill([
                'church_id' => $input['church_id'],
                'name' => $input['name'],
                'email' => $input['email'],
                'phone' => $input['phone'],
                'street' => $input['street'],
                'number' => $input['number'],
                'complement' => $input['complement'],
                'neighborhood' => $input['neighborhood'],
                'city' => $input['city'],
                'state' => $input['state'],
                'zipcode' => $input['zipcode'],
                'comment' => $input['comment'],
            ])->save();
        }
    }

    /**
     * Update the given verified user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    protected function updateVerifiedUser($user, array $input)
    {
        $user->forceFill([
            'name' => $input['name'],
            'email' => $input['email'],
            'email_verified_at' => null,
        ])->save();

        $user->sendEmailVerificationNotification();
    }
}
