
Karşımızda verdiğimiz URL adresinin Html içeriğini indiren bir uygulama var.
![Screenshot 2024-05-23 210243](https://github.com/enesdemir41/CTFs/assets/49167863/ce47ecc0-7c79-461f-b85a-88faff072307)



Sayfanın kaynak kodlarını incelediğimizde /files adlı bir dizin oldugğunu görüyoruz
![Screenshot 2024-05-23 210412](https://github.com/enesdemir41/CTFs/assets/49167863/cb593a5b-7999-4a52-86d3-b8b35890048f)


Files Dizinine gittiğimizde Flag denemeleri vs yaptığımızda karşımıza bir ipucu çıkmakta.
![Screenshot 2024-05-23 210426](https://github.com/enesdemir41/CTFs/assets/49167863/4ecf5c21-c812-4976-90bc-0853eb5e2593)

Ejs Template i kullanıldığını öğrendik ve SSTI denemelerine başlayalım. Bir Server kuralım, içersine ejs uzantılı dosya oluşturalım ve <%- 7*7 %> ile zafiyet tespiti yapalım.

![Screenshot 2024-05-23 212343](https://github.com/enesdemir41/CTFs/assets/49167863/cc2fdb2b-58a7-4f2f-9377-80994de570ed)


ejs ile localdeki bir dosyanın nasıl okunabileceğini araştırdıktan sonra son payloadımız bu şekilde


![Screenshot 2024-05-23 164741](https://github.com/enesdemir41/CTFs/assets/49167863/a9571379-378b-4c13-838f-e61b404f5289)


Daha sonra Flag karşımızda 


![Screenshot 2024-05-23 164911](https://github.com/enesdemir41/CTFs/assets/49167863/a5e6030d-5cfb-438d-9057-7978d524c8b6)
