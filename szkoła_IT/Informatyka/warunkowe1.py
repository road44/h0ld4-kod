'''
inst. warunkowe(instr. sterujące) są cześcią prawie każdego programu
-sterują jego działaniem- kod się wykona pod pewnymi warunkami.
W instr. war. stosuje się operatory arytmetyczne (<,>,>=,==)
oraz logiczne (and i or) dzieki czemu możemy tworzyć bardziej złożone instrukcje.

SKŁADNIA PROSTEJ INSTR.WAR.:
if warunek:
    instrukcja, gdy warunek spełniony
else:
    instrukcja, gdy warunek NIE jest spełniony
'''



'''
# Sprawdza, czy liczba jest + czy -

x=int(input("podaj liczbe całkowitą\n"))

if x>0:
    print("Ta liczba jest dodatnia")
else:
    print("Ta liczba jest ujemna")
'''






'''
SKŁADNIA ZŁOŻONEJ INSTR.WAR.:
if warunek1:
    instrukcja, gdy warunek1 jest spełniony
elif warunek2:
    instrukcja, gdy warunek2 jest spełniony
elif warunek3:
    instrukcja, gdy warunek3 jest spełniony
else:
    instrukcja, gdy ŻADEN z powyższych warunków NIE jest spełniony
'''






'''
# Sprawdza, czy liczba jest + , - czy 0

y=int(input("Podaj dowolną liczbę:\n"))

if y<0:
    print("Liczba ujemna")
elif y==0:
    print("Podano Zero")
else:
    print("Liczba dodatnia")
'''

'''
# Sprawdza czy użytkownik jest pełnoletni

w=int(input("Podaj swój wiek:\n"))

if w<18:
    print("Jesteś Niepełnoletni")
else:
    print("Jesteś Pełnoletni")
'''

# Wszystkie warunki są spełnione
if (2>0 and 2**2<=4):
    print("Warunki spełnione")
else:
    print("Warunki niespełnione")

# Jeden lub Wszystkie warunki są niespełnione
if (2>9 and 2**2<=3):
    print("Warunki spełnione")
else:
    print("Warunki niespełnione")

if(7/2!=3):
    print("prawda")
else:
    print("fałsz")

if(10%5==2 or 10//5>=2):
    print("prawda")
else:
    print("fałsz")










