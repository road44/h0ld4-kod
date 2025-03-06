import random
import time
poprawne=0
for i in range(10):
    x=random.randint(1, 10)
    y=random.randint(1, 10)
    pyt = int(input(f"Podaj wynik działania {x} * {y} "))
    if pyt == x*y:
        poprawne+=1
        print("Masz racje")
    else:
        print("Podałeś błędny wynik. Nastepuje podliczenie punktów")
        print("====================================================")
        time.sleep(1)
        if poprawne>10:
            print(f"Wybitnie. Ilość punktów {poprawne}")
        elif poprawne<=10 and poprawne>6:
            print(f"Nienajgorzej. Ilość punktów {poprawne}")
        elif poprawne<6 and poprawne>3:
            print(f"Powinienieś się douczyć. Ilość punktów {poprawne}")
        else:
            print(f"Ilość punktów {poprawne} Kaplica")
        break;
