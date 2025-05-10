# 1. A000124 of Sloane’s OEIS in PHP


## Fungsi
Program ini menggunakan rumus Sloane yang didapat dari 
### [Rumus Sloane A000124](https://oeis.org/A000124)


## Contoh
Sampel Input :

7

Sampel Output :

1-2-4-7-11-16-22

# 2. Dense ranked in PHP

## Fungsi
Program ini bertujuan untuk menentukan peringkat nilai dalam sekelompok nilai

## Contoh
Sampel Input :

7

100 100 50 40 40 20 10 

4

5 25 50 120

Sampel Output :

6 4 2 1

# 3. Balanced Bracket Checker in PHP

## Fungsi
Program ini memeriksa apakah string yang terdiri dari tanda kurung `()`, `[]`, `{}` merupakan string yang seimbang (balanced). Bracket dikatakan seimbang jika:
- Setiap bracket buka memiliki pasangan bracket tutup yang sesuai.
- Bracket buka dan tutup muncul dalam urutan yang benar.

## Contoh
- Input: `{ [ ( ) ] }` → Output: YES
- Input: `{ [ ( ] ) }` → Output: NO
- Input: `{ ( ( [ ] ) [ ] ) [ ] }` → Output: YES

## Kompleksitas
- **Waktu:** O(n), karena setiap karakter dicek satu kali.