# Cek Pajak Kendaraan API
API untuk cek pajak kendaraan bermotor di wilayah ~Jawa Tengah~, Daerah Istimewa Yogyakarta, dan Jawa Barat

## A P I
### Endpoint
| Method | Endpoint | Action |
| --- | --- | --- |
| `GET` | `/api/v1/:kode_wilayah/:nopol` | Mendapatkan informasi pajak kendaraan |

### Daftar Wilayah
| Nama Wilayah | Kode | Status |
| --- | --- | --- |
| D.I.Yogyakarta | `diy` | :white_check_mark:
| Jawa Tengah | `jateng` | :x:
| Jawa Timur | `jatim` | :x:
| Jawa Barat | `jabar` | :white_check_mark:

### Example
`GET` https://cekpajak.stpn.xyz/api/v1/diy/ab0000zz

## Made with :green_heart:
* [thecapt1917](https://github.com/thecapt1917)

