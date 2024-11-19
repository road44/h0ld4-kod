'''OPERACJE WEJŚCIA-WYJŚCIA
Praktycznie każdy program potrzebuje operacji wejścia wyjścia, bez tego nei byłoby żadnej interakcji z użytkownikiem np. operacją WEJŚCIA może być odczytanie zawartości z bazy danych, podanie przez usera jakiś danych. Operacją WYJŚCIA może być wyświetlenie czegoś w aplikacji, zapisanie w pewnym miejscu itp. Przykład prostej operacji wejścia realizowanej w konsoli to wyświetlanie userowi jakiegoś zapytania. user musi udzielić odpowiedzi, podjąć jaką decyzję. Operacją wyjścia będzie użycie funkcji print, która wyświetli nam coś w konsoli.
---> instrukcja INPUT pozwala userowi wpisanie czegoś -
w poniższym przykładzie - user ma wpisać swoje imie , a konsola wyświetli to imię '''

pauza="--------------------------------------------------"

imie=input("Podaj swoje imie ")
print(imie)
print(pauza)
# lub bardziej złożona odpowiedź
print(f"Twoje imie to {imie}")
#teraz oprócz imienia user ma podać nazwisko
print(pauza)
nazw=input("teraz podaj nazwisko ")
print(pauza)
print(f"podano następujące dane: {imie} {nazw}")

'''wszystko co czyta instrukcja INPUT to tekst. gdy user ma podać liczbę INPUT należy poprzedzić słowem "int" '''

print(pauza)
#user ma podać liczbe a program zwiekszy ja dwukrotnie
x=int(input("podaj dowolną liczbe a program powiększy ją dwukrotnie "))
print(f"Podwojona liczba {x*2}")

print(pauza)
#user poda dwie liczby, program obliczy ich sumę

a=int(input("Podaj liczbę "))
b=int(input("Podaj drugą liczbę "))
print(f"Suma liczba = {a+b}")

print(pauza)

'''Ćwiczenie do samodzielnego wykonania
1. Zapytaj usera o jego wiek
2. w miejscu znaków ???  mają pojawić się dane podane przez usera
3. wyświetl następujące zdanie: "To jest ???, ma ??? lat" '''

nick=input("Jak się nazywasz? ")
wiek=int(input("Ile masz lat? "))

print(f"To jest {nick}, ma {wiek} lat.")