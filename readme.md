# Cek Pajak Kendaraan API
API untuk cek pajak kendaraan bermotor di wilayah Jawa Tengah dan Daerah Istimewa Yogyakarta

## A P I
### Endpoint
| Method | Endpoint | parameter | Action |
| --- | --- | --- | --- |
| `GET` | `/api/v1/:kode_wilayah` | `nopol` | Mendapatkan informasi pajak kendaraan |

### Daftar Wilayah
| Nama Wilayah | Kode | Status |
| --- | --- | --- |
| D.I.Yogyakarta | `diy` | :white_check_mark:
| Jawa Tengah | `jateng` | :white_check_mark:
| Jawa Timur | `jatim` | :white_check_mark:

### Example
`GET` https://pkb.stpn.eu.org/api/v1/diy?nopol=ab0000zz</br>
or</br>
`GET` https://pkb.stpn.eu.org/api/v1/jateng?nopol=h0000xx

## Made with :green_heart:
* [thecapt1917](https://github.com/thecapt1917)

