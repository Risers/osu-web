<?php

/**
 *    Copyright (c) ppy Pty Ltd <contact@ppy.sh>.
 *
 *    This file is part of osu!web. osu!web is distributed with the hope of
 *    attracting more community contributions to the core ecosystem of osu!.
 *
 *    osu!web is free software: you can redistribute it and/or modify
 *    it under the terms of the Affero GNU General Public License version 3
 *    as published by the Free Software Foundation.
 *
 *    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
 *    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *    See the GNU Affero General Public License for more details.
 *
 *    You should have received a copy of the GNU Affero General Public License
 *    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
 */

return [
    'admin' => [
        'warehouse' => 'Depozit',
    ],

    'cart' => [
        'checkout' => 'Plată',
        'more_goodies' => 'Vreau să-mi verific bunătățile înainte de a completa comanda',
        'shipping_fees' => 'taxe de livrare',
        'title' => 'Coșul de cumpărături',
        'total' => 'total',

        'errors_no_checkout' => [
            'line_1' => 'Uh oh, există niște probleme cu coșul tău care împiedică plata!',
            'line_2' => 'Elimină sau actualizează produsele de mai sus pentru a continua.',
        ],

        'empty' => [
            'text' => 'Coșul tău este gol.',
            'return_link' => [
                '_' => 'Revino la :link pentru a găsi niște bunătăți!',
                'link_text' => 'lista de produse',
            ],
        ],
    ],

    'checkout' => [
        'cart_problems' => 'Uh oh, există niște probleme cu coșul tău!',
        'cart_problems_edit' => 'Dă clic aici pentru a-l edita.',
        'declined' => 'Plata a fost anulată.',
        'old_cart' => 'Coșul tău pare a fi expirat și a fost reîncărcat, te rugăm să încerci din nou.',
        'pay' => 'Plătește cu Paypal',
        'pending_checkout' => [
            'line_1' => 'O plată anterioară a fost începută, dar nu s-a terminat.',
            'line_2' => 'Reluați comanda prin selectarea unei metode de plată sau :link pentru a anula.',
            'link_text' => 'dă clic aici',
        ],
        'delayed_shipping' => 'În prezent suntem copleșiți de comenzi! Ești binevenit să-ți plasezi comanda, dar te rugăm să aștepți **o întârziere de 1-2 săptămâni suplimentară** în timp ce prindem din urmă comenzile existente.',
    ],

    'discount' => 'salvează :percent%',

    'mail' => [
        'payment_completed' => [
            'subject' => 'Am primit comanda ta din magazinul osu!',
        ],
    ],

    'order' => [
        'item' => [
            'display_name' => [
                'supporter_tag' => ':name pentru :username (:duration)',
            ],
            'quantity' => 'Cantitate',
        ],

        'not_modifiable_exception' => [
            'cancelled' => 'Nu îți poți modifica comanda deoarece aceasta a fost anulată.',
            'checkout' => 'Nu îți poți modifica comanda în timp ce aceasta este în curs de procesare.', // checkout and processing should have the same message.
            'default' => 'Comanda nu poate fi modificată',
            'delivered' => 'Nu îți poți modifica comanda deoarece aceasta a fost deja livrată.',
            'paid' => 'Nu îți poți modifica comanda deoarece aceasta a fost deja plătită.',
            'processing' => 'Nu îți poți modifica comanda în timp ce aceasta este în curs de procesare.',
            'shipped' => 'Nu îți poți modifica comanda deoarece aceasta a fost deja expediată.',
        ],
    ],

    'product' => [
        'name' => 'Nume',

        'stock' => [
            'out' => 'Acest articol nu în afara stocului. Verifică mai târziu!',
            'out_with_alternative' => 'Din păcate, acest articol este în afara stocului. Selectează altul utilizând meniul derulant sau revenio mai târziu!',
        ],

        'add_to_cart' => 'Adaugă în coș',
        'notify' => 'Anunță-mă când este disponibil!',

        'notification_success' => 'vei fi anunțat când vom avea un stoc nou. Dă clic pe :link pentru a anula',
        'notification_remove_text' => 'aici',

        'notification_in_stock' => 'Acest produs este deja în stoc!',
    ],

    'supporter_tag' => [
        'gift' => 'dăruiește unui jucător',
        'require_login' => [
            '_' => 'Trebuie să fii :link pentru a obține o insignă de suporter!',
            'link_text' => 'conectat',
        ],
    ],

    'username_change' => [
        'check' => 'Întrodu un nume de utilizator pentru a verifica disponibilitatea!',
        'checking' => 'Se verifică disponibilitatea lui :username...',
        'require_login' => [
            '_' => 'Trebuie să fii :link pentru a îți schimba numele!',
            'link_text' => 'conectat',
        ],
    ],
];
