<?php
/**
 * @package thanhdieuv5 (tester)
 * @author  Vương Thanh Diệu <www.facebok.com/wusthanhdieu>
 */
interface ThanhDieuConfigInterface {
    public function CommonMethod();
}
class ThanhDieuHeader implements ThanhDieuConfigInterface {
    public $title = "Lê Khánh Duy";
    public $description = "Hi my name is KhánhDuy / A freelance / web developer / vexer";
    public $keywords = "kzi,kzicuti,";
    public $favicon = "./res/v5/img/logo.jpg";
    public $namesite = "KHANHDUY | HOME";
    public $avatar = "./res/v5/img/hi.gif";
    public $userName = ["Hello Everybody", "My name is KhanhDuy.", "I really like website design 🌭"];
    public $trigger = "👉 Tìm hiểu tôi 😶&zwj;🌫️";
    public $bio1 = "🤖️ Người đâm mê công nghệ số";
    public $bio2 = "🔍 Chia sẻ và giúp đỡ nhiệt tình";
    public $bio3 = "💻 Kỹ sư phát triển front-end";
    public $bio4 = "Thích làm thần tượng tiktok 🥳";
    public $bio5 = "Ăn, ngủ, làm và chơi game 🎮";
    public $bio6 = "Kẻ khờ dại tin vào tình yêu ✨";
    public $SocialNetworks = [
        "facebook" => "https://facebook.com/kzi207", // Thay link facebook
        "instagram" => "https://www.instagram.com/kzi207", // Thay link instagram
        "tiktok" => "https://www.tiktok.com/kzi207/", // Thay link tiktok
        "telegram" => "https://t.me/kzi207" // Thay link telegram
    ];
    public function CommonMethod(){date_default_timezone_set('Asia/Ho_Chi_Minh');}
}


class ThanhDieuLoveDays implements ThanhDieuConfigInterface {
    public $ConfigLove = [
        "avatar_male" => "./res/v5/img/male.jpg", // Thay đường dẫn tới thư mục chứa ảnh của bạn hoặc up ảnh lấy link tại img.thanhdieu.com
        "name_male" => "Kháng Duy", // Thay tên của bạn
        //========================================================//
        "avatar_female" => "./res/v5/img/female.jpg", // Thay đường dẫn tới thư mục chứa ảnh bạn gái hoặc up ảnh lấy link tại img.thanhdieu.com
        "name_female" => "????", // Thay tên đối phương
        //========================================================//
        "time_relashiption" => "22/11/2007" // Định dạng ngày tháng năm: DD-MM-YYYY or / or :
        //========================================================//
    ];
    public function CommonMethod() {}
}
class ThanhDieuMusicList implements ThanhDieuConfigInterface {
    public $songs = [
        [
            "url" => "./res/v5/music/anhdaquenvoicodon.mp3",
            "avatar" => "https://i.ibb.co/61mDC2G/t-i-xu-ng-2.jpg",
            "title" => "ANH ĐÃ QUEN VỚI CÔ ĐƠN REMIX",
            "author" => "Soobin Hoàng Sơn"
        ],
        [
            "url" => "./res/v5/music/emdaxaanh.mp3",
            "avatar" => "https://i.ibb.co/61mDC2G/t-i-xu-ng-2.jpg",
            "title" => "EM ĐÃ XA ANH REMIX",
            "author" => "Việt"
        ],
        [
            "url" => "./res/v5/music/ghequa.mp3",
            "avatar" => "https://i.ibb.co/PMsmt3h/t-i-xu-ng-1.jpg",
            "title" => "Ghé Qua",
            "author" => "TaynguyenSound, tofutns, PC"
        ],
        [
            "url" => "./res/v5/music/10ngannam.mp3",
            "avatar" => "https://i.ibb.co/GJSPNzp/t-i-xu-ng-3.jpg",
            "title" => "10 NGÀN NĂM",
            "author" => " PC, Duckie"
        ],
        [
            "url" => "./res/v5/music/3107-3.mp3",
            "avatar" => "https://i.ibb.co/KqnzjJL/t-i-xu-ng-4.jpg",
            "title" => "3107-3",
            "author" => " Duongg x Nâu x Titie"
        ],
        [
            "url" => "./res/v5/music/idthangmay.mp3",
            "avatar" => "https://i.ibb.co/RT3C1Kg/t-i-xu-ng-5.jpg",
            "title" => "ID THANG MÁY",
            "author" => "W/n ft. 267"
        ],
    ];
    public function CommonMethod() {}
}
