<?php

use App\Models\Albom;
use App\Models\Photo;

function cities($id = null){
    $cities = array (
        1 => 'Ağcabədi',
        2 => 'Ağdam',
        3 => 'Ağdaş',
        4 => 'Ağdərə',
        5 => 'Ağstafa',
        6 => 'Ağsu',
        7 => 'Astara',
        8 => 'Bakı',
        9 => 'Balakən',
        10 => 'Beyləqan',
        11 => 'Bərdə',
        12 => 'Biləsuvar',
        13 => 'Cəbrayıl',
        14 => 'Cəlilabad',
        15 => 'Culfa',
        16 => 'Daşkəsən',
        17 => 'Dəliməmmədli',
        18 => 'Əsgəran',
        19 => 'Füzuli',
        20 => 'Gədəbəy',
        21 => 'Gəncə',
        22 => 'Goranboy',
        23 => 'Göyçay',
        24 => 'Göygöl',
        25 => 'Göytəpə',
        26 => 'Hacıqabul',
        27 => 'Horadiz',
        28 => 'Xaçmaz',
        29 => 'Xankəndi',
        30 => 'Xocalı',
        31 => 'Xocavənd',
        32 => 'Xırdalan',
        33 => 'Xızı',
        34 => 'Xudat',
        35 => 'İmişli',
        36 => 'İsmayıllı',
        37 => 'Kəlbəcər',
        38 => 'Kürdəmir',
        39 => 'Qax',
        40 => 'Qazax',
        41 => 'Qəbələ',
        42 => 'Qobustan',
        43 => 'Qovlar',
        44 => 'Quba',
        45 => 'Qubadlı',
        46 => 'Qusar',
        47 => 'Laçın',
        48 => 'Lerik',
        49 => 'Lənkəran',
        50 => 'Liman',
        51 => 'Masallı',
        52 => 'Mingəçevir',
        53 => 'Naftalan',
        54 => 'Naxçıvan',
        55 => 'Neftçala',
        56 => 'Oğuz',
        57 => 'Ordubad',
        58 => 'Saatlı',
        59 => 'Sabirabad',
        60 => 'Salyan',
        61 => 'Samux',
        62 => 'Siyəzən',
        63 => 'Sumqayıt',
        64 => 'Şabran',
        65 => 'Şahbuz',
        66 => 'Şamaxı',
        67 => 'Şəki',
        68 => 'Şəmkir',
        69 => 'Şərur',
        70 => 'Şirvan',
        71 => 'Şuşa',
        72 => 'Tərtər',
        73 => 'Tovuz',
        74 => 'Ucar',
        75 => 'Yardımlı',
        76 => 'Yevlax',
        77 => 'Zaqatala',
        78 => 'Zəngilan',
        79 => 'Zərdab',
    );
    return ($id ? $cities[$id] : $cities);
}

function cached($name,$param = null){
    $name = explode(".",$name);
    $cached = cache($name[1]);
    if(!$cached){
        $F="App\Http\Controllers\\".$name[0]."Controller::".$name[1];
        if(!$param)
            $query = $F($param);
        else
            $query = $F();
        cache([$name[1] => $query],now()->addMinutes(60*24*30));
        return $query;
    }else{
        return $cached;
    }
}

function role($id){
    switch ($id) {
        case 2:
            $role = '<a class="c-badge c-badge--small c-badge--warning">Mağaza</a>';
            break;
        default:
            $role = "İstifadəçi";
            break;
    }

    return $role;
}

function required(Array $must_be, String $given){
    if(count($must_be) != 0){
        if(in_array($given,$must_be)){
            return "required";
        }
    }else{
        return "required";
    }
    return "";
}

function requiredFall(string $given){
    if(config('app.locale') == $given)
        return "required";
    return "";
}

function checked($must_be, $given){
    if($must_be == $given){
        return "checked";
    }
    return "";
}

function selected($must_be, $given){
    if($must_be == $given){
        return "selected";
    }
    return "";
}

function returnIf($must_be, $given, $return){
    if($must_be == $given){
        return $return;
    }
    return "";
}

function tabActive($given){
    if(config('app.locale') == $given)
        return "active";
    return "";
}

function getThumb($filename,$thumb){
    $n = pathinfo($filename, PATHINFO_FILENAME);
    $e = pathinfo($filename, PATHINFO_EXTENSION);
    $path = explode($n.".".$e,$filename)[0];
    return $path.$n."_".$thumb[0]."x".$thumb[1].".".$e;
}

function status($i){
    switch ($i) {
        case 1:
            return "Aktiv";
            break;
        default:
            return "Deaktiv";
    }
}

function status_time($i,$in=null){
    if($in == 0){
        return '<a class="c-badge c-badge--small c-badge--warning" aria-label="'.$i.'">Yoxlanışda</a>';
    }elseif(date("Y-m-d H:i") < $i){
        return '<a class="c-badge c-badge--small c-badge--success c-tooltip c-tooltip--top" aria-label="'.$i.'">Aktiv</a>';
    }else{
        return '<a class="c-badge c-badge--small c-badge--danger c-tooltip c-tooltip--top" aria-label="'.$i.'">Deaktiv</a>';
    }
}

function status_premium($i){
    if(!$i){
        return '<a class="c-badge c-badge--small c-badge--danger">Deaktiv</a>';
    }elseif(date("Y-m-d H:i") < $i){
        return '<a class="c-badge c-badge--small c-badge--success c-tooltip c-tooltip--top" aria-label="'.$i.'">Aktiv</a>';
    }else{
        return '<a class="c-badge c-badge--small c-badge--warning c-tooltip c-tooltip--top" aria-label="'.$i.'">Deaktiv</a>';
    }
}

function menuActive($given,$type=1){
    $must_be = url()->current()."/";
    $given = url("admin/".$given)."/";
    if($type ==  1){
        if($must_be == $given)
            return "is-active";
        else
            return "";
    }else{
        if (strpos($must_be, $given) !== false){
            switch ($type) {
                case 2:
                    return "true";
                case 3:
                    return "show";
                case 4:
                    return "is-active";
            }
        }
        switch ($type) {
            case 2:
                return "false";
            case 3:
                return "";
            case 4:
                return "";
        }
    }
    return "";
}

function getPhotos($id)
{
    return Photo::where('albom_id', $id)->get()->count();
}

function favOrNot($id){
    if(auth()->guest()){
        $favourites = [];
        $request = request();
        if($request->cookie('__f') != NULL){
            $favourites = json_decode($request->cookie('__f'),true);
        }
        if( isset($favourites[$id]) )
            return '1';
        else
            return '0';
    }else{
        $data = App\Favourite::where([["user_id",auth()->user()->id],['announcement_id',$id]])->count()>0;
        if($data)
            return '1';
        else
            return '0';
    }
}

function r1($bool,$string){
    if((int)$bool)
        return $string;
    else
        return "";
}

function getAlbomName($id)
{
    $el = Albom::where('id',$id)->pluck('name')->first();
    return $el;
}
