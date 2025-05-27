'''moduł to zbiór pewnych definicji zmiennych i funkcji, które po zaimportowaniu do programu ułatwiają jego pisanie, udostępniją pewne funkcjonalności
są dwa sposoby importu modułu:
-import całego modułu, np: import random
-import jednego wybranego składnika np: from random import randint'''
import sys
print(sys.version)
pauza ="=========================================================="
# print(pauza)
print(sys.platform)
print(pauza)
import random

print(random.randint(1,10))
# print(random.randint(8,88))
print(random.random())
lista=[12,-5,78,0,37]
random.shuffle(lista)
print(lista)
print(pauza)

import math
print(math.pi)
print(math.e)

print(pauza)
x=2.11
y=3.88
# zaokrąglenie w góre
print(math.ceil(x),";", math.ceil(y))

# zaokrąglenie w doł
print(math.floor(x),";",math.floor(y))
# z użyciem znaku minus -
print(math.ceil(-x),";",math.floor(-y))
print(pauza)
# pierwiastek kwadratowy
print(math.sqrt(36))
print(math.sqrt(100))
# liczba do potęgi
print("dwa do piątej", math.pow(2,5))
# print(math.pow(2,5))
print(pauza)
# sin, cos (w radianach)
print(math.sin(30))
print(math.cos(60))