# Okul Modülü
 Hazırladığım modülde okulda bulunan öğrenciler listelenebilmektedir. Aynı zamanda 
 okuldaki sınıflar da listenmektedir. Öğrenciler sahip oldukları sınıf idleri ile foreign key
 yardımıyla bulundukları sınıflarla ilişkilendirilmiştir.
 
 - Modülün yapılma amacı okuldaki öğrencilerin bilgilerini ve sınıf verilerini dijital
 ortamda saklamaktır.
 - Listede rahatlıkla arama yapılabilmektedir.
 - Aynı zamanda öğrenci eklemek, çıkarmak, bilgileri 
  üzerinde düzenleme yapmak da mümkündür.
 
  ![Image of Ogrenci](https://drive.google.com/file/d/1sIz95V9OJ_FQbneNj7GmzfBPa7RHMGjE)
  
![Image of Sınıf](https://drive.google.com/file/d/1PqfFsotfsQs7-UN2QaMQ_jlwzcnhx585)

#Kurulum
    - Modülü Advanced projesine kurabilmek için Advanced klasörünün içindeki composer.json a
    aşağıdaki kod parçası eklenmelidir.
    "require": {
            ..........
            "vendor/ilkerozcn/yii2proje": "dev-main"
        }, 
    - Ardından adnavanced/backend içindeki main.php dosyasının içinde aşağıdaki kod düzenlemesi yapılır.
         'modules' => [
                'proje' => [
                    'class' =>'ilkerozcn\proje\Module'
                ]
            ],
    - advanced/vendor klasörü altına ilkerozcn adlı klasör açılıp git clone modül çekilir.
    - Daha sonra webgece makinesi vagrant klasörü altında vagrant up komutu ile çalıştırılır. 
    - Makine çalıştırıldıktan sonra konsoldan advanced dizinine gidilir.
        ssh -i .vagrant/machines/webgece/virtualbox/private_key vagrant@webgece komutu çalıştırılır.(ssh bağlantısı yapılır) 
    - Ardından veritabanına tabloların yüklene bilmesi için migrate işlemi yapılır
        php yii migrate --migrationPath=@vendor/ilkerozcn/yii2proje/src/migrate
        yazılır.    
         

 #Modül Kuruldu
 
 ##Modüle erişmek için aşağıdaki url yi tarayıcınızdan çağırmanız yeterlidir.
 
 http://advanced/backend/web/index.php?r=proje/deneme
