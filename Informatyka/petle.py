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


print(pauza)


# python

txt="python"
for litera in txt:
    print(litera)

print(pauza)
#  użycie break

i=1
while i<10:
    print(i)
    if i==6:
        break
    i+=1


print(pauza)

# user wpisuje jakiś tekst 
# pętla iteruje (kręci się) po tym tekscie

x=input("Wpisz jakiś tekst\n")
# a=input()
# a=int(input())
print("Poszczegulne litery wpisanego tekstu:\n")
for znak in x:
    print(znak, end=" " ) 
print(pauza)
print(pauza) 



# user podaje dwie liczby 
# wykonaj dzielenie z uwzględnieniem zasady nie dziel przez zero

print("Podaj dwie liczby: ")
a=int(input("Pierwsza liczba\n"))
b=int(input("Druga liczba\n"))

if b!=0 and a!=0:
    print(f"Iloraz liczb wynosi {a/b}")
else:
    print("Nie dziel przez zero")