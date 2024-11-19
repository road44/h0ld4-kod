'''składnia pętli while

while warunek:
    instrukcje, gry war. jest spełniony 
    inkrementacja(zwiększenie o 1)'''

# wyświetla zmienną i dopóki będzie <10
pauza="---------------------------------------"
i=1
# nigdy w warunku jest równe
# tylko mniejsze bądz równe
while i<10:
    print(i)
    i+=1

print(pauza)

# 10-20 co 2

a=10
while a<=20:
    print(a)
    a+=2

print(pauza)

# od 100 do 0
z=100

while z>=0:
    print(z, end=" ")
    z-=10
print(pauza)

print(pauza)


'''Pętla FOR

for i in range(zakres):
    instrukcje'''

# for 1-10 (w wartości końcowej wpisz +1)

for i in range(0,11):
    print(i, end=" ")

print(pauza)
print(pauza)

# wypisz 20 pierwszych

for i in range(20):
    print(i)

print(pauza)

# 0-100 co 10

for i in range(0,101,10):
    print(i)


print(pauza)

# od 50-0 co 5

for i in range(50,-1,-5):
    print(i)