<?php

use App\Models\Config_model;
use App\Models\User_model;

// nameweb
function nameweb()
{
    $m_Config = new Config_model();
    $Config   = $m_Config->listing();

    return $Config['nameweb'];
}

// title
function title()
{
    $m_Config = new Config_model();
    $Config   = $m_Config->listing();

    return $Config['nameweb'] . ' | ' . $Config->tagline;
}

// tagline
function tagline()
{
    $m_Config = new Config_model();
    $Config   = $m_Config->listing();

    return $Config['tagline'];
}

// logo
function logo()
{
    $m_Config = new Config_model();
    $Config   = $m_Config->listing();

    return base_url('assets/upload/image/' . $Config['logo']);
}

// icon
function icon()
{
    $m_Config = new Config_model();
    $Config   = $m_Config->listing();

    return base_url('assets/upload/image/' . $Config['icon']);
}

// metatext
function metatext()
{
    $m_Config = new Config_model();
    $Config   = $m_Config->listing();

    return $Config['metatext'];
}

// keywords
function keywords()
{
    $m_Config = new Config_model();
    $Config   = $m_Config->listing();

    return $Config['keywords'];
}

// telepon
function phone()
{
    $m_Config = new Config_model();
    $Config   = $m_Config->listing();

    return $Config['phone'];
}

// google_map
function google_map()
{
    $m_Config = new Config_model();
    $Config   = $m_Config->listing();

    return $Config['google_map'];
}

// hp
function hp()
{
    $m_Config = new Config_model();
    $Config   = $m_Config->listing();

    return $Config['hp'];
}

// cheklogin
function checklogin()
{
    helper('url');
    $m_user  = new User_model();
    $session = \Config\Services::session();
    if ($session->get('username') === '' || $session->get('username') === null) {
        echo '<script>';
        echo 'window.location.href = "' . base_url('login') . '?login=belum";';
        echo '</script>';
    } else {
        //whether ip is from share internet
        if (! empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip_address = $_SERVER['HTTP_CLIENT_IP'];
        }
        //whether ip is from proxy
        elseif (! empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        //whether ip is from remote address
        else {
            $ip_address = $_SERVER['REMOTE_ADDR'];
        }

        $data = ['id_user' => $session->get('id_user'),
            'ip_address'   => $ip_address,
            'username'     => $session->get('username'),
            'url'          => base_url(uri_string()),
        ];

        $m_user->user_log($data);
    }
}

// checksiswa
function checksiswa()
{
    helper('url');
    $session = \Config\Services::session();
    if ($session->get('username_siswa') === '' || $session->get('username_siswa') === null) {
        echo '<script>';
        echo 'window.location.href = "' . base_url('signin') . '?login=belum";';
        echo '</script>';
    }
}

// date_month
     function date_id($date)
     {
         if ($date === '' || $date === null || $date === '0000-00-00' || $date === '1970-01-01') {
             return false;
         }

         return date('d-m-Y', strtotime($date));
     }

    // date input
     function date_input($date)
     {
         if ($date === '' || $date === null || $date === '0000-00-00' || $date === '1970-01-01') {
             return false;
         }

         return date('Y-m-d', strtotime($date));
     }

    // Romawi
     function romawi($month)
     {
         if ($month === '01') {
             $romawi = 'I';
         } elseif ($month === '02') {
             $romawi = 'II';
         } elseif ($month === '03') {
             $romawi = 'III';
         } elseif ($month === '04') {
             $romawi = 'IV';
         } elseif ($month === '05') {
             $romawi = 'V';
         } elseif ($month === '06') {
             $romawi = 'VI';
         } elseif ($month === '07') {
             $romawi = 'VII';
         } elseif ($month === '08') {
             $romawi = 'VIII';
         } elseif ($month === '09') {
             $romawi = 'IX';
         } elseif ($month === '10') {
             $romawi = 'X';
         } elseif ($month === '11') {
             $romawi = 'XI';
         } elseif ($month === '12') {
             $romawi = 'XII';
         }

         return $romawi;
     }

    // Romawi
     function month($month)
     {
         if ($month === '01') {
             $name_month = 'January';
         } elseif ($month === '02') {
             $name_month = 'February';
         } elseif ($month === '03') {
             $name_month = 'March';
         } elseif ($month === '04') {
             $name_month = 'April';
         } elseif ($month === '05') {
             $name_month = 'May';
         } elseif ($month === '06') {
             $name_month = 'June';
         } elseif ($month === '07') {
             $name_month = 'July';
         } elseif ($month === '08') {
             $name_month = 'August';
         } elseif ($month === '09') {
             $name_month = 'September';
         } elseif ($month === '10') {
             $name_month = 'October';
         } elseif ($month === '11') {
             $name_month = 'November';
         } elseif ($month === '12') {
             $name_month = 'December';
         }

         return $name_month;
     }

    // Romawi
     function month_pendek($month)
     {
         if ($month === '01') {
             $name_month_pendek = 'Jan';
         } elseif ($month === '02') {
             $name_month_pendek = 'Feb';
         } elseif ($month === '03') {
             $name_month_pendek = 'Mar';
         } elseif ($month === '04') {
             $name_month_pendek = 'Apr';
         } elseif ($month === '05') {
             $name_month_pendek = 'May';
         } elseif ($month === '06') {
             $name_month_pendek = 'Jun';
         } elseif ($month === '07') {
             $name_month_pendek = 'Jul';
         } elseif ($month === '08') {
             $name_month_pendek = 'Agus';
         } elseif ($month === '09') {
             $name_month_pendek = 'Sep';
         } elseif ($month === '10') {
             $name_month_pendek = 'Oct';
         } elseif ($month === '11') {
             $name_month_pendek = 'Nov';
         } elseif ($month === '12') {
             $name_month_pendek = 'Dec';
         }

         return $name_month_pendek;
     }

    // Romawi
     function day($date)
     {
         $month = date('m', strtotime($date));
         $day  = date('l', strtotime($date));

         if ($day === 'Sunday') {
             $name_day = 'Sunday';
         } elseif ($day === 'Monday') {
             $name_day = 'Monday';
         } elseif ($day === 'Tuesday') {
             $name_day = 'Tuesday';
         } elseif ($day === 'Wednesday') {
             $name_day = 'Wednesday';
         } elseif ($day === 'Thursday') {
             $name_day = 'Thursday';
         } elseif ($day === 'Friday') {
             $name_day = 'Friday';
         } elseif ($day === 'Saturday') {
             $name_day = 'Saturday';
         }

         if ($month === '01') {
             $name_month = 'January';
         } elseif ($month === '02') {
             $name_month = 'February';
         } elseif ($month === '03') {
             $name_month = 'March';
         } elseif ($month === '04') {
             $name_month = 'April';
         } elseif ($month === '05') {
             $name_month = 'May';
         } elseif ($month === '06') {
             $name_month = 'June';
         } elseif ($month === '07') {
             $name_month = 'July';
         } elseif ($month === '08') {
             $name_month = 'August';
         } elseif ($month === '09') {
             $name_month = 'September';
         } elseif ($month === '10') {
             $name_month = 'October';
         } elseif ($month === '11') {
             $name_month = 'November';
         } elseif ($month === '12') {
             $name_month = 'December';
         }

         return $name_day . ', ' . date('d', strtotime($date)) . ' ' . $name_month . ' ' . date('Y', strtotime($date));
     }

    // date_month
    function date_month($date)
    {
        $month = date('m', strtotime($date));
        $day  = date('l', strtotime($date));

        if ($day === 'Sunday') {
            $name_day = 'Sunday';
        } elseif ($day === 'Monday') {
            $name_day = 'Monday';
        } elseif ($day === 'Tuesday') {
            $name_day = 'Tuesday';
        } elseif ($day === 'Wednesday') {
            $name_day = 'Wednesday';
        } elseif ($day === 'Thursday') {
            $name_day = 'Thursday';
        } elseif ($day === 'Friday') {
            $name_day = 'Friday';
        } elseif ($day === 'Saturday') {
            $name_day = 'Saturday';
        }

        if ($month === '01') {
            $name_month = 'January';
        } elseif ($month === '02') {
            $name_month = 'February';
        } elseif ($month === '03') {
            $name_month = 'March';
        } elseif ($month === '04') {
            $name_month = 'April';
        } elseif ($month === '05') {
            $name_month = 'May';
        } elseif ($month === '06') {
            $name_month = 'June';
        } elseif ($month === '07') {
            $name_month = 'July';
        } elseif ($month === '08') {
            $name_month = 'August';
        } elseif ($month === '09') {
            $name_month = 'September';
        } elseif ($month === '10') {
            $name_month = 'October';
        } elseif ($month === '11') {
            $name_month = 'November';
        } elseif ($month === '12') {
            $name_month = 'December';
        }

        return date('d', strtotime($date)) . ' ' . $name_month . ' ' . date('Y', strtotime($date));
    }

    // date_month
    function date_month_minute($date)
    {
        $month = date('m', strtotime($date));
        $day  = date('l', strtotime($date));

        if ($day === 'Sunday') {
            $name_day = 'Sunday';
        } elseif ($day === 'Monday') {
            $name_day = 'Monday';
        } elseif ($day === 'Tuesday') {
            $name_day = 'Tuesday';
        } elseif ($day === 'Wednesday') {
            $name_day = 'Wednesday';
        } elseif ($day === 'Thursday') {
            $name_day = 'Thursday';
        } elseif ($day === 'Friday') {
            $name_day = 'Friday';
        } elseif ($day === 'Saturday') {
            $name_day = 'Saturday';
        }

        if ($month === '01') {
            $name_month = 'January';
        } elseif ($month === '02') {
            $name_month = 'February';
        } elseif ($month === '03') {
            $name_month = 'March';
        } elseif ($month === '04') {
            $name_month = 'April';
        } elseif ($month === '05') {
            $name_month = 'May';
        } elseif ($month === '06') {
            $name_month = 'June';
        } elseif ($month === '07') {
            $name_month = 'July';
        } elseif ($month === '08') {
            $name_month = 'August';
        } elseif ($month === '09') {
            $name_month = 'September';
        } elseif ($month === '10') {
            $name_month = 'October';
        } elseif ($month === '11') {
            $name_month = 'November';
        } elseif ($month === '12') {
            $name_month = 'December';
        }

        return date('d', strtotime($date)) . ' ' . $name_month . ' ' . date('Y', strtotime($date)) . ' jam ' . date('H:i:s', strtotime($date));
    }

    // date_month
    function date_short($date)
    {
        $month = date('m', strtotime($date));
        $day  = date('l', strtotime($date));

        if ($day === 'Sunday') {
            $name_day = 'Sunday';
        } elseif ($day === 'Monday') {
            $name_day = 'Monday';
        } elseif ($day === 'Tuesday') {
            $name_day = 'Tuesday';
        } elseif ($day === 'Wednesday') {
            $name_day = 'Wednesday';
        } elseif ($day === 'Thursday') {
            $name_day = 'Thursday';
        } elseif ($day === 'Friday') {
            $name_day = 'Friday';
        } elseif ($day === 'Saturday') {
            $name_day = 'Saturday';
        }

        if ($month === '01') {
            $name_month = 'Jan';
        } elseif ($month === '02') {
            $name_month = 'Feb';
        } elseif ($month === '03') {
            $name_month = 'Mar';
        } elseif ($month === '04') {
            $name_month = 'Apr';
        } elseif ($month === '05') {
            $name_month = 'Mei';
        } elseif ($month === '06') {
            $name_month = 'Jun';
        } elseif ($month === '07') {
            $name_month = 'Jul';
        } elseif ($month === '08') {
            $name_month = 'Agus';
        } elseif ($month === '09') {
            $name_month = 'Sep';
        } elseif ($month === '10') {
            $name_month = 'Okt';
        } elseif ($month === '11') {
            $name_month = 'Nov';
        } elseif ($month === '12') {
            $name_month = 'Des';
        }

        return date('d', strtotime($date)) . ' ' . $name_month . ' ' . date('Y', strtotime($date));
    }

    // Nomor
     function angka($angka)
     {
         return number_format($angka, '0', ',', '.');
     }

    /**
     * Chuyển đổi chuỗi kí tự thành dạng slug dùng cho việc tạo friendly url.
     * @access    public
     * @param string
     * @return    string
     */
    if (!function_exists('create_slug')) {
        function create_slug($string)
        {
            $search = array(
                '#(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)#',
                '#(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)#',
                '#(ì|í|ị|ỉ|ĩ)#',
                '#(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)#',
                '#(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)#',
                '#(ỳ|ý|ỵ|ỷ|ỹ)#',
                '#(đ)#',
                '#(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)#',
                '#(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)#',
                '#(Ì|Í|Ị|Ỉ|Ĩ)#',
                '#(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)#',
                '#(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)#',
                '#(Ỳ|Ý|Ỵ|Ỷ|Ỹ)#',
                '#(Đ)#',
                "/[^a-zA-Z0-9\-\_]/",
            );
            $replace = array(
                'a',
                'e',
                'i',
                'o',
                'u',
                'y',
                'd',
                'A',
                'E',
                'I',
                'O',
                'U',
                'Y',
                'D',
                '-',
            );
            $string = preg_replace($search, $replace, $string);
            $string = preg_replace('/(-)+/', '-', $string);
            $string = strtolower($string);
            return $string;
        }
    }
