'''lista to zbiór elementów zapisanych w kwadratowych nawiasach [] pod jedną nazwą zmiennej np. lista = [1, 2, 3, 4, 5]. 
Elementy mogą być różnego typu oddzielone przecinkami, mogą się powtarzać.
aby odwołać się do konkretnego elementu z listy korzystamy z możliwości indeksowania elementów. (pierwszy element ma indeks 0!!!)'''
pauza="--------------------------------------------------------------"

lista=["Ala", "Ewa","Ula", "Pola", "Kasia", "Iga"]

# odwołaj sie do pierwszego elementu 

print(lista[0])
# zwraca dane z zakresu [nr:nr]

print(lista[0:3])

# zwraca wszystkie elementy

print(lista[0:6])

print(pauza)

lista[2]="Filip"

print(lista)

print(pauza)

lista.append(113)
print(lista)

print(pauza)

# dodanie nowego elementu na określoną pozycje

lista.insert(1, "Adam")
print(lista)
print(pauza)
print("Usuwanie")
print(pauza)
# usuwa ostatni element
lista.pop()
print(lista)

# usuwanie elementu ze wskazanego indexu

lista.pop(5)
print(lista)

# usuwanie elementu po nazwie pierwszą na którą trafi

lista.remove("Ewa")
print(lista)

# usuwa ze wskazanego indexu --> del

del lista[0]
print(lista)
print(pauza)
# sortowanie listy
print("Sortowanie")
lista.sort()
print(lista)
# odwrócenie listy
lista.reverse()
print(lista)

# sprawdza czy element jest na liście (pokaże numer indexu)

# lista.index("Filip")
print(lista.index("Filip"))

# zlicza ilość wystąpień danego elementu

print(lista.count("Pola"))

# łączenie dwóch list

lista2=[12,15,0]
lista.extend(lista2)
print(lista)

# można również połączyć za pomocą +

# razem=lista+lista2
# print(razem)