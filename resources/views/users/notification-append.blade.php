<?php
    function time_diff_string($from, $to, $full = false) {
        $from = new DateTime($from);
        $to = new DateTime($to);
        $diff = $to->diff($from);

        $diff->w = floor($diff->d / 7);
        $diff->d -= $diff->w * 7;

        $string = array(
            'y' => 'year',
            'm' => 'month',
            'w' => 'week',
            'd' => 'day',
            'h' => 'hour',
            'i' => 'minute',
            's' => 'second',
        );
        foreach ($string as $k => &$v) {
            if ($diff->$k) {
                $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
            } else {
                unset($string[$k]);
            }
        }

        if (!$full) $string = array_slice($string, 0, 1);
        return $string ? implode(', ', $string) . ' ago' : 'just now';
    }
?>
<div class="notification-list notification-list--unread">
    <div class="notification-list_img"><img src="/images/logo.png" alt="user"></div>
        <div class="notification-list_detail">
            <p><b>Admin</b> {{ $document->status }} your request</p>
            <p><small>{{ time_diff_string($document->updated_at, 'now') }}</small></p>
        </div>
    <div class="notification-list_feature-img"> {{-- <img src="images/features/random1.jpg" alt="Feature image"> --}} </div>
</div>