# 🚗 API Cek Pajak Kendaraan

API untuk mengecek informasi pajak kendaraan bermotor di beberapa provinsi di Indonesia.

## ✨ Fitur
- 🔄 Pengecekan pajak kendaraan secara real-time
- 🌏 Mendukung beberapa provinsi di Indonesia
- 📦 Response dalam format JSON
- ✅ Validasi format nomor polisi

## 🔗 Endpoint
Host: `https://cekpajak.bystpn.web.id`

```
GET /api/:id/{nomor_kendaraan}
```

### 📝 Parameter URL
| Parameter | Tipe | Deskripsi |
|-----------|------|-----------|
| provinsi | string | id provinsi (jabar, diy, banten) |
| nomor_kendaraan | string | Nomor kendaraan (tanpa spasi) |

## 📦 Response

### ✅ Format Response Sukses
```json
{
    "status": true,
    "data": {
        "nopol": "AB 1234 CD",
        "merk": "MERK KENDARAAN",
        "model": "MODEL KENDARAAN",
        "tahun": 2020,
        "pajak": {
            "pkbPokok": 1000000,
            "pkbDenda": 0,
            "swdklljPokok": 100000,
            "swdklljDenda": 0,
            "opsenPokok": 10000,
            "opsenDenda": 0,
            "totalPajak": 1110000,
            "tglAkhirPkb": "2026-01-01",
            "aktif": true
        }
    }
}
```

### ❌ Format Response Error
```json
{
    "status": false,
    "message": "Pesan error"
}
```

## 💡 Contoh Penggunaan

### 🏛️ Cek Pajak Kendaraan di DIY
```
GET /api/diy/AB1234CD
```

### 🏢 Cek Pajak Kendaraan di Jawa Barat
```
GET /api/jabar/F1234ABC
```

### 🏛️ Cek Pajak Kendaraan di Banten
```
GET /api/banten/A1234BCD
```


## 🗺️ Provinsi yang Didukung

| provinsi | id | kode wilayah |
|----------|------|--------------|
| D.I. Yogyakarta | `diy` | AB |
| Jawa Barat | `jabar` | D, B, E, F, T, Z |
| Banten | `banten` | A |

## 📝 Catatan
- ✅ Format nomor polisi harus sesuai dengan format yang berlaku di Indonesia
- ⏱️ Response time dapat bervariasi tergantung pada beban server

---

Made with ❤️ by [TheCapt1917](https://github.com/thecapt1917)
