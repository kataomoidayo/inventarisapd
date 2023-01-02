# Inventaris APD

Ini Merupakan Web **Sistem Manajemen Inventaris APD (Alat Pelindung Diri) dengan Kode-QR**, yang saya bangun saat melaksanakan PKL/KP di unit **K3 dan KAM (Keselamatan Kesehatan Kerja dan Keamanan)** di **PT. PLN (Persero) UPT Bali** pada tahun 2022.


## Fitur

- [x] Registrasi dan Login.
- [x] Session login dan logout.
- [x] Upload foto alat.
- [x] Otomatis Generate Kode-QR saat data alat berhasil diinput.
- [x] Otomatis memeriksa apakah foto alat diganti atau tidak ketika melakukan edit. Jika diganti, foto lama akan dihapus dari data dan penyimpanan lalu akan digantikan dengan foto yang baru. Jika tidak diganti, foto lama akan dipertahankan.
- [x] Otomatis melakukan Generate Kode-QR baru dan menghapus Kode-QR lama dari penyimpanan ketika data alat diedit.
- [x] Print/Ekspor satuan data alat beserta foto alat dan gambar Kode-QR ke excel.
- [x] Print/Ekspor detail data alat ke pdf.
- [x] Print/Ekspor full data atau satuan data peminjaman.
- [x] Pencarian pada data alat dan data peminjaman.
- [x] Kustom notifikasi dengan SweetAlert2 dan notifikasi normal dengan JavaScript.
- [x] Download gambar Kode-QR (Pada halaman detail data alat).

## Dokumentasi

### Database
>Nama database : inventaris

### Username dan Password Login Default atau Bawaan

>Username  : admin
>
>Password  : admin

Bisa juga melakukan pendaftaran/registrasi pada halaman daftar lalu melakukan login setelah berhasil terdaftar.


### Sampel Kode-QR
![IDM000206153-Helm](https://user-images.githubusercontent.com/114056087/207675085-b41d8d02-cf7a-48df-886f-0a6ba7d5e2d1.png)


### Tampilan Web Pada Desktop 
Tampilan dari web ketika di akses menggunakan Desktop.


#### 1. Login
Halaman Login.



> <img src="https://user-images.githubusercontent.com/114056087/206891232-2e27d8ab-6d36-420d-af9c-5a2edf1a0eb7.png" width = "800"/>

> <img src="https://user-images.githubusercontent.com/114056087/208846915-ed809383-40e9-4208-93ec-aeb80a05bdec.png" width = "800"/>

> <img src="https://user-images.githubusercontent.com/114056087/208847061-5ce7cf80-b48a-4303-8ca4-f84161d47ed0.png" width = "800"/>



===========================================================================


#### 2. Home & Navigasi
Halaman Home/Dashboard & Navigasi.



> <img src="https://user-images.githubusercontent.com/114056087/206891299-e6ac980d-820d-41fe-be89-8c78a3b2ed9b.png" width = "800"/>

> <img src="https://user-images.githubusercontent.com/114056087/206891317-3b2ec27b-d0ed-424f-a47c-e8395aa4c81f.png" width = "800"/>

> <img src="https://user-images.githubusercontent.com/114056087/206891320-62f00428-951b-4c17-9d78-3444d3c9cbf9.png" width = "800"/>

> <img src="https://user-images.githubusercontent.com/114056087/206891324-df86924f-fe75-4750-b4fe-9177374db086.png" width = "800"/>


===========================================================================


#### 3. Input Data Alat
Halaman Input Data Alat.



> <img src="https://user-images.githubusercontent.com/114056087/208847645-395f14f1-78e1-4b7c-85ac-bc069bd42fce.png" width = "800"/>



===========================================================================


#### 4. Data Alat
Halaman Data Alat/Tabel Data Alat.



> <img src="https://user-images.githubusercontent.com/114056087/208847879-ed0d9e03-9112-48d2-90aa-5ddac79e7237.png" width = "800"/>


  #### 4.1 Detail Alat
  Halaman Detail Alat muncul ketika tombol "Detail" pada Data Alat di klik.
  
  
  > <img src="https://user-images.githubusercontent.com/114056087/208848076-8622b378-de77-420f-a194-90bbcb6fb50a.png" width = "800"/>
  
  
  
  #### 4.2 Edit Data Alat
  Halaman Edit Data Alat muncul ketika tombol "Edit" pada Data Alat di klik.

  
  > <img src="https://user-images.githubusercontent.com/114056087/208849306-91243ad1-7d35-41ac-9a27-82ffe8dac659.png" width = "800"/>
  
  
  
  #### 4.3 Export ke Microsoft Excel halaman Data Alat
  Tampilan fitur untuk "Expor Satuan Data Alat" ke Microsoft Excel beserta "Foto Alat dan Kode-QR" ketika tombol "Excel" di klik.
  
  
  > <img src="https://user-images.githubusercontent.com/114056087/206891766-5118bbfc-ebed-48a4-b146-de9895c68d44.png" width = "800"/>


===========================================================================


#### 5. Input Data Peminjaman
Halaman Input Data Peminjaman.


> <img src="https://user-images.githubusercontent.com/114056087/208849703-88e07c9b-df05-4aa2-8b82-27b5d96f6eae.png" width = "800"/>



===========================================================================


#### 6. Data Peminjaman
Halaman Data Peminjaman/Tabel Data Peminjaman.


> <img src="https://user-images.githubusercontent.com/114056087/208849921-5d3bed3a-ed7a-4dfb-9895-24282c03699c.png" width = "800"/>

  #### 6.1 Print Full/Print semua data peminjaman ke excel
  Print/Ekspor seluruh data peminjaman yang ada Ke Microsoft Excel

  > <img src="https://user-images.githubusercontent.com/114056087/207645346-d954160f-9bbb-44c3-bb4f-d956886e771a.png" width = "800"/>


  #### 6.2 Print/Print satuan data peminjaman ke excel
  Print/Ekspor satuan data peminjaman yang dipilih ada Ke Microsoft Excel

  > <img src="https://user-images.githubusercontent.com/114056087/207646225-be33a689-0018-4c30-96a2-07b96fac0c59.png" width = "800"/>


===========================================================================


#### 7. Notifikasi/Alert kustom yang terdapat pada sistem
Tampilan notifikasi/Alert kustom yang terdapat pada sistem

> <img src="https://user-images.githubusercontent.com/114056087/207650167-dd7b6db0-031f-44d7-8bbe-457bfb25d61b.png" width = "400"/>

> <img src="https://user-images.githubusercontent.com/114056087/207650234-9ffc6ac5-45ce-43ad-b283-5ebb6b9a343e.png" width = "400"/>

> <img src="https://user-images.githubusercontent.com/114056087/207650296-4667c219-fa61-4c81-9e7b-8d24f7ee49d0.png" width = "400"/>

> <img src="https://user-images.githubusercontent.com/114056087/207650339-b3d347a4-e991-4252-9700-ce7d4ed21feb.png" width = "400"/>

> <img src="https://user-images.githubusercontent.com/114056087/207650388-dcb16613-9a2b-4b3e-a20a-a66694eef5fd.png" width = "400"/>





===========================================================================

===========================================================================


### Tampilan Web Pada Mobile 
Tampilan dari web ketika di akses menggunakan perangkat mobile/ponsel.



> <img src="https://user-images.githubusercontent.com/114056087/210196750-4ff891c1-abb0-4eda-a576-69423cd3ef59.jpg" width = "200"/>

> <img src="https://user-images.githubusercontent.com/114056087/210196828-a713e2e9-64a3-42b2-899f-01d600ae457e.jpg" width = "200"/>

> <img src="https://user-images.githubusercontent.com/114056087/210196851-500696d9-8903-41d5-9449-0a2c395ebc37.jpg" width = "200"/>

> <img src="https://user-images.githubusercontent.com/114056087/210196885-44d9b631-d392-4fe1-92f6-c482c4c09495.jpg" width = "200"/>

> <img src="https://user-images.githubusercontent.com/114056087/210196900-934f83c9-ddcb-48d2-892c-11bde8beb29f.jpg" width = "200"/>

> <img src="https://user-images.githubusercontent.com/114056087/210196913-f4c847cd-11f0-4751-89c8-f6956de9fb5f.jpg" width = "200"/>

> <img src="https://user-images.githubusercontent.com/114056087/210196956-a8c63479-fc6c-477b-ad3c-9874f66398cc.jpg" width = "200"/>

> <img src="https://user-images.githubusercontent.com/114056087/210196959-019ae8ac-dfd7-443a-9e02-43ab5e8162f7.jpg" width = "200"/>

> <img src="https://user-images.githubusercontent.com/114056087/210197037-a1645213-1219-4b14-afdb-7365dc4bc864.jpg" width = "200"/>

> <img src="https://user-images.githubusercontent.com/114056087/210197056-91a3527c-dc38-4cfc-ad7f-871b219ddce1.jpg" width = "200"/>

> <img src="https://user-images.githubusercontent.com/114056087/210197058-e7f0bb29-b8fe-4224-b620-c464351d7f9c.jpg" width = "200"/>

> <img src="https://user-images.githubusercontent.com/114056087/210197102-edd6d11c-85ff-424a-95d4-4aed4e85fdd4.jpg" width = "200"/>

> <img src="https://user-images.githubusercontent.com/114056087/210197107-8e74704a-364c-4452-8161-21d6befa0c4b.jpg" width = "200"/>

> <img src="https://user-images.githubusercontent.com/114056087/210197185-51b77f6a-bef9-4bf9-8bd4-54c58b3c627e.jpg" width = "200"/>

> <img src="https://user-images.githubusercontent.com/114056087/210197168-82c682b2-b8e3-4856-947d-d92535aa6b06.jpg" width = "200"/>

