'''
ZMIENNE I TYPY DANYCH
zmienne służą do przechowywania wartości (tzw pojemniki na dane). każda zmienna ma swoją unikatową nazwe.
aby utworzyć zmienną wystarczy przypisać nazwie (znakiem "=") określoną nazwe. wartoś może być tekstem, liczbą
lub wartością logiczną. nazwa zmiennej nie może zaczynać się od cyfry ani zawierać znaków diakrytycznych(polskich)
wielkość liter ma znaczenie


TYP TEKSTOWY (string) to tablica znaków która umożliwia dostęp i edycje do poszczególnych składowych
tego ciągu. tekst można formatować na różne sposoby, zależy go zapisać w apostrofach lub cudzysłowach.

TYP LICZBOWY (numeryczny)
są to liczby całkowite dodatnie i ujemne (integer) lub rzeczywiste, zmienno przecinkowe (float) zapisywane
z kropką, nie z przecinkiem!!!
'''

imie = "Filip"
nazw='Hołdyk'
print(imie)
print(nazw)
print(imie,nazw)

# znak + łączy teksty (stringi) tzw konkatenacja
print(imie+nazw)

print("Nazywam się "+imie,nazw)

# type() sprawdza typ zmiennej (typ danych)
print(type(imie))

print("xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx")

a=76
b=15
c=2.5

print(a+b)
print(a*b)
print(a/b)

print(type(a),type(b),type(c))

print("xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx")

szkola="zspm"
print('jestem uczeniem', szkola)

print(f"Nazywam się {imie} {nazw} i chodze do {szkola}.")


