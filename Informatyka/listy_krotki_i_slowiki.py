# tworze liste
pauza = '----------------------------------------------'
mojeL=['stół','okno','kwiatek','pilot','zdjęcie','tablica']
print(mojeL)
# podmiana elementu na inny
mojeL[3]="komputer"
print(mojeL)
print(pauza)
# wstaw element pomiędzy pierwszym i drugim 
mojeL.insert(1,"biurko")
print(mojeL)
# odwracanie listy
mojeL.reverse()
print(mojeL)
print(pauza)
# tworze krotke
mojaK=('tekst', 45, 5.5, 45)
print(mojaK)
# zliczam ilośc wystąpień liczby 45
print(mojaK.count(45))
# spr na którym indexie znajduje się element
print(mojaK.index('tekst'))
print(pauza)
# konwersja na liste - metoda list
znowuLista=list(mojaK)
print(znowuLista)
print(pauza)
# usuwam element z listy
znowuLista.remove('tekst')
print(znowuLista)
# dodaje nowy element do listy
znowuLista.append(133)
print(znowuLista)
print(pauza)
# ponowna konwersja (metoda tuple)
znowuKrotka=tuple(znowuLista)
print(znowuKrotka)
print(pauza)
uczen={
    "imię":"tomasz",
    "wiek":19,
    "szkola":"zspm",

}
print(uczen)
# dodaj nowa pare klucz:wartość
uczen['miasto']="Katowice"
print(uczen)
# zmiana wartości w kluczu imie
uczen["imię"]="tobiasz"
print(uczen)
# zwracam wartości tylko ze słownika
print(uczen.values())