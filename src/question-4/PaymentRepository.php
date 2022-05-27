<?php

namespace App\Repositories;

use App\Models\Payment;

class PaymentRepository
{
    public function getAll(array $reqOptions): ?array
    {
        $payments = Payment::all(); // table with roughly 1.2m records
        $return = [];

        if (!count($payments)) {
            return $return;
        }

        if ($reqOptions['sortDir'] === 'desc') {
            $payments = $payments->sortByDesc('id');
        }

        for ($i = 0; $i < $reqOptions['limit'] ?? 20; $i++) {
            $pmt = $payments[$i]->toArray();

            $return[] = array_merge($pmt, [
                'facility' => $payments[$i]->facility,
                'user' => $payments[$i]->user,
            ]);
        }

        return $return;
    }
}
