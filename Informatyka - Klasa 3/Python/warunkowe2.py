pauza="----------------------------------------------"

# każda litera ma swoją pozycje
# pierwsza litera ma index zero
zm="lekcje pythona"

# z powyższej zmiennej chce wyświetcić wyraz Python (podaje zkares indexów w [])

# zakres znaków podaje się z dwu kropkiem :
print(zm[7:13])

im="filip kacper hołdyk"
# print(im[4]+im[7]+im[-1]+im[7])
print(im[6]+im[14]+im[2]+im[14]+im[11])
print(pauza)

if 3**3>25:
    print("spełniony")
else:
    print('niespełniony')

print(pauza)


# fałsz     i

if 15%5==3 and len('Python') >=6:
    print("warnunki spełnione")
else:
    print('niespełnione')

print(pauza)



if 10//5==2 or 10/5>2:
    print('tak')
else:
    print('nie')



print(pauza)

cos='ćwiczenie'

if 5**0!=0 or len(cos)>3*3:
    print('prawda')
else:
    print("fałsz")



print(pauza)

if 25%3<0 and "ć" in cos:
    print('tak')
else:
    print('nie')

print(pauza)



if 44%8==8*8 and 'e' in cos:
    print('tak')
else:
    print('nie')