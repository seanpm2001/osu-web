<?php

/**
 *    Copyright 2015-2018 ppy Pty. Ltd.
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
        'warehouse' => 'Kho hàng',
    ],

    'checkout' => [
        'cart_problems' => 'Uh oh, có vấn đề với giỏ hàng của bạn!',
        'cart_problems_edit' => 'Bấm vào đây để chỉnh sửa nó.',
        'declined' => 'Thanh toán đã bị hủy.',
        'error' => 'Đã xảy ra sự cố khi hoàn thành thanh toán của bạn  :(',
        'pay' => 'Thanh toán với Paypal',
        'pending_checkout' => [
            'line_1' => 'Lần thanh toán trước đã bắt đầu nhưng chưa kết thúc.',
            'line_2' => 'Tiếp tục thanh toán bằng cách chọn một phương thức thanh toán, hoặc :link để hủy.',
            'link_text' => 'bấm vào đây',
        ],
        'delayed_shipping' => 'Chúng tôi hiện đang bị choáng ngợp bởi các đơn hàng! Bạn vẫn có thể thoải mái đặt hàng, nhưng vui lòng đợi **thêm 1-2 tuần** trong khi chúng tôi bắt kịp với những đơn hàng hiện tại.',
    ],

    'discount' => 'tiết kiệm :percent%',

    'order' => [
        'item' => [
            'display_name' => [
                'supporter_tag' => ':name cho :username (:duration)',
            ],
            'quantity' => 'Số lượng',
        ],
    ],

    'product' => [
        'name' => 'Tên',

        'stock' => [
            'out' => 'Mặt hàng này hiện đang hết hàng. Kiểm tra lại sau!',
            'out_with_alternative' => 'Rất tiếc, sản phẩm này đã hết hàng. Sử dụng dropdown menu để chọn loại khác hoặc kiểm tra lại sau!',
        ],

        'add_to_cart' => 'Thêm Vào Giỏ Hàng',
        'notify' => 'Thông báo cho tôi khi có hàng!',

        'notification_success' => 'bạn sẽ được thông báo khi chúng tôi có hàng mới. bấm vào :link để hủy',
        'notification_remove_text' => 'đây',

        'notification_in_stock' => 'Sản phẩm này đã có trong kho!',
    ],

    'supporter_tag' => [
        'gift' => 'tặng người chơi khác',
        'require_login' => [
            '_' => 'Bạn cần phải :link để lấy một supporter tag!',
            'link_text' => 'đăng nhập',
        ],
    ],

    'username_change' => [
        'require_login' => [
            '_' => 'Bạn cần phải :link để đổi tên!',
            'link_text' => 'đăng nhập',
        ],
    ],
];
