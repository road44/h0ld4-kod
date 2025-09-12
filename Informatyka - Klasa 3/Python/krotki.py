'''
KROTKA (tuple) to statyczna lista.
wartości umieszczamy w ()
na krotkach nie używa się metod które w jakikolwiek sposób mogły by ją zmodyfikować
(nie używamy metody instert, reverse, append, pop, sort)
'''
pauza="--------------------------------------------------------------"
#                       -1
#       0   1   2  3  4  5 
krotka=(15,45,-45,15,11,13)

print(krotka)

print(min(krotka))
print(max(krotka))

print(pauza)
# index wskazuje nr indeksi danego elementu
print(krotka.index(11))

# zlicza ilośc wystąpień
print(pauza)
print(krotka.count(15))
print(pauza)
# konwersja krotki na liste (list)
lista=list(krotka)
print(lista)
#  + nowy element na indeks 2
lista.insert(2,True)
print(lista)
# podmieniam true na wartość zero
print(pauza)
lista[2]=0
print(lista)
# dodaje na koniec
lista.append(545)
print(lista)
print(pauza)
# del index 0
del lista[0]
print(lista)

# konwersja lista -> krotka (metoda tuple)
print(pauza)
znowukrotka=tuple(lista)
print(znowukrotka)